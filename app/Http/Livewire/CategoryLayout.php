<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CategoryLayout extends Component
{
    public $user_id;
    protected $listeners = ['refreshCategoryLayout' => '$refresh'];
    public function render()
    {
        $this->user_id = Auth::user()->getId();
        $user_categories=DB::table('user_categories')->where('user',$this->user_id)->orderBy('position')->get();
        return view('livewire.category-layout',['user_categories' => $user_categories]);
    }
    public function updateuser_categories($categories){       
        foreach( $categories as $categorie ){
            UserCategory::find($categorie['value'])->update(['position'=>$categorie['order']]);
        }
        $this->emit('refreshsidebar');
    }
}
