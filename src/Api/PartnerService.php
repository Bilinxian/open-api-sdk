<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:05
 */

namespace Wsb\OpenApi\Api;

use Wsb\OpenApi\Requests\Partner\PartnerCreateRequest;
use Wsb\OpenApi\Requests\Partner\PartnerDetailRequest;
use Wsb\OpenApi\Requests\Partner\PartnerUpdateRequest;

class PartnerService extends AbstractService
{
    /**
     * 新建合作商
     * link url https://www.waisongbang.com/apiDoc/#/partner/create?v=1.2.2
     * @param PartnerCreateRequest $partnerCreateRequest
     * @return array|mixed
     */
    public function partnerCreate(PartnerCreateRequest $partnerCreateRequest)
    {
        return $this->client->request($partnerCreateRequest);
    }

    /**
     * 更新合作商信息
     * link url https://www.waisongbang.com/apiDoc/#/partner/update?v=1.2.2
     * @param PartnerUpdateRequest $partnerUpdateRequest
     * @return array|mixed
     */
    public function partnerUpdate(PartnerUpdateRequest $partnerUpdateRequest)
    {
        return $this->client->request($partnerUpdateRequest);
    }

    /**
     * 获取合作商信息
     * link url https://www.waisongbang.com/apiDoc/#/partner/detail?v=1.2.2
     * @param PartnerDetailRequest $partnerDetailRequest
     * @return array|mixed
     */
    public function partnerDetail(PartnerDetailRequest $partnerDetailRequest)
    {
        return $this->client->request($partnerDetailRequest);
    }
}
