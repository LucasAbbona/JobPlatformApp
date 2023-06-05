<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function editView($id){
        $SingleJob=Job::find($id)->get();
        return view('editJob',['job'=>$SingleJob]);
    }
    public function mainView(){
        if(auth()->user()->role == 'employer'){
            $jobs = Job::all()->where('employer_id','!=',auth()->user()->id)->take(6);
        }else{
            $jobs = Job::all()->take(6);
        }
        return view('main',['jobs'=>$jobs]);
    }
    public function jobsView(){
        return view('jobs');
    }
    public function addJob(){
        if(auth()->user()->role == 'employer'){
            return view('addjob');
        }else{
            return back();
        }
    }
    public function applicationsView(){
        $myId = auth()->user()->id;
        $Myjobs = Job::where('employer_id',$myId)->get();
        return view('applications',['applications'=>$Myjobs]);
    }
    public function applicationShow(Job $id){
        $appl = Application::where('job_id',$id->id)->get();
        $users = User::all();
        return view('showApplication',['applicants'=>$appl,'users'=>$users]);
    }
}
