<?php
/**
 * GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseData
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
 * GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseData Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_calendars_calendarId_appointments_appointmentId_startDate_200_response_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appointment' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointment',
        'event' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataEvent',
        'group' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataGroup',
        'bookings' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInner[]',
        'meeting_requests' => '\StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appointment' => null,
        'event' => null,
        'group' => null,
        'bookings' => null,
        'meeting_requests' => null
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
        'appointment' => 'appointment',
        'event' => 'event',
        'group' => 'group',
        'bookings' => 'bookings',
        'meeting_requests' => 'meetingRequests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment' => 'setAppointment',
        'event' => 'setEvent',
        'group' => 'setGroup',
        'bookings' => 'setBookings',
        'meeting_requests' => 'setMeetingRequests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment' => 'getAppointment',
        'event' => 'getEvent',
        'group' => 'getGroup',
        'bookings' => 'getBookings',
        'meeting_requests' => 'getMeetingRequests'
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
        $this->container['appointment'] = $data['appointment'] ?? null;
        $this->container['event'] = $data['event'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['bookings'] = $data['bookings'] ?? null;
        $this->container['meeting_requests'] = $data['meeting_requests'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['appointment'] === null) {
            $invalidProperties[] = "'appointment' can't be null";
        }
        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['bookings'] === null) {
            $invalidProperties[] = "'bookings' can't be null";
        }
        if ((count($this->container['bookings']) < 1)) {
            $invalidProperties[] = "invalid value for 'bookings', number of items must be greater than or equal to 1.";
        }

        if ($this->container['meeting_requests'] === null) {
            $invalidProperties[] = "'meeting_requests' can't be null";
        }
        if ((count($this->container['meeting_requests']) < 1)) {
            $invalidProperties[] = "invalid value for 'meeting_requests', number of items must be greater than or equal to 1.";
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
     * Gets appointment
     *
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointment
     */
    public function getAppointment()
    {
        return $this->container['appointment'];
    }

    /**
     * Sets appointment
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointment $appointment appointment
     *
     * @return self
     */
    public function setAppointment($appointment)
    {
        $this->container['appointment'] = $appointment;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataEvent
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataEvent $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataGroup $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets bookings
     *
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInner[]
     */
    public function getBookings()
    {
        return $this->container['bookings'];
    }

    /**
     * Sets bookings
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInner[] $bookings bookings
     *
     * @return self
     */
    public function setBookings($bookings)
    {


        if ((count($bookings) < 1)) {
            throw new \InvalidArgumentException('invalid length for $bookings when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseData., number of items must be greater than or equal to 1.');
        }
        $this->container['bookings'] = $bookings;

        return $this;
    }

    /**
     * Gets meeting_requests
     *
     * @return \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner[]
     */
    public function getMeetingRequests()
    {
        return $this->container['meeting_requests'];
    }

    /**
     * Sets meeting_requests
     *
     * @param \StevenBuehner\ChurchTools\Model\GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner[] $meeting_requests meeting_requests
     *
     * @return self
     */
    public function setMeetingRequests($meeting_requests)
    {


        if ((count($meeting_requests) < 1)) {
            throw new \InvalidArgumentException('invalid length for $meeting_requests when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseData., number of items must be greater than or equal to 1.');
        }
        $this->container['meeting_requests'] = $meeting_requests;

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


