<?php

/**
 * User: Kify
 * Time: 2023/9/13-17:49
 */

namespace Wsb\OpenApi\Requests\Store;
use Wsb\OpenApi\Requests\RequestInterface;


class StoreDetailRequest implements RequestInterface
{

    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/store/detail';
    }
}
