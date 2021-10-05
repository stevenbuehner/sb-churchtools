<?php
/**
 * AppointmentTemplate
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
 * OpenAPI Generator version: 5.2.1
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
 * AppointmentTemplate Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AppointmentTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppointmentTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'title' => 'string',
        'comment' => 'string',
        'start_time' => 'string',
        'duration' => 'int',
        'all_day' => 'bool',
        'note' => 'string',
        'is_internal' => 'bool',
        'category_id' => 'int',
        'repeat_id' => 'int',
        'repeat_frequence' => 'int',
        'repeat_option_id' => 'int',
        'repeat_duration' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'title' => null,
        'comment' => null,
        'start_time' => null,
        'duration' => null,
        'all_day' => null,
        'note' => null,
        'is_internal' => null,
        'category_id' => null,
        'repeat_id' => null,
        'repeat_frequence' => null,
        'repeat_option_id' => null,
        'repeat_duration' => null
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
        'id' => 'id',
        'title' => 'title',
        'comment' => 'comment',
        'start_time' => 'startTime',
        'duration' => 'duration',
        'all_day' => 'allDay',
        'note' => 'note',
        'is_internal' => 'isInternal',
        'category_id' => 'categoryId',
        'repeat_id' => 'repeatId',
        'repeat_frequence' => 'repeatFrequence',
        'repeat_option_id' => 'repeatOptionId',
        'repeat_duration' => 'repeatDuration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'comment' => 'setComment',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'all_day' => 'setAllDay',
        'note' => 'setNote',
        'is_internal' => 'setIsInternal',
        'category_id' => 'setCategoryId',
        'repeat_id' => 'setRepeatId',
        'repeat_frequence' => 'setRepeatFrequence',
        'repeat_option_id' => 'setRepeatOptionId',
        'repeat_duration' => 'setRepeatDuration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'comment' => 'getComment',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'all_day' => 'getAllDay',
        'note' => 'getNote',
        'is_internal' => 'getIsInternal',
        'category_id' => 'getCategoryId',
        'repeat_id' => 'getRepeatId',
        'repeat_frequence' => 'getRepeatFrequence',
        'repeat_option_id' => 'getRepeatOptionId',
        'repeat_duration' => 'getRepeatDuration'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['start_time'] = $data['start_time'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['all_day'] = $data['all_day'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['is_internal'] = $data['is_internal'] ?? null;
        $this->container['category_id'] = $data['category_id'] ?? null;
        $this->container['repeat_id'] = $data['repeat_id'] ?? null;
        $this->container['repeat_frequence'] = $data['repeat_frequence'] ?? null;
        $this->container['repeat_option_id'] = $data['repeat_option_id'] ?? null;
        $this->container['repeat_duration'] = $data['repeat_duration'] ?? null;
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
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets start_time
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string|null $start_time start_time
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Duration in seconds
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets all_day
     *
     * @return bool|null
     */
    public function getAllDay()
    {
        return $this->container['all_day'];
    }

    /**
     * Sets all_day
     *
     * @param bool|null $all_day all_day
     *
     * @return self
     */
    public function setAllDay($all_day)
    {
        $this->container['all_day'] = $all_day;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets is_internal
     *
     * @return bool|null
     */
    public function getIsInternal()
    {
        return $this->container['is_internal'];
    }

    /**
     * Sets is_internal
     *
     * @param bool|null $is_internal is_internal
     *
     * @return self
     */
    public function setIsInternal($is_internal)
    {
        $this->container['is_internal'] = $is_internal;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id category_id
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets repeat_id
     *
     * @return int|null
     */
    public function getRepeatId()
    {
        return $this->container['repeat_id'];
    }

    /**
     * Sets repeat_id
     *
     * @param int|null $repeat_id repeat_id
     *
     * @return self
     */
    public function setRepeatId($repeat_id)
    {
        $this->container['repeat_id'] = $repeat_id;

        return $this;
    }

    /**
     * Gets repeat_frequence
     *
     * @return int|null
     */
    public function getRepeatFrequence()
    {
        return $this->container['repeat_frequence'];
    }

    /**
     * Sets repeat_frequence
     *
     * @param int|null $repeat_frequence repeat_frequence
     *
     * @return self
     */
    public function setRepeatFrequence($repeat_frequence)
    {
        $this->container['repeat_frequence'] = $repeat_frequence;

        return $this;
    }

    /**
     * Gets repeat_option_id
     *
     * @return int|null
     */
    public function getRepeatOptionId()
    {
        return $this->container['repeat_option_id'];
    }

    /**
     * Sets repeat_option_id
     *
     * @param int|null $repeat_option_id repeat_option_id
     *
     * @return self
     */
    public function setRepeatOptionId($repeat_option_id)
    {
        $this->container['repeat_option_id'] = $repeat_option_id;

        return $this;
    }

    /**
     * Gets repeat_duration
     *
     * @return int|null
     */
    public function getRepeatDuration()
    {
        return $this->container['repeat_duration'];
    }

    /**
     * Sets repeat_duration
     *
     * @param int|null $repeat_duration repeat_duration
     *
     * @return self
     */
    public function setRepeatDuration($repeat_duration)
    {
        $this->container['repeat_duration'] = $repeat_duration;

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


