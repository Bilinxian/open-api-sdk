<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:35
 */

namespace Wsb\OpenApi\Requests\DeliverShop;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverShopCreateRequest implements RequestInterface
{
    public $store_id;

    public $ship_way;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/deliver_shop/create';
    }
}
