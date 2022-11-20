<?php
/**
 * GroupMeeting
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
 * GroupMeeting Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GroupMeeting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupMeeting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comment' => 'string',
        'date_from' => '\DateTime',
        'date_to' => '\DateTime',
        'id' => 'int',
        'is_canceled' => 'bool',
        'is_completed' => 'bool',
        'meta' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta',
        'num_guests' => 'int',
        'poll_result' => 'object',
        'statistics' => '\StevenBuehner\ChurchTools\Model\GetGroups200ResponseDataInnerSettingsGroupMeetingStatistics'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comment' => null,
        'date_from' => 'date-time',
        'date_to' => 'date-time',
        'id' => null,
        'is_canceled' => null,
        'is_completed' => null,
        'meta' => null,
        'num_guests' => null,
        'poll_result' => null,
        'statistics' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'comment' => false,
		'date_from' => false,
		'date_to' => false,
		'id' => false,
		'is_canceled' => false,
		'is_completed' => false,
		'meta' => false,
		'num_guests' => false,
		'poll_result' => false,
		'statistics' => false
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
        'comment' => 'comment',
        'date_from' => 'dateFrom',
        'date_to' => 'dateTo',
        'id' => 'id',
        'is_canceled' => 'isCanceled',
        'is_completed' => 'isCompleted',
        'meta' => 'meta',
        'num_guests' => 'numGuests',
        'poll_result' => 'pollResult',
        'statistics' => 'statistics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'id' => 'setId',
        'is_canceled' => 'setIsCanceled',
        'is_completed' => 'setIsCompleted',
        'meta' => 'setMeta',
        'num_guests' => 'setNumGuests',
        'poll_result' => 'setPollResult',
        'statistics' => 'setStatistics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'id' => 'getId',
        'is_canceled' => 'getIsCanceled',
        'is_completed' => 'getIsCompleted',
        'meta' => 'getMeta',
        'num_guests' => 'getNumGuests',
        'poll_result' => 'getPollResult',
        'statistics' => 'getStatistics'
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
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('date_from', $data ?? [], null);
        $this->setIfExists('date_to', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_canceled', $data ?? [], null);
        $this->setIfExists('is_completed', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('num_guests', $data ?? [], null);
        $this->setIfExists('poll_result', $data ?? [], null);
        $this->setIfExists('statistics', $data ?? [], null);
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
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {

        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets date_from
     *
     * @return \DateTime|null
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param \DateTime|null $date_from Start of the group meeting in UTC / Zulu format
     *
     * @return self
     */
    public function setDateFrom($date_from)
    {

        if (is_null($date_from)) {
            throw new \InvalidArgumentException('non-nullable date_from cannot be null');
        }

        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return \DateTime|null
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param \DateTime|null $date_to End of the group meeting in UTC / Zulu format
     *
     * @return self
     */
    public function setDateTo($date_to)
    {

        if (is_null($date_to)) {
            throw new \InvalidArgumentException('non-nullable date_to cannot be null');
        }

        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_canceled
     *
     * @return bool|null
     */
    public function getIsCanceled()
    {
        return $this->container['is_canceled'];
    }

    /**
     * Sets is_canceled
     *
     * @param bool|null $is_canceled is_canceled
     *
     * @return self
     */
    public function setIsCanceled($is_canceled)
    {

        if (is_null($is_canceled)) {
            throw new \InvalidArgumentException('non-nullable is_canceled cannot be null');
        }

        $this->container['is_canceled'] = $is_canceled;

        return $this;
    }

    /**
     * Gets is_completed
     *
     * @return bool|null
     */
    public function getIsCompleted()
    {
        return $this->container['is_completed'];
    }

    /**
     * Sets is_completed
     *
     * @param bool|null $is_completed is_completed
     *
     * @return self
     */
    public function setIsCompleted($is_completed)
    {

        if (is_null($is_completed)) {
            throw new \InvalidArgumentException('non-nullable is_completed cannot be null');
        }

        $this->container['is_completed'] = $is_completed;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {

        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }

        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets num_guests
     *
     * @return int|null
     */
    public function getNumGuests()
    {
        return $this->container['num_guests'];
    }

    /**
     * Sets num_guests
     *
     * @param int|null $num_guests num_guests
     *
     * @return self
     */
    public function setNumGuests($num_guests)
    {

        if (is_null($num_guests)) {
            throw new \InvalidArgumentException('non-nullable num_guests cannot be null');
        }

        $this->container['num_guests'] = $num_guests;

        return $this;
    }

    /**
     * Gets poll_result
     *
     * @return object|null
     */
    public function getPollResult()
    {
        return $this->container['poll_result'];
    }

    /**
     * Sets poll_result
     *
     * @param object|null $poll_result poll_result
     *
     * @return self
     */
    public function setPollResult($poll_result)
    {

        if (is_null($poll_result)) {
            throw new \InvalidArgumentException('non-nullable poll_result cannot be null');
        }

        $this->container['poll_result'] = $poll_result;

        return $this;
    }

    /**
     * Gets statistics
     *
     * @return \StevenBuehner\ChurchTools\Model\GetGroups200ResponseDataInnerSettingsGroupMeetingStatistics|null
     */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
     * Sets statistics
     *
     * @param \StevenBuehner\ChurchTools\Model\GetGroups200ResponseDataInnerSettingsGroupMeetingStatistics|null $statistics statistics
     *
     * @return self
     */
    public function setStatistics($statistics)
    {

        if (is_null($statistics)) {
            throw new \InvalidArgumentException('non-nullable statistics cannot be null');
        }

        $this->container['statistics'] = $statistics;

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


