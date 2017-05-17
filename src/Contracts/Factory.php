<?php namespace Phpscots\ProductSearch\Contracts;

interface Factory
{

    /**
     * Get an Provider Implementation
     *
     * @param  string  $driver
     * @return \Phpscots\ProductSearch\Contracts\Provider
     */
    public function driver($driver = null);
}
