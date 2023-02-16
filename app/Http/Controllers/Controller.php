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

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function search(Request $request){

        if ($request->ajax()) {
            $output = "<option value='' selected>Choose voyage</option>";
            if($request->search==""){
                return Response($output);
            }
            $PermissionsLinks = PermissionsLinks::where('vessel_name', 'LIKE', '%'. $request->search ."%")
            // ->with(['permission_id'])
            ->limit(10)
            ->get();
            if ($PermissionsLinks) {
                // $id=Auth::user()->id;
                // User::where('id',$id)->can('');
                foreach ($PermissionsLinks as $key => $PermissionsLink) {
                    if( Auth::user()->id){
                    $output .= '<option value="'. $PermissionsLink->id .'">'. $PermissionsLink->link .'</option>';
                    }
                }
                return Response($output);
            }
        }
        
    }
}
