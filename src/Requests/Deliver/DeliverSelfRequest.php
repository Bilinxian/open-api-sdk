<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:08
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverSelfRequest implements RequestInterface
{
    public $name;

    public $mobile;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/deliver/self';
    }
}
