<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\job;
use Illuminate\Support\Facades\DB;

class employeecontroller extends Controller
{
    public function index(){
      $job = DB::table('jobs')->get();
      return view('employerhome')->with('job', $job);
    }

    public function create(){
      return view('createjob');
    }

    public function store(Request $request){
      $request->validate([
        'company_name' => 'required',
        'job_title'    => 'required',
        'job_location' => 'required',
        'salary'       => 'required',
      ]);

      $job = new job();
      $job->company_name     = $request->company_name;
      $job->job_title        = $request->job_title;
      $job->job_location     = $request->job_location;
      $job->salary           = $request->salary;
      $job->save();
      return redirect()->route('employer.index');
    }

    public function delete($id){
      if(job::destroy($id)){
        return redirect()->route('employer.index');
      }else{
        return redirect()->route('employer.index', $id);
      }
    }

    public function edit($id){
      $job = job::find($id);
      return view('editjob')->with('job', $job);
    }

    public function update($id, Request $request){
      $request->validate([
        'company_name' => 'required',
        'job_title'    => 'required',
        'job_location' => 'required',
        'salary'       => 'required',
      ]);
      
      $job = job::find($id);
      $job->company_name     = $request->company_name;
      $job->job_title        = $request->job_title;
      $job->job_location     = $request->job_location;
      $job->salary           = $request->salary;
      $job->save();
      return redirect()->route('employer.index');
    }
}
