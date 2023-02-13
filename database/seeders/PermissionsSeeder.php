<?php

namespace Database\Seeders;

use App\Models\roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permissions = [ 
            'view_dashboard',

            'view_log',

            'user_show',
            'user_create',
            'user_edit',
            'user_delete',
            
            'permission_create',
            'permission_edit',
            'permission_show',
            'permission_delete',
            
            'role_create',
            'role_edit',
            'role_show',
            'role_delete',
                      
        ];
        foreach ($permissions as $permissions){
            Permission::create([
                'name' => $permissions
            ]);
        }

        //gets all permissions via Gate::before rule: see AuthServiceProvider
        Role::create(['name' => 'superuser']);

        Role::create(['name' => 'administrator']);
        $role=Role::create(['name' => 'supervisor']);

        Role::create(['name' => 'customer']);

        $userPermissions = [
            'view_dashboard',
        ];

        foreach ( $userPermissions as $permissions ){
            $role->givePermissionTo($permissions);
        }


    }
    
}
