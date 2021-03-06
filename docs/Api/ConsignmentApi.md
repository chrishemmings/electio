# ChrisHemmings\Electio\ConsignmentApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createConsignment**](ConsignmentApi.md#createConsignment) | **POST** /consignments | Create a consignment
[**getConsignment**](ConsignmentApi.md#getConsignment) | **GET** /consignments/{consignmentReference} | Fetch a consignment by reference
[**getConsignmentSummary**](ConsignmentApi.md#getConsignmentSummary) | **GET** /consignments/summary | Fetch a summary of consignment statuses
[**getConsignmentWithMetadata**](ConsignmentApi.md#getConsignmentWithMetadata) | **GET** /consignments/getconsignmentwithmetadata/{consignmentReference} | Fetch a consignment by reference with metadata
[**searchConsignments**](ConsignmentApi.md#searchConsignments) | **GET** /consignments/{take}/{skip} | Search for consignments


# **createConsignment**
> \ChrisHemmings\Electio\Client\Model\CreateConsignmentResponse[] createConsignment($electio_api_version, $consignment)

Create a consignment

By passing in the appropriate options, you can search for available inventory in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\ConsignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electio_api_version = "1.1"; // string | Electio API Version
$consignment = new \ChrisHemmings\Electio\Client\Model\CreateConsignment(); // \ChrisHemmings\Electio\Client\Model\CreateConsignment | Consignment to create

try {
    $result = $apiInstance->createConsignment($electio_api_version, $consignment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentApi->createConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]
 **consignment** | [**\ChrisHemmings\Electio\Client\Model\CreateConsignment**](../Model/CreateConsignment.md)| Consignment to create | [optional]

### Return type

[**\ChrisHemmings\Electio\Client\Model\CreateConsignmentResponse[]**](../Model/CreateConsignmentResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsignment**
> \ChrisHemmings\Electio\Client\Model\Consignment getConsignment($consignment_reference, $electio_api_version)

Fetch a consignment by reference

Fetch a consignment by passing the Electio consignment reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\ConsignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consignment_reference = "consignment_reference_example"; // string | Consignment to create
$electio_api_version = "1.1"; // string | Electio API Version

try {
    $result = $apiInstance->getConsignment($consignment_reference, $electio_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentApi->getConsignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment_reference** | **string**| Consignment to create |
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]

### Return type

[**\ChrisHemmings\Electio\Client\Model\Consignment**](../Model/Consignment.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsignmentSummary**
> \ChrisHemmings\Electio\Client\Model\SummaryResponse getConsignmentSummary($electio_api_version, $start_from, $end_at)

Fetch a summary of consignment statuses

Fetch a summary of consignment statuses within optional date range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\ConsignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electio_api_version = "1.1"; // string | Electio API Version
$start_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date range
$end_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date range

try {
    $result = $apiInstance->getConsignmentSummary($electio_api_version, $start_from, $end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentApi->getConsignmentSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]
 **start_from** | **\DateTime**| Start date range | [optional]
 **end_at** | **\DateTime**| End date range | [optional]

### Return type

[**\ChrisHemmings\Electio\Client\Model\SummaryResponse**](../Model/SummaryResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsignmentWithMetadata**
> \ChrisHemmings\Electio\Client\Model\Consignment getConsignmentWithMetadata($consignment_reference, $electio_api_version)

Fetch a consignment by reference with metadata

Fetch a consignment with metadata by passing the Electio consignment reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\ConsignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$consignment_reference = "consignment_reference_example"; // string | Consignment to create
$electio_api_version = "1.1"; // string | Electio API Version

try {
    $result = $apiInstance->getConsignmentWithMetadata($consignment_reference, $electio_api_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentApi->getConsignmentWithMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment_reference** | **string**| Consignment to create |
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]

### Return type

[**\ChrisHemmings\Electio\Client\Model\Consignment**](../Model/Consignment.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchConsignments**
> \ChrisHemmings\Electio\Client\Model\ConsignmentSearchResponse[] searchConsignments($take, $skip, $electio_api_version, $creference, $state)

Search for consignments

Search for consignments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\ConsignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 56; // int | Number of records to get?
$skip = 56; // int | Number of records to skip
$electio_api_version = "1.1"; // string | Electio API Version
$creference = "creference_example"; // string | Carrier reference
$state = "state_example"; // string | Consignment state

try {
    $result = $apiInstance->searchConsignments($take, $skip, $electio_api_version, $creference, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsignmentApi->searchConsignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **take** | **int**| Number of records to get? |
 **skip** | **int**| Number of records to skip |
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]
 **creference** | **string**| Carrier reference | [optional]
 **state** | **string**| Consignment state | [optional]

### Return type

[**\ChrisHemmings\Electio\Client\Model\ConsignmentSearchResponse[]**](../Model/ConsignmentSearchResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

