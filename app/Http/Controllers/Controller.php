<?php

namespace App\Http\Controllers;

use App\Models\PermissionsLinks;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use lluminate\Auth\Access\Gate;
use Spatie\Permission\Models\Permission;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function search(Request $request){

        if ($request->ajax()) {
            $output = "<option value='' selected>Choose Link</option>";
            if($request->search==""){
                return Response($output);
            }
            $PermissionsLinks = Permission::where('link', 'LIKE', '%'. $request->search ."%")
            ->limit(10)
            ->get();
            if (!$PermissionsLinks->isEmpty()) {
                // $id=Auth::user()->id;
                // User::where('id',$id)->can('');
                foreach ($PermissionsLinks as $key => $PermissionsLink) {
                    if( Auth::user()->id){
                    $output .= '<option value="'. $PermissionsLink->id .'">'. $PermissionsLink->link .'</option>';
                    }
                }
                return Response($output);
            }else{
                return Response('<option selected value="">No Link Found</option>');
            }
        }
        
    }
}
