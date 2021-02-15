# ChrisHemmings\Electio\CarriersApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**carriers**](CarriersApi.md#carriers) | **GET** /carriers/getcarriers | Get carriers


# **carriers**
> \ChrisHemmings\Electio\Client\Model\Carrier[] carriers($electio_api_version)

Get carriers

Get carriers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\CarriersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electio_api_version = "1.1"; // string | Electio API Version

try {
    $result = $apiInstance->carriers($electio_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carriers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]

### Return type

[**\ChrisHemmings\Electio\Client\Model\Carrier[]**](../Model/Carrier.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

