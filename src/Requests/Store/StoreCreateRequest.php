<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:53
 */

namespace Wsb\OpenApi\Requests\Store;
use Wsb\OpenApi\Requests\RequestInterface;

class StoreCreateRequest implements RequestInterface
{
    public $name;

    public $owner_name;

    public $tel;

    public $city;

    public $area;

    public $address;

    public $lng;

    public $lat;

    public $open_start;

    public $open_end;

    public $sale_category;

    // auto create deliver shop
    public $auto_create_deliver_shop = 0;


    public function apiParams()
    {
        return array_filter(get_object_vars($this));
    }

    public function apiPath()
    {
        return '/store/create';
    }
}
