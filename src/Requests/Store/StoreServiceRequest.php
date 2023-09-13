<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:06
 */

namespace Wsb\OpenApi\Requests\Store;

use Wsb\OpenApi\Requests\RequestInterface;

class StoreServiceRequest implements RequestInterface
{
    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/store/service';
    }
}
