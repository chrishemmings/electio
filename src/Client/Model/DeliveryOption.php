<?php
/**
 * DeliveryOption
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
 * DeliveryOption Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeliveryOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference' => 'string',
        'estimated_delivery_date' => '\ChrisHemmings\Electio\Client\Model\EstimatedDeliveryDate',
        'delivery_window' => '\ChrisHemmings\Electio\Client\Model\DeliveryWindow',
        'carrier' => 'string',
        'carrier_service' => 'string',
        'carrier_service_reference' => 'string',
        'price' => '\ChrisHemmings\Electio\Client\Model\Rate',
        'allocation_cut_off' => '\DateTime',
        'operational_cut_off' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reference' => null,
        'estimated_delivery_date' => null,
        'delivery_window' => null,
        'carrier' => null,
        'carrier_service' => null,
        'carrier_service_reference' => null,
        'price' => null,
        'allocation_cut_off' => 'date-time',
        'operational_cut_off' => 'date-time'
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
        'reference' => 'Reference',
        'estimated_delivery_date' => 'EstimatedDeliveryDate',
        'delivery_window' => 'DeliveryWindow',
        'carrier' => 'Carrier',
        'carrier_service' => 'CarrierService',
        'carrier_service_reference' => 'CarrierServiceReference',
        'price' => 'Price',
        'allocation_cut_off' => 'AllocationCutOff',
        'operational_cut_off' => 'OperationalCutOff'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
        'delivery_window' => 'setDeliveryWindow',
        'carrier' => 'setCarrier',
        'carrier_service' => 'setCarrierService',
        'carrier_service_reference' => 'setCarrierServiceReference',
        'price' => 'setPrice',
        'allocation_cut_off' => 'setAllocationCutOff',
        'operational_cut_off' => 'setOperationalCutOff'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
        'delivery_window' => 'getDeliveryWindow',
        'carrier' => 'getCarrier',
        'carrier_service' => 'getCarrierService',
        'carrier_service_reference' => 'getCarrierServiceReference',
        'price' => 'getPrice',
        'allocation_cut_off' => 'getAllocationCutOff',
        'operational_cut_off' => 'getOperationalCutOff'
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['estimated_delivery_date'] = isset($data['estimated_delivery_date']) ? $data['estimated_delivery_date'] : null;
        $this->container['delivery_window'] = isset($data['delivery_window']) ? $data['delivery_window'] : null;
        $this->container['carrier'] = isset($data['carrier']) ? $data['carrier'] : null;
        $this->container['carrier_service'] = isset($data['carrier_service']) ? $data['carrier_service'] : null;
        $this->container['carrier_service_reference'] = isset($data['carrier_service_reference']) ? $data['carrier_service_reference'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['allocation_cut_off'] = isset($data['allocation_cut_off']) ? $data['allocation_cut_off'] : null;
        $this->container['operational_cut_off'] = isset($data['operational_cut_off']) ? $data['operational_cut_off'] : null;
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
     * Gets estimated_delivery_date
     *
     * @return \ChrisHemmings\Electio\Client\Model\EstimatedDeliveryDate
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date
     *
     * @param \ChrisHemmings\Electio\Client\Model\EstimatedDeliveryDate $estimated_delivery_date estimated_delivery_date
     *
     * @return $this
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets delivery_window
     *
     * @return \ChrisHemmings\Electio\Client\Model\DeliveryWindow
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window
     *
     * @param \ChrisHemmings\Electio\Client\Model\DeliveryWindow $delivery_window delivery_window
     *
     * @return $this
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
     *
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets carrier_service
     *
     * @return string
     */
    public function getCarrierService()
    {
        return $this->container['carrier_service'];
    }

    /**
     * Sets carrier_service
     *
     * @param string $carrier_service carrier_service
     *
     * @return $this
     */
    public function setCarrierService($carrier_service)
    {
        $this->container['carrier_service'] = $carrier_service;

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
     * Gets price
     *
     * @return \ChrisHemmings\Electio\Client\Model\Rate
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \ChrisHemmings\Electio\Client\Model\Rate $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets allocation_cut_off
     *
     * @return \DateTime
     */
    public function getAllocationCutOff()
    {
        return $this->container['allocation_cut_off'];
    }

    /**
     * Sets allocation_cut_off
     *
     * @param \DateTime $allocation_cut_off allocation_cut_off
     *
     * @return $this
     */
    public function setAllocationCutOff($allocation_cut_off)
    {
        $this->container['allocation_cut_off'] = $allocation_cut_off;

        return $this;
    }

    /**
     * Gets operational_cut_off
     *
     * @return \DateTime
     */
    public function getOperationalCutOff()
    {
        return $this->container['operational_cut_off'];
    }

    /**
     * Sets operational_cut_off
     *
     * @param \DateTime $operational_cut_off operational_cut_off
     *
     * @return $this
     */
    public function setOperationalCutOff($operational_cut_off)
    {
        $this->container['operational_cut_off'] = $operational_cut_off;

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


