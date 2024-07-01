<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use App\Provider\Paginator;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Job;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Model::preventLazyLoading();  

      // Gate::define('edit-job', function(User $user, Job $job){
      //   return $job->employer->user->is($user);
      // });
    }
}
