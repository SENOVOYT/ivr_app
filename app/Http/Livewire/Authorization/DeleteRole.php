<?php

namespace App\Http\Livewire\Authorization;

use LivewireUI\Modal\ModalComponent;

class DeleteRole extends ModalComponent
{
    public function render()
    {
        return view('livewire.authorization.delete-role');
    }
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'md';
    }
}
