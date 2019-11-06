<?php

namespace App\Providers;
//use Illuminate\Support\ServiceProvider;


use App\Http\Repositories\Eloquent\StudentEloquentRepository;
use App\Http\Repositories\StudentRepositoryInterface;
use App\Http\Services\Impl\StudentServices;
use App\Http\Services\StudentServicesInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(StudentServicesInterface::class, StudentServices::class);
        $this->app->singleton(StudentRepositoryInterface::class, StudentEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

