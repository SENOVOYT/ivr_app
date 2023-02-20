<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserLinks;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateCustomLink extends Component
{
    public $search=null;
    public $links=[];
    public $user_id =null;
    public $custom_link_name=null;
    public $link_name=[];

    protected $rules = [
        'customlink' => 'required|string|min:6|max:500',
    ];
    
    public function render()
    {
        
        if($this->search==null || $this->search==''){
            $this->links=[];
            $this->link_name="";
            
            return view('livewire.create-custom-link');
            
        }else{

            $this->links=Permission::where('link', 'LIKE', '%'. $this->search ."%")
            ->limit(15)
            ->get();
            $user=User::find(Auth::user()->getId());
            foreach( $this->links as $key => $link ){
                
                if((!(auth()->user()->hasPermissionTo($link['name'])))&&(!($user->hasrole('superuser')))){
                    unset($this->links[$key]);
                }
            }
            if(count($this->links)<1)
            {
                $this->link_name="";
                $this->links=[];
            }
            return view('livewire.create-custom-link');
        }
    }



    public function save(){


        if(count($this->link_name)>1){
            
            session()->flash('message_customlink_validator_error', "select only one link");
            $this->link_name="";
            $this->emit('message_customlink_validator_error');
            return 0;
        }
        

        $validator = Validator::make([
            'custom_link_name'=>$this->custom_link_name,
            'link_name' => $this->link_name[0],
        ],[
            'custom_link_name' => ['required', 'string', 'min:3','max:22'],
            'link_name' => ['required', 'integer',],
            
        ]);
        
        if ($validator->fails()) {
            
            $error=$validator->errors();
            $collection="";
            foreach($error->all() as $error){
                $collection.=$error.' ';
            }
            session()->flash('message_customlink_validator_error', $collection);
            $this->emit('message_customlink_validator_error');
            return 0;
        }

        $this->user_id = Auth::user()->getId();
        $notunique=DB::table('user_links')->where('user',$this->user_id)->where('custom_link_name',$this->custom_link_name)->first();
        if($notunique){
            
            $this->emit('existcustomlink');
            return 0;
        }
        $last_id=DB::table('user_links')->where('user',$this->user_id)->latest('position')->first();
        UserLinks::create([
            'user' => $this->user_id,
            'custom_link_name' => $this->custom_link_name,
            'link' => $this->link_name[0]
        ]);
        $this->custom_link_name=null;
        $this->user_id=null;
        $this->link_name="";
        $this->links=[];
        $this->search=null;
        $this->emit('savedcustomlink');

    }
}
