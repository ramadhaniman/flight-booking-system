<?php

namespace App\Providers;

use App\Repositories\AirlineRepository;
use App\Repositories\AirportRepository;
use App\Repositories\FlightRepository;
use App\Repositories\TransactionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->blind(AirlineRepositoryInterface::class, AirlineRepository::class);
        $this->app->blind(AirportRepositoryInterface::class, AirportRepository::class);
        $this->app->blind(FlightRepositoryInterface::class, FlightRepository::class);
        $this->app->blind(TransactionRepositoryInterface::class, TransactionRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
