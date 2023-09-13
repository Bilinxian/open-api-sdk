<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:30
 */

namespace Wsb\OpenApi\Utils;

use Wsb\OpenApi\Config\Config;

class Common
{
    public static function makeSign(Config $config, array $params)
    {
        unset($params['sign']);

        ksort($params);

        $signStr = '';

        foreach ($params as $key => $param) {
            // Due to historical reasons
            if (is_array($param)) {
                $param = 'Array';
            }

            if (!empty($param)) {
                $signStr .= sprintf("%s%s", $key, $param);
            }
        }

        $signStr .= $config->getAppSecret();

        return md5($signStr);
    }
}
