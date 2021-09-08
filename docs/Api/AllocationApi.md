# ChrisHemmings\Electio\AllocationApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allocateWithCarrierService**](AllocationApi.md#allocateWithCarrierService) | **PUT** /allocation/allocateWithCarrierService | Allocate a consignment to a specified delivery service
[**allocateWithQuote**](AllocationApi.md#allocateWithQuote) | **PUT** /allocation/{consignmentReference}/allocatewithquote/{quoteReference} | Allocate consignment using quote reference


# **allocateWithCarrierService**
> \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierResponseArray allocateWithCarrierService($electio_api_version, $allocation)

Allocate a consignment to a specified delivery service

Allocate a consignment to a specified delivery service which  can be retreived from the delivery options endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\AllocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electio_api_version = "1.1"; // string | Electio API Version
$allocation = new \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService(); // \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService | Consignment to create

try {
    $result = $apiInstance->allocateWithCarrierService($electio_api_version, $allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateWithCarrierService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]
 **allocation** | [**\ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService**](../Model/AllocateWithCarrierService.md)| Consignment to create | [optional]

### Return type

[**\ChrisHemmings\Electio\Client\Model\AllocateWithCarrierResponseArray**](../Model/AllocateWithCarrierResponseArray.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allocateWithQuote**
> \ChrisHemmings\Electio\Client\Model\AllocateWithQuoteResponse allocateWithQuote($consignment_reference, $quote_reference, $electio_api_version)

Allocate consignment using quote reference

Allocate consignment using quote reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\AllocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consignment_reference = "consignment_reference_example"; // string | Consignment Reference
$quote_reference = "quote_reference_example"; // string | Quote Reference
$electio_api_version = "1.1"; // string | Electio API Version

try {
    $result = $apiInstance->allocateWithQuote($consignment_reference, $quote_reference, $electio_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateWithQuote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment_reference** | **string**| Consignment Reference |
 **quote_reference** | **string**| Quote Reference |
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]

### Return type

[**\ChrisHemmings\Electio\Client\Model\AllocateWithQuoteResponse**](../Model/AllocateWithQuoteResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

