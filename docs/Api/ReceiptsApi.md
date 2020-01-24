# EzzeSiftuz\ReceiptsV1\ReceiptsApi

All URIs are relative to *https://live.api.otto.market/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReceiptPdfUsingGET**](ReceiptsApi.md#getreceiptpdfusingget) | **GET** /v1/receipts/{receiptNumber}/pdf | Get the PDF document of a specific receipt by receipt number. It&#x27;s valid only for purchase receipts for now.
[**getReceiptUsingGET**](ReceiptsApi.md#getreceiptusingget) | **GET** /v1/receipts/{receiptNumber} | Get a specific receipt for the given receipt number as JSON object
[**getReceiptsUsingGET**](ReceiptsApi.md#getreceiptsusingget) | **GET** /v1/receipts | Get all receipts as list of JSON objects

# **getReceiptPdfUsingGET**
> getReceiptPdfUsingGET($receipt_number)

Get the PDF document of a specific receipt by receipt number. It's valid only for purchase receipts for now.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: JWT
$config = EzzeSiftuz\ReceiptsV1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EzzeSiftuz\ReceiptsV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EzzeSiftuz\ReceiptsV1\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | ReceiptNumber

try {
    $apiInstance->getReceiptPdfUsingGET($receipt_number);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptPdfUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| ReceiptNumber |

### Return type

void (empty response body)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptUsingGET**
> \EzzeSiftuz\ReceiptsV1\Model\Receipt getReceiptUsingGET($receipt_number)

Get a specific receipt for the given receipt number as JSON object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: JWT
$config = EzzeSiftuz\ReceiptsV1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EzzeSiftuz\ReceiptsV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EzzeSiftuz\ReceiptsV1\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receipt_number = "receipt_number_example"; // string | ReceiptNumber

try {
    $result = $apiInstance->getReceiptUsingGET($receipt_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receipt_number** | **string**| ReceiptNumber |

### Return type

[**\EzzeSiftuz\ReceiptsV1\Model\Receipt**](../Model/Receipt.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReceiptsUsingGET**
> \EzzeSiftuz\ReceiptsV1\Model\ReceiptsList getReceiptsUsingGET($customer_id, $limit, $page, $sales_order_id, $type)

Get all receipts as list of JSON objects

The receipts will be sorted on receiptId in chronological order. Additionally we provide cursor based pagination via next link. This endpoint is limited to at max 128 results per page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: JWT
$config = EzzeSiftuz\ReceiptsV1\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = EzzeSiftuz\ReceiptsV1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new EzzeSiftuz\ReceiptsV1\Api\ReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | Search for receipts filtered by customer Id
$limit = 56; // int | Page size to limit the number of receipts returned in the response
$page = 56; // int | Page number to fetch. This parameter is required to fetch data for specific page number
$sales_order_id = "sales_order_id_example"; // string | Search for receipts filtered by sales order Id
$type = "type_example"; // string | Search for receipts filtered by receipt type

try {
    $result = $apiInstance->getReceiptsUsingGET($customer_id, $limit, $page, $sales_order_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceiptsApi->getReceiptsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Search for receipts filtered by customer Id | [optional]
 **limit** | **int**| Page size to limit the number of receipts returned in the response | [optional]
 **page** | **int**| Page number to fetch. This parameter is required to fetch data for specific page number | [optional]
 **sales_order_id** | **string**| Search for receipts filtered by sales order Id | [optional]
 **type** | **string**| Search for receipts filtered by receipt type | [optional]

### Return type

[**\EzzeSiftuz\ReceiptsV1\Model\ReceiptsList**](../Model/ReceiptsList.md)

### Authorization

[JWT](../../README.md#JWT)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

