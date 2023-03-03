<?php

namespace App\Http\Livewire\Authorization;

use LivewireUI\Modal\ModalComponent;

class PermissionChangeRoute extends ModalComponent
{
    public function render()
    {
        return view('livewire.authorization.permission-change-route');
    }
}
