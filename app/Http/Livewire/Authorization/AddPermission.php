<?php

namespace App\Http\Livewire\Authorization;

use App\Models\link;
use Illuminate\Support\Facades\Validator;
use LivewireUI\Modal\ModalComponent;
use Spatie\Permission\Models\Permission;

class AddPermission extends ModalComponent
{
    public $permission_name=null;
    public $search;
    public $permission_id;
    public $link;
    public function render()
    {
        
        $this->link=link::where('name', 'LIKE', '%'. $this->search ."%")
        ->where('permission_id', null)
        ->limit(15)
        ->get();

        return view('livewire.authorization.add-permission');
    }
    public function submit(){
        $validator = Validator::make([
            'permission_name' => $this->permission_name,
        ],[
            'permission_name' => ['required', 'string','min:3','max:100']  
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
        if($this->permission_id==null){
            session()->flash('error', 'The Route field is required.');
            $this->emit('error');
        }
        $id=Permission::insertGetId([
            'name' => $this->permission_name,
            'guard_name' => 'web',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        link::where('id',$this->permission_id['id'])->update(['permission_id' => $id]);


        $this->emit('addedlink');
        $this->search=null;
        $this->permission_id=null;
        $this->permission_name=null;
        $this->emit('AuthorizationPermission');
        return 0;
        
    }
    public function click($permission_id)
    {
        if(isset($this->permission_id['id'])){
            if($this->permission_id['id']==$permission_id['id']){
                $this->permission_id=null;
            }else{
                $this->permission_id = $permission_id;
            } 
        }else{
            $this->permission_id = $permission_id;
        }
    }
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '5xl';
    }

}
