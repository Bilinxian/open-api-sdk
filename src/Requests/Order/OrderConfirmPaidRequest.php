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
 * 可选 pay_status：传则须为 paid（推荐）；不传亦可完成确认。
 */
class OrderConfirmPaidRequest implements RequestInterface
{
    public $store_id;

    public $platform_order_id;

    public $order_id;

    /**
     * 支付状态（推荐）：传则须为 paid。不传也可确认支付。
     * @var string|null unpaid|paid
     */
    public $pay_status;

    /**
     * @deprecated 请改用 pay_status=paid。0/"0"/false 经 array_filter 会被丢掉。
     * @var int|bool|null
     */
    public $is_paid;

    /**
     * @deprecated 请改用 pay_status=paid。0/"0" 经 array_filter 会被丢掉。
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
