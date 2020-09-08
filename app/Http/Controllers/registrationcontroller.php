<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class registrationcontroller extends Controller
{
    public function index(){
      return view('registration');
    }

    public function store(Request $request){
      $request->validate([
        'employer_name' => 'required',
        'company_name' => 'required',
        'contact_no' => 'required',
        'username' => 'required',
        'password' => 'required'
      ]);

      $user = new User();
      $user->employer_name     = $request->employer_name;
      $user->company_name         = $request->company_name;
      $user->contact_no     = $request->contact_no;
      $user->username         = $request->username;
      $user->password         = $request->password;
      $user->user_type        = 'employer';
      $user->save();
      return redirect()->route('login.index');
    }
}
