<?php

namespace CawaKharkov\AdminView;

use Illuminate\Support\ServiceProvider;


class AdminViewServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'admin-view');

        /**
         * Files
         */
        $this->publishes([
            __DIR__ . '/../../public' => public_path('theme/admin')
        ], 'public');



        $this->publishes([
            __DIR__ . '/../../config/admin-view.php' => config_path('admin-view.php'),
        ]);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
        ];
    }

}