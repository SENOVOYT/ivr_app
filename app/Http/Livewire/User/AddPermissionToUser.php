<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;

class AddPermissionToUser extends ModalComponent
{
    public $user;
    public function mount($user){
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.user.add-permission-to-user');
    }
}
