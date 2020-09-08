<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    function index(){
      return view('login');
    }

    function verify(request $request){
      $data = DB::table('users')
                ->where('username', $request->username)
                ->where('password', $request->password)
                ->get();
      if(count($data) > 0){
        $request->session()->put('username', $request->username);

        if($data[0]->user_type == 'admin'){
          $request->session()->put('type', "admin");
          return redirect()->route('admin.index');
        }
        else{
          $request->session()->put('type', "employer");
          return redirect()->route('employer.index');
        }
      }
    }
}
