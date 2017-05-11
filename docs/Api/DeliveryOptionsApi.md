# ChrisHemmings\Electio\DeliveryOptionsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConsignmentDeliveryOptions**](DeliveryOptionsApi.md#getConsignmentDeliveryOptions) | **GET** /deliveryoptions/consignment/{consignmentReference} | Fetch delivery options for a consignment
[**getDeliveryOptions**](DeliveryOptionsApi.md#getDeliveryOptions) | **POST** /deliveryoptions | Get delivery options for passed consignment details


# **getConsignmentDeliveryOptions**
> \ChrisHemmings\Electio\Client\Model\InlineResponse200 getConsignmentDeliveryOptions($consignment_reference)

Fetch delivery options for a consignment

By passing in the appropriate options, you can search for available inventory in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\DeliveryOptionsApi();
$consignment_reference = "consignment_reference_example"; // string | Consignment to create

try {
    $result = $api_instance->getConsignmentDeliveryOptions($consignment_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getConsignmentDeliveryOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment_reference** | **string**| Consignment to create |

### Return type

[**\ChrisHemmings\Electio\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryOptions**
> \ChrisHemmings\Electio\Client\Model\InlineResponse200 getDeliveryOptions($allocation)

Get delivery options for passed consignment details

Get delivery options available for the passed details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\DeliveryOptionsApi();
$allocation = new \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest(); // \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest | Consignment to create

try {
    $result = $api_instance->getDeliveryOptions($allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getDeliveryOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allocation** | [**\ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest**](../Model/\ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest.md)| Consignment to create | [optional]

### Return type

[**\ChrisHemmings\Electio\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

