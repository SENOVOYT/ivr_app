<?php

namespace App\Http\Livewire\Authorization;

use LivewireUI\Modal\ModalComponent;

class AddRole extends ModalComponent
{
    public function render()
    {
        return view('livewire.authorization.add-role');
    }
}
