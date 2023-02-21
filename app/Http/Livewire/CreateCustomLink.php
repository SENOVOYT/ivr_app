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
    public $search='';
    public $links=[];
    public $custom_link_name=null;
    public $link_name=[];

    protected $rules = [
        'custom_link_name' => ['required', 'string', 'min:3','max:22', 'unique:user_links' ],
        'link_name' => ['required', 'integer',],
    ];
    
    public function render()
    {
        
        if($this->search==''){
            $this->links=[];
            $this->link_name="";
            
            return view('livewire.create-custom-link');
            
        }else{

            $this->links=Permission::where('link', 'LIKE', '%'. $this->search ."%")
            ->limit(15)
            ->get();
            
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
            
            session()->flash('create_custom_link_error', "Select only one link");
            $this->link_name="";
            $this->emit('create_custom_link_error');
            return 0;
        }
        

        $validator = Validator::make([
            'custom_link_name'=>$this->custom_link_name,
            'link_name' => $this->link_name[0],
        ], $this->rules );
        
        if ($validator->fails()) {
            
            $error=$validator->errors();
            $collection="";
            foreach($error->all() as $error){
                $collection.=$error.' ';
            }
            session()->flash('create_custom_link_error', $collection);
            $this->emit('create_custom_link_error');
            return 0;
        }

        UserLinks::create([
            'custom_link_name' => $this->custom_link_name,
            'link' => $this->link_name[0]
        ]);
        
        $this->custom_link_name=null;
        $this->link_name="";
        $this->links=[];
        $this->search="";
        $this->emit('savedcustomlink');

    }
}
