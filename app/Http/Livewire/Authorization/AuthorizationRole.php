<?php

namespace App\Http\Livewire\Authorization;

use Livewire\Component;

class AuthorizationRole extends Component
{
    public $search_role;
    public function render()
    {
        return view('livewire.authorization.authorization-role');
    }
}
