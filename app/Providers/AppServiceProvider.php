<?php

namespace App\Providers;

use App\Models\Jobpost;
use App\Models\Jobseeker; // Make sure the Jobseeker model is imported
use Illuminate\Support\Facades\Schema; // Don't forget to include the Schema facade
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
   
        Paginator::useBootstrap();

     

        if (Schema::hasTable('jobseekers') && Schema::hasTable('jobposts') ) {
            $alljobpost = Jobpost::all();
            view()->share('jobpost', $alljobpost);
            $allJobseekers = Jobseeker::all();

   
            view()->share('allJobseekers', $allJobseekers);

           
        }
    }
}
