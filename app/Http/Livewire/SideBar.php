<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SideBar extends Component
{
    protected $listeners = ['refreshsidebar' => '$refresh'];

    
    public function render()
    {
                
        return view('livewire.side-bar', ['sidebar' => UserCategory::orderBy('position')->get()] );
    }
}
