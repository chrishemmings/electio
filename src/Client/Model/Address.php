<?php
/**
 * Address
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
 * OpenAPI spec version: 1.0.9
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_type' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'town' => 'string',
        'region' => 'string',
        'region_code' => 'string',
        'postcode' => 'string',
        'country' => '\ChrisHemmings\Electio\Client\Model\Country',
        'company_name' => 'string',
        'shipping_location_reference' => 'string',
        'latitude_longitude' => '\ChrisHemmings\Electio\Client\Model\LatitudeLongitude',
        'special_instructions' => 'string',
        'contact' => '\ChrisHemmings\Electio\Client\Model\Contact'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_type' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'town' => null,
        'region' => null,
        'region_code' => null,
        'postcode' => null,
        'country' => null,
        'company_name' => null,
        'shipping_location_reference' => null,
        'latitude_longitude' => null,
        'special_instructions' => null,
        'contact' => null
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
        'address_type' => 'AddressType',
        'address_line1' => 'AddressLine1',
        'address_line2' => 'AddressLine2',
        'address_line3' => 'AddressLine3',
        'town' => 'Town',
        'region' => 'Region',
        'region_code' => 'RegionCode',
        'postcode' => 'Postcode',
        'country' => 'Country',
        'company_name' => 'CompanyName',
        'shipping_location_reference' => 'ShippingLocationReference',
        'latitude_longitude' => 'LatitudeLongitude',
        'special_instructions' => 'SpecialInstructions',
        'contact' => 'Contact'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_type' => 'setAddressType',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'town' => 'setTown',
        'region' => 'setRegion',
        'region_code' => 'setRegionCode',
        'postcode' => 'setPostcode',
        'country' => 'setCountry',
        'company_name' => 'setCompanyName',
        'shipping_location_reference' => 'setShippingLocationReference',
        'latitude_longitude' => 'setLatitudeLongitude',
        'special_instructions' => 'setSpecialInstructions',
        'contact' => 'setContact'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_type' => 'getAddressType',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'town' => 'getTown',
        'region' => 'getRegion',
        'region_code' => 'getRegionCode',
        'postcode' => 'getPostcode',
        'country' => 'getCountry',
        'company_name' => 'getCompanyName',
        'shipping_location_reference' => 'getShippingLocationReference',
        'latitude_longitude' => 'getLatitudeLongitude',
        'special_instructions' => 'getSpecialInstructions',
        'contact' => 'getContact'
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
        $this->container['address_type'] = isset($data['address_type']) ? $data['address_type'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['address_line3'] = isset($data['address_line3']) ? $data['address_line3'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['region_code'] = isset($data['region_code']) ? $data['region_code'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['shipping_location_reference'] = isset($data['shipping_location_reference']) ? $data['shipping_location_reference'] : null;
        $this->container['latitude_longitude'] = isset($data['latitude_longitude']) ? $data['latitude_longitude'] : null;
        $this->container['special_instructions'] = isset($data['special_instructions']) ? $data['special_instructions'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_type'] === null) {
            $invalidProperties[] = "'address_type' can't be null";
        }
        if ($this->container['address_line1'] === null) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['contact'] === null) {
            $invalidProperties[] = "'contact' can't be null";
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
     * Gets address_type
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string $address_type address_type
     *
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 address_line1
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string $address_line2 address_line2
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3
     *
     * @param string $address_line3 address_line3
     *
     * @return $this
     */
    public function setAddressLine3($address_line3)
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town town
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets region_code
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->container['region_code'];
    }

    /**
     * Sets region_code
     *
     * @param string $region_code region_code
     *
     * @return $this
     */
    public function setRegionCode($region_code)
    {
        $this->container['region_code'] = $region_code;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \ChrisHemmings\Electio\Client\Model\Country
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \ChrisHemmings\Electio\Client\Model\Country $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets shipping_location_reference
     *
     * @return string
     */
    public function getShippingLocationReference()
    {
        return $this->container['shipping_location_reference'];
    }

    /**
     * Sets shipping_location_reference
     *
     * @param string $shipping_location_reference shipping_location_reference
     *
     * @return $this
     */
    public function setShippingLocationReference($shipping_location_reference)
    {
        $this->container['shipping_location_reference'] = $shipping_location_reference;

        return $this;
    }

    /**
     * Gets latitude_longitude
     *
     * @return \ChrisHemmings\Electio\Client\Model\LatitudeLongitude
     */
    public function getLatitudeLongitude()
    {
        return $this->container['latitude_longitude'];
    }

    /**
     * Sets latitude_longitude
     *
     * @param \ChrisHemmings\Electio\Client\Model\LatitudeLongitude $latitude_longitude latitude_longitude
     *
     * @return $this
     */
    public function setLatitudeLongitude($latitude_longitude)
    {
        $this->container['latitude_longitude'] = $latitude_longitude;

        return $this;
    }

    /**
     * Gets special_instructions
     *
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->container['special_instructions'];
    }

    /**
     * Sets special_instructions
     *
     * @param string $special_instructions special_instructions
     *
     * @return $this
     */
    public function setSpecialInstructions($special_instructions)
    {
        $this->container['special_instructions'] = $special_instructions;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \ChrisHemmings\Electio\Client\Model\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \ChrisHemmings\Electio\Client\Model\Contact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

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


