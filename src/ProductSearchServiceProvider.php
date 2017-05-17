<?php namespace Phpscots\ProductSearch;

use Illuminate\Support\ServiceProvider;

class ProductSearchServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ProductSearch', function ($app) {
			return new ProductSearch($app);
		});
    }

}
