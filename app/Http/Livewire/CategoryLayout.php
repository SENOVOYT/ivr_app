<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CategoryLayout extends Component
{
    protected $listeners = ['refreshCategoryLayout' => '$refresh'];
    public $user_categories;
    public function render()
    {
        
        $this->user_categories=UserCategory::orderBy('position')->get();
        return view('livewire.category-layout');
    }
    public function updateuser_categories($categories){    

        foreach( $categories as $category ){
            UserCategory::find($category['value'])->update(['position'=>$category['order']]);
        }
        $this->emit('refreshsidebar');
    }
}
