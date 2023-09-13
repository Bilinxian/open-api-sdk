<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:38
 */

namespace Wsb\OpenApi\Requests\DeliverShop;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverShopListRequest implements RequestInterface
{
    public $store_id;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/deliver_shop/list';
    }
}
