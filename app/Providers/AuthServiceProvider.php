<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\UserPolicy;
use App\User;
use App\Policies\SurveyPolicy;
use App\Survey;
use App\Policies\TownPolicy;
use App\Town;
use App\Policies\RolePolicy;
use App\Role;
use App\Policies\StatusPolicy;
use App\Status;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Survey::class => SurveyPolicy::class,
        Town::class => TownPolicy::class,
        Role::class => RolePolicy::class,
        Status::class => StatusPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
    }
}
