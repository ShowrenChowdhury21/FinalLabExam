<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    
    function index(){

    	return view('register.index');
    }

    function register(Request $request){

        $user = new User();
        $user->name         = $request->name;
        $user->company      = $request->compname;
        $user->phone        = $request->phone;
        $user->uname        = $request->uname;
        $user->password     = $request->password;
        $user->save();
       
        return redirect()->route('login');
    }
}
