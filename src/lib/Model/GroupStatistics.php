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
 * OpenAPI Generator version: 6.2.1
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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'all_places' => false,
		'free_places' => true,
		'requested_places' => false,
		'taken_places' => false,
		'waitinglist_places' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        $this->setIfExists('all_places', $data ?? [], null);
        $this->setIfExists('free_places', $data ?? [], null);
        $this->setIfExists('requested_places', $data ?? [], null);
        $this->setIfExists('taken_places', $data ?? [], null);
        $this->setIfExists('waitinglist_places', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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

        if (is_null($all_places)) {
            throw new \InvalidArgumentException('non-nullable all_places cannot be null');
        }

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

        if (is_null($free_places)) {
            array_push($this->openAPINullablesSetToNull, 'free_places');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('free_places', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

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

        if (is_null($requested_places)) {
            throw new \InvalidArgumentException('non-nullable requested_places cannot be null');
        }

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

        if (is_null($taken_places)) {
            throw new \InvalidArgumentException('non-nullable taken_places cannot be null');
        }

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

        if (is_null($waitinglist_places)) {
            throw new \InvalidArgumentException('non-nullable waitinglist_places cannot be null');
        }

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


