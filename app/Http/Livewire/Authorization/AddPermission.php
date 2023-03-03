<?php

namespace App\Http\Livewire\Authorization;

use LivewireUI\Modal\ModalComponent;

class AddPermission extends ModalComponent
{
    public function render()
    {
        return view('livewire.authorization.add-permission');
    }
}
