<?php

namespace App\Providers;

use App\Policies\RolePolicy;
use App\Policies\Subsciber;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => Subsciber::class,
        User::class => RolePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('subscriber_only', 'App\Policies\Subsciber@subscriberOnly');
        Gate::define('is_admin', 'App\Policies\RolePolicy@isAdmin');
        Gate::define('is_user', 'App\Policies\RolePolicy@isUser');
    }
}
