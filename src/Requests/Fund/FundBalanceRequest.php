<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:17
 */

namespace Wsb\OpenApi\Requests\Fund;

use Wsb\OpenApi\Requests\RequestInterface;

class FundBalanceRequest implements RequestInterface
{
    public $store_id;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/fund/balance';
    }
}
