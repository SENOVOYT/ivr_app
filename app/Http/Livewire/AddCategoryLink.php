<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserCategory;
use App\Models\UserLinks;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $this->user_id=Auth::user()->getId();

        if(count($this->addlink_name)>1){
            
            session()->flash('message_customlinkadd_validator_error', "select only one link");
            $this->addlink_name="";
            $this->emit('message_customlinkadd_validator_error');
            return 0;
        }


        
        $validator = Validator::make([
            'addlink_name' => $this->addlink_name[0],
        ],[
            'addlink_name' => ['required', 'integer']  
        ]);
        
        if ($validator->fails()) {
            
            $error=$validator->errors();
            $collection="";
            foreach($error->all() as $error){
                $collection.=$error.' ';
            }
            session()->flash('message_customlinkadd_validator_error', $collection);
            $this->emit('message_customlinkadd_validator_error');
            return 0;
        }
        $id=UserLinks::where('id',$this->addlink_name[0])->get();
        if(!(count($id)==1)){
            session()->flash('message_customlinkadd_validator_error', 'Invalid link name');
            $this->emit('message_customlinkadd_validator_error');
            return 0;
        }
        $last_id=DB::table('user_links')
        ->where('category',$this->category)
        ->where('user',$this->user_id)
        ->latest('position')
        ->first();
        
        UserLinks::where('id',$this->addlink_name[0])
        ->update([
            'category' => $this->category,
            'position' => $last_id? $last_id->position + 1 : 1

        ]);
        $this->emit('addedlink'.$this->category);
        $this->closeModal();
        



    }
}
