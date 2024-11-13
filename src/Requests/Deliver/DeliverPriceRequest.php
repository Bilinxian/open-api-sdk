<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:51
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverPriceRequest implements RequestInterface
{

    public $ship_ways = [];

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/deliver/price';
    }
}
