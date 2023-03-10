<?php

namespace App\Http\Livewire\Authorization;

use App\Models\link;
use App\Models\Permission;
use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;


class AuthorizationPermission extends Component
{
    use WithPagination;
    use WithSorting;
    protected $listeners = ['AuthorizationPermission' => '$refresh'];
    public $search_permission;
    protected $paginationTheme = 'tailwind';
    

    public function render()
    {
        $permission_model= Permission::where('name', 'like', '%' . $this->search_permission . '%')->with('links')->paginate(8) ;
        return view('livewire.authorization.authorization-permission',[ 
            'permissions' =>
            $permission_model
        ]);
    }
}
