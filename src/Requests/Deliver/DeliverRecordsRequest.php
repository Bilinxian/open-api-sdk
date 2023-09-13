<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:59
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverRecordsRequest implements RequestInterface
{

    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/deliver/records';
    }
}
