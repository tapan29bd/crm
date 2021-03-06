<?php namespace Syscover\Crm;

use Illuminate\Support\ServiceProvider;

class CrmServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// include route.php file
		if (!$this->app->routesAreCached())
			require __DIR__ . '/../../routes.php';

		// register views
		$this->loadViewsFrom(__DIR__ . '/../../views', 'crm');

        // register translations
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'crm');

		// register public files
		$this->publishes([
			__DIR__ . '/../../../public' 					=> public_path('/packages/syscover/crm')
		]);

		// register config files
		$this->publishes([
			__DIR__ . '/../../config/crm.php' 				=> config_path('crm.php')
		]);

        // register migrations
        $this->publishes([
            __DIR__ . '/../../database/migrations/' 		=> base_path('/database/migrations'),
			__DIR__ . '/../../database/migrations/updates/' => base_path('/database/migrations/updates'),
        ], 'migrations');

        // register migrations
        $this->publishes([
            __DIR__ . '/../../database/seeds/' 				=> base_path('/database/seeds')
        ], 'seeds');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        //
	}
}