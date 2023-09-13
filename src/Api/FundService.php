<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:05
 */

namespace Wsb\OpenApi\Api;

use Wsb\OpenApi\Requests\Fund\FundBalanceRequest;
use Wsb\OpenApi\Requests\Fund\FundChargeQueryRequest;
use Wsb\OpenApi\Requests\Fund\FundQrChargeRequest;
use Wsb\OpenApi\Requests\Fund\FundStatisticQueryRequest;

class FundService extends AbstractService
{
    /**
     * 二维码充值
     * link url https://www.waisongbang.com/apiDoc/#/fund/charge?v=1.2.2
     * @param FundQrChargeRequest $fundQrChargeRequest
     * @return array|mixed
     */
    public function fundQrCharge(FundQrChargeRequest $fundQrChargeRequest)
    {
        return $this->client->request($fundQrChargeRequest);
    }

    /**
     * 查询充值状态
     * link url https://www.waisongbang.com/apiDoc/#/fund/charge_query?v=1.2.2
     * @param FundChargeQueryRequest $fundChargeQueryRequest
     * @return array|mixed
     */
    public function fundChargeQuery(FundChargeQueryRequest $fundChargeQueryRequest)
    {
        return $this->client->request($fundChargeQueryRequest);
    }

    /**
     * 查询账户余额
     * link url https://www.waisongbang.com/apiDoc/#/fund/balance?v=1.2.2
     * @param FundBalanceRequest $fundBalanceRequest
     * @return array|mixed
     */
    public function fundBalance(FundBalanceRequest $fundBalanceRequest)
    {
        return $this->client->request($fundBalanceRequest);
    }

    /**
     * 费用统计
     * link url https://www.waisongbang.com/apiDoc/#/fund/fee_statistics?v=1.2.2
     * @param FundStatisticQueryRequest $fundStatisticQueryRequest
     * @return array|mixed
     */
    public function fundStatisticQuery(FundStatisticQueryRequest $fundStatisticQueryRequest)
    {
        return $this->client->request($fundStatisticQueryRequest);
    }
}
