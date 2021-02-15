<?php
/**
 * CreateConsignment
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
 * OpenAPI spec version: 1.0.5
 * Contact: chris@hemmin.gs
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
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
 * CreateConsignment Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateConsignment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateConsignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignment_reference_provided_by_customer' => 'string',
        'shipping_date' => '\DateTime',
        'requested_delivery_date' => '\ChrisHemmings\Electio\Client\Model\RequiredDeliveryDate',
        'addresses' => '\ChrisHemmings\Electio\Client\Model\Address[]',
        'packages' => '\ChrisHemmings\Electio\Client\Model\Package[]',
        'source' => 'string',
        'meta_data' => '\ChrisHemmings\Electio\Client\Model\MetaData[]',
        'customs_documentation' => '\ChrisHemmings\Electio\Client\Model\CustomsDocumentation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignment_reference_provided_by_customer' => null,
        'shipping_date' => 'date-time',
        'requested_delivery_date' => null,
        'addresses' => null,
        'packages' => null,
        'source' => null,
        'meta_data' => null,
        'customs_documentation' => null
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
        'consignment_reference_provided_by_customer' => 'ConsignmentReferenceProvidedByCustomer',
        'shipping_date' => 'ShippingDate',
        'requested_delivery_date' => 'RequestedDeliveryDate',
        'addresses' => 'Addresses',
        'packages' => 'Packages',
        'source' => 'Source',
        'meta_data' => 'MetaData',
        'customs_documentation' => 'CustomsDocumentation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consignment_reference_provided_by_customer' => 'setConsignmentReferenceProvidedByCustomer',
        'shipping_date' => 'setShippingDate',
        'requested_delivery_date' => 'setRequestedDeliveryDate',
        'addresses' => 'setAddresses',
        'packages' => 'setPackages',
        'source' => 'setSource',
        'meta_data' => 'setMetaData',
        'customs_documentation' => 'setCustomsDocumentation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consignment_reference_provided_by_customer' => 'getConsignmentReferenceProvidedByCustomer',
        'shipping_date' => 'getShippingDate',
        'requested_delivery_date' => 'getRequestedDeliveryDate',
        'addresses' => 'getAddresses',
        'packages' => 'getPackages',
        'source' => 'getSource',
        'meta_data' => 'getMetaData',
        'customs_documentation' => 'getCustomsDocumentation'
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
        $this->container['consignment_reference_provided_by_customer'] = isset($data['consignment_reference_provided_by_customer']) ? $data['consignment_reference_provided_by_customer'] : null;
        $this->container['shipping_date'] = isset($data['shipping_date']) ? $data['shipping_date'] : null;
        $this->container['requested_delivery_date'] = isset($data['requested_delivery_date']) ? $data['requested_delivery_date'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['customs_documentation'] = isset($data['customs_documentation']) ? $data['customs_documentation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['packages'] === null) {
            $invalidProperties[] = "'packages' can't be null";
        }
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
     * Gets shipping_date
     *
     * @return \DateTime
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     *
     * @param \DateTime $shipping_date shipping_date
     *
     * @return $this
     */
    public function setShippingDate($shipping_date)
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    /**
     * Gets requested_delivery_date
     *
     * @return \ChrisHemmings\Electio\Client\Model\RequiredDeliveryDate
     */
    public function getRequestedDeliveryDate()
    {
        return $this->container['requested_delivery_date'];
    }

    /**
     * Sets requested_delivery_date
     *
     * @param \ChrisHemmings\Electio\Client\Model\RequiredDeliveryDate $requested_delivery_date requested_delivery_date
     *
     * @return $this
     */
    public function setRequestedDeliveryDate($requested_delivery_date)
    {
        $this->container['requested_delivery_date'] = $requested_delivery_date;

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


