<?php

namespace App\Http\Controllers;

use App\Models\User;
use Laravel\Fortify\Rules\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RestedController extends Controller
{
    public function index(){
        return view('rested');
    }
    //
    public function update_rest(Request $request){
        $input=[
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ];

        Validator::make($input, [
            'password' => ['required', 'string', new Password, 'confirmed'],
        ])->validate();

        User::where('id', Auth::user()->id)
        ->update([
            'password'=> Hash::make($request->password),
            'user_rested_by_admin' => null,
        ]);
        
        return redirect()->route('dashboard');
    }
}
