<?php
/**
 * InlineResponse200130Base
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
 * InlineResponse200130Base Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse200130Base implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_130_base';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'caption' => 'string',
        'note' => 'string',
        'version' => 'int',
        'calendar' => '\StevenBuehner\ChurchTools\Model\InlineResponse200128DataResourceTypes',
        'information' => 'string',
        'link' => 'string',
        'is_internal' => 'bool',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'repeat_id' => 'int',
        'repeat_frequency' => 'mixed',
        'repeat_until' => 'mixed',
        'repeat_option' => 'mixed',
        'additions' => '\StevenBuehner\ChurchTools\Model\InlineResponse200130BaseAdditions[]',
        'exceptions' => '\StevenBuehner\ChurchTools\Model\InlineResponse200130BaseExceptions[]',
        'signup' => 'object',
        'meta' => '\StevenBuehner\ChurchTools\Model\InlineResponse200130BaseMeta2'
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
        'caption' => null,
        'note' => null,
        'version' => null,
        'calendar' => null,
        'information' => null,
        'link' => null,
        'is_internal' => null,
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'repeat_id' => null,
        'repeat_frequency' => null,
        'repeat_until' => 'date-time',
        'repeat_option' => null,
        'additions' => null,
        'exceptions' => null,
        'signup' => null,
        'meta' => null
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
        'caption' => 'caption',
        'note' => 'note',
        'version' => 'version',
        'calendar' => 'calendar',
        'information' => 'information',
        'link' => 'link',
        'is_internal' => 'isInternal',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'repeat_id' => 'repeatId',
        'repeat_frequency' => 'repeatFrequency',
        'repeat_until' => 'repeatUntil',
        'repeat_option' => 'repeatOption',
        'additions' => 'additions',
        'exceptions' => 'exceptions',
        'signup' => 'signup',
        'meta' => 'meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'caption' => 'setCaption',
        'note' => 'setNote',
        'version' => 'setVersion',
        'calendar' => 'setCalendar',
        'information' => 'setInformation',
        'link' => 'setLink',
        'is_internal' => 'setIsInternal',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'repeat_id' => 'setRepeatId',
        'repeat_frequency' => 'setRepeatFrequency',
        'repeat_until' => 'setRepeatUntil',
        'repeat_option' => 'setRepeatOption',
        'additions' => 'setAdditions',
        'exceptions' => 'setExceptions',
        'signup' => 'setSignup',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'caption' => 'getCaption',
        'note' => 'getNote',
        'version' => 'getVersion',
        'calendar' => 'getCalendar',
        'information' => 'getInformation',
        'link' => 'getLink',
        'is_internal' => 'getIsInternal',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'repeat_id' => 'getRepeatId',
        'repeat_frequency' => 'getRepeatFrequency',
        'repeat_until' => 'getRepeatUntil',
        'repeat_option' => 'getRepeatOption',
        'additions' => 'getAdditions',
        'exceptions' => 'getExceptions',
        'signup' => 'getSignup',
        'meta' => 'getMeta'
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
        $this->container['caption'] = $data['caption'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['calendar'] = $data['calendar'] ?? null;
        $this->container['information'] = $data['information'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['is_internal'] = $data['is_internal'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['repeat_id'] = $data['repeat_id'] ?? null;
        $this->container['repeat_frequency'] = $data['repeat_frequency'] ?? null;
        $this->container['repeat_until'] = $data['repeat_until'] ?? null;
        $this->container['repeat_option'] = $data['repeat_option'] ?? null;
        $this->container['additions'] = $data['additions'] ?? null;
        $this->container['exceptions'] = $data['exceptions'] ?? null;
        $this->container['signup'] = $data['signup'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
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
     * Gets caption
     *
     * @return string|null
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string|null $caption caption
     *
     * @return self
     */
    public function setCaption($caption)
    {
        $this->container['caption'] = $caption;

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
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets calendar
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200128DataResourceTypes|null
     */
    public function getCalendar()
    {
        return $this->container['calendar'];
    }

    /**
     * Sets calendar
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse200128DataResourceTypes|null $calendar calendar
     *
     * @return self
     */
    public function setCalendar($calendar)
    {
        $this->container['calendar'] = $calendar;

        return $this;
    }

    /**
     * Gets information
     *
     * @return string|null
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param string|null $information information
     *
     * @return self
     */
    public function setInformation($information)
    {
        $this->container['information'] = $information;

        return $this;
    }

    /**
     * Gets link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link link
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * Gets repeat_frequency
     *
     * @return mixed|null
     */
    public function getRepeatFrequency()
    {
        return $this->container['repeat_frequency'];
    }

    /**
     * Sets repeat_frequency
     *
     * @param mixed|null $repeat_frequency repeat_frequency
     *
     * @return self
     */
    public function setRepeatFrequency($repeat_frequency)
    {
        $this->container['repeat_frequency'] = $repeat_frequency;

        return $this;
    }

    /**
     * Gets repeat_until
     *
     * @return mixed|null
     */
    public function getRepeatUntil()
    {
        return $this->container['repeat_until'];
    }

    /**
     * Sets repeat_until
     *
     * @param mixed|null $repeat_until repeat_until
     *
     * @return self
     */
    public function setRepeatUntil($repeat_until)
    {
        $this->container['repeat_until'] = $repeat_until;

        return $this;
    }

    /**
     * Gets repeat_option
     *
     * @return mixed|null
     */
    public function getRepeatOption()
    {
        return $this->container['repeat_option'];
    }

    /**
     * Sets repeat_option
     *
     * @param mixed|null $repeat_option repeat_option
     *
     * @return self
     */
    public function setRepeatOption($repeat_option)
    {
        $this->container['repeat_option'] = $repeat_option;

        return $this;
    }

    /**
     * Gets additions
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200130BaseAdditions[]|null
     */
    public function getAdditions()
    {
        return $this->container['additions'];
    }

    /**
     * Sets additions
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse200130BaseAdditions[]|null $additions additions
     *
     * @return self
     */
    public function setAdditions($additions)
    {
        $this->container['additions'] = $additions;

        return $this;
    }

    /**
     * Gets exceptions
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200130BaseExceptions[]|null
     */
    public function getExceptions()
    {
        return $this->container['exceptions'];
    }

    /**
     * Sets exceptions
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse200130BaseExceptions[]|null $exceptions exceptions
     *
     * @return self
     */
    public function setExceptions($exceptions)
    {
        $this->container['exceptions'] = $exceptions;

        return $this;
    }

    /**
     * Gets signup
     *
     * @return object|null
     */
    public function getSignup()
    {
        return $this->container['signup'];
    }

    /**
     * Sets signup
     *
     * @param object|null $signup signup
     *
     * @return self
     */
    public function setSignup($signup)
    {
        $this->container['signup'] = $signup;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200130BaseMeta2|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse200130BaseMeta2|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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


