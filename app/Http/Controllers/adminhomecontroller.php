<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class adminhomecontroller extends Controller
{
    public function index(){
      $users = DB::table('users')->get();
      return view('adminhome')->with('users', $users);
    }

    public function create(){
      return view('createemployee');
    }

    public function store(Request $request){
      $request->validate([
        'employer_name' => 'required',
        'company_name'  => 'required',
        'contact_no'    => 'required',
        'username'      => 'required',
        'password'      => 'required',
        'user_type'     => 'required',
      ]);

      $user = new User();
      $user->employer_name    = $request->employer_name;
      $user->company_name     = $request->company_name;
      $user->contact_no       = $request->contact_no;
      $user->username         = $request->username;
      $user->password         = $request->password;
      $user->user_type        = $request->user_type;
      $user->save();
      return redirect()->route('admin.index');
    }

    public function edit($id){
      $user = User::find($id);
      return view('adminedit')->with('user', $user);
    }

    public function update($id, Request $request){
      $request->validate([
        'employer_name' => 'required',
        'company_name'  => 'required',
        'contact_no'    => 'required',
        'username'      => 'required',
        'password'      => 'required',
        'user_type'     => 'required',
      ]);
      
      $user = User::find($id);
      $user->employer_name     = $request->employer_name;
      $user->company_name      = $request->company_name;
      $user->contact_no        = $request->contact_no;
      $user->username          = $request->username;
      $user->password          = $request->password;
      $user->user_type         = $request->user_type;
      $user->save();
      return redirect()->route('admin.index');
    }

    public function delete($id){
      if(User::destroy($id)){
        return redirect()->route('admin.index');
      }else{
        return redirect()->route('admin.delete', $id);
      }
    }
}
