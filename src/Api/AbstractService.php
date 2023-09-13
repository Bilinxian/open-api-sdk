<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:37
 */

namespace Wsb\OpenApi\Api;

use Wsb\OpenApi\Config\Config;
use Wsb\OpenApi\Utils\HttpClient;

abstract class AbstractService
{
    private $config;

    protected $client;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->client = new HttpClient($config);

    }
}
