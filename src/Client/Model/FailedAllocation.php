<?php
/**
 * FailedAllocation
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
 * OpenAPI spec version: 1.0.12
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
 * FailedAllocation Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FailedAllocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FailedAllocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'carrier_service_group_reference' => 'string',
        'mpd_carrier_service_group_name' => 'string',
        'mpd_carrier_service_reference' => 'string',
        'mpd_carrier_service_name' => 'string',
        'attempted_allocation_date' => '\DateTime',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'carrier_service_group_reference' => null,
        'mpd_carrier_service_group_name' => null,
        'mpd_carrier_service_reference' => null,
        'mpd_carrier_service_name' => null,
        'attempted_allocation_date' => 'date-time',
        'message' => null
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
        'carrier_service_group_reference' => 'CarrierServiceGroupReference',
        'mpd_carrier_service_group_name' => 'MpdCarrierServiceGroupName',
        'mpd_carrier_service_reference' => 'MpdCarrierServiceReference',
        'mpd_carrier_service_name' => 'MpdCarrierServiceName',
        'attempted_allocation_date' => 'AttemptedAllocationDate',
        'message' => 'Message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_service_group_reference' => 'setCarrierServiceGroupReference',
        'mpd_carrier_service_group_name' => 'setMpdCarrierServiceGroupName',
        'mpd_carrier_service_reference' => 'setMpdCarrierServiceReference',
        'mpd_carrier_service_name' => 'setMpdCarrierServiceName',
        'attempted_allocation_date' => 'setAttemptedAllocationDate',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_service_group_reference' => 'getCarrierServiceGroupReference',
        'mpd_carrier_service_group_name' => 'getMpdCarrierServiceGroupName',
        'mpd_carrier_service_reference' => 'getMpdCarrierServiceReference',
        'mpd_carrier_service_name' => 'getMpdCarrierServiceName',
        'attempted_allocation_date' => 'getAttemptedAllocationDate',
        'message' => 'getMessage'
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
        $this->container['carrier_service_group_reference'] = isset($data['carrier_service_group_reference']) ? $data['carrier_service_group_reference'] : null;
        $this->container['mpd_carrier_service_group_name'] = isset($data['mpd_carrier_service_group_name']) ? $data['mpd_carrier_service_group_name'] : null;
        $this->container['mpd_carrier_service_reference'] = isset($data['mpd_carrier_service_reference']) ? $data['mpd_carrier_service_reference'] : null;
        $this->container['mpd_carrier_service_name'] = isset($data['mpd_carrier_service_name']) ? $data['mpd_carrier_service_name'] : null;
        $this->container['attempted_allocation_date'] = isset($data['attempted_allocation_date']) ? $data['attempted_allocation_date'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
     * Gets carrier_service_group_reference
     *
     * @return string
     */
    public function getCarrierServiceGroupReference()
    {
        return $this->container['carrier_service_group_reference'];
    }

    /**
     * Sets carrier_service_group_reference
     *
     * @param string $carrier_service_group_reference carrier_service_group_reference
     *
     * @return $this
     */
    public function setCarrierServiceGroupReference($carrier_service_group_reference)
    {
        $this->container['carrier_service_group_reference'] = $carrier_service_group_reference;

        return $this;
    }

    /**
     * Gets mpd_carrier_service_group_name
     *
     * @return string
     */
    public function getMpdCarrierServiceGroupName()
    {
        return $this->container['mpd_carrier_service_group_name'];
    }

    /**
     * Sets mpd_carrier_service_group_name
     *
     * @param string $mpd_carrier_service_group_name mpd_carrier_service_group_name
     *
     * @return $this
     */
    public function setMpdCarrierServiceGroupName($mpd_carrier_service_group_name)
    {
        $this->container['mpd_carrier_service_group_name'] = $mpd_carrier_service_group_name;

        return $this;
    }

    /**
     * Gets mpd_carrier_service_reference
     *
     * @return string
     */
    public function getMpdCarrierServiceReference()
    {
        return $this->container['mpd_carrier_service_reference'];
    }

    /**
     * Sets mpd_carrier_service_reference
     *
     * @param string $mpd_carrier_service_reference mpd_carrier_service_reference
     *
     * @return $this
     */
    public function setMpdCarrierServiceReference($mpd_carrier_service_reference)
    {
        $this->container['mpd_carrier_service_reference'] = $mpd_carrier_service_reference;

        return $this;
    }

    /**
     * Gets mpd_carrier_service_name
     *
     * @return string
     */
    public function getMpdCarrierServiceName()
    {
        return $this->container['mpd_carrier_service_name'];
    }

    /**
     * Sets mpd_carrier_service_name
     *
     * @param string $mpd_carrier_service_name mpd_carrier_service_name
     *
     * @return $this
     */
    public function setMpdCarrierServiceName($mpd_carrier_service_name)
    {
        $this->container['mpd_carrier_service_name'] = $mpd_carrier_service_name;

        return $this;
    }

    /**
     * Gets attempted_allocation_date
     *
     * @return \DateTime
     */
    public function getAttemptedAllocationDate()
    {
        return $this->container['attempted_allocation_date'];
    }

    /**
     * Sets attempted_allocation_date
     *
     * @param \DateTime $attempted_allocation_date attempted_allocation_date
     *
     * @return $this
     */
    public function setAttemptedAllocationDate($attempted_allocation_date)
    {
        $this->container['attempted_allocation_date'] = $attempted_allocation_date;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


