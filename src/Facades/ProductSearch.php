<?php namespace Phpscots\ProductSearch\Facades;

use Illuminate\Support\Facades\Facade;


class ProductSearch extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ProductSearch';
    }
}
