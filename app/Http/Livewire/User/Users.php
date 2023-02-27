<?php

namespace App\Http\Livewire\User;

use App\Models\User as UserModel;

use Livewire\Component;

class Users extends Component
{

    // public User $users;
    public $search= "";

    protected $queryString = ['search'];

    // protected string $tabeName = 'users';

    public function render()
    {
        // $user = UserModel::when(!empty($this->search), function ($query) {
        //     $query->where('user_name', 'LIKE', '%' . $this->search . '%');
        // })->get();

        $users = UserModel::where('user_name', 'LIKE', '%' . $this->search . '%')->get();

        return view(
            'livewire.user.users',
            ['users' => $users]
        );
    }
}
