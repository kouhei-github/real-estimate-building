<?php

namespace App\Providers;

use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Services\Interfaces\SecurityHubServiceInterface;
use App\Services\SecurityHubService;
use App\UseCases\Interfaces\LoginUseCaseInterface;
use App\UseCases\Interfaces\UserRegisterUseCaseInterface;
use App\UseCases\LoginUseCase;
use App\UseCases\UserRegisterUseCase;
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
        $this->app->bind(
            UserRegisterUseCaseInterface::class,
            UserRegisterUseCase::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->bind(
            LoginUseCaseInterface::class,
            LoginUseCase::class
        );


        $this->app->bind(
            SecurityHubServiceInterface::class,
            SecurityHubService::class
        );

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
