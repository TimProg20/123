<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
	if (\Gate::check('admin', [self::class])){
	    $contact = new Contact();
	    $contact->name = $req->input('name');
	    $contact->email = $req->input('email');
	    $contact->message = $req->input('message');
	
	    $contact->save();
	
	    return redirect()->route('home')->with('success', 'Сообщение было добавлено');
	}
	return redirect()->route('home')->withErrors([
	    'formError' => 'Только Админ может менять данные в БД'
	]);
    }
}
