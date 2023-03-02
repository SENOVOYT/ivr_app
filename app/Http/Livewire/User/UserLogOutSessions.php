<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserLogOutSessions extends Component
{
    public $user;
    public function mount($user){
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.user.user-log-out-sessions');
    }
}
