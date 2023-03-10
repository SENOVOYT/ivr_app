<?php

namespace App\Http\Livewire\Authorization;

use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithSorting;
use Spatie\Permission\Models\Role;

class AuthorizationRole extends Component
{
    use WithPagination;
    use WithSorting;
    public $search_role;
    protected $listeners = ['AuthorizationRole' => '$refresh'];
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $roles=Role::where('name', 'like', '%' . $this->search_role . '%')->with('permissions')->paginate(8) ;
        
        return view('livewire.authorization.authorization-role',['role'=>$roles]);
    }
}
