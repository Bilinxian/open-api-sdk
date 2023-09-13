<?php

/**
 * User: Kify
 * Time: 2023/9/13-18:34
 */

namespace Wsb\OpenApi\Api;

use Wsb\OpenApi\Requests\DeliverShop\DeliverShopCreateRequest;
use Wsb\OpenApi\Requests\DeliverShop\DeliverShopCreateStatusRequest;
use Wsb\OpenApi\Requests\DeliverShop\DeliverShopListRequest;

class DeliverShopService extends AbstractService
{
    /**
     * 开通门店配送
     * link url https://www.waisongbang.com/apiDoc/#/delivery/shop_create?v=1.2.2
     * @param DeliverShopCreateRequest $shopCreateRequest
     * @return array|mixed
     */
    public function shopCreate(DeliverShopCreateRequest $shopCreateRequest)
    {
        return $this->client->request($shopCreateRequest);
    }

    /**
     * 查看门店配送开通状态
     * link url https://www.waisongbang.com/apiDoc/#/delivery/shop_create_status?v=1.2.2
     * @param DeliverShopCreateStatusRequest $shopCreateStatusRequest
     * @return array|mixed
     */
    public function shopCreateStatus(DeliverShopCreateStatusRequest $shopCreateStatusRequest)
    {
        return $this->client->request($shopCreateStatusRequest);
    }

    /**
     * 获取门店配送列表
     * link url https://www.waisongbang.com/apiDoc/#/delivery/shop_list?v=1.2.2
     * @param DeliverShopListRequest $deliverShopListRequest
     * @return array|mixed
     */
    public function shopList(DeliverShopListRequest $deliverShopListRequest)
    {
        return $this->client->request($deliverShopListRequest);
    }
}
