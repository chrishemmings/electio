# Consignment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date_created** | [**\DateTime**](\DateTime.md) |  | [optional] 
**customer_reference** | **string** |  | [optional] 
**consignment_reference_provided_by_customer** | **string** |  | [optional] 
**reference** | **string** |  | [optional] 
**requested_collection_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**collection_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expected_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**scheduled_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**earliest_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**latest_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**requested_delivery_date** | [**\ChrisHemmings\Electio\Client\Model\RequestedDeliveryDate**](RequestedDeliveryDate.md) |  | [optional] 
**collected_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**attempted_delivery_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**addresses** | [**\ChrisHemmings\Electio\Client\Model\Address[]**](Address.md) |  | [optional] 
**packages** | [**\ChrisHemmings\Electio\Client\Model\Package[]**](Package.md) |  | [optional] 
**weight** | [**\ChrisHemmings\Electio\Client\Model\Weight**](Weight.md) |  | [optional] 
**value** | [**\ChrisHemmings\Electio\Client\Model\Money**](Money.md) |  | [optional] 
**allocation** | [**\ChrisHemmings\Electio\Client\Model\Allocation**](Allocation.md) |  | [optional] 
**failed_allocation** | [**\ChrisHemmings\Electio\Client\Model\FailedAllocation**](FailedAllocation.md) |  | [optional] 
**customs_documentation** | [**\ChrisHemmings\Electio\Client\Model\CustomsDocumentation**](CustomsDocumentation.md) |  | [optional] 
**consignment_state** | **string** |  | [optional] 
**source** | **string** |  | [optional] 
**have_labels_ever_been_printed** | **bool** |  | [optional] 
**date_labels_were_first_printed** | [**\DateTime**](\DateTime.md) |  | [optional] 
**is_late** | **bool** |  | [optional] 
**late_for_customer** | **bool** |  | [optional] 
**meta_data** | [**\ChrisHemmings\Electio\Client\Model\MetaData[]**](MetaData.md) |  | [optional] 
**location_information** | [**\ChrisHemmings\Electio\Client\Model\LocationInformation**](LocationInformation.md) |  | [optional] 
**consignment_legs** | [**\ChrisHemmings\Electio\Client\Model\ConsignmentLeg[]**](ConsignmentLeg.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


