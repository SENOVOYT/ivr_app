<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserLinks;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;

class AddCategoryLink extends ModalComponent
{
    public $addsearch=null;
    public $addlinks=[];
    public $user_id =null;
    public $addlink_name=[];
    public $category;
    public function mount($category)
    {
        $this->category=$category;
        
    }
    public function render()
    {
        if($this->addsearch==null || $this->addsearch==''){
            $this->addlinks=[];
            $this->addlink_name="";
            
            return view('livewire.add-category-link');
            
        }else{

            $this->addlinks=UserLinks::where('custom_link_name', 'LIKE', '%'. $this->addsearch ."%")
            ->where('category', null)
            ->limit(15)
            ->get();
            if(count($this->addlinks)<1)
            {
                $this->addlink_name="";
                $this->addlinks=[];
            }
        return view('livewire.add-category-link');
        }
    }
    public function save(){


        if(count($this->addlink_name)>1){
            
            session()->flash('message_customlinkadd_validator_error', "select only one link");
            $this->addlink_name="";
            $this->emit('message_customlinkadd_validator_error');
            return 0;
        }


        
        $validator = Validator::make([
            'custom_addlink_name'=>$this->custom_addlink_name,
            'addlink_name' => $this->addlink_name[0],
        ],[
            'custom_addlink_name' => ['required', 'string', 'min:3','max:22'],
            'addlink_name' => ['required', 'integer',],
            
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

    }
}
