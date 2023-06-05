<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Mail\welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Notifications\WelcomeNotification;

class UserController extends Controller
{
    public function create(Request $request){
        $info = $request->validate([
            'email'=>'required|email',
            'password'=>'min:6|required|confirmed',
            'name'=>'required',
            'role'=>'required',
            'age'=>'required',
            'country'=>'required'
        ]);
        $info['password'] = bcrypt($info['password']);
        User::create($info);
        Mail::to($info['email'])->send(new welcome());
        return back();
    }
    public function login(Request $request){
        $user = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        if(auth()->attempt($user)){
            $request->session()->regenerate();
            $u = auth()->user();
            $jobs = Job::all();
            if($u->role == 'seeker'){
                return redirect()->route('main');
            }
            return redirect()->route('main');
        }else{
            return back();
        }
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // Profile

    public function profile(){
        $profile = auth()->user();
        return view('profile',['profile'=>$profile]);
    }
    public function profileView(User $id){
        return view('user',['profile'=>$id]);
    }
    public function editProfile(User $id){
        if(auth()->user()->id == $id->id){
            return view('editProfile',['data'=>$id]);
        }else{
            return back();
        }
    }
    public function UpdateProfile(Request $request, User $id){
        $info = $request->validate([
            'name'=>'required',
            'company'=>'required',
            'country'=>'required',
            'habilities'=>'required',
            'experience'=>'required',
            'education'=>'required'
        ]);
        if($request->hasFile('profile_image')){
            $info['profile_image'] = $request->file('profile_image')->store('profile','public');
        }
        $id->update($info);
        return redirect('/my-profile');
    }
}
