<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    function index(Request $request){

        $users = DB::table('user_table')->get();
        return view('home.index')->with('users', $users);
    }


    public function create(Request $request){
        return view('home.create');
    }

    public function store(Request $request){

       /* $validate  = Validator::make($request->all(), [
            'username'  => 'required|max:5',
            'name'      => 'required',
            'password'  => 'required',
            'type'      => 'required',
            'cgpa'      => 'required'
        ]);
        if($validate->fails()){
            //return redirect()->route('home.create')
                               // ->with('errors', $validate->errors())
                                //->withInput();
            return back()
                    ->with('errors', $validate->errors())
                    ->withInput();
        }*/


      /*  $this->validate($request, [
            'username'  => 'required|max:5',
            'name'      => 'required',
            'password'  => 'required',
            'type'      => 'required',
            'cgpa'      => 'required'
        ])->validate();*/

        //$validation->validate();


/*        $request->validate([
            'username'  => 'required|max:5',
            'name'      => 'required',
            'password'  => 'required',
            'type'      => 'required',
            'cgpa'      => 'required'
        ])->validate();*/

       /* $user = new User();
        $user->username     = $request->username;
        $user->name         = $request->name;
        $user->password     = $request->password;
        $user->type         = $request->type;
        $user->cgpa         = $request->cgpa;
        $user->dept         = $request->dept;
        $user->save();*/
        
        return redirect()->route('home.index');
    }

    function edit($id){
        $user = User::find($id);
    	return view('home.edit')->with('user', $user);

    }

    function update($id, Request $request){
        $user = User::find($id);
        $user->username     = $request->username;
        $user->name         = $request->name;
        $user->password     = $request->password;
        $user->type         = $request->type;
        $user->cgpa         = $request->cgpa;
        $user->dept         = $request->dept;
        $user->save();

    	return redirect()->route('home.index');
    }

    function delete($id){
        $user = User::find($id);
        return view('home.delete')->with('user', $user);

    }

    function destroy($id, Request $request){
        if(User::destroy($id)){
            return redirect()->route('home.index');
        }else{
            return redirect()->route('home.delete', $id);
        }
    }
}