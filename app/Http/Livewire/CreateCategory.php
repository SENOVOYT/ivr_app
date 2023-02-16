<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Livewire\Component;


class CreateCategory extends Component
{
    public $category;
    public $user_id;

 
    protected $rules = [
        'category' => 'required|string|min:6|max:500',
    ];
   
    public function save(){
        
        UserCategory::create([]);

    }
    public function render()
    {
        return view('livewire.create-category');
    }
}
