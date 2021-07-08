<?php
/**
 * AllocateWithQuoteResponse
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
 * OpenAPI spec version: 1.0.7
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
 * AllocateWithQuoteResponse Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllocateWithQuoteResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AllocateWithQuoteResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status_code' => 'int',
        'description' => 'string',
        'carrier_reference' => 'string',
        'carrier_name' => 'string',
        'carrier_service_reference' => 'string',
        'carrier_service_name' => 'string',
        'api_links' => '\ChrisHemmings\Electio\Client\Model\ApiLink[]',
        'consignment_legs' => '\ChrisHemmings\Electio\Client\Model\ConsignmentLeg[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status_code' => null,
        'description' => null,
        'carrier_reference' => null,
        'carrier_name' => null,
        'carrier_service_reference' => null,
        'carrier_service_name' => null,
        'api_links' => null,
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
        'status_code' => 'StatusCode',
        'description' => 'Description',
        'carrier_reference' => 'CarrierReference',
        'carrier_name' => 'CarrierName',
        'carrier_service_reference' => 'CarrierServiceReference',
        'carrier_service_name' => 'CarrierServiceName',
        'api_links' => 'ApiLinks',
        'consignment_legs' => 'ConsignmentLegs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status_code' => 'setStatusCode',
        'description' => 'setDescription',
        'carrier_reference' => 'setCarrierReference',
        'carrier_name' => 'setCarrierName',
        'carrier_service_reference' => 'setCarrierServiceReference',
        'carrier_service_name' => 'setCarrierServiceName',
        'api_links' => 'setApiLinks',
        'consignment_legs' => 'setConsignmentLegs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status_code' => 'getStatusCode',
        'description' => 'getDescription',
        'carrier_reference' => 'getCarrierReference',
        'carrier_name' => 'getCarrierName',
        'carrier_service_reference' => 'getCarrierServiceReference',
        'carrier_service_name' => 'getCarrierServiceName',
        'api_links' => 'getApiLinks',
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
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['carrier_reference'] = isset($data['carrier_reference']) ? $data['carrier_reference'] : null;
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['carrier_service_reference'] = isset($data['carrier_service_reference']) ? $data['carrier_service_reference'] : null;
        $this->container['carrier_service_name'] = isset($data['carrier_service_name']) ? $data['carrier_service_name'] : null;
        $this->container['api_links'] = isset($data['api_links']) ? $data['api_links'] : null;
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
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code status_code
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets carrier_reference
     *
     * @return string
     */
    public function getCarrierReference()
    {
        return $this->container['carrier_reference'];
    }

    /**
     * Sets carrier_reference
     *
     * @param string $carrier_reference carrier_reference
     *
     * @return $this
     */
    public function setCarrierReference($carrier_reference)
    {
        $this->container['carrier_reference'] = $carrier_reference;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string $carrier_name carrier_name
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets carrier_service_reference
     *
     * @return string
     */
    public function getCarrierServiceReference()
    {
        return $this->container['carrier_service_reference'];
    }

    /**
     * Sets carrier_service_reference
     *
     * @param string $carrier_service_reference carrier_service_reference
     *
     * @return $this
     */
    public function setCarrierServiceReference($carrier_service_reference)
    {
        $this->container['carrier_service_reference'] = $carrier_service_reference;

        return $this;
    }

    /**
     * Gets carrier_service_name
     *
     * @return string
     */
    public function getCarrierServiceName()
    {
        return $this->container['carrier_service_name'];
    }

    /**
     * Sets carrier_service_name
     *
     * @param string $carrier_service_name carrier_service_name
     *
     * @return $this
     */
    public function setCarrierServiceName($carrier_service_name)
    {
        $this->container['carrier_service_name'] = $carrier_service_name;

        return $this;
    }

    /**
     * Gets api_links
     *
     * @return \ChrisHemmings\Electio\Client\Model\ApiLink[]
     */
    public function getApiLinks()
    {
        return $this->container['api_links'];
    }

    /**
     * Sets api_links
     *
     * @param \ChrisHemmings\Electio\Client\Model\ApiLink[] $api_links api_links
     *
     * @return $this
     */
    public function setApiLinks($api_links)
    {
        $this->container['api_links'] = $api_links;

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

