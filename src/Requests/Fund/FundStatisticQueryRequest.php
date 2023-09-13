<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:18
 */

namespace Wsb\OpenApi\Requests\Fund;

use Wsb\OpenApi\Requests\RequestInterface;

class FundStatisticQueryRequest implements RequestInterface
{

    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/fund/statistic_query';
    }
}
