<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserLinks;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateCustomLink extends Component
{
    public $search=null;
    public $links=[];
    public $user_id =null;
    public $custom_link_name=null;
    public $link_name="";

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
        $this->user_id = Auth::user()->getId();
        $notunique=DB::table('user_links')->where('user',$this->user_id)->where('custom_link_name',$this->custom_link_name)->first();
        if($notunique){
            $this->custom_link_name=null;
            $this->user_id=null;
            session()->flash('message_customLink_name_error', '1');
            return 0;
        }
        $last_id=DB::table('user_links')->where('user',$this->user_id)->latest('position')->first();
        UserLinks::create([
            'user' => $this->user_id,
            'custom_link_name' => $this->custom_link_name,
            'position' => $last_id? $last_id->position + 1 : 1
        ]);
        $this->custom_link_name=null;
        $this->user_id=null;
        session()->flash('message_customLink_success', '1');

    }
}
