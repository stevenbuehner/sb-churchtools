<?php
/**
 * GetGroups200ResponseDataInnerInformation
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
 * GetGroups200ResponseDataInnerInformation Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetGroups200ResponseDataInnerInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_groups_200_response_data_inner_information';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'age_groups' => 'int[]',
        'campus_id' => 'int',
        'chat_status' => 'string',
        'date_of_foundation' => '\DateTime',
        'end_date' => '\DateTime',
        'group_category_id' => 'int',
        'group_status_id' => 'int',
        'group_type_id' => 'int',
        'image_url' => 'string',
        'max_members' => 'int',
        'meeting_time' => 'string',
        'note' => 'string',
        'target_group_id' => 'int',
        'weekday' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'age_groups' => null,
        'campus_id' => null,
        'chat_status' => null,
        'date_of_foundation' => 'date',
        'end_date' => 'date',
        'group_category_id' => null,
        'group_status_id' => null,
        'group_type_id' => null,
        'image_url' => null,
        'max_members' => null,
        'meeting_time' => null,
        'note' => null,
        'target_group_id' => null,
        'weekday' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'age_groups' => false,
		'campus_id' => true,
		'chat_status' => false,
		'date_of_foundation' => true,
		'end_date' => true,
		'group_category_id' => true,
		'group_status_id' => false,
		'group_type_id' => false,
		'image_url' => true,
		'max_members' => true,
		'meeting_time' => true,
		'note' => false,
		'target_group_id' => true,
		'weekday' => true
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
        'age_groups' => 'ageGroups',
        'campus_id' => 'campusId',
        'chat_status' => 'chatStatus',
        'date_of_foundation' => 'dateOfFoundation',
        'end_date' => 'endDate',
        'group_category_id' => 'groupCategoryId',
        'group_status_id' => 'groupStatusId',
        'group_type_id' => 'groupTypeId',
        'image_url' => 'imageUrl',
        'max_members' => 'maxMembers',
        'meeting_time' => 'meetingTime',
        'note' => 'note',
        'target_group_id' => 'targetGroupId',
        'weekday' => 'weekday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age_groups' => 'setAgeGroups',
        'campus_id' => 'setCampusId',
        'chat_status' => 'setChatStatus',
        'date_of_foundation' => 'setDateOfFoundation',
        'end_date' => 'setEndDate',
        'group_category_id' => 'setGroupCategoryId',
        'group_status_id' => 'setGroupStatusId',
        'group_type_id' => 'setGroupTypeId',
        'image_url' => 'setImageUrl',
        'max_members' => 'setMaxMembers',
        'meeting_time' => 'setMeetingTime',
        'note' => 'setNote',
        'target_group_id' => 'setTargetGroupId',
        'weekday' => 'setWeekday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age_groups' => 'getAgeGroups',
        'campus_id' => 'getCampusId',
        'chat_status' => 'getChatStatus',
        'date_of_foundation' => 'getDateOfFoundation',
        'end_date' => 'getEndDate',
        'group_category_id' => 'getGroupCategoryId',
        'group_status_id' => 'getGroupStatusId',
        'group_type_id' => 'getGroupTypeId',
        'image_url' => 'getImageUrl',
        'max_members' => 'getMaxMembers',
        'meeting_time' => 'getMeetingTime',
        'note' => 'getNote',
        'target_group_id' => 'getTargetGroupId',
        'weekday' => 'getWeekday'
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
        $this->setIfExists('age_groups', $data ?? [], null);
        $this->setIfExists('campus_id', $data ?? [], null);
        $this->setIfExists('chat_status', $data ?? [], null);
        $this->setIfExists('date_of_foundation', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('group_category_id', $data ?? [], null);
        $this->setIfExists('group_status_id', $data ?? [], null);
        $this->setIfExists('group_type_id', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('max_members', $data ?? [], null);
        $this->setIfExists('meeting_time', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('target_group_id', $data ?? [], null);
        $this->setIfExists('weekday', $data ?? [], null);
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
     * Gets age_groups
     *
     * @return int[]|null
     */
    public function getAgeGroups()
    {
        return $this->container['age_groups'];
    }

    /**
     * Sets age_groups
     *
     * @param int[]|null $age_groups age_groups
     *
     * @return self
     */
    public function setAgeGroups($age_groups)
    {

        if (is_null($age_groups)) {
            throw new \InvalidArgumentException('non-nullable age_groups cannot be null');
        }

        $this->container['age_groups'] = $age_groups;

        return $this;
    }

    /**
     * Gets campus_id
     *
     * @return int|null
     */
    public function getCampusId()
    {
        return $this->container['campus_id'];
    }

    /**
     * Sets campus_id
     *
     * @param int|null $campus_id campus_id
     *
     * @return self
     */
    public function setCampusId($campus_id)
    {

        if (is_null($campus_id)) {
            array_push($this->openAPINullablesSetToNull, 'campus_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campus_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['campus_id'] = $campus_id;

        return $this;
    }

    /**
     * Gets chat_status
     *
     * @return string|null
     */
    public function getChatStatus()
    {
        return $this->container['chat_status'];
    }

    /**
     * Sets chat_status
     *
     * @param string|null $chat_status status of group chat
     *
     * @return self
     */
    public function setChatStatus($chat_status)
    {

        if (is_null($chat_status)) {
            throw new \InvalidArgumentException('non-nullable chat_status cannot be null');
        }

        $this->container['chat_status'] = $chat_status;

        return $this;
    }

    /**
     * Gets date_of_foundation
     *
     * @return \DateTime|null
     */
    public function getDateOfFoundation()
    {
        return $this->container['date_of_foundation'];
    }

    /**
     * Sets date_of_foundation
     *
     * @param \DateTime|null $date_of_foundation date_of_foundation
     *
     * @return self
     */
    public function setDateOfFoundation($date_of_foundation)
    {

        if (is_null($date_of_foundation)) {
            array_push($this->openAPINullablesSetToNull, 'date_of_foundation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_of_foundation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['date_of_foundation'] = $date_of_foundation;

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
            array_push($this->openAPINullablesSetToNull, 'end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets group_category_id
     *
     * @return int|null
     */
    public function getGroupCategoryId()
    {
        return $this->container['group_category_id'];
    }

    /**
     * Sets group_category_id
     *
     * @param int|null $group_category_id group_category_id
     *
     * @return self
     */
    public function setGroupCategoryId($group_category_id)
    {

        if (is_null($group_category_id)) {
            array_push($this->openAPINullablesSetToNull, 'group_category_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('group_category_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['group_category_id'] = $group_category_id;

        return $this;
    }

    /**
     * Gets group_status_id
     *
     * @return int|null
     */
    public function getGroupStatusId()
    {
        return $this->container['group_status_id'];
    }

    /**
     * Sets group_status_id
     *
     * @param int|null $group_status_id group_status_id
     *
     * @return self
     */
    public function setGroupStatusId($group_status_id)
    {

        if (is_null($group_status_id)) {
            throw new \InvalidArgumentException('non-nullable group_status_id cannot be null');
        }

        $this->container['group_status_id'] = $group_status_id;

        return $this;
    }

    /**
     * Gets group_type_id
     *
     * @return int|null
     */
    public function getGroupTypeId()
    {
        return $this->container['group_type_id'];
    }

    /**
     * Sets group_type_id
     *
     * @param int|null $group_type_id group_type_id
     *
     * @return self
     */
    public function setGroupTypeId($group_type_id)
    {

        if (is_null($group_type_id)) {
            throw new \InvalidArgumentException('non-nullable group_type_id cannot be null');
        }

        $this->container['group_type_id'] = $group_type_id;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url image_url
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {

        if (is_null($image_url)) {
            array_push($this->openAPINullablesSetToNull, 'image_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets max_members
     *
     * @return int|null
     */
    public function getMaxMembers()
    {
        return $this->container['max_members'];
    }

    /**
     * Sets max_members
     *
     * @param int|null $max_members Allowed maximal members
     *
     * @return self
     */
    public function setMaxMembers($max_members)
    {

        if (is_null($max_members)) {
            array_push($this->openAPINullablesSetToNull, 'max_members');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_members', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['max_members'] = $max_members;

        return $this;
    }

    /**
     * Gets meeting_time
     *
     * @return string|null
     */
    public function getMeetingTime()
    {
        return $this->container['meeting_time'];
    }

    /**
     * Sets meeting_time
     *
     * @param string|null $meeting_time meeting_time
     *
     * @return self
     */
    public function setMeetingTime($meeting_time)
    {

        if (is_null($meeting_time)) {
            array_push($this->openAPINullablesSetToNull, 'meeting_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('meeting_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['meeting_time'] = $meeting_time;

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
     * Gets target_group_id
     *
     * @return int|null
     */
    public function getTargetGroupId()
    {
        return $this->container['target_group_id'];
    }

    /**
     * Sets target_group_id
     *
     * @param int|null $target_group_id target_group_id
     *
     * @return self
     */
    public function setTargetGroupId($target_group_id)
    {

        if (is_null($target_group_id)) {
            array_push($this->openAPINullablesSetToNull, 'target_group_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('target_group_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['target_group_id'] = $target_group_id;

        return $this;
    }

    /**
     * Gets weekday
     *
     * @return int|null
     */
    public function getWeekday()
    {
        return $this->container['weekday'];
    }

    /**
     * Sets weekday
     *
     * @param int|null $weekday The number of the weekday. Starting with 0 = Sunday, 1 = Monday, ...
     *
     * @return self
     */
    public function setWeekday($weekday)
    {

        if (is_null($weekday)) {
            array_push($this->openAPINullablesSetToNull, 'weekday');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('weekday', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['weekday'] = $weekday;

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


