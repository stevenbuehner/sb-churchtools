<?php
/**
 * GetBookings200ResponseDataInnerBase
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
 * OpenAPI Generator version: 6.4.0
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
 * GetBookings200ResponseDataInnerBase Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetBookings200ResponseDataInnerBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_bookings_200_response_data_inner_base';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additionals' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseAdditionalsInner[]',
        'all_day' => 'bool',
        'cal_id' => 'int',
        'caption' => 'string',
        'end_date' => '\DateTime',
        'exceptions' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseExceptionsInner[]',
        'id' => 'int',
        'location' => 'string',
        'meta' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta',
        'note' => 'string',
        'person_id' => 'int',
        'repeat_frequency' => 'int',
        'repeat_id' => 'int',
        'repeat_option' => 'int',
        'repeat_until' => '\DateTime',
        'resource' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseResource',
        'show_in_cal' => 'bool',
        'start_date' => '\DateTime',
        'status_id' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additionals' => null,
        'all_day' => null,
        'cal_id' => null,
        'caption' => null,
        'end_date' => 'date-time',
        'exceptions' => null,
        'id' => null,
        'location' => null,
        'meta' => null,
        'note' => null,
        'person_id' => null,
        'repeat_frequency' => null,
        'repeat_id' => null,
        'repeat_option' => null,
        'repeat_until' => 'date-time',
        'resource' => null,
        'show_in_cal' => null,
        'start_date' => 'date-time',
        'status_id' => null,
        'version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'additionals' => false,
		'all_day' => false,
		'cal_id' => true,
		'caption' => false,
		'end_date' => false,
		'exceptions' => false,
		'id' => false,
		'location' => true,
		'meta' => false,
		'note' => false,
		'person_id' => false,
		'repeat_frequency' => true,
		'repeat_id' => false,
		'repeat_option' => true,
		'repeat_until' => true,
		'resource' => false,
		'show_in_cal' => false,
		'start_date' => false,
		'status_id' => false,
		'version' => false
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
        'additionals' => 'additionals',
        'all_day' => 'allDay',
        'cal_id' => 'calId',
        'caption' => 'caption',
        'end_date' => 'endDate',
        'exceptions' => 'exceptions',
        'id' => 'id',
        'location' => 'location',
        'meta' => 'meta',
        'note' => 'note',
        'person_id' => 'personId',
        'repeat_frequency' => 'repeatFrequency',
        'repeat_id' => 'repeatId',
        'repeat_option' => 'repeatOption',
        'repeat_until' => 'repeatUntil',
        'resource' => 'resource',
        'show_in_cal' => 'showInCal',
        'start_date' => 'startDate',
        'status_id' => 'statusId',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additionals' => 'setAdditionals',
        'all_day' => 'setAllDay',
        'cal_id' => 'setCalId',
        'caption' => 'setCaption',
        'end_date' => 'setEndDate',
        'exceptions' => 'setExceptions',
        'id' => 'setId',
        'location' => 'setLocation',
        'meta' => 'setMeta',
        'note' => 'setNote',
        'person_id' => 'setPersonId',
        'repeat_frequency' => 'setRepeatFrequency',
        'repeat_id' => 'setRepeatId',
        'repeat_option' => 'setRepeatOption',
        'repeat_until' => 'setRepeatUntil',
        'resource' => 'setResource',
        'show_in_cal' => 'setShowInCal',
        'start_date' => 'setStartDate',
        'status_id' => 'setStatusId',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additionals' => 'getAdditionals',
        'all_day' => 'getAllDay',
        'cal_id' => 'getCalId',
        'caption' => 'getCaption',
        'end_date' => 'getEndDate',
        'exceptions' => 'getExceptions',
        'id' => 'getId',
        'location' => 'getLocation',
        'meta' => 'getMeta',
        'note' => 'getNote',
        'person_id' => 'getPersonId',
        'repeat_frequency' => 'getRepeatFrequency',
        'repeat_id' => 'getRepeatId',
        'repeat_option' => 'getRepeatOption',
        'repeat_until' => 'getRepeatUntil',
        'resource' => 'getResource',
        'show_in_cal' => 'getShowInCal',
        'start_date' => 'getStartDate',
        'status_id' => 'getStatusId',
        'version' => 'getVersion'
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
        $this->setIfExists('additionals', $data ?? [], null);
        $this->setIfExists('all_day', $data ?? [], null);
        $this->setIfExists('cal_id', $data ?? [], null);
        $this->setIfExists('caption', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('exceptions', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('person_id', $data ?? [], null);
        $this->setIfExists('repeat_frequency', $data ?? [], null);
        $this->setIfExists('repeat_id', $data ?? [], null);
        $this->setIfExists('repeat_option', $data ?? [], null);
        $this->setIfExists('repeat_until', $data ?? [], null);
        $this->setIfExists('resource', $data ?? [], null);
        $this->setIfExists('show_in_cal', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('status_id', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
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
     * Gets additionals
     *
     * @return \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseAdditionalsInner[]|null
     */
    public function getAdditionals()
    {
        return $this->container['additionals'];
    }

    /**
     * Sets additionals
     *
     * @param \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseAdditionalsInner[]|null $additionals additionals
     *
     * @return self
     */
    public function setAdditionals($additionals)
    {
        if (is_null($additionals)) {
            throw new \InvalidArgumentException('non-nullable additionals cannot be null');
        }
        $this->container['additionals'] = $additionals;

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
        if (is_null($all_day)) {
            throw new \InvalidArgumentException('non-nullable all_day cannot be null');
        }
        $this->container['all_day'] = $all_day;

        return $this;
    }

    /**
     * Gets cal_id
     *
     * @return int|null
     */
    public function getCalId()
    {
        return $this->container['cal_id'];
    }

    /**
     * Sets cal_id
     *
     * @param int|null $cal_id cal_id
     *
     * @return self
     */
    public function setCalId($cal_id)
    {
        if (is_null($cal_id)) {
            array_push($this->openAPINullablesSetToNull, 'cal_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cal_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cal_id'] = $cal_id;

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
        if (is_null($caption)) {
            throw new \InvalidArgumentException('non-nullable caption cannot be null');
        }
        $this->container['caption'] = $caption;

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
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets exceptions
     *
     * @return \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseExceptionsInner[]|null
     */
    public function getExceptions()
    {
        return $this->container['exceptions'];
    }

    /**
     * Sets exceptions
     *
     * @param \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseExceptionsInner[]|null $exceptions exceptions
     *
     * @return self
     */
    public function setExceptions($exceptions)
    {
        if (is_null($exceptions)) {
            throw new \InvalidArgumentException('non-nullable exceptions cannot be null');
        }
        $this->container['exceptions'] = $exceptions;

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
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            array_push($this->openAPINullablesSetToNull, 'location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['location'] = $location;

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
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return int|null
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int|null $person_id person_id
     *
     * @return self
     */
    public function setPersonId($person_id)
    {
        if (is_null($person_id)) {
            throw new \InvalidArgumentException('non-nullable person_id cannot be null');
        }
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets repeat_frequency
     *
     * @return int|null
     */
    public function getRepeatFrequency()
    {
        return $this->container['repeat_frequency'];
    }

    /**
     * Sets repeat_frequency
     *
     * @param int|null $repeat_frequency repeat_frequency
     *
     * @return self
     */
    public function setRepeatFrequency($repeat_frequency)
    {
        if (is_null($repeat_frequency)) {
            array_push($this->openAPINullablesSetToNull, 'repeat_frequency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('repeat_frequency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['repeat_frequency'] = $repeat_frequency;

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
        if (is_null($repeat_id)) {
            throw new \InvalidArgumentException('non-nullable repeat_id cannot be null');
        }
        $this->container['repeat_id'] = $repeat_id;

        return $this;
    }

    /**
     * Gets repeat_option
     *
     * @return int|null
     */
    public function getRepeatOption()
    {
        return $this->container['repeat_option'];
    }

    /**
     * Sets repeat_option
     *
     * @param int|null $repeat_option repeat_option
     *
     * @return self
     */
    public function setRepeatOption($repeat_option)
    {
        if (is_null($repeat_option)) {
            array_push($this->openAPINullablesSetToNull, 'repeat_option');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('repeat_option', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['repeat_option'] = $repeat_option;

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
        if (is_null($repeat_until)) {
            array_push($this->openAPINullablesSetToNull, 'repeat_until');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('repeat_until', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['repeat_until'] = $repeat_until;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseResource|null
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseResource|null $resource resource
     *
     * @return self
     */
    public function setResource($resource)
    {
        if (is_null($resource)) {
            throw new \InvalidArgumentException('non-nullable resource cannot be null');
        }
        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets show_in_cal
     *
     * @return bool|null
     */
    public function getShowInCal()
    {
        return $this->container['show_in_cal'];
    }

    /**
     * Sets show_in_cal
     *
     * @param bool|null $show_in_cal show_in_cal
     *
     * @return self
     */
    public function setShowInCal($show_in_cal)
    {
        if (is_null($show_in_cal)) {
            throw new \InvalidArgumentException('non-nullable show_in_cal cannot be null');
        }
        $this->container['show_in_cal'] = $show_in_cal;

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
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return int|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param int|null $status_id status_id
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        if (is_null($status_id)) {
            throw new \InvalidArgumentException('non-nullable status_id cannot be null');
        }
        $this->container['status_id'] = $status_id;

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
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

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


