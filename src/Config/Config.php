<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:06
 */

namespace Wsb\OpenApi\Config;

class Config
{
    private $appKey;

    private $appSecret;

    private $sandBox;

    private $thirdPartnerId;

    public function __construct($appKey, $appSecret, $thirdPartnerId = 0, $sandBox = false)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->thirdPartnerId = $thirdPartnerId;
        $this->sandBox = $sandBox;
    }

    /**
     * @return mixed
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @return mixed
     */
    public function getAppSecret()
    {
        return $this->appSecret;
    }

    /**
     * @return false|mixed
     */
    public function getSandBox()
    {
        return $this->sandBox;
    }

    /**
     * @return int|mixed
     */
    public function getThirdPartnerId()
    {
        return $this->thirdPartnerId;
    }

}
