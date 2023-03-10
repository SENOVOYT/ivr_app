<?php

namespace App\Http\Livewire\Authorization;

use App\Models\Permission;
use LivewireUI\Modal\ModalComponent;

class AddRole extends ModalComponent
{
    public $search;
    public $role_name;
    public $permission;
    public $permission_list=[];
    public function render()
    {
        $this->permission=Permission::where('name', 'LIKE', '%'. $this->search ."%")
        ->limit(15)
        ->get();

        return view('livewire.authorization.add-role');
    }
    public function click($permission_list){
        $this->permission_list[]=$permission_list;
    }
}
