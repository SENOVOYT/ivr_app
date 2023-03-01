<?php

namespace App\Http\Livewire\User;

use LivewireUI\Modal\ModalComponent;

class AddUserLivewireComponenet extends ModalComponent
{
    public function render()
    {
        return view('livewire.user.add-user-livewire-componenet');
    }
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '5xl';
    }
}
