<?php namespace Phpscots\ProductSearch\Contracts;

interface Provider{

    /**
     * @return mixed
     */
    public function search($query,$count);

}
