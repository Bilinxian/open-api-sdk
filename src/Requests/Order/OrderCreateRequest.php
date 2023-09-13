<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:09
 */

namespace Wsb\OpenApi\Requests\Order;

use Wsb\OpenApi\Requests\RequestInterface;

/**
 * Link url : https://www.waisongbang.com/apiDoc/#/order/create?v=1.2.2
 */
class OrderCreateRequest implements RequestInterface
{
    public $store_id;

    public $receiver_name;

    public $receiver_address;

    public $receiver_phone;

    public $receiver_backup_phone;

    public $receiver_lng;

    public $receiver_lat;

    public $platform_order_id;

    public $platform_day_id;

    public $order_weight;

    public $remark;

    public $order_time;

    public $order_amount;

    public $expect_time;

    public $pick_up;

    public $taxer_id;

    public $invoice;

    public $invoice_amount;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/order/create';
    }
}
