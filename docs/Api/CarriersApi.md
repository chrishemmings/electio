# ChrisHemmings\Electio\CarriersApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**carriers**](CarriersApi.md#carriers) | **GET** /carriers/getcarriers | Get carriers


# **carriers**
> \ChrisHemmings\Electio\Client\Model\Carrier[] carriers()

Get carriers

Get carriers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\CarriersApi();

try {
    $result = $api_instance->carriers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CarriersApi->carriers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ChrisHemmings\Electio\Client\Model\Carrier[]**](../Model/Carrier.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

