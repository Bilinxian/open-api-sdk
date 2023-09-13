<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:22
 */

namespace Wsb\OpenApi\Requests\Partner;

use Wsb\OpenApi\Requests\RequestInterface;

class PartnerDetailRequest implements RequestInterface
{

    public $third_partner_id;

    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/partner/detail';
    }
}
