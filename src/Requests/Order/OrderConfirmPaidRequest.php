<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:30
 */

namespace Wsb\OpenApi\Requests\Order;

use Wsb\OpenApi\Requests\RequestInterface;

/**
 * 支付确认：未支付建单后，真实支付成功再通知/打印/自动发单。
 * 必填 store_id；platform_order_id 与 order_id 二选一。
 * 可选 is_paid / paid_done：若传则须为已支付语义（true/1）。
 */
class OrderConfirmPaidRequest implements RequestInterface
{
    public $store_id;

    public $platform_order_id;

    public $order_id;

    /**
     * 可选；传则须为 true/1
     * @var int|bool|null
     */
    public $is_paid;

    /**
     * 可选；传则须为 1
     * @var int|null
     */
    public $paid_done;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/order/confirm_paid';
    }
}
