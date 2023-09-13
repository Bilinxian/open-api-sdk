<?php

/**
 * User: Kify
 * Time: 2023/9/13-19:06
 */

namespace Wsb\OpenApi\Requests\Deliver;

use Wsb\OpenApi\Requests\RequestInterface;

class DeliverPosTrackRequest implements RequestInterface
{

    public function apiParams()
    {
        return [];
    }

    public function apiPath()
    {
        return '/deliver/pos_track';
    }
}
