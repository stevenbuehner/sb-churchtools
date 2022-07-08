<?php
/**
 * GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase
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
 * GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_calendars_calendarId_appointments_appointmentId_startDate_200_response_data_appointment_base';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'caption' => 'string',
        'note' => 'string',
        'version' => 'float',
        'calendar' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseCalendar',
        'information' => 'string',
        'link' => 'string',
        'is_internal' => 'bool',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'all_day' => 'bool',
        'repeat_id' => 'float',
        'repeat_frequency' => 'mixed',
        'repeat_until' => '\DateTime',
        'repeat_option' => 'mixed',
        'additions' => 'object[]',
        'exceptions' => 'object[]',
        'signup' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseSignup',
        'meta' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseMeta'
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
        'all_day' => null,
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
        'all_day' => 'allDay',
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
        'all_day' => 'setAllDay',
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
        'all_day' => 'getAllDay',
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
        $this->container['all_day'] = $data['all_day'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['caption'] === null) {
            $invalidProperties[] = "'caption' can't be null";
        }
        if ((mb_strlen($this->container['caption']) < 1)) {
            $invalidProperties[] = "invalid value for 'caption', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['calendar'] === null) {
            $invalidProperties[] = "'calendar' can't be null";
        }
        if ($this->container['information'] === null) {
            $invalidProperties[] = "'information' can't be null";
        }
        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['is_internal'] === null) {
            $invalidProperties[] = "'is_internal' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if ((mb_strlen($this->container['start_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'start_date', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/2022-03-16T18:00:00.000000Z/", $this->container['start_date'])) {
            $invalidProperties[] = "invalid value for 'start_date', must be conform to the pattern /2022-03-16T18:00:00.000000Z/.";
        }

        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if ((mb_strlen($this->container['end_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'end_date', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/2022-03-16T18:00:00.000000Z/", $this->container['end_date'])) {
            $invalidProperties[] = "invalid value for 'end_date', must be conform to the pattern /2022-03-16T18:00:00.000000Z/.";
        }

        if ($this->container['all_day'] === null) {
            $invalidProperties[] = "'all_day' can't be null";
        }
        if ($this->container['repeat_id'] === null) {
            $invalidProperties[] = "'repeat_id' can't be null";
        }
        if (!is_null($this->container['repeat_until']) && !preg_match("/2022-03-16T18:00:00.000000Z/", $this->container['repeat_until'])) {
            $invalidProperties[] = "invalid value for 'repeat_until', must be conform to the pattern /2022-03-16T18:00:00.000000Z/.";
        }

        if ($this->container['additions'] === null) {
            $invalidProperties[] = "'additions' can't be null";
        }
        if ($this->container['exceptions'] === null) {
            $invalidProperties[] = "'exceptions' can't be null";
        }
        if ($this->container['signup'] === null) {
            $invalidProperties[] = "'signup' can't be null";
        }
        if ($this->container['meta'] === null) {
            $invalidProperties[] = "'meta' can't be null";
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
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
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
     * @return string
     */
    public function getCaption()
    {
        return $this->container['caption'];
    }

    /**
     * Sets caption
     *
     * @param string $caption caption
     *
     * @return self
     */
    public function setCaption($caption)
    {

        if ((mb_strlen($caption) < 1)) {
            throw new \InvalidArgumentException('invalid length for $caption when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase., must be bigger than or equal to 1.');
        }

        $this->container['caption'] = $caption;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
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
     * @return float
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param float $version version
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
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseCalendar
     */
    public function getCalendar()
    {
        return $this->container['calendar'];
    }

    /**
     * Sets calendar
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseCalendar $calendar calendar
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
     * @return string
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param string $information information
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
     * @return string
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link link
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
     * @return bool
     */
    public function getIsInternal()
    {
        return $this->container['is_internal'];
    }

    /**
     * Sets is_internal
     *
     * @param bool $is_internal is_internal
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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return self
     */
    public function setStartDate($start_date)
    {

        if ((mb_strlen($start_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $start_date when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/2022-03-16T18:00:00.000000Z/", $start_date))) {
            throw new \InvalidArgumentException("invalid value for $start_date when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase., must conform to the pattern /2022-03-16T18:00:00.000000Z/.");
        }

        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if ((mb_strlen($end_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $end_date when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/2022-03-16T18:00:00.000000Z/", $end_date))) {
            throw new \InvalidArgumentException("invalid value for $end_date when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase., must conform to the pattern /2022-03-16T18:00:00.000000Z/.");
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets all_day
     *
     * @return bool
     */
    public function getAllDay()
    {
        return $this->container['all_day'];
    }

    /**
     * Sets all_day
     *
     * @param bool $all_day all_day
     *
     * @return self
     */
    public function setAllDay($all_day)
    {
        $this->container['all_day'] = $all_day;

        return $this;
    }

    /**
     * Gets repeat_id
     *
     * @return float
     */
    public function getRepeatId()
    {
        return $this->container['repeat_id'];
    }

    /**
     * Sets repeat_id
     *
     * @param float $repeat_id repeat_id
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
     * @return \DateTime|null
     */
    public function getRepeatUntil()
    {
        return $this->container['repeat_until'];
    }

    /**
     * Sets repeat_until
     *
     * @param \DateTime|null $repeat_until repeat_until
     *
     * @return self
     */
    public function setRepeatUntil($repeat_until)
    {

        if (!is_null($repeat_until) && (!preg_match("/2022-03-16T18:00:00.000000Z/", $repeat_until))) {
            throw new \InvalidArgumentException("invalid value for $repeat_until when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase., must conform to the pattern /2022-03-16T18:00:00.000000Z/.");
        }

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
     * @return object[]
     */
    public function getAdditions()
    {
        return $this->container['additions'];
    }

    /**
     * Sets additions
     *
     * @param object[] $additions additions
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
     * @return object[]
     */
    public function getExceptions()
    {
        return $this->container['exceptions'];
    }

    /**
     * Sets exceptions
     *
     * @param object[] $exceptions exceptions
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
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseSignup
     */
    public function getSignup()
    {
        return $this->container['signup'];
    }

    /**
     * Sets signup
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseSignup $signup signup
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
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseMeta
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseMeta $meta meta
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


