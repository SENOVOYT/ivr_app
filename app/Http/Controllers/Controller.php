<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function search(Request $request){

        if ($request->ajax()) {
            $output = "<option value='' selected>Choose voyage</option>";
            if($request->search==""){
                return Response($output);
            }
            $products = shipschedule::where('vessel_name', 'LIKE', '%'. $request->search ."%")->limit(5)->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<option value="'. $product->id .'">'. $product->vessel_name .' '. $product->voyage_number .'</option>';
                }
                return Response($output);
            }
        }
        
    }
}
