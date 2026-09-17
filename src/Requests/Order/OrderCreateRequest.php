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
     * 支付状态（推荐）：字符串 unpaid=未支付，paid=已支付。
     * apiParams 使用 array_filter，0/"0"/false 会被丢弃；未支付请传本字段而非 is_paid/paid_done。
     * 未传时服务端默认已支付；预支付请显式传 unpaid。
     * @var string|null unpaid|paid
     */
    public $pay_status;

    /**
     * @deprecated 请改用 pay_status。0/"0"/false 经 array_filter 会被丢掉。
     * @var int|bool|null
     */
    public $is_paid;

    /**
     * @deprecated 请改用 pay_status。0/"0" 经 array_filter 会被丢掉。
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
