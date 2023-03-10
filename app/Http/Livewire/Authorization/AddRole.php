<?php

namespace App\Http\Livewire\Authorization;

use App\Models\Permission;
use App\Models\roles;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Role;

class AddRole extends ModalComponent
{
    public $search;
    public $role_name;
    public $permission;
    public $permission_list=[];
    public function render()
    {
        $this->permission=Permission::where('name', 'LIKE', '%'. $this->search ."%")
        ->limit(15)
        ->get();

        return view('livewire.authorization.add-role');
    }
    public function click($permission_list){
        $insert=true;
        foreach( $this->permission_list as $permission_list_array){
            if($permission_list_array['id']==$permission_list['id']){
                $insert=false;
                $this->emit('already_permission');
                break; 
            }
        }
        if($insert){
            $this->permission_list[]=$permission_list;
            $this->emit('permission_added'.$permission_list['id']);
        }
    }
    public function remove($key){
        unset($this->permission_list[$key]);
    }
    public function submit(){
        $validator = Validator::make([
            'role_name' => $this->role_name,
            'permission_list' => $this->permission_list,
        ],[
            'role_name' => ['required', 'string','min:3','max:100'],
            'permission_list.*.id' => ['integer','exists:permissions,id']
        ]);
        if ($validator->fails()) {
            
            $error=$validator->errors();
            $collection="";
            foreach($error->all() as $error){
                $collection.=$error.' ';
            }
            session()->flash('error', $collection);
            $this->emit('error');
            return 0;
        }
        $permission=[];
        $role=roles::create([
            'name' => $this->role_name,
            'guard_name' => 'web'
        ]);
        foreach($this->permission_list as $permission_name){
            DB::table('role_has_permissions')->insert([
                'permission_id' => $permission_name['id'],
                'role_id' => $role->id
            ]);
        }
        $this->emit('addedrole');
        $this->emit('AuthorizationRole');
        $this->search=null;
        $this->role_name=null;
        $this->permission_list=[];
    }
}
