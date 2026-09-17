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

    /**
     * 是否已支付：0/1 或布尔；与 paid_done 二选一即可，paid_done 优先。
     * 未传时服务端默认已支付；预支付请显式传 0/false。
     * @var int|bool|null
     */
    public $is_paid;

    /**
     * 是否已支付：0/1；与 is_paid 二选一即可，二者同时传时以本字段为准。
     * @var int|null
     */
    public $paid_done;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/order/create';
    }
}
