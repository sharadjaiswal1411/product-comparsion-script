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
        $this->app->bindShared('ProductSearch', function ($app) {
            return new ProductSearch($app);
        });
    }

}
