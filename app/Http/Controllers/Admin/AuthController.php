<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    function login (){
        return view('admin.auth.login');
    }

    function authenticate(Request $request){
        if(!Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }

        $request->session()->regenerate();

        return Response::intended('/', 'success', 'Login Successful');
    }
}
