<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:20
 */

namespace Wsb\OpenApi\Requests\Partner;

use Wsb\OpenApi\Requests\RequestInterface;

class PartnerUpdateRequest implements RequestInterface
{
    public $name;

    public $mobile;

    public $third_partner_id;

    public $callback_url;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/partner/update';
    }
}
