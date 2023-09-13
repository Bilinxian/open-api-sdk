<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:04
 */

namespace Wsb\OpenApi\Api;

use Wsb\OpenApi\Requests\Order\OrderCancelRequest;
use Wsb\OpenApi\Requests\Order\OrderCreateRequest;
use Wsb\OpenApi\Requests\Order\OrderListRequest;

class OrderService extends AbstractService
{
    /**
     * 创建订单
     * link url https://www.waisongbang.com/apiDoc/#/order/create?v=1.2.2
     * @param OrderCreateRequest $orderCreateRequest
     * @return array|mixed
     */
    public function orderCreate(OrderCreateRequest $orderCreateRequest)
    {
        return $this->client->request($orderCreateRequest);
    }

    /**
     * 取消订单
     * link url https://www.waisongbang.com/apiDoc/#/order/cancel?v=1.2.2
     * @param $platformOrderId
     * @param OrderCancelRequest $orderCancelRequest
     * @return array|mixed
     */
    public function orderCancel($platformOrderId, OrderCancelRequest $orderCancelRequest)
    {
        return $this->client->request($orderCancelRequest, [$platformOrderId]);
    }

    /**
     * 订单列表
     * link url https://www.waisongbang.com/apiDoc/#/order/list?v=1.2.3
     * @param OrderListRequest $orderListRequest
     * @return array|mixed
     */
    public function orderList(OrderListRequest $orderListRequest)
    {
        return $this->client->request($orderListRequest);
    }
}
