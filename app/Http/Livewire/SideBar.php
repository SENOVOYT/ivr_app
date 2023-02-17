<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SideBar extends Component
{
    public $user_id;
    protected $listeners = ['refreshsidebar' => '$refresh'];

    public function render()
    {
        $this->user_id = Auth::user()->getId();
        $sidebar=DB::table('user_categories')->where('user',$this->user_id)->orderBy('position')->get();
        
        return view('livewire.side-bar',['sidebar' => $sidebar]);
    }
}
