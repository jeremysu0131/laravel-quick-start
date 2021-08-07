<?php

namespace App\Providers;

use App\Services\TaskService;
use GuzzleHttp\Promise\TaskQueue;
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
        $this->app->bind(TaskService::class, TaskService::class);
        $this->app->bind(Task1Service::class, Task1Service::class);

        // $taskService=new TaskService();
        //
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
