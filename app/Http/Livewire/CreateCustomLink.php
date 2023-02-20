<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreateCustomLink extends Component
{
    public $search=null;
    public $links=null;
    
    public function render()
    {
        if($this->search==null || $this->search==''){
            return view('livewire.create-custom-link');
        }else{

            $this->links=Permission::where('link', 'LIKE', '%'. $this->search ."%")
            ->limit(10)
            ->get();
            $user=User::find(Auth::user()->getId());
            
            foreach( $this->links as $key => $link ){
                
                if((!(auth()->user()->hasPermissionTo($link['name'])))&&(!($user->hasrole('superuser')))){
                    unset($this->links[$key]);
                }
            }
            return view('livewire.create-custom-link',['link' => $this->links]);
        }
    }
}
