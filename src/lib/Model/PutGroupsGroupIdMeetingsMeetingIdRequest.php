<?php
/**
 * PutGroupsGroupIdMeetingsMeetingIdRequest
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
 * PutGroupsGroupIdMeetingsMeetingIdRequest Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PutGroupsGroupIdMeetingsMeetingIdRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'put_groups_groupId_meetings_meetingId_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_from' => 'string',
        'date_to' => 'string',
        'is_completed' => 'bool',
        'is_canceled' => 'bool',
        'num_guests' => 'int',
        'comment' => 'string',
        'poll_result' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_from' => null,
        'date_to' => null,
        'is_completed' => null,
        'is_canceled' => null,
        'num_guests' => null,
        'comment' => null,
        'poll_result' => null
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
        'date_from' => 'dateFrom',
        'date_to' => 'dateTo',
        'is_completed' => 'isCompleted',
        'is_canceled' => 'isCanceled',
        'num_guests' => 'numGuests',
        'comment' => 'comment',
        'poll_result' => 'pollResult'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'is_completed' => 'setIsCompleted',
        'is_canceled' => 'setIsCanceled',
        'num_guests' => 'setNumGuests',
        'comment' => 'setComment',
        'poll_result' => 'setPollResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'is_completed' => 'getIsCompleted',
        'is_canceled' => 'getIsCanceled',
        'num_guests' => 'getNumGuests',
        'comment' => 'getComment',
        'poll_result' => 'getPollResult'
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
        $this->container['date_from'] = $data['date_from'] ?? null;
        $this->container['date_to'] = $data['date_to'] ?? null;
        $this->container['is_completed'] = $data['is_completed'] ?? null;
        $this->container['is_canceled'] = $data['is_canceled'] ?? null;
        $this->container['num_guests'] = $data['num_guests'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['poll_result'] = $data['poll_result'] ?? null;
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
     * Gets date_from
     *
     * @return string|null
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param string|null $date_from date_from
     *
     * @return self
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return string|null
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param string|null $date_to date_to
     *
     * @return self
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

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
        $this->container['is_completed'] = $is_completed;

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
        $this->container['is_canceled'] = $is_canceled;

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
        $this->container['num_guests'] = $num_guests;

        return $this;
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
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets poll_result
     *
     * @return string|null
     */
    public function getPollResult()
    {
        return $this->container['poll_result'];
    }

    /**
     * Sets poll_result
     *
     * @param string|null $poll_result poll_result
     *
     * @return self
     */
    public function setPollResult($poll_result)
    {
        $this->container['poll_result'] = $poll_result;

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


