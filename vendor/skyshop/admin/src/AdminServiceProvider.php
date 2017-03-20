<?php

namespace Jteam\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
	include __DIR__ . '\routes\web.php';
        $this->app->make('Jteam\Admin\CateController');
        $this->app->make('Jteam\Admin\Admin_Product_Controller');
        $this->app->make('Jteam\Admin\SlideController');
    }
}
