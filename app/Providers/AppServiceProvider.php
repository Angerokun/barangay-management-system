<?php

namespace App\Providers;

use App\Models\AdminProfile;
use App\Models\ResidentProfile;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Relation::morphMap([
            'ResidentProfile' => ResidentProfile::class,
            'AdminProfile' => AdminProfile::class
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
