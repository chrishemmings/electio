<?php
/**
 * SummaryResponse
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
 * SummaryResponse Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SummaryResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SummaryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'number_of_consignments' => 'int',
        'summary' => '\ChrisHemmings\Electio\Client\Model\SummaryItem[]',
        'start_from' => '\DateTime',
        'end_to' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'number_of_consignments' => null,
        'summary' => null,
        'start_from' => 'date-time',
        'end_to' => 'date-time'
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
        'number_of_consignments' => 'NumberOfConsignments',
        'summary' => 'Summary',
        'start_from' => 'StartFrom',
        'end_to' => 'EndTo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number_of_consignments' => 'setNumberOfConsignments',
        'summary' => 'setSummary',
        'start_from' => 'setStartFrom',
        'end_to' => 'setEndTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number_of_consignments' => 'getNumberOfConsignments',
        'summary' => 'getSummary',
        'start_from' => 'getStartFrom',
        'end_to' => 'getEndTo'
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
        $this->container['number_of_consignments'] = isset($data['number_of_consignments']) ? $data['number_of_consignments'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['start_from'] = isset($data['start_from']) ? $data['start_from'] : null;
        $this->container['end_to'] = isset($data['end_to']) ? $data['end_to'] : null;
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
     * Gets number_of_consignments
     *
     * @return int
     */
    public function getNumberOfConsignments()
    {
        return $this->container['number_of_consignments'];
    }

    /**
     * Sets number_of_consignments
     *
     * @param int $number_of_consignments number_of_consignments
     *
     * @return $this
     */
    public function setNumberOfConsignments($number_of_consignments)
    {
        $this->container['number_of_consignments'] = $number_of_consignments;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \ChrisHemmings\Electio\Client\Model\SummaryItem[]
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \ChrisHemmings\Electio\Client\Model\SummaryItem[] $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets start_from
     *
     * @return \DateTime
     */
    public function getStartFrom()
    {
        return $this->container['start_from'];
    }

    /**
     * Sets start_from
     *
     * @param \DateTime $start_from start_from
     *
     * @return $this
     */
    public function setStartFrom($start_from)
    {
        $this->container['start_from'] = $start_from;

        return $this;
    }

    /**
     * Gets end_to
     *
     * @return \DateTime
     */
    public function getEndTo()
    {
        return $this->container['end_to'];
    }

    /**
     * Sets end_to
     *
     * @param \DateTime $end_to end_to
     *
     * @return $this
     */
    public function setEndTo($end_to)
    {
        $this->container['end_to'] = $end_to;

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


