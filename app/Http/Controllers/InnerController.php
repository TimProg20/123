<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Auth\Access\Response;
class InnerController extends Controller
{
    public function __construct()
    {
	$this->authorizeResource(User::class, 'user');
    }
    public function inner(){
	//$response = \Gate::inspect('view-protected-part', [self::class]);
	//if($response->denied()){
	    //return $response->message();
	//    return $response->message();
	//}
	return view('create');
    }
}
