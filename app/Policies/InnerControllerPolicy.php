<?php

namespace App\Policies;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
class InnerControllerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function viewProtectedPart(?User $user)
    {
        if($user && $user->email == '1@mail.ru'){
    	    return Response::allow('Вам разрешено');
        }
        return Response::deny('Вам запрещено', 404);
    }
    
    public function admin(?User $user)
    {
	if($user){
	    $role = Roles::firstWhere('id', $user->id);
	    return ($role->role == 'Admin');
	}
	return false;
	    
    }
}
