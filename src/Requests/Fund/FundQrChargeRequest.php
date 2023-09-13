<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:11
 */

namespace Wsb\OpenApi\Requests\Fund;

use Wsb\OpenApi\Requests\RequestInterface;

class FundQrChargeRequest implements RequestInterface
{

    public $store_id;

    public $pay_way;

    public $amount;

    public $notify_url;


    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/fund/qr_charge';
    }
}
