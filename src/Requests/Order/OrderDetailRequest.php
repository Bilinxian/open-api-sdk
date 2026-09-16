<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:30
 */

namespace Wsb\OpenApi\Requests\Order;

use Wsb\OpenApi\Requests\RequestInterface;

/**
 * 订单详情
 * 路径参数：platform_order_id
 * link url https://www.waisongbang.com/apiDoc/#/order/detail
 */
class OrderDetailRequest implements RequestInterface
{
    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/order/detail';
    }
}
