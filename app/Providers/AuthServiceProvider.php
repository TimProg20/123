<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use App\Policies\InnerControllerPolicy;
use App\Http\Controllers\ContactController;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
	ContactController::class => InnerControllerPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
	/* Gate::define('view', function(?User $user){
	    return ($user && $user->email == '1@mail.ru');
	});*/
	
        $this->registerPolicies();
    }
}
 