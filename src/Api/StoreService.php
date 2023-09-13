<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:04
 */

namespace Wsb\OpenApi\Api;

use Wsb\OpenApi\Requests\Store\StoreCreateRequest;
use Wsb\OpenApi\Requests\Store\StoreDetailRequest;
use Wsb\OpenApi\Requests\Store\StoreServiceRequest;
use Wsb\OpenApi\Requests\Store\StoreUpdateRequest;

class StoreService extends AbstractService
{
    /**
     * 新建门店
     * link url https://www.waisongbang.com/apiDoc/#/store/create?v=1.2.2
     * @param StoreCreateRequest $storeCreateRequest
     * @return array|mixed
     */
    public function storeCreate(StoreCreateRequest $storeCreateRequest)
    {
        return $this->client->request($storeCreateRequest);
    }

    /**
     * 更新门店信息
     * link url https://www.waisongbang.com/apiDoc/#/store/update?v=1.2.2
     * @param $storeId
     * @param StoreUpdateRequest $storeUpdateRequest
     * @return array|mixed
     */
    public function storeUpdate($storeId, StoreUpdateRequest $storeUpdateRequest)
    {
        return $this->client->request($storeUpdateRequest, [$storeId]);
    }

    /**
     * 获取门店详情
     * link url https://www.waisongbang.com/apiDoc/#/store/detail?v=1.2.2
     * @param $storeId
     * @param StoreDetailRequest $storeDetailRequest
     * @return array|mixed
     */
    public function storeDetail($storeId, StoreDetailRequest $storeDetailRequest)
    {
        return $this->client->request($storeDetailRequest, [$storeId]);
    }

    /**
     * 获取在线客服链接
     * link url https://www.waisongbang.com/apiDoc/#/store/service?v=1.2.2
     * @param $storeId
     * @param StoreServiceRequest $storeServiceRequest
     * @return array|mixed
     */
    public function serviceLink($storeId, StoreServiceRequest $storeServiceRequest)
    {
        return $this->client->request($storeServiceRequest, [$storeId]);
    }
}
