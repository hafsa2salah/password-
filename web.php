<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
use App\Http\Controllers\UserController;

Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/contact', function () {return view('user/contact');});
*/
/*
Route::get('/session', function(){
    //$val=session()->all();
    //$val=session('_token');
    //$val=session('hafsa', 'hhh');
    //session()->put('name','hafsa');
    session()->put([
        'name'=>'haf',
        'age'=>'22',
    ]);
    //session()->put('name','hah');
    //$val=session()->only(['name']);
    //$val=session()->missing(['name1']);
    session()->push('users.admins','hafsaa');
    session()->forget('name');
    $val=session()->all();
    dd($val);
});
*/
use App\Http\Controllers\RegisterController;

Route::get('/r', [RegisterController::class, 'create'])->name('register.create');
Route::post('/r', [RegisterController::class, 'store'])->name('register.store');
