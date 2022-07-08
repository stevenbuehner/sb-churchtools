<?php
/**
 * Place
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.0.1
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
 * Place Class Doc Comment
 *
 * @category Class
 * @description Place wehre e.g. a group meeting takes place
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Place implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Place';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'street' => 'string',
        'district' => 'string',
        'postalcode' => 'string',
        'city' => 'string',
        'marker_url' => 'string',
        'geo_lat' => 'string',
        'geo_lng' => 'string',
        'created_date' => 'string',
        'created_person' => '\StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200ResponseCreatedPerson'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'street' => null,
        'district' => null,
        'postalcode' => null,
        'city' => null,
        'marker_url' => null,
        'geo_lat' => null,
        'geo_lng' => null,
        'created_date' => null,
        'created_person' => null
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
        'name' => 'name',
        'street' => 'street',
        'district' => 'district',
        'postalcode' => 'postalcode',
        'city' => 'city',
        'marker_url' => 'markerUrl',
        'geo_lat' => 'geoLat',
        'geo_lng' => 'geoLng',
        'created_date' => 'createdDate',
        'created_person' => 'createdPerson'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'street' => 'setStreet',
        'district' => 'setDistrict',
        'postalcode' => 'setPostalcode',
        'city' => 'setCity',
        'marker_url' => 'setMarkerUrl',
        'geo_lat' => 'setGeoLat',
        'geo_lng' => 'setGeoLng',
        'created_date' => 'setCreatedDate',
        'created_person' => 'setCreatedPerson'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'street' => 'getStreet',
        'district' => 'getDistrict',
        'postalcode' => 'getPostalcode',
        'city' => 'getCity',
        'marker_url' => 'getMarkerUrl',
        'geo_lat' => 'getGeoLat',
        'geo_lng' => 'getGeoLng',
        'created_date' => 'getCreatedDate',
        'created_person' => 'getCreatedPerson'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['district'] = $data['district'] ?? null;
        $this->container['postalcode'] = $data['postalcode'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['marker_url'] = $data['marker_url'] ?? null;
        $this->container['geo_lat'] = $data['geo_lat'] ?? null;
        $this->container['geo_lng'] = $data['geo_lng'] ?? null;
        $this->container['created_date'] = $data['created_date'] ?? null;
        $this->container['created_person'] = $data['created_person'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) < 1)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['district']) && (mb_strlen($this->container['district']) < 1)) {
            $invalidProperties[] = "invalid value for 'district', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['postalcode']) && (mb_strlen($this->container['postalcode']) < 1)) {
            $invalidProperties[] = "invalid value for 'postalcode', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['marker_url']) && (mb_strlen($this->container['marker_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'marker_url', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['geo_lat']) && (mb_strlen($this->container['geo_lat']) < 1)) {
            $invalidProperties[] = "invalid value for 'geo_lat', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['geo_lng']) && (mb_strlen($this->container['geo_lng']) < 1)) {
            $invalidProperties[] = "invalid value for 'geo_lng', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['created_date']) && (mb_strlen($this->container['created_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'created_date', the character length must be bigger than or equal to 1.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the place or the person livning there
     *
     * @return self
     */
    public function setName($name)
    {

        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Street
     *
     * @return self
     */
    public function setStreet($street)
    {

        if (!is_null($street) && (mb_strlen($street) < 1)) {
            throw new \InvalidArgumentException('invalid length for $street when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district Disctrict
     *
     * @return self
     */
    public function setDistrict($district)
    {

        if (!is_null($district) && (mb_strlen($district) < 1)) {
            throw new \InvalidArgumentException('invalid length for $district when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets postalcode
     *
     * @return string|null
     */
    public function getPostalcode()
    {
        return $this->container['postalcode'];
    }

    /**
     * Sets postalcode
     *
     * @param string|null $postalcode Zip code of the place
     *
     * @return self
     */
    public function setPostalcode($postalcode)
    {

        if (!is_null($postalcode) && (mb_strlen($postalcode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postalcode when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['postalcode'] = $postalcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City
     *
     * @return self
     */
    public function setCity($city)
    {

        if (!is_null($city) && (mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets marker_url
     *
     * @return string|null
     */
    public function getMarkerUrl()
    {
        return $this->container['marker_url'];
    }

    /**
     * Sets marker_url
     *
     * @param string|null $marker_url url for the marker icon
     *
     * @return self
     */
    public function setMarkerUrl($marker_url)
    {

        if (!is_null($marker_url) && (mb_strlen($marker_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $marker_url when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['marker_url'] = $marker_url;

        return $this;
    }

    /**
     * Gets geo_lat
     *
     * @return string|null
     */
    public function getGeoLat()
    {
        return $this->container['geo_lat'];
    }

    /**
     * Sets geo_lat
     *
     * @param string|null $geo_lat Latitude
     *
     * @return self
     */
    public function setGeoLat($geo_lat)
    {

        if (!is_null($geo_lat) && (mb_strlen($geo_lat) < 1)) {
            throw new \InvalidArgumentException('invalid length for $geo_lat when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['geo_lat'] = $geo_lat;

        return $this;
    }

    /**
     * Gets geo_lng
     *
     * @return string|null
     */
    public function getGeoLng()
    {
        return $this->container['geo_lng'];
    }

    /**
     * Sets geo_lng
     *
     * @param string|null $geo_lng Longitude
     *
     * @return self
     */
    public function setGeoLng($geo_lng)
    {

        if (!is_null($geo_lng) && (mb_strlen($geo_lng) < 1)) {
            throw new \InvalidArgumentException('invalid length for $geo_lng when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['geo_lng'] = $geo_lng;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string|null $created_date Date of creation
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {

        if (!is_null($created_date) && (mb_strlen($created_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $created_date when calling Place., must be bigger than or equal to 1.');
        }

        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets created_person
     *
     * @return \StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200ResponseCreatedPerson|null
     */
    public function getCreatedPerson()
    {
        return $this->container['created_person'];
    }

    /**
     * Sets created_person
     *
     * @param \StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200ResponseCreatedPerson|null $created_person created_person
     *
     * @return self
     */
    public function setCreatedPerson($created_person)
    {
        $this->container['created_person'] = $created_person;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


