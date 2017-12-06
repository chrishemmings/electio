# ChrisHemmings\Electio\AllocationApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**allocateWithCarrierService**](AllocationApi.md#allocateWithCarrierService) | **PUT** /allocation/allocateWithCarrierService | Allocate a consignment to a specified delivery service


# **allocateWithCarrierService**
> allocateWithCarrierService($allocation)

Allocate a consignment to a specified delivery service

Allocate a consignment to a specified delivery service which  can be retreived from the delivery options endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\AllocationApi();
$allocation = new \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService(); // \ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService | Consignment to create

try {
    $api_instance->allocateWithCarrierService($allocation);
} catch (Exception $e) {
    echo 'Exception when calling AllocationApi->allocateWithCarrierService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allocation** | [**\ChrisHemmings\Electio\Client\Model\AllocateWithCarrierService**](../Model/AllocateWithCarrierService.md)| Consignment to create | [optional]

### Return type

void (empty response body)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

