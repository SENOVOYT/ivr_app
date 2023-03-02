<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UpdateUserPorfileInformation extends Component
{
    public $user;
    public function mount($user){
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.user.update-user-porfile-information');
    }
}
