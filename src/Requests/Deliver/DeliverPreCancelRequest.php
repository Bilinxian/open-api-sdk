<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:00
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverPreCancelRequest implements RequestInterface
{

    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/deliver/preCancel';
    }
}
