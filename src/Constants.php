<?php

/**
 * User: Kify
 * Time: 2023/9/13-16:33
 */

namespace Wsb\OpenApi;

class Constants
{
    const VERSION = '1.0';

    const REQUEST_URL = 'https://api.waisongbang.com/OpenApi';

    const SAND_BOX_REQUEST_URL = 'https://beta7.waisongbang.com/OpenApi';

    /** 建单支付状态：未支付（字符串，避免 array_filter 丢掉 0） */
    const PAY_STATUS_UNPAID = 'unpaid';

    /** 建单支付状态：已支付 */
    const PAY_STATUS_PAID = 'paid';

}
