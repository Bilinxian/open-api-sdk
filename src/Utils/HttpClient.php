<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:29
 */

namespace Wsb\OpenApi\Utils;

use Wsb\OpenApi\Config\Config;
use Wsb\OpenApi\Constants;
use Wsb\OpenApi\Exception\WsbException;
use Wsb\OpenApi\Requests\RequestInterface;

class HttpClient
{
    /**
     * @var Config $config
     */
    private $config;

    private $baseUrl;

    private $readTimeout = 10;

    private $connectTimeout = 10;

    public function __construct(Config $config)
    {
        $this->config = $config;

        $this->baseUrl = $config->getSandBox() ? Constants::SAND_BOX_REQUEST_URL : Constants::REQUEST_URL;
    }


    private function commonParams()
    {
        $commonParams = [
            'app_key'   =>  $this->config->getAppKey(),
            'timestamp' =>  time(),
            'version'   =>  Constants::VERSION,
        ];

        if ($thirdPartnerId = $this->config->getThirdPartnerId()) {
            $commonParams['third_partner_id'] = $thirdPartnerId;
        }

        return $commonParams;
    }

    public function request(RequestInterface $request, $pathParams = [])
    {
        $apiParams = $request->apiParams();
        $params = array_merge($this->commonParams(), $apiParams);
        $params['sign'] = Common::makeSign($this->config, $params);

        $url = sprintf("%s%s", $this->baseUrl, $request->apiPath());

        if (!empty($pathParams)) {
            $url = sprintf("%s/%s", $url, implode('/', $pathParams));
        }

        try {
            $response = $this->curl($url, $params);
            return json_decode($response, true);
        } catch (WsbException $e) {
            return [
                'code'  =>  -1,
                'msg'   =>  sprintf("%s-%s", 'Request Exception', $e->getMessage()),
                'data'  =>  []
            ];
        }
    }

    private function curl($url, $postFields)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        curl_setopt ( $ch, CURLOPT_USERAGENT, "wsb-sdk-php" );

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields));
        curl_setopt($ch,CURLOPT_HTTPHEADER, [
            "Content-Type:application/json;charset=UTF-8"
        ]);

        $reponse = curl_exec($ch);

        if (curl_errno($ch))
        {
            throw new WsbException(curl_error($ch),0);
        }
        else
        {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
            {
                throw new WsbException($reponse,$httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;

    }
}
