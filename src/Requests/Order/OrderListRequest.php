<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:32
 */

namespace Wsb\OpenApi\Requests\Order;

use Wsb\OpenApi\Requests\RequestInterface;

class OrderListRequest implements RequestInterface
{
    public $store_id;

    public $page;

    public $page_size;

    public $start_date;

    public $end_date;

    public $order_id;

    public $platform_order_id;

    public $platform_day_id;

    public $order_status;

    public $deliver_status;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/order/list';
    }
}
