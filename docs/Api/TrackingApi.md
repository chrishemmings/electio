# ChrisHemmings\Electio\TrackingApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConsignmentTracking**](TrackingApi.md#getConsignmentTracking) | **GET** /tracking/{consignmentReference} | Fetch tracking information for given reference


# **getConsignmentTracking**
> \ChrisHemmings\Electio\Client\Model\TrackingResponse getConsignmentTracking($consignment_reference)

Fetch tracking information for given reference

Fetch tracking information for given consignment reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\TrackingApi();
$consignment_reference = "consignment_reference_example"; // string | Consignment Reference

try {
    $result = $api_instance->getConsignmentTracking($consignment_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->getConsignmentTracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment_reference** | **string**| Consignment Reference |

### Return type

[**\ChrisHemmings\Electio\Client\Model\TrackingResponse**](../Model/TrackingResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

