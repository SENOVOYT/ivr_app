<?php

namespace App\Http\Livewire\User;

use App\Models\User as UserModel;

use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSorting;

class Users extends Component
{
    use WithPagination;
    use WithSorting;

    public $search = "";

    // protected $queryString = ['search', 'sortBy'];

    protected $paginationTheme = 'tailwind';


    public function render()
    {
        return view(
            'livewire.user.users',
            ['users' => UserModel::with('sessions')
                ->where('user_name', 'LIKE', '%' . $this->search . '%')
                ->orderby($this->sortBy ?? 'email_verified_at', $this->sortDirection)
                ->paginate(25)]
        );
    }
}
