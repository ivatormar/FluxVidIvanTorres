<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Director;

class DirectorNationalityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $countries=Director::select('nationality')->distinct()->get();
        view()->share('countries',$countries);
    }
}
