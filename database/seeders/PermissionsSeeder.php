<?php

namespace Database\Seeders;

use App\Models\nav_links;
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
            1 => [
                'permissions' => 'view_log',
                'link' => '/log-viewer'
            ],


            2 => [
                'permissions' => 'user_show',
                'link' => ''
            ],
            3 => [
                'permissions' => 'user_create',
                'link' => ''
            ],
            4 => [
                'permissions' => 'user_edit',
            ],
            5 => [
                'permissions' => 'user_delete',
            ],


            6 => [
                'permissions' => 'permission_show',
                'link' => ''
            ],
            7 => [
                'permissions' => 'permission_create',
                'link' => ''
            ],
            8 => [
                'permissions' => 'permission_edit',
            ],
            9 => [
                'permissions' => 'permission_delete',
            ],


            10 => [
                'permissions' => 'role_show',
                'link' => ''
            ],
            11 => [
                'permissions' => 'role_create',
                'link' => ''
            ],
            12 => [
                'permissions' => 'role_edit',
            ],
            13 => [
                'permissions' => 'role_delete',
            ],
            
                      
        ];
        foreach ($permissions as $permissions){
            $id_permission=Permission::create([
                'name' => $permissions['permissions']
            ])->id;
            if(isset($permissions['link'])&&!empty($permissions['link'])){
                nav_links::create([
                    'permission_id' => $id_permission,
                    'link' => $permissions['link']
                ]);
            }

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
