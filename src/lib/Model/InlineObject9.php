<?php
/**
 * InlineObject9
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
 * InlineObject9 Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject9 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group_type_role_id' => 'int',
        'comment' => 'string',
        'member_start_date' => '\DateTime',
        'member_end_date' => '\DateTime',
        'fields' => 'object',
        'waitinglist_pos' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group_type_role_id' => null,
        'comment' => null,
        'member_start_date' => 'date',
        'member_end_date' => 'date',
        'fields' => null,
        'waitinglist_pos' => null
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
        'group_type_role_id' => 'groupTypeRoleId',
        'comment' => 'comment',
        'member_start_date' => 'memberStartDate',
        'member_end_date' => 'memberEndDate',
        'fields' => 'fields',
        'waitinglist_pos' => 'waitinglistPos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_type_role_id' => 'setGroupTypeRoleId',
        'comment' => 'setComment',
        'member_start_date' => 'setMemberStartDate',
        'member_end_date' => 'setMemberEndDate',
        'fields' => 'setFields',
        'waitinglist_pos' => 'setWaitinglistPos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_type_role_id' => 'getGroupTypeRoleId',
        'comment' => 'getComment',
        'member_start_date' => 'getMemberStartDate',
        'member_end_date' => 'getMemberEndDate',
        'fields' => 'getFields',
        'waitinglist_pos' => 'getWaitinglistPos'
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
        $this->container['group_type_role_id'] = $data['group_type_role_id'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['member_start_date'] = $data['member_start_date'] ?? null;
        $this->container['member_end_date'] = $data['member_end_date'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['waitinglist_pos'] = $data['waitinglist_pos'] ?? null;
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
     * Gets group_type_role_id
     *
     * @return int|null
     */
    public function getGroupTypeRoleId()
    {
        return $this->container['group_type_role_id'];
    }

    /**
     * Sets group_type_role_id
     *
     * @param int|null $group_type_role_id group_type_role_id
     *
     * @return self
     */
    public function setGroupTypeRoleId($group_type_role_id)
    {
        $this->container['group_type_role_id'] = $group_type_role_id;

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
     * Gets member_start_date
     *
     * @return \DateTime|null
     */
    public function getMemberStartDate()
    {
        return $this->container['member_start_date'];
    }

    /**
     * Sets member_start_date
     *
     * @param \DateTime|null $member_start_date member_start_date
     *
     * @return self
     */
    public function setMemberStartDate($member_start_date)
    {
        $this->container['member_start_date'] = $member_start_date;

        return $this;
    }

    /**
     * Gets member_end_date
     *
     * @return \DateTime|null
     */
    public function getMemberEndDate()
    {
        return $this->container['member_end_date'];
    }

    /**
     * Sets member_end_date
     *
     * @param \DateTime|null $member_end_date member_end_date
     *
     * @return self
     */
    public function setMemberEndDate($member_end_date)
    {
        $this->container['member_end_date'] = $member_end_date;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return object|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object|null $fields Group member fields as key value pairs, where the key is the ID of the field to be set.
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets waitinglist_pos
     *
     * @return int|null
     */
    public function getWaitinglistPos()
    {
        return $this->container['waitinglist_pos'];
    }

    /**
     * Sets waitinglist_pos
     *
     * @param int|null $waitinglist_pos waitinglist_pos
     *
     * @return self
     */
    public function setWaitinglistPos($waitinglist_pos)
    {
        $this->container['waitinglist_pos'] = $waitinglist_pos;

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


