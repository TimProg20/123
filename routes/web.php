<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/create', [\App\Http\Controllers\InnerController::class,'inner'])->name('create');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/login', function(){ 
    if(Auth::check()){
	return redirect(route('home'))->with('success', 'Вы уже авторизовались');
    }
    return view('login');
})->name('login');

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/logout', function(){
    Auth::logout();
    return redirect(route('login'));
})->name('logout');
Route::get('/registration', function(){
    if(Auth::check()){
	return redirect(route('create'))->with('success', 'Вы уже зарегистрированы');
    }
    return view('registration');
})->name('registration');

Route::post('/registration', [App\Http\Controllers\RegisterController::class, 'save']);
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit');