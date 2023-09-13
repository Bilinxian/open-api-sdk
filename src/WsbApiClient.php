<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:03
 */

namespace Wsb\OpenApi;

use Wsb\OpenApi\Api\DeliverService;
use Wsb\OpenApi\Api\DeliverShopService;
use Wsb\OpenApi\Api\FundService;
use Wsb\OpenApi\Api\OrderService;
use Wsb\OpenApi\Api\PartnerService;
use Wsb\OpenApi\Api\StoreService;
use Wsb\OpenApi\Config\Config;

class WsbApiClient
{
    /** @var Config $config */
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * Get App Config
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Store Service
     * @return StoreService
     */
    public function getStoreService()
    {
        return new StoreService($this->config);
    }

    /**
     * Order Service
     * @return OrderService
     */
    public function getOrderService()
    {
        return new OrderService($this->config);
    }

    /**
     * @return DeliverShopService
     */
    public function getDeliverShopService()
    {
        return new DeliverShopService($this->config);
    }

    /**
     * Deliver Service
     * @return DeliverService
     */
    public function getDeliverService()
    {
        return new DeliverService($this->config);
    }

    /**
     * Fund Service
     * @return FundService
     */
    public function getFundService()
    {
        return new FundService($this->config);
    }

    /**
     * Partner Service
     * @return PartnerService
     */
    public function getPartnerService()
    {
        return new PartnerService($this->config);
    }


}
