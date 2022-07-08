<?php
/**
 * InlineResponse200126Address
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Model;

use \ArrayAccess;
use \StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * InlineResponse200126Address Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse200126Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_126_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'meeting_at' => 'string',
        'street' => 'string',
        'addition' => 'string',
        'district' => 'string',
        'zip' => 'string',
        'city' => 'string',
        'country' => 'mixed',
        'latitude' => 'string',
        'longitude' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'meeting_at' => null,
        'street' => null,
        'addition' => null,
        'district' => null,
        'zip' => null,
        'city' => null,
        'country' => null,
        'latitude' => null,
        'longitude' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'meeting_at' => 'meetingAt',
        'street' => 'street',
        'addition' => 'addition',
        'district' => 'district',
        'zip' => 'zip',
        'city' => 'city',
        'country' => 'country',
        'latitude' => 'latitude',
        'longitude' => 'longitude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meeting_at' => 'setMeetingAt',
        'street' => 'setStreet',
        'addition' => 'setAddition',
        'district' => 'setDistrict',
        'zip' => 'setZip',
        'city' => 'setCity',
        'country' => 'setCountry',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meeting_at' => 'getMeetingAt',
        'street' => 'getStreet',
        'addition' => 'getAddition',
        'district' => 'getDistrict',
        'zip' => 'getZip',
        'city' => 'getCity',
        'country' => 'getCountry',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude'
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
        return self::$openAPIModelName;
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
        $this->container['meeting_at'] = $data['meeting_at'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['addition'] = $data['addition'] ?? null;
        $this->container['district'] = $data['district'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['meeting_at'] === null) {
            $invalidProperties[] = "'meeting_at' can't be null";
        }
        if ((mb_strlen($this->container['meeting_at']) < 1)) {
            $invalidProperties[] = "invalid value for 'meeting_at', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ((mb_strlen($this->container['street']) < 1)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['addition'] === null) {
            $invalidProperties[] = "'addition' can't be null";
        }
        if ((mb_strlen($this->container['addition']) < 1)) {
            $invalidProperties[] = "invalid value for 'addition', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['district'] === null) {
            $invalidProperties[] = "'district' can't be null";
        }
        if ((mb_strlen($this->container['district']) < 1)) {
            $invalidProperties[] = "invalid value for 'district', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ((mb_strlen($this->container['zip']) < 1)) {
            $invalidProperties[] = "invalid value for 'zip', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['latitude'] === null) {
            $invalidProperties[] = "'latitude' can't be null";
        }
        if ($this->container['longitude'] === null) {
            $invalidProperties[] = "'longitude' can't be null";
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
     * Gets meeting_at
     *
     * @return string
     */
    public function getMeetingAt()
    {
        return $this->container['meeting_at'];
    }

    /**
     * Sets meeting_at
     *
     * @param string $meeting_at meeting_at
     *
     * @return self
     */
    public function setMeetingAt($meeting_at)
    {

        if ((mb_strlen($meeting_at) < 1)) {
            throw new \InvalidArgumentException('invalid length for $meeting_at when calling InlineResponse200126Address., must be bigger than or equal to 1.');
        }

        $this->container['meeting_at'] = $meeting_at;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return self
     */
    public function setStreet($street)
    {

        if ((mb_strlen($street) < 1)) {
            throw new \InvalidArgumentException('invalid length for $street when calling InlineResponse200126Address., must be bigger than or equal to 1.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets addition
     *
     * @return string
     */
    public function getAddition()
    {
        return $this->container['addition'];
    }

    /**
     * Sets addition
     *
     * @param string $addition addition
     *
     * @return self
     */
    public function setAddition($addition)
    {

        if ((mb_strlen($addition) < 1)) {
            throw new \InvalidArgumentException('invalid length for $addition when calling InlineResponse200126Address., must be bigger than or equal to 1.');
        }

        $this->container['addition'] = $addition;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district district
     *
     * @return self
     */
    public function setDistrict($district)
    {

        if ((mb_strlen($district) < 1)) {
            throw new \InvalidArgumentException('invalid length for $district when calling InlineResponse200126Address., must be bigger than or equal to 1.');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {

        if ((mb_strlen($zip) < 1)) {
            throw new \InvalidArgumentException('invalid length for $zip when calling InlineResponse200126Address., must be bigger than or equal to 1.');
        }

        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {

        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling InlineResponse200126Address., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return mixed|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param mixed|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


