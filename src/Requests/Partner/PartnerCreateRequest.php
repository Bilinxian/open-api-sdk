<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:19
 */

namespace Wsb\OpenApi\Requests\Partner;

use Wsb\OpenApi\Requests\RequestInterface;

class PartnerCreateRequest implements RequestInterface
{
    public $name;

    public $mobile;

    public $third_partner_id;

    public $store_independent_recharge;

    public $callback_url;


    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/partner/create';
    }
}
