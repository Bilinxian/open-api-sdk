## 外送帮开放平台PHP-SDK

接口文档地址：

[https://www.waisongbang.com/apiDoc/#/](https://www.waisongbang.com/apiDoc/#/)

问题反馈：

[https://github.com/Bilinxian/open-api-sdk/issues](https://github.com/Bilinxian/open-api-sdk/issues)

使用说明：

```
安装扩展
composer require wsb/open-api
```

门店示例：

```
use Wsb\OpenApi\Config\Config;
use Wsb\OpenApi\WsbApiClient;
use Wsb\OpenApi\Requests\Store\StoreCreateRequest;
use Wsb\OpenApi\Requests\Store\StoreDetailRequest;
use Wsb\OpenApi\Requests\Store\StoreUpdateRequest;
use Wsb\OpenApi\Requests\Store\StoreServiceRequest;


$config = new Config('2ewz3nvl4jxshbk6', '883a5a02-a4fb-494d-986f-4d89f2cdb1f3', 0, true);
$apiClient = new WsbApiClient($config);

$storeRequest = new StoreCreateRequest();
$storeRequest->name = '测试门店kify123';
$storeRequest->owner_name = 'Kify';
$storeRequest->tel = '15050505050';
$storeRequest->city = '长沙';
$storeRequest->area = '天心区';
$storeRequest->address = '长沙市湘江东岸天心区古城区';
$storeRequest->lng = '112.23';
$storeRequest->lat = '23.22';
$storeRequest->open_start = '09:00:00';
$storeRequest->open_end = '18:00:00';
$storeRequest->sale_category = 3;

$storeId = 1000245;

$createResponse = $apiClient->getStoreService()->storeCreate($storeRequest);
var_dump($createResponse);

$detailResponse = $apiClient->getStoreService()->storeDetail($storeId, new StoreDetailRequest());
var_dump($detailResponse);

$storeUpdateRequest = new StoreUpdateRequest();
$storeUpdateRequest->lat = '23.33';
$storeUpdateRequest->lng = '112.25';

$updateResponse = $apiClient->getStoreService()->storeUpdate($storeId, $storeUpdateRequest);
var_dump($updateResponse);

$serviceResponse = $apiClient->getStoreService()->serviceLink($storeId, new StoreServiceRequest());
var_dump($serviceResponse);
```
