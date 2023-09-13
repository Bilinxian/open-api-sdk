<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:51
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverPriceRequest implements RequestInterface
{

    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/deliver/price';
    }
}
