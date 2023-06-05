<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function create(Request $request){
        if(auth()->user()->role == 'employer'){
            $newPost = $request->validate([
                'employer_id'=>'required',
                'title'=>'required',
                'description'=>'required',
                'company'=>'required',
                'requisites'=>'required',
                'salary'=>'required',
                'seniority'=>'required'
            ]);
            Job::create($newPost);
            return back();
        }else{
            return back();
        }
    }
    public function show($id){
        $singleJob = Job::find($id);
        $applicationCount = count(Application::where('job_id',$singleJob->id)->get());
        $applied = Application::all();
        return view('singleShow',['singleJob'=>$singleJob,'applications'=>$applicationCount,'appliedBool'=>$applied]);
    }
    public function apply(Request $request){
        $applicationInfo = $request->validate([
            'job_id'=>'required',
            'seeker_id'=>'required'
        ]);
        Application::create($applicationInfo);
        return back();
    }
    public function edit(Request $request ,Job $id){
        $newJobInfo = $request->validate([
            'employer_id'=>'required',
            'title'=>'required',
            'description'=>'required',
            'seniority'=>'required',
            'company'=>'required',
            'requisites'=>'required',
            'salary'=>'required'
        ]);
        $id->update($newJobInfo);
        return back();
    }
    public function destroy(Job $id){
        if($id->employer_id == auth()->user()->id){
            $id->delete();
            return redirect()->route('main');    
        }else{
            return back();
        }
    }
}
