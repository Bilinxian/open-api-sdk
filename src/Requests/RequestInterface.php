<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:55
 */

namespace Wsb\OpenApi\Requests;

interface RequestInterface
{
    public function apiParams();

    public function apiPath();

}
