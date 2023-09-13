<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:15
 */

namespace Wsb\OpenApi\Requests\Fund;

use Wsb\OpenApi\Requests\RequestInterface;

class FundChargeQueryRequest implements RequestInterface
{
    public $charge_id;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/fund/charge_query';
    }
}
