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

    protected $rules = [
        'category_name' => ['required', 'string', 'min:3','max:22','unique:user_categories'],
    ];
   
    public function save(){

        $validator = Validator::make(['category_name' => $this->category], $this->rules);

        if ($validator->fails()) {
            
            $error = $validator->errors();
            
            $collection="";

            foreach($error->all() as $error){
                $collection.=$error.' ';
            }
            
            session()->flash('create_category_error', $collection);

            $this->emit('error');

            return 0;
        }

        $last_position=UserCategory::latest('position')->first();

        UserCategory::create([
            'category_name' => $this->category,
            'position' => $last_position? $last_position->position + 1 : 1
        ]);

        $this->category=null;
        $this->emit('saved');
        $this->emit('refreshCategoryLayout');
        $this->emit('refreshsidebar');

    }
    public function render()
    {
        return view('livewire.create-category');
    }
}
