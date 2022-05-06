<?php

namespace App\Providers;

use App\Interfaces\PostInterface;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(PostInterface::class,PostRepository::class);
    }


    public function boot()
    {
        //
    }
}
