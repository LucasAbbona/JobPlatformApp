<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Mail\welcome;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('register');
})->name('/');
Route::get('/login',function () {
    return view('login');
});
Route::get('/main',[ViewController::class, 'mainView'])->middleware('auth')->name('main');
Route::post('/create-user',[UserController::class,'create']);
Route::post('/login-user',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout'])->middleware('auth');
Route::get('/jobs',[ViewController::class,'jobsView'])->middleware('auth');

// Jobs Routes

Route::get('/add-job',[ViewController::class,'addJob'])->middleware('auth');
Route::post('/create-job',[JobsController::class, 'create'])->middleware('auth');
Route::get('/job/{id}',[JobsController::class,'show'])->middleware('auth');
Route::get('/job/{id}/edit',[ViewController::class,'editView'])->middleware('auth');
Route::put('/job/{id}',[JobsController::class,'edit'])->middleware('auth');
Route::delete('/job/delete/{id}',[JobsController::class, 'destroy'])->middleware('auth');

//Applications Routes

Route::post('/job/apply',[JobsController::class,'apply'])->middleware('auth');
Route::get('/applications',[ViewController::class, 'applicationsView'])->middleware('auth');
Route::get('/applications/{id}',[ViewController::class,'applicationShow'])->middleware('auth');

//Profile Routes

Route::get('/my-profile',[UserController::class,'profile'])->middleware('auth');
Route::get('/user/{id}',[UserController::class,'profileView'])->middleware('auth');
Route::get('/profile/edit/{id}',[UserController::class,'editProfile'])->middleware('auth');
Route::put('/profile/{id}',[UserController::class,'UpdateProfile'])->middleware('auth');

