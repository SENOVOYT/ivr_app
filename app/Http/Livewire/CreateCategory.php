<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class CreateCategory extends Component
{
    public $category;
    public $user_id;

 
    protected $rules = [
        'category' => 'required|string|min:6|max:500',
    ];
   
    public function save(){
        $this->user_id = Auth::user()->getId();
        $unque=DB::table('user_categories')->where('user',$this->user_id)->where('category_name',$this->category)->first();
        if($unque){
            $this->category=null;
            $this->user_id=null;
            session()->flash('message_category_name_error', '1');
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
        session()->flash('message_category_success', '1');
        $this->emit('refreshCategoryLayout');

    }
    public function render()
    {
        return view('livewire.create-category');
    }
}
