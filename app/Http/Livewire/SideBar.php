<?php

namespace App\Http\Livewire;

use App\Models\UserCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SideBar extends Component
{
    protected $listeners = ['refreshsidebar' => '$refresh'];
    public $sidebar;
    
    public function render()
    {
                
        $this->sidebar = UserCategory::with('userlink', 'userlink.permission')->orderBy('position')->get();

        foreach($this->sidebar as  $key => $userlinks){

            foreach( $userlinks->userlink as $keys => $links){

                if((!(auth()->user()->hasPermissionTo($links->permission->name)))&&(!( auth()->user()->hasrole('superuser') ))){
                    unset($this->sidebar[$key]->userlink[$keys]);
                }
            }
            if($userlinks->userlink->count() < 1){
                unset($this->sidebar[$key]);
            }
            

        }
        return view('livewire.side-bar');
    }
}
