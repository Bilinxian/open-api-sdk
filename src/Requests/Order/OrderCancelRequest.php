<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:30
 */

namespace Wsb\OpenApi\Requests\Order;

use Wsb\OpenApi\Requests\RequestInterface;

class OrderCancelRequest implements RequestInterface
{
    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/order/cancel';
    }
}
