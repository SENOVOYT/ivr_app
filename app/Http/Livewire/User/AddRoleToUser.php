<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;

class AddRoleToUser extends ModalComponent
{
    public $user;
    public function mount($user){
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.user.add-role-to-user');
    }
}
