<?php
/**
 * Consignment
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Electio API
 *
 * A minimal Electio client
 *
 * OpenAPI spec version: 1.0.8
 * Contact: chris@hemmin.gs
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\Electio\Client\Model;

use \ArrayAccess;
use \ChrisHemmings\Electio\ObjectSerializer;

/**
 * Consignment Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Consignment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Consignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_created' => '\DateTime',
        'customer_reference' => 'string',
        'consignment_reference_provided_by_customer' => 'string',
        'reference' => 'string',
        'requested_collection_date' => '\DateTime',
        'collection_date' => '\DateTime',
        'expected_delivery_date' => '\DateTime',
        'scheduled_delivery_date' => '\DateTime',
        'earliest_delivery_date' => '\DateTime',
        'latest_delivery_date' => '\DateTime',
        'requested_delivery_date' => '\ChrisHemmings\Electio\Client\Model\RequestedDeliveryDate',
        'collected_date' => '\DateTime',
        'delivery_date' => '\DateTime',
        'attempted_delivery_date' => '\DateTime',
        'addresses' => '\ChrisHemmings\Electio\Client\Model\Address[]',
        'packages' => '\ChrisHemmings\Electio\Client\Model\Package[]',
        'weight' => '\ChrisHemmings\Electio\Client\Model\Weight',
        'value' => '\ChrisHemmings\Electio\Client\Model\Money',
        'allocation' => '\ChrisHemmings\Electio\Client\Model\Allocation',
        'failed_allocation' => '\ChrisHemmings\Electio\Client\Model\FailedAllocation',
        'customs_documentation' => '\ChrisHemmings\Electio\Client\Model\CustomsDocumentation',
        'consignment_state' => 'string',
        'source' => 'string',
        'have_labels_ever_been_printed' => 'bool',
        'date_labels_were_first_printed' => '\DateTime',
        'is_late' => 'bool',
        'late_for_customer' => 'bool',
        'meta_data' => '\ChrisHemmings\Electio\Client\Model\MetaData[]',
        'location_information' => '\ChrisHemmings\Electio\Client\Model\LocationInformation',
        'consignment_legs' => '\ChrisHemmings\Electio\Client\Model\ConsignmentLeg[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_created' => 'date-time',
        'customer_reference' => null,
        'consignment_reference_provided_by_customer' => null,
        'reference' => null,
        'requested_collection_date' => 'date-time',
        'collection_date' => 'date-time',
        'expected_delivery_date' => 'date-time',
        'scheduled_delivery_date' => 'date-time',
        'earliest_delivery_date' => 'date-time',
        'latest_delivery_date' => 'date-time',
        'requested_delivery_date' => null,
        'collected_date' => 'date-time',
        'delivery_date' => 'date-time',
        'attempted_delivery_date' => 'date-time',
        'addresses' => null,
        'packages' => null,
        'weight' => null,
        'value' => null,
        'allocation' => null,
        'failed_allocation' => null,
        'customs_documentation' => null,
        'consignment_state' => null,
        'source' => null,
        'have_labels_ever_been_printed' => null,
        'date_labels_were_first_printed' => 'date-time',
        'is_late' => null,
        'late_for_customer' => null,
        'meta_data' => null,
        'location_information' => null,
        'consignment_legs' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date_created' => 'DateCreated',
        'customer_reference' => 'CustomerReference',
        'consignment_reference_provided_by_customer' => 'ConsignmentReferenceProvidedByCustomer',
        'reference' => 'Reference',
        'requested_collection_date' => 'RequestedCollectionDate',
        'collection_date' => 'CollectionDate',
        'expected_delivery_date' => 'ExpectedDeliveryDate',
        'scheduled_delivery_date' => 'ScheduledDeliveryDate',
        'earliest_delivery_date' => 'EarliestDeliveryDate',
        'latest_delivery_date' => 'LatestDeliveryDate',
        'requested_delivery_date' => 'RequestedDeliveryDate',
        'collected_date' => 'CollectedDate',
        'delivery_date' => 'DeliveryDate',
        'attempted_delivery_date' => 'AttemptedDeliveryDate',
        'addresses' => 'Addresses',
        'packages' => 'Packages',
        'weight' => 'Weight',
        'value' => 'Value',
        'allocation' => 'Allocation',
        'failed_allocation' => 'FailedAllocation',
        'customs_documentation' => 'CustomsDocumentation',
        'consignment_state' => 'ConsignmentState',
        'source' => 'Source',
        'have_labels_ever_been_printed' => 'HaveLabelsEverBeenPrinted',
        'date_labels_were_first_printed' => 'DateLabelsWereFirstPrinted',
        'is_late' => 'IsLate',
        'late_for_customer' => 'LateForCustomer',
        'meta_data' => 'MetaData',
        'location_information' => 'LocationInformation',
        'consignment_legs' => 'ConsignmentLegs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_created' => 'setDateCreated',
        'customer_reference' => 'setCustomerReference',
        'consignment_reference_provided_by_customer' => 'setConsignmentReferenceProvidedByCustomer',
        'reference' => 'setReference',
        'requested_collection_date' => 'setRequestedCollectionDate',
        'collection_date' => 'setCollectionDate',
        'expected_delivery_date' => 'setExpectedDeliveryDate',
        'scheduled_delivery_date' => 'setScheduledDeliveryDate',
        'earliest_delivery_date' => 'setEarliestDeliveryDate',
        'latest_delivery_date' => 'setLatestDeliveryDate',
        'requested_delivery_date' => 'setRequestedDeliveryDate',
        'collected_date' => 'setCollectedDate',
        'delivery_date' => 'setDeliveryDate',
        'attempted_delivery_date' => 'setAttemptedDeliveryDate',
        'addresses' => 'setAddresses',
        'packages' => 'setPackages',
        'weight' => 'setWeight',
        'value' => 'setValue',
        'allocation' => 'setAllocation',
        'failed_allocation' => 'setFailedAllocation',
        'customs_documentation' => 'setCustomsDocumentation',
        'consignment_state' => 'setConsignmentState',
        'source' => 'setSource',
        'have_labels_ever_been_printed' => 'setHaveLabelsEverBeenPrinted',
        'date_labels_were_first_printed' => 'setDateLabelsWereFirstPrinted',
        'is_late' => 'setIsLate',
        'late_for_customer' => 'setLateForCustomer',
        'meta_data' => 'setMetaData',
        'location_information' => 'setLocationInformation',
        'consignment_legs' => 'setConsignmentLegs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_created' => 'getDateCreated',
        'customer_reference' => 'getCustomerReference',
        'consignment_reference_provided_by_customer' => 'getConsignmentReferenceProvidedByCustomer',
        'reference' => 'getReference',
        'requested_collection_date' => 'getRequestedCollectionDate',
        'collection_date' => 'getCollectionDate',
        'expected_delivery_date' => 'getExpectedDeliveryDate',
        'scheduled_delivery_date' => 'getScheduledDeliveryDate',
        'earliest_delivery_date' => 'getEarliestDeliveryDate',
        'latest_delivery_date' => 'getLatestDeliveryDate',
        'requested_delivery_date' => 'getRequestedDeliveryDate',
        'collected_date' => 'getCollectedDate',
        'delivery_date' => 'getDeliveryDate',
        'attempted_delivery_date' => 'getAttemptedDeliveryDate',
        'addresses' => 'getAddresses',
        'packages' => 'getPackages',
        'weight' => 'getWeight',
        'value' => 'getValue',
        'allocation' => 'getAllocation',
        'failed_allocation' => 'getFailedAllocation',
        'customs_documentation' => 'getCustomsDocumentation',
        'consignment_state' => 'getConsignmentState',
        'source' => 'getSource',
        'have_labels_ever_been_printed' => 'getHaveLabelsEverBeenPrinted',
        'date_labels_were_first_printed' => 'getDateLabelsWereFirstPrinted',
        'is_late' => 'getIsLate',
        'late_for_customer' => 'getLateForCustomer',
        'meta_data' => 'getMetaData',
        'location_information' => 'getLocationInformation',
        'consignment_legs' => 'getConsignmentLegs'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['customer_reference'] = isset($data['customer_reference']) ? $data['customer_reference'] : null;
        $this->container['consignment_reference_provided_by_customer'] = isset($data['consignment_reference_provided_by_customer']) ? $data['consignment_reference_provided_by_customer'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['requested_collection_date'] = isset($data['requested_collection_date']) ? $data['requested_collection_date'] : null;
        $this->container['collection_date'] = isset($data['collection_date']) ? $data['collection_date'] : null;
        $this->container['expected_delivery_date'] = isset($data['expected_delivery_date']) ? $data['expected_delivery_date'] : null;
        $this->container['scheduled_delivery_date'] = isset($data['scheduled_delivery_date']) ? $data['scheduled_delivery_date'] : null;
        $this->container['earliest_delivery_date'] = isset($data['earliest_delivery_date']) ? $data['earliest_delivery_date'] : null;
        $this->container['latest_delivery_date'] = isset($data['latest_delivery_date']) ? $data['latest_delivery_date'] : null;
        $this->container['requested_delivery_date'] = isset($data['requested_delivery_date']) ? $data['requested_delivery_date'] : null;
        $this->container['collected_date'] = isset($data['collected_date']) ? $data['collected_date'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['attempted_delivery_date'] = isset($data['attempted_delivery_date']) ? $data['attempted_delivery_date'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['allocation'] = isset($data['allocation']) ? $data['allocation'] : null;
        $this->container['failed_allocation'] = isset($data['failed_allocation']) ? $data['failed_allocation'] : null;
        $this->container['customs_documentation'] = isset($data['customs_documentation']) ? $data['customs_documentation'] : null;
        $this->container['consignment_state'] = isset($data['consignment_state']) ? $data['consignment_state'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['have_labels_ever_been_printed'] = isset($data['have_labels_ever_been_printed']) ? $data['have_labels_ever_been_printed'] : null;
        $this->container['date_labels_were_first_printed'] = isset($data['date_labels_were_first_printed']) ? $data['date_labels_were_first_printed'] : null;
        $this->container['is_late'] = isset($data['is_late']) ? $data['is_late'] : null;
        $this->container['late_for_customer'] = isset($data['late_for_customer']) ? $data['late_for_customer'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['location_information'] = isset($data['location_information']) ? $data['location_information'] : null;
        $this->container['consignment_legs'] = isset($data['consignment_legs']) ? $data['consignment_legs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created date_created
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets customer_reference
     *
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->container['customer_reference'];
    }

    /**
     * Sets customer_reference
     *
     * @param string $customer_reference customer_reference
     *
     * @return $this
     */
    public function setCustomerReference($customer_reference)
    {
        $this->container['customer_reference'] = $customer_reference;

        return $this;
    }

    /**
     * Gets consignment_reference_provided_by_customer
     *
     * @return string
     */
    public function getConsignmentReferenceProvidedByCustomer()
    {
        return $this->container['consignment_reference_provided_by_customer'];
    }

    /**
     * Sets consignment_reference_provided_by_customer
     *
     * @param string $consignment_reference_provided_by_customer consignment_reference_provided_by_customer
     *
     * @return $this
     */
    public function setConsignmentReferenceProvidedByCustomer($consignment_reference_provided_by_customer)
    {
        $this->container['consignment_reference_provided_by_customer'] = $consignment_reference_provided_by_customer;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets requested_collection_date
     *
     * @return \DateTime
     */
    public function getRequestedCollectionDate()
    {
        return $this->container['requested_collection_date'];
    }

    /**
     * Sets requested_collection_date
     *
     * @param \DateTime $requested_collection_date requested_collection_date
     *
     * @return $this
     */
    public function setRequestedCollectionDate($requested_collection_date)
    {
        $this->container['requested_collection_date'] = $requested_collection_date;

        return $this;
    }

    /**
     * Gets collection_date
     *
     * @return \DateTime
     */
    public function getCollectionDate()
    {
        return $this->container['collection_date'];
    }

    /**
     * Sets collection_date
     *
     * @param \DateTime $collection_date collection_date
     *
     * @return $this
     */
    public function setCollectionDate($collection_date)
    {
        $this->container['collection_date'] = $collection_date;

        return $this;
    }

    /**
     * Gets expected_delivery_date
     *
     * @return \DateTime
     */
    public function getExpectedDeliveryDate()
    {
        return $this->container['expected_delivery_date'];
    }

    /**
     * Sets expected_delivery_date
     *
     * @param \DateTime $expected_delivery_date expected_delivery_date
     *
     * @return $this
     */
    public function setExpectedDeliveryDate($expected_delivery_date)
    {
        $this->container['expected_delivery_date'] = $expected_delivery_date;

        return $this;
    }

    /**
     * Gets scheduled_delivery_date
     *
     * @return \DateTime
     */
    public function getScheduledDeliveryDate()
    {
        return $this->container['scheduled_delivery_date'];
    }

    /**
     * Sets scheduled_delivery_date
     *
     * @param \DateTime $scheduled_delivery_date scheduled_delivery_date
     *
     * @return $this
     */
    public function setScheduledDeliveryDate($scheduled_delivery_date)
    {
        $this->container['scheduled_delivery_date'] = $scheduled_delivery_date;

        return $this;
    }

    /**
     * Gets earliest_delivery_date
     *
     * @return \DateTime
     */
    public function getEarliestDeliveryDate()
    {
        return $this->container['earliest_delivery_date'];
    }

    /**
     * Sets earliest_delivery_date
     *
     * @param \DateTime $earliest_delivery_date earliest_delivery_date
     *
     * @return $this
     */
    public function setEarliestDeliveryDate($earliest_delivery_date)
    {
        $this->container['earliest_delivery_date'] = $earliest_delivery_date;

        return $this;
    }

    /**
     * Gets latest_delivery_date
     *
     * @return \DateTime
     */
    public function getLatestDeliveryDate()
    {
        return $this->container['latest_delivery_date'];
    }

    /**
     * Sets latest_delivery_date
     *
     * @param \DateTime $latest_delivery_date latest_delivery_date
     *
     * @return $this
     */
    public function setLatestDeliveryDate($latest_delivery_date)
    {
        $this->container['latest_delivery_date'] = $latest_delivery_date;

        return $this;
    }

    /**
     * Gets requested_delivery_date
     *
     * @return \ChrisHemmings\Electio\Client\Model\RequestedDeliveryDate
     */
    public function getRequestedDeliveryDate()
    {
        return $this->container['requested_delivery_date'];
    }

    /**
     * Sets requested_delivery_date
     *
     * @param \ChrisHemmings\Electio\Client\Model\RequestedDeliveryDate $requested_delivery_date requested_delivery_date
     *
     * @return $this
     */
    public function setRequestedDeliveryDate($requested_delivery_date)
    {
        $this->container['requested_delivery_date'] = $requested_delivery_date;

        return $this;
    }

    /**
     * Gets collected_date
     *
     * @return \DateTime
     */
    public function getCollectedDate()
    {
        return $this->container['collected_date'];
    }

    /**
     * Sets collected_date
     *
     * @param \DateTime $collected_date collected_date
     *
     * @return $this
     */
    public function setCollectedDate($collected_date)
    {
        $this->container['collected_date'] = $collected_date;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime $delivery_date delivery_date
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets attempted_delivery_date
     *
     * @return \DateTime
     */
    public function getAttemptedDeliveryDate()
    {
        return $this->container['attempted_delivery_date'];
    }

    /**
     * Sets attempted_delivery_date
     *
     * @param \DateTime $attempted_delivery_date attempted_delivery_date
     *
     * @return $this
     */
    public function setAttemptedDeliveryDate($attempted_delivery_date)
    {
        $this->container['attempted_delivery_date'] = $attempted_delivery_date;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \ChrisHemmings\Electio\Client\Model\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \ChrisHemmings\Electio\Client\Model\Address[] $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets packages
     *
     * @return \ChrisHemmings\Electio\Client\Model\Package[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \ChrisHemmings\Electio\Client\Model\Package[] $packages packages
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \ChrisHemmings\Electio\Client\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \ChrisHemmings\Electio\Client\Model\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \ChrisHemmings\Electio\Client\Model\Money
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \ChrisHemmings\Electio\Client\Model\Money $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets allocation
     *
     * @return \ChrisHemmings\Electio\Client\Model\Allocation
     */
    public function getAllocation()
    {
        return $this->container['allocation'];
    }

    /**
     * Sets allocation
     *
     * @param \ChrisHemmings\Electio\Client\Model\Allocation $allocation allocation
     *
     * @return $this
     */
    public function setAllocation($allocation)
    {
        $this->container['allocation'] = $allocation;

        return $this;
    }

    /**
     * Gets failed_allocation
     *
     * @return \ChrisHemmings\Electio\Client\Model\FailedAllocation
     */
    public function getFailedAllocation()
    {
        return $this->container['failed_allocation'];
    }

    /**
     * Sets failed_allocation
     *
     * @param \ChrisHemmings\Electio\Client\Model\FailedAllocation $failed_allocation failed_allocation
     *
     * @return $this
     */
    public function setFailedAllocation($failed_allocation)
    {
        $this->container['failed_allocation'] = $failed_allocation;

        return $this;
    }

    /**
     * Gets customs_documentation
     *
     * @return \ChrisHemmings\Electio\Client\Model\CustomsDocumentation
     */
    public function getCustomsDocumentation()
    {
        return $this->container['customs_documentation'];
    }

    /**
     * Sets customs_documentation
     *
     * @param \ChrisHemmings\Electio\Client\Model\CustomsDocumentation $customs_documentation customs_documentation
     *
     * @return $this
     */
    public function setCustomsDocumentation($customs_documentation)
    {
        $this->container['customs_documentation'] = $customs_documentation;

        return $this;
    }

    /**
     * Gets consignment_state
     *
     * @return string
     */
    public function getConsignmentState()
    {
        return $this->container['consignment_state'];
    }

    /**
     * Sets consignment_state
     *
     * @param string $consignment_state consignment_state
     *
     * @return $this
     */
    public function setConsignmentState($consignment_state)
    {
        $this->container['consignment_state'] = $consignment_state;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets have_labels_ever_been_printed
     *
     * @return bool
     */
    public function getHaveLabelsEverBeenPrinted()
    {
        return $this->container['have_labels_ever_been_printed'];
    }

    /**
     * Sets have_labels_ever_been_printed
     *
     * @param bool $have_labels_ever_been_printed have_labels_ever_been_printed
     *
     * @return $this
     */
    public function setHaveLabelsEverBeenPrinted($have_labels_ever_been_printed)
    {
        $this->container['have_labels_ever_been_printed'] = $have_labels_ever_been_printed;

        return $this;
    }

    /**
     * Gets date_labels_were_first_printed
     *
     * @return \DateTime
     */
    public function getDateLabelsWereFirstPrinted()
    {
        return $this->container['date_labels_were_first_printed'];
    }

    /**
     * Sets date_labels_were_first_printed
     *
     * @param \DateTime $date_labels_were_first_printed date_labels_were_first_printed
     *
     * @return $this
     */
    public function setDateLabelsWereFirstPrinted($date_labels_were_first_printed)
    {
        $this->container['date_labels_were_first_printed'] = $date_labels_were_first_printed;

        return $this;
    }

    /**
     * Gets is_late
     *
     * @return bool
     */
    public function getIsLate()
    {
        return $this->container['is_late'];
    }

    /**
     * Sets is_late
     *
     * @param bool $is_late is_late
     *
     * @return $this
     */
    public function setIsLate($is_late)
    {
        $this->container['is_late'] = $is_late;

        return $this;
    }

    /**
     * Gets late_for_customer
     *
     * @return bool
     */
    public function getLateForCustomer()
    {
        return $this->container['late_for_customer'];
    }

    /**
     * Sets late_for_customer
     *
     * @param bool $late_for_customer late_for_customer
     *
     * @return $this
     */
    public function setLateForCustomer($late_for_customer)
    {
        $this->container['late_for_customer'] = $late_for_customer;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return \ChrisHemmings\Electio\Client\Model\MetaData[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \ChrisHemmings\Electio\Client\Model\MetaData[] $meta_data meta_data
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets location_information
     *
     * @return \ChrisHemmings\Electio\Client\Model\LocationInformation
     */
    public function getLocationInformation()
    {
        return $this->container['location_information'];
    }

    /**
     * Sets location_information
     *
     * @param \ChrisHemmings\Electio\Client\Model\LocationInformation $location_information location_information
     *
     * @return $this
     */
    public function setLocationInformation($location_information)
    {
        $this->container['location_information'] = $location_information;

        return $this;
    }

    /**
     * Gets consignment_legs
     *
     * @return \ChrisHemmings\Electio\Client\Model\ConsignmentLeg[]
     */
    public function getConsignmentLegs()
    {
        return $this->container['consignment_legs'];
    }

    /**
     * Sets consignment_legs
     *
     * @param \ChrisHemmings\Electio\Client\Model\ConsignmentLeg[] $consignment_legs consignment_legs
     *
     * @return $this
     */
    public function setConsignmentLegs($consignment_legs)
    {
        $this->container['consignment_legs'] = $consignment_legs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


