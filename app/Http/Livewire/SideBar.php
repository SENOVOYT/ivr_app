<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SideBar extends Component
{
    public $user_id;
    public $show=null;
    protected $listeners = ['refreshsidebar' => '$refresh'];
    public $sidebar;

    public function render()
    {
        // $this->user_id = Auth::user()->getId();
        $this->sidebar=DB::table('user_categories')->where('user',auth()->user()->id)->orderBy('position')->get();
        
        return view('livewire.side-bar',['sidebar' => $this->sidebar]);
    }
    public function show($id){
        if($this->show==$id){
            $this->show=null;
        }else{
            $this->show=$id;
        }
        
    }
}
