<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;


class CreateCategory extends Component
{
    public $category;
    public $user_id;

 
    protected $rules = [
        'category' => 'required|string|min:6|max:22',
    ];
   
    public function save(){

        $validator = Validator::make(['category'=>$this->category], [
            'category' => ['required', 'string', 'min:3','max:22'],
            
        ]);
        if ($validator->fails()) {
            
            $error=$validator->errors();
            $collection="";
            foreach($error->all() as $error){
                $collection.=$error.' ';
            }
            session()->flash('message_category_validator_error', $collection);
            $this->emit('error');
            return 0;
        }




        $this->user_id = Auth::user()->getId();
        $unque=DB::table('user_categories')->where('user',$this->user_id)->where('category_name',$this->category)->first();
        if($unque){
            $this->emit('exist');
            return 0;
        }
        $last_id=DB::table('user_categories')->where('user',$this->user_id)->latest('position')->first();
        UserCategory::create([
            'user' => $this->user_id,
            'category_name' => $this->category,
            'position' => $last_id? $last_id->position + 1 : 1
        ]);
        $this->category=null;
        $this->user_id=null;
        $this->emit('saved');
        $this->emit('refreshCategoryLayout');
        $this->emit('refreshsidebar');

    }
    public function render()
    {
        return view('livewire.create-category');
    }
}
