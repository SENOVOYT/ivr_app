<?php

namespace App\Http\Livewire\User;

// use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditUsers extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.edit-users');
    }
}
