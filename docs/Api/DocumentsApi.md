# ChrisHemmings\Electio\DocumentsApi

All URIs are relative to *https://api.electioapp.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConsignmentDocuments**](DocumentsApi.md#getConsignmentDocuments) | **GET** /consignments/docs/{consignmentReference} | Fetch customs documents
[**getConsignmentLabels**](DocumentsApi.md#getConsignmentLabels) | **GET** /documents/labels/{consignmentReference} | Fetch labels for a specified consignment
[**getPackageDocument**](DocumentsApi.md#getPackageDocument) | **GET** /consignments/docs/{customsDocumentType}/{consignmentReference}/{packageReference} | Fetch specific document type for given Parcel and Package


# **getConsignmentDocuments**
> \ChrisHemmings\Electio\Client\Model\ConsignmentDocumentsResponse getConsignmentDocuments($consignment_reference)

Fetch customs documents

Fetch customs documents for a given consignment reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\DocumentsApi();
$consignment_reference = "consignment_reference_example"; // string | Consignment to create

try {
    $result = $api_instance->getConsignmentDocuments($consignment_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getConsignmentDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment_reference** | **string**| Consignment to create |

### Return type

[**\ChrisHemmings\Electio\Client\Model\ConsignmentDocumentsResponse**](../Model/ConsignmentDocumentsResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsignmentLabels**
> \ChrisHemmings\Electio\Client\Model\LabelResponse getConsignmentLabels($consignment_reference)

Fetch labels for a specified consignment

Fetch PDF label goodness for a given consignment number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\DocumentsApi();
$consignment_reference = "consignment_reference_example"; // string | Consignment Reference

try {
    $result = $api_instance->getConsignmentLabels($consignment_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getConsignmentLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consignment_reference** | **string**| Consignment Reference |

### Return type

[**\ChrisHemmings\Electio\Client\Model\LabelResponse**](../Model/LabelResponse.md)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackageDocument**
> getPackageDocument($customs_document_type, $consignment_reference, $package_reference)

Fetch specific document type for given Parcel and Package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Ocp-Apim-Subscription-Key
ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ChrisHemmings\Electio\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

$api_instance = new ChrisHemmings\Electio\Api\DocumentsApi();
$customs_document_type = "customs_document_type_example"; // string | Type of document required
$consignment_reference = "consignment_reference_example"; // string | Consignment reference
$package_reference = "package_reference_example"; // string | Package reference

try {
    $api_instance->getPackageDocument($customs_document_type, $consignment_reference, $package_reference);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getPackageDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customs_document_type** | **string**| Type of document required |
 **consignment_reference** | **string**| Consignment reference |
 **package_reference** | **string**| Package reference |

### Return type

void (empty response body)

### Authorization

[Ocp-Apim-Subscription-Key](../../README.md#Ocp-Apim-Subscription-Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

