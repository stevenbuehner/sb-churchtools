<?php
/**
 * GroupStatistics
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
 * GroupStatistics Class Doc Comment
 *
 * @category Class
 * @description Calculated facts about one group.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GroupStatistics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Group_Statistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'all_places' => 'int',
        'free_places' => 'int',
        'requested_places' => 'int',
        'taken_places' => 'int',
        'waitinglist_places' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'all_places' => null,
        'free_places' => null,
        'requested_places' => null,
        'taken_places' => null,
        'waitinglist_places' => null
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
        'all_places' => 'allPlaces',
        'free_places' => 'freePlaces',
        'requested_places' => 'requestedPlaces',
        'taken_places' => 'takenPlaces',
        'waitinglist_places' => 'waitinglistPlaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all_places' => 'setAllPlaces',
        'free_places' => 'setFreePlaces',
        'requested_places' => 'setRequestedPlaces',
        'taken_places' => 'setTakenPlaces',
        'waitinglist_places' => 'setWaitinglistPlaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all_places' => 'getAllPlaces',
        'free_places' => 'getFreePlaces',
        'requested_places' => 'getRequestedPlaces',
        'taken_places' => 'getTakenPlaces',
        'waitinglist_places' => 'getWaitinglistPlaces'
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
        $this->container['all_places'] = $data['all_places'] ?? null;
        $this->container['free_places'] = $data['free_places'] ?? null;
        $this->container['requested_places'] = $data['requested_places'] ?? null;
        $this->container['taken_places'] = $data['taken_places'] ?? null;
        $this->container['waitinglist_places'] = $data['waitinglist_places'] ?? null;
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
     * Gets all_places
     *
     * @return int|null
     */
    public function getAllPlaces()
    {
        return $this->container['all_places'];
    }

    /**
     * Sets all_places
     *
     * @param int|null $all_places Count of all members (excluding hidden roles and to delete)
     *
     * @return self
     */
    public function setAllPlaces($all_places)
    {
        $this->container['all_places'] = $all_places;

        return $this;
    }

    /**
     * Gets free_places
     *
     * @return int|null
     */
    public function getFreePlaces()
    {
        return $this->container['free_places'];
    }

    /**
     * Sets free_places
     *
     * @param int|null $free_places Count of free places in group
     *
     * @return self
     */
    public function setFreePlaces($free_places)
    {
        $this->container['free_places'] = $free_places;

        return $this;
    }

    /**
     * Gets requested_places
     *
     * @return int|null
     */
    public function getRequestedPlaces()
    {
        return $this->container['requested_places'];
    }

    /**
     * Sets requested_places
     *
     * @param int|null $requested_places Count of requested places
     *
     * @return self
     */
    public function setRequestedPlaces($requested_places)
    {
        $this->container['requested_places'] = $requested_places;

        return $this;
    }

    /**
     * Gets taken_places
     *
     * @return int|null
     */
    public function getTakenPlaces()
    {
        return $this->container['taken_places'];
    }

    /**
     * Sets taken_places
     *
     * @param int|null $taken_places Count of taken places in group
     *
     * @return self
     */
    public function setTakenPlaces($taken_places)
    {
        $this->container['taken_places'] = $taken_places;

        return $this;
    }

    /**
     * Gets waitinglist_places
     *
     * @return int|null
     */
    public function getWaitinglistPlaces()
    {
        return $this->container['waitinglist_places'];
    }

    /**
     * Sets waitinglist_places
     *
     * @param int|null $waitinglist_places Count of people on waiting list
     *
     * @return self
     */
    public function setWaitinglistPlaces($waitinglist_places)
    {
        $this->container['waitinglist_places'] = $waitinglist_places;

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


