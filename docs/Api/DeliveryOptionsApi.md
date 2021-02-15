# ChrisHemmings\Electio\DeliveryOptionsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConsignmentDeliveryOptions**](DeliveryOptionsApi.md#getConsignmentDeliveryOptions) | **GET** /deliveryoptions/consignment/{consignmentReference} | Fetch delivery options for a consignment
[**getDeliveryOptions**](DeliveryOptionsApi.md#getDeliveryOptions) | **POST** /deliveryoptions | Get delivery options for passed consignment details
[**getDeliveryOptionsHeartbeat**](DeliveryOptionsApi.md#getDeliveryOptionsHeartbeat) | **POST** /deliveryoptions/heartbeat | Get delivery options for passed consignment details
[**selectDeliveryOption**](DeliveryOptionsApi.md#selectDeliveryOption) | **POST** /deliveryoptions/select/{deliveryOptionReference} | Use a delivery option that was generated from a previous call to /deliveryoptions


# **getConsignmentDeliveryOptions**
> \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse getConsignmentDeliveryOptions($consignment_reference, $electio_api_version)

Fetch delivery options for a consignment

By passing in the appropriate options, you can search for available inventory in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\DeliveryOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consignment_reference = "consignment_reference_example"; // string | Consignment to create
$electio_api_version = "1.1"; // string | Electio API Version

try {
    $result = $apiInstance->getConsignmentDeliveryOptions($consignment_reference, $electio_api_version);
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
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]

### Return type

[**\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse**](../Model/DeliveryOptionsResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryOptions**
> \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse getDeliveryOptions($electio_api_version, $allocation)

Get delivery options for passed consignment details

Get delivery options available for the passed details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\DeliveryOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electio_api_version = "1.1"; // string | Electio API Version
$allocation = new \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest(); // \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest | Consignment to create

try {
    $result = $apiInstance->getDeliveryOptions($electio_api_version, $allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getDeliveryOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]
 **allocation** | [**\ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest**](../Model/DeliveryOptionsRequest.md)| Consignment to create | [optional]

### Return type

[**\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse**](../Model/DeliveryOptionsResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeliveryOptionsHeartbeat**
> \ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse getDeliveryOptionsHeartbeat($electio_api_version, $allocation)

Get delivery options for passed consignment details

Get delivery options available for the passed details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\DeliveryOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electio_api_version = "1.1"; // string | Electio API Version
$allocation = new \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest(); // \ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest | Consignment to create

try {
    $result = $apiInstance->getDeliveryOptionsHeartbeat($electio_api_version, $allocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->getDeliveryOptionsHeartbeat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]
 **allocation** | [**\ChrisHemmings\Electio\Client\Model\DeliveryOptionsRequest**](../Model/DeliveryOptionsRequest.md)| Consignment to create | [optional]

### Return type

[**\ChrisHemmings\Electio\Client\Model\DeliveryOptionsResponse**](../Model/DeliveryOptionsResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **selectDeliveryOption**
> \ChrisHemmings\Electio\Client\Model\SelectDeliveryOptionResponse selectDeliveryOption($delivery_option_reference, $electio_api_version)

Use a delivery option that was generated from a previous call to /deliveryoptions

Use a delivery option that was generated from a previous call to /deliveryoptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\DeliveryOptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_option_reference = "delivery_option_reference_example"; // string | Delivery Option Reference
$electio_api_version = "1.1"; // string | Electio API Version

try {
    $result = $apiInstance->selectDeliveryOption($delivery_option_reference, $electio_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryOptionsApi->selectDeliveryOption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_option_reference** | **string**| Delivery Option Reference |
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]

### Return type

[**\ChrisHemmings\Electio\Client\Model\SelectDeliveryOptionResponse**](../Model/SelectDeliveryOptionResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

