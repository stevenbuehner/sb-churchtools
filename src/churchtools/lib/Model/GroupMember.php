<?php
/**
 * GroupMember
 *
 * PHP version 5
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Model;

use \ArrayAccess;
use \StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * GroupMember Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'person_id' => 'int',
'person' => '\StevenBuehner\ChurchTools\Model\GroupMemberPerson',
'group_type_role_id' => 'int',
'comment' => 'string',
'member_start_date' => '\DateTime',
'member_end_date' => '\DateTime',
'waitinglist_pos' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'person_id' => null,
'person' => null,
'group_type_role_id' => null,
'comment' => null,
'member_start_date' => 'date',
'member_end_date' => 'date',
'waitinglist_pos' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'person_id' => 'personId',
'person' => 'person',
'group_type_role_id' => 'groupTypeRoleId',
'comment' => 'comment',
'member_start_date' => 'memberStartDate',
'member_end_date' => 'memberEndDate',
'waitinglist_pos' => 'waitinglistPos'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'person_id' => 'setPersonId',
'person' => 'setPerson',
'group_type_role_id' => 'setGroupTypeRoleId',
'comment' => 'setComment',
'member_start_date' => 'setMemberStartDate',
'member_end_date' => 'setMemberEndDate',
'waitinglist_pos' => 'setWaitinglistPos'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'person_id' => 'getPersonId',
'person' => 'getPerson',
'group_type_role_id' => 'getGroupTypeRoleId',
'comment' => 'getComment',
'member_start_date' => 'getMemberStartDate',
'member_end_date' => 'getMemberEndDate',
'waitinglist_pos' => 'getWaitinglistPos'    ];

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
        return self::$swaggerModelName;
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
        $this->container['person_id'] = isset($data['person_id']) ? $data['person_id'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['group_type_role_id'] = isset($data['group_type_role_id']) ? $data['group_type_role_id'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['member_start_date'] = isset($data['member_start_date']) ? $data['member_start_date'] : null;
        $this->container['member_end_date'] = isset($data['member_end_date']) ? $data['member_end_date'] : null;
        $this->container['waitinglist_pos'] = isset($data['waitinglist_pos']) ? $data['waitinglist_pos'] : null;
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
     * Gets person_id
     *
     * @return int
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int $person_id person_id
     *
     * @return $this
     */
    public function setPersonId($person_id)
    {
        $this->container['person_id'] = $person_id;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupMemberPerson
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupMemberPerson $person person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets group_type_role_id
     *
     * @return int
     */
    public function getGroupTypeRoleId()
    {
        return $this->container['group_type_role_id'];
    }

    /**
     * Sets group_type_role_id
     *
     * @param int $group_type_role_id group_type_role_id
     *
     * @return $this
     */
    public function setGroupTypeRoleId($group_type_role_id)
    {
        $this->container['group_type_role_id'] = $group_type_role_id;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets member_start_date
     *
     * @return \DateTime
     */
    public function getMemberStartDate()
    {
        return $this->container['member_start_date'];
    }

    /**
     * Sets member_start_date
     *
     * @param \DateTime $member_start_date member_start_date
     *
     * @return $this
     */
    public function setMemberStartDate($member_start_date)
    {
        $this->container['member_start_date'] = $member_start_date;

        return $this;
    }

    /**
     * Gets member_end_date
     *
     * @return \DateTime
     */
    public function getMemberEndDate()
    {
        return $this->container['member_end_date'];
    }

    /**
     * Sets member_end_date
     *
     * @param \DateTime $member_end_date member_end_date
     *
     * @return $this
     */
    public function setMemberEndDate($member_end_date)
    {
        $this->container['member_end_date'] = $member_end_date;

        return $this;
    }

    /**
     * Gets waitinglist_pos
     *
     * @return int
     */
    public function getWaitinglistPos()
    {
        return $this->container['waitinglist_pos'];
    }

    /**
     * Sets waitinglist_pos
     *
     * @param int $waitinglist_pos waitinglist_pos
     *
     * @return $this
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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
