<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:53
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverCreateRequest implements RequestInterface
{

    private $ship_ways;

    private $ship_way_map;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/deliver/create';
    }
}
