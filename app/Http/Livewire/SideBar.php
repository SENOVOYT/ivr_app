<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SideBar extends Component
{
    protected $listeners = ['refreshsidebar' => '$refresh'];
    public $userlink;
    
    public function render()
    {
                
        $this->userlink = UserCategory::with('userlink')->orderBy('position')->get();
        return view('livewire.side-bar', ['sidebar' => $this->userlink ] );
    }
}
