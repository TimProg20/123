<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Auth;
//use App\Web\Controllers\Controller;

class RegisterController extends Controller
{
    public function save(Request $request){
	if(Auth::check()){
	    return redirect(route('home'));
	}
	$validateFields = $request->validate([
	    'email' => 'required|email',
	    'password' => 'required'
	]);
	
	if(User::where('email', $validateFields['email'])->exists()){
	    return redirect(route('registration'))->withErrors(['email' => 'Такой пользователь уже существует']);
	}
	$user = User::create($validateFields);
	$role = new Roles();
	$role->role = 'quest';
	$role->save();
	if($user){
	    Auth::login($user);
	    return redirect(route('home'))->with('success', 'Регистрация прошла успешно!');
	}
	
	return redirect(route(login))->withErrors([
	    'formError' => 'Произошла ошибка при сохранении пользователя'
	]);
    }
}
