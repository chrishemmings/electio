# .
A minimal Electio client

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.12
- Package version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/chrishemmings/electio.git"
    }
  ],
  "require": {
    "chrishemmings/electio": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/./vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.electioapp.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AllocationApi* | [**allocateWithCarrierService**](docs/Api/AllocationApi.md#allocatewithcarrierservice) | **PUT** /allocation/allocateWithCarrierService | Allocate a consignment to a specified delivery service
*AllocationApi* | [**allocateWithQuote**](docs/Api/AllocationApi.md#allocatewithquote) | **PUT** /allocation/{consignmentReference}/allocatewithquote/{quoteReference} | Allocate consignment using quote reference
*CarriersApi* | [**carriers**](docs/Api/CarriersApi.md#carriers) | **GET** /carriers/getcarriers | Get carriers
*ConsignmentApi* | [**createConsignment**](docs/Api/ConsignmentApi.md#createconsignment) | **POST** /consignments | Create a consignment
*ConsignmentApi* | [**getConsignment**](docs/Api/ConsignmentApi.md#getconsignment) | **GET** /consignments/{consignmentReference} | Fetch a consignment by reference
*ConsignmentApi* | [**getConsignmentSummary**](docs/Api/ConsignmentApi.md#getconsignmentsummary) | **GET** /consignments/summary | Fetch a summary of consignment statuses
*ConsignmentApi* | [**getConsignmentWithMetadata**](docs/Api/ConsignmentApi.md#getconsignmentwithmetadata) | **GET** /consignments/getconsignmentwithmetadata/{consignmentReference} | Fetch a consignment by reference with metadata
*ConsignmentApi* | [**searchConsignments**](docs/Api/ConsignmentApi.md#searchconsignments) | **GET** /consignments/{take}/{skip} | Search for consignments
*DeliveryOptionsApi* | [**getConsignmentDeliveryOptions**](docs/Api/DeliveryOptionsApi.md#getconsignmentdeliveryoptions) | **GET** /deliveryoptions/consignment/{consignmentReference} | Fetch delivery options for a consignment
*DeliveryOptionsApi* | [**getDeliveryOptions**](docs/Api/DeliveryOptionsApi.md#getdeliveryoptions) | **POST** /deliveryoptions | Get delivery options for passed consignment details
*DeliveryOptionsApi* | [**getDeliveryOptionsHeartbeat**](docs/Api/DeliveryOptionsApi.md#getdeliveryoptionsheartbeat) | **POST** /deliveryoptions/heartbeat | Get delivery options for passed consignment details
*DeliveryOptionsApi* | [**selectDeliveryOption**](docs/Api/DeliveryOptionsApi.md#selectdeliveryoption) | **POST** /deliveryoptions/select/{deliveryOptionReference} | Use a delivery option that was generated from a previous call to /deliveryoptions
*DocumentsApi* | [**getConsignmentDocuments**](docs/Api/DocumentsApi.md#getconsignmentdocuments) | **GET** /consignments/docs/{consignmentReference} | Fetch customs documents
*DocumentsApi* | [**getConsignmentLabels**](docs/Api/DocumentsApi.md#getconsignmentlabels) | **GET** /documents/labels/{consignmentReference} | Fetch labels for a specified consignment
*DocumentsApi* | [**getPackageDocument**](docs/Api/DocumentsApi.md#getpackagedocument) | **GET** /consignments/docs/{customsDocumentType}/{consignmentReference}/{packageReference} | Fetch specific document type for given Parcel and Package
*ManifestingApi* | [**manifest**](docs/Api/ManifestingApi.md#manifest) | **PUT** /consignments/manifest | Manifest the passed consignment numbers
*QuotesApi* | [**getQuotes**](docs/Api/QuotesApi.md#getquotes) | **POST** /quotes | Get delivery option quotes
*TrackingApi* | [**getConsignmentTracking**](docs/Api/TrackingApi.md#getconsignmenttracking) | **GET** /tracking/{consignmentReference} | Fetch tracking information for given reference


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [AddressType](docs/Model/AddressType.md)
 - [AllocateWithCarrierResponse](docs/Model/AllocateWithCarrierResponse.md)
 - [AllocateWithCarrierService](docs/Model/AllocateWithCarrierService.md)
 - [AllocateWithQuoteResponse](docs/Model/AllocateWithQuoteResponse.md)
 - [Allocation](docs/Model/Allocation.md)
 - [ApiLink](docs/Model/ApiLink.md)
 - [Barcode](docs/Model/Barcode.md)
 - [Carrier](docs/Model/Carrier.md)
 - [CategoryType](docs/Model/CategoryType.md)
 - [Consignment](docs/Model/Consignment.md)
 - [ConsignmentDocumentsResponse](docs/Model/ConsignmentDocumentsResponse.md)
 - [ConsignmentLeg](docs/Model/ConsignmentLeg.md)
 - [ConsignmentSearchResponse](docs/Model/ConsignmentSearchResponse.md)
 - [ConsignmentState](docs/Model/ConsignmentState.md)
 - [ConsignmentSummary](docs/Model/ConsignmentSummary.md)
 - [Contact](docs/Model/Contact.md)
 - [Country](docs/Model/Country.md)
 - [CreateConsignment](docs/Model/CreateConsignment.md)
 - [CreateConsignmentResponse](docs/Model/CreateConsignmentResponse.md)
 - [Currency](docs/Model/Currency.md)
 - [CustomsDocumentation](docs/Model/CustomsDocumentation.md)
 - [DeliveryOption](docs/Model/DeliveryOption.md)
 - [DeliveryOptionsRequest](docs/Model/DeliveryOptionsRequest.md)
 - [DeliveryOptionsResponse](docs/Model/DeliveryOptionsResponse.md)
 - [DeliveryWindow](docs/Model/DeliveryWindow.md)
 - [Dimensions](docs/Model/Dimensions.md)
 - [Document](docs/Model/Document.md)
 - [EstimatedDeliveryDate](docs/Model/EstimatedDeliveryDate.md)
 - [EventViewModel](docs/Model/EventViewModel.md)
 - [FailedAllocation](docs/Model/FailedAllocation.md)
 - [IsoCode](docs/Model/IsoCode.md)
 - [Item](docs/Model/Item.md)
 - [LabelResponse](docs/Model/LabelResponse.md)
 - [LatitudeLongitude](docs/Model/LatitudeLongitude.md)
 - [LocationInformation](docs/Model/LocationInformation.md)
 - [ManifestConsignmentsRequest](docs/Model/ManifestConsignmentsRequest.md)
 - [MetaData](docs/Model/MetaData.md)
 - [Money](docs/Model/Money.md)
 - [Package](docs/Model/Package.md)
 - [PackageViewModel](docs/Model/PackageViewModel.md)
 - [Quote](docs/Model/Quote.md)
 - [QuotesResponse](docs/Model/QuotesResponse.md)
 - [Rate](docs/Model/Rate.md)
 - [RequestedDeliveryDate](docs/Model/RequestedDeliveryDate.md)
 - [RequiredDeliveryDate](docs/Model/RequiredDeliveryDate.md)
 - [ResponseError](docs/Model/ResponseError.md)
 - [ResponseErrorDetail](docs/Model/ResponseErrorDetail.md)
 - [SelectDeliveryOptionResponse](docs/Model/SelectDeliveryOptionResponse.md)
 - [ShippingTerms](docs/Model/ShippingTerms.md)
 - [SummaryItem](docs/Model/SummaryItem.md)
 - [SummaryResponse](docs/Model/SummaryResponse.md)
 - [TrackingResponse](docs/Model/TrackingResponse.md)
 - [UnqualifiedService](docs/Model/UnqualifiedService.md)
 - [VatRate](docs/Model/VatRate.md)
 - [VatRateType](docs/Model/VatRateType.md)
 - [Weight](docs/Model/Weight.md)


## Documentation For Authorization


## Ocp-Apim-Subscription-Key

- **Type**: API key
- **API key parameter name**: Ocp-Apim-Subscription-Key
- **Location**: HTTP header


## Author

chris@hemmin.gs


