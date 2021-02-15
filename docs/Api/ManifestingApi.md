# ChrisHemmings\Electio\ManifestingApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**manifest**](ManifestingApi.md#manifest) | **PUT** /consignments/manifest | Manifest the passed consignment numbers


# **manifest**
> manifest($electio_api_version, $consignment_references)

Manifest the passed consignment numbers

Manifest the passed consignment numbers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
$config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$apiInstance = new ChrisHemmings\Electio\Api\ManifestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electio_api_version = "1.1"; // string | Electio API Version
$consignment_references = new \ChrisHemmings\Electio\Client\Model\ManifestConsignmentsRequest(); // \ChrisHemmings\Electio\Client\Model\ManifestConsignmentsRequest | Consignment to create

try {
    $apiInstance->manifest($electio_api_version, $consignment_references);
} catch (Exception $e) {
    echo 'Exception when calling ManifestingApi->manifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electio_api_version** | **string**| Electio API Version | [default to 1.1]
 **consignment_references** | [**\ChrisHemmings\Electio\Client\Model\ManifestConsignmentsRequest**](../Model/ManifestConsignmentsRequest.md)| Consignment to create | [optional]

### Return type

void (empty response body)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

