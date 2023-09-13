<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:07
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverMockCallbackRequest implements RequestInterface
{
    public $delivery_uuid;

    public $state;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/deliver/mockCallback';
    }
}
