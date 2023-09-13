<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:01
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverCancelRequest implements RequestInterface
{

    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/deliver/cancel';
    }
}
