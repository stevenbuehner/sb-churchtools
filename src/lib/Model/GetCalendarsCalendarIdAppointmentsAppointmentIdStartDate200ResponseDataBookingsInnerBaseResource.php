<?php
/**
 * GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource
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
 * GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_calendars_calendarId_appointments_appointmentId_startDate_200_response_data_bookings_inner_base_resource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'admin_ids' => 'mixed',
        'does_require_cal_entry' => 'bool',
        'i_cal_location' => 'string',
        'id' => 'int',
        'is_auto_accept' => 'bool',
        'is_virtual' => 'bool',
        'location' => 'string',
        'name' => 'string',
        'name_translated' => 'string',
        'random_string' => 'string',
        'resource_type_id' => 'int',
        'sort_key' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'admin_ids' => null,
        'does_require_cal_entry' => null,
        'i_cal_location' => null,
        'id' => null,
        'is_auto_accept' => null,
        'is_virtual' => null,
        'location' => null,
        'name' => null,
        'name_translated' => null,
        'random_string' => null,
        'resource_type_id' => null,
        'sort_key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'admin_ids' => true,
		'does_require_cal_entry' => false,
		'i_cal_location' => true,
		'id' => false,
		'is_auto_accept' => false,
		'is_virtual' => false,
		'location' => true,
		'name' => false,
		'name_translated' => false,
		'random_string' => false,
		'resource_type_id' => false,
		'sort_key' => false
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
        'admin_ids' => 'adminIds',
        'does_require_cal_entry' => 'doesRequireCalEntry',
        'i_cal_location' => 'iCalLocation',
        'id' => 'id',
        'is_auto_accept' => 'isAutoAccept',
        'is_virtual' => 'isVirtual',
        'location' => 'location',
        'name' => 'name',
        'name_translated' => 'nameTranslated',
        'random_string' => 'randomString',
        'resource_type_id' => 'resourceTypeId',
        'sort_key' => 'sortKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_ids' => 'setAdminIds',
        'does_require_cal_entry' => 'setDoesRequireCalEntry',
        'i_cal_location' => 'setICalLocation',
        'id' => 'setId',
        'is_auto_accept' => 'setIsAutoAccept',
        'is_virtual' => 'setIsVirtual',
        'location' => 'setLocation',
        'name' => 'setName',
        'name_translated' => 'setNameTranslated',
        'random_string' => 'setRandomString',
        'resource_type_id' => 'setResourceTypeId',
        'sort_key' => 'setSortKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_ids' => 'getAdminIds',
        'does_require_cal_entry' => 'getDoesRequireCalEntry',
        'i_cal_location' => 'getICalLocation',
        'id' => 'getId',
        'is_auto_accept' => 'getIsAutoAccept',
        'is_virtual' => 'getIsVirtual',
        'location' => 'getLocation',
        'name' => 'getName',
        'name_translated' => 'getNameTranslated',
        'random_string' => 'getRandomString',
        'resource_type_id' => 'getResourceTypeId',
        'sort_key' => 'getSortKey'
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
        $this->setIfExists('admin_ids', $data ?? [], null);
        $this->setIfExists('does_require_cal_entry', $data ?? [], null);
        $this->setIfExists('i_cal_location', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_auto_accept', $data ?? [], null);
        $this->setIfExists('is_virtual', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_translated', $data ?? [], null);
        $this->setIfExists('random_string', $data ?? [], null);
        $this->setIfExists('resource_type_id', $data ?? [], null);
        $this->setIfExists('sort_key', $data ?? [], null);
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

        if ($this->container['does_require_cal_entry'] === null) {
            $invalidProperties[] = "'does_require_cal_entry' can't be null";
        }
        if ($this->container['i_cal_location'] === null) {
            $invalidProperties[] = "'i_cal_location' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['is_auto_accept'] === null) {
            $invalidProperties[] = "'is_auto_accept' can't be null";
        }
        if ($this->container['is_virtual'] === null) {
            $invalidProperties[] = "'is_virtual' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name_translated'] === null) {
            $invalidProperties[] = "'name_translated' can't be null";
        }
        if ((mb_strlen($this->container['name_translated']) < 1)) {
            $invalidProperties[] = "invalid value for 'name_translated', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['random_string'] === null) {
            $invalidProperties[] = "'random_string' can't be null";
        }
        if ((mb_strlen($this->container['random_string']) < 1)) {
            $invalidProperties[] = "invalid value for 'random_string', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['resource_type_id'] === null) {
            $invalidProperties[] = "'resource_type_id' can't be null";
        }
        if ($this->container['sort_key'] === null) {
            $invalidProperties[] = "'sort_key' can't be null";
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
     * Gets admin_ids
     *
     * @return mixed|null
     */
    public function getAdminIds()
    {
        return $this->container['admin_ids'];
    }

    /**
     * Sets admin_ids
     *
     * @param mixed|null $admin_ids admin_ids
     *
     * @return self
     */
    public function setAdminIds($admin_ids)
    {
        if (is_null($admin_ids)) {
            array_push($this->openAPINullablesSetToNull, 'admin_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('admin_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['admin_ids'] = $admin_ids;

        return $this;
    }

    /**
     * Gets does_require_cal_entry
     *
     * @return bool
     */
    public function getDoesRequireCalEntry()
    {
        return $this->container['does_require_cal_entry'];
    }

    /**
     * Sets does_require_cal_entry
     *
     * @param bool $does_require_cal_entry does_require_cal_entry
     *
     * @return self
     */
    public function setDoesRequireCalEntry($does_require_cal_entry)
    {
        if (is_null($does_require_cal_entry)) {
            throw new \InvalidArgumentException('non-nullable does_require_cal_entry cannot be null');
        }
        $this->container['does_require_cal_entry'] = $does_require_cal_entry;

        return $this;
    }

    /**
     * Gets i_cal_location
     *
     * @return string
     */
    public function getICalLocation()
    {
        return $this->container['i_cal_location'];
    }

    /**
     * Sets i_cal_location
     *
     * @param string $i_cal_location i_cal_location
     *
     * @return self
     */
    public function setICalLocation($i_cal_location)
    {
        if (is_null($i_cal_location)) {
            array_push($this->openAPINullablesSetToNull, 'i_cal_location');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('i_cal_location', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['i_cal_location'] = $i_cal_location;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
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
     * Gets is_auto_accept
     *
     * @return bool
     */
    public function getIsAutoAccept()
    {
        return $this->container['is_auto_accept'];
    }

    /**
     * Sets is_auto_accept
     *
     * @param bool $is_auto_accept is_auto_accept
     *
     * @return self
     */
    public function setIsAutoAccept($is_auto_accept)
    {
        if (is_null($is_auto_accept)) {
            throw new \InvalidArgumentException('non-nullable is_auto_accept cannot be null');
        }
        $this->container['is_auto_accept'] = $is_auto_accept;

        return $this;
    }

    /**
     * Gets is_virtual
     *
     * @return bool
     */
    public function getIsVirtual()
    {
        return $this->container['is_virtual'];
    }

    /**
     * Sets is_virtual
     *
     * @param bool $is_virtual is_virtual
     *
     * @return self
     */
    public function setIsVirtual($is_virtual)
    {
        if (is_null($is_virtual)) {
            throw new \InvalidArgumentException('non-nullable is_virtual cannot be null');
        }
        $this->container['is_virtual'] = $is_virtual;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_translated
     *
     * @return string
     */
    public function getNameTranslated()
    {
        return $this->container['name_translated'];
    }

    /**
     * Sets name_translated
     *
     * @param string $name_translated name_translated
     *
     * @return self
     */
    public function setNameTranslated($name_translated)
    {
        if (is_null($name_translated)) {
            throw new \InvalidArgumentException('non-nullable name_translated cannot be null');
        }

        if ((mb_strlen($name_translated) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name_translated when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource., must be bigger than or equal to 1.');
        }

        $this->container['name_translated'] = $name_translated;

        return $this;
    }

    /**
     * Gets random_string
     *
     * @return string
     */
    public function getRandomString()
    {
        return $this->container['random_string'];
    }

    /**
     * Sets random_string
     *
     * @param string $random_string random_string
     *
     * @return self
     */
    public function setRandomString($random_string)
    {
        if (is_null($random_string)) {
            throw new \InvalidArgumentException('non-nullable random_string cannot be null');
        }

        if ((mb_strlen($random_string) < 1)) {
            throw new \InvalidArgumentException('invalid length for $random_string when calling GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource., must be bigger than or equal to 1.');
        }

        $this->container['random_string'] = $random_string;

        return $this;
    }

    /**
     * Gets resource_type_id
     *
     * @return int
     */
    public function getResourceTypeId()
    {
        return $this->container['resource_type_id'];
    }

    /**
     * Sets resource_type_id
     *
     * @param int $resource_type_id resource_type_id
     *
     * @return self
     */
    public function setResourceTypeId($resource_type_id)
    {
        if (is_null($resource_type_id)) {
            throw new \InvalidArgumentException('non-nullable resource_type_id cannot be null');
        }
        $this->container['resource_type_id'] = $resource_type_id;

        return $this;
    }

    /**
     * Gets sort_key
     *
     * @return int
     */
    public function getSortKey()
    {
        return $this->container['sort_key'];
    }

    /**
     * Sets sort_key
     *
     * @param int $sort_key sort_key
     *
     * @return self
     */
    public function setSortKey($sort_key)
    {
        if (is_null($sort_key)) {
            throw new \InvalidArgumentException('non-nullable sort_key cannot be null');
        }
        $this->container['sort_key'] = $sort_key;

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


