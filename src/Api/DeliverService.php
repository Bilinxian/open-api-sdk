<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:04
 */

namespace Wsb\OpenApi\Api;

use Wsb\OpenApi\Requests\Deliver\DeliverCancelRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverComplainRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverCreateRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverMockCallbackRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverPosTrackRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverPreCancelRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverPriceRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverRecordsRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverSelfArrivedRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverSelfRequest;
use Wsb\OpenApi\Requests\Deliver\DeliverWaysRequest;

class DeliverService extends AbstractService
{
    /**
     * 配送计价
     * link Url https://www.waisongbang.com/apiDoc/#/delivery/price?v=1.2.2
     * @param $platformOrderId
     * @param DeliverPriceRequest $deliverPriceRequest
     * @return array|mixed
     */
    public function deliverPrice($platformOrderId, DeliverPriceRequest $deliverPriceRequest)
    {
        return $this->client->request($deliverPriceRequest, [$platformOrderId]);
    }

    /**
     * 发起配送
     * link url https://www.waisongbang.com/apiDoc/#/delivery/create?v=1.2.2
     * @param $platformOrderId
     * @param DeliverCreateRequest $deliverCreateRequest
     * @return array|mixed
     */
    public function deliverCreate($platformOrderId, DeliverCreateRequest $deliverCreateRequest)
    {
        return $this->client->request($deliverCreateRequest, [$platformOrderId]);
    }

    /**
     * 配送日志
     * link url https://www.waisongbang.com/apiDoc/#/delivery/logs?v=1.2.2
     * @param $platformOrderId
     * @param DeliverRecordsRequest $deliverRecordsRequest
     * @return array|mixed
     */
    public function deliverRecords($platformOrderId, DeliverRecordsRequest $deliverRecordsRequest)
    {
        return $this->client->request($deliverRecordsRequest, [$platformOrderId]);
    }

    /**
     * 配送预取消
     * link url https://www.waisongbang.com/apiDoc/#/delivery/preCancel?v=1.2.2
     * @param $deliveryUuid
     * @param DeliverPreCancelRequest $deliverPreCancelRequest
     * @return array|mixed
     */
    public function deliverPreCancel($deliveryUuid, DeliverPreCancelRequest $deliverPreCancelRequest)
    {
        return $this->client->request($deliverPreCancelRequest, [$deliveryUuid]);
    }

    /**
     * 配送取消
     * link url https://www.waisongbang.com/apiDoc/#/delivery/cancel?v=1.2.2
     * @param $deliveryUuid
     * @param DeliverCancelRequest $deliverCancelRequest
     * @return array|mixed
     */
    public function deliverCancel($deliveryUuid, DeliverCancelRequest $deliverCancelRequest)
    {
        return $this->client->request($deliverCancelRequest, [$deliveryUuid]);
    }

    /**
     * 投诉信息
     * link url https://www.waisongbang.com/apiDoc/#/delivery/complain?v=1.2.2
     * @param $deliveryUuid
     * @param DeliverComplainRequest $deliverComplainRequest
     * @return array|mixed
     */
    public function deliverComplain($deliveryUuid, DeliverComplainRequest $deliverComplainRequest)
    {
        return $this->client->request($deliverComplainRequest, [$deliveryUuid]);
    }

    /**
     * 获取配送方式编码表
     * link url https://www.waisongbang.com/apiDoc/#/delivery/ways?v=1.2.2
     * @param DeliverWaysRequest $deliverWaysRequest
     * @return array|mixed
     */
    public function deliverWays(DeliverWaysRequest $deliverWaysRequest)
    {
        return $this->client->request($deliverWaysRequest);
    }

    /**
     * 查看骑手位置
     * link url https://www.waisongbang.com/apiDoc/#/delivery/pos_track?v=1.2.2
     * @param $deliveryUuid
     * @param DeliverPosTrackRequest $deliverPosTrackRequest
     * @return array|mixed
     */
    public function deliverPosTrack($deliveryUuid, DeliverPosTrackRequest $deliverPosTrackRequest)
    {
        return $this->client->request($deliverPosTrackRequest, [$deliveryUuid]);
    }

    /**
     * 模拟骑手配送
     * link url https://www.waisongbang.com/apiDoc/#/delivery/mock?v=1.2.2
     * @param DeliverMockCallbackRequest $deliverMockCallbackRequest
     * @return array|mixed
     */
    public function deliverMockCallback(DeliverMockCallbackRequest $deliverMockCallbackRequest)
    {
        return $this->client->request($deliverMockCallbackRequest);
    }

    /**
     * 我自己送
     * link url https://www.waisongbang.com/apiDoc/#/delivery/self?v=1.2.2
     * @param $platformOrderId
     * @param DeliverSelfRequest $deliverSelfRequest
     * @return array|mixed
     */
    public function deliverSelf($platformOrderId, DeliverSelfRequest $deliverSelfRequest)
    {
        return $this->client->request($deliverSelfRequest, [$platformOrderId]);
    }

    /**
     * 完成我自己送
     * link url https://www.waisongbang.com/apiDoc/#/delivery/self_arrived?v=1.2.2
     * @param $platformOrderId
     * @param DeliverSelfArrivedRequest $deliverSelfArrivedRequest
     * @return array|mixed
     */
    public function deliverSelfArrived($platformOrderId, DeliverSelfArrivedRequest $deliverSelfArrivedRequest)
    {
        return $this->client->request($deliverSelfArrivedRequest, [$platformOrderId]);
    }
}
