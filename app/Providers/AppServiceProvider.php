<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate; // Import the Gate facade
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User; // Import the User model

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('is-admin', function (User $user): bool {
            return $user->isAdm();
        });

        Gate::define('owner', function (User $user, object $register): bool {
            return $user->id === $register->user_id;
        });
    }
}
