<?php
/**
 * GroupFollowUp
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
 * GroupFollowUp Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupFollowUp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Group_followUp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type_id' => 'int',
'target_type_id' => 'int',
'target_object_id' => 'int',
'target_group_member_status_id' => 'int',
'send_reminder_mails' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type_id' => null,
'target_type_id' => null,
'target_object_id' => null,
'target_group_member_status_id' => null,
'send_reminder_mails' => null    ];

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
        'type_id' => 'typeId',
'target_type_id' => 'targetTypeId',
'target_object_id' => 'targetObjectId',
'target_group_member_status_id' => 'targetGroupMemberStatusId',
'send_reminder_mails' => 'sendReminderMails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_id' => 'setTypeId',
'target_type_id' => 'setTargetTypeId',
'target_object_id' => 'setTargetObjectId',
'target_group_member_status_id' => 'setTargetGroupMemberStatusId',
'send_reminder_mails' => 'setSendReminderMails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_id' => 'getTypeId',
'target_type_id' => 'getTargetTypeId',
'target_object_id' => 'getTargetObjectId',
'target_group_member_status_id' => 'getTargetGroupMemberStatusId',
'send_reminder_mails' => 'getSendReminderMails'    ];

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
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['target_type_id'] = isset($data['target_type_id']) ? $data['target_type_id'] : null;
        $this->container['target_object_id'] = isset($data['target_object_id']) ? $data['target_object_id'] : null;
        $this->container['target_group_member_status_id'] = isset($data['target_group_member_status_id']) ? $data['target_group_member_status_id'] : null;
        $this->container['send_reminder_mails'] = isset($data['send_reminder_mails']) ? $data['send_reminder_mails'] : null;
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
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id type_id
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets target_type_id
     *
     * @return int
     */
    public function getTargetTypeId()
    {
        return $this->container['target_type_id'];
    }

    /**
     * Sets target_type_id
     *
     * @param int $target_type_id target_type_id
     *
     * @return $this
     */
    public function setTargetTypeId($target_type_id)
    {
        $this->container['target_type_id'] = $target_type_id;

        return $this;
    }

    /**
     * Gets target_object_id
     *
     * @return int
     */
    public function getTargetObjectId()
    {
        return $this->container['target_object_id'];
    }

    /**
     * Sets target_object_id
     *
     * @param int $target_object_id target_object_id
     *
     * @return $this
     */
    public function setTargetObjectId($target_object_id)
    {
        $this->container['target_object_id'] = $target_object_id;

        return $this;
    }

    /**
     * Gets target_group_member_status_id
     *
     * @return int
     */
    public function getTargetGroupMemberStatusId()
    {
        return $this->container['target_group_member_status_id'];
    }

    /**
     * Sets target_group_member_status_id
     *
     * @param int $target_group_member_status_id target_group_member_status_id
     *
     * @return $this
     */
    public function setTargetGroupMemberStatusId($target_group_member_status_id)
    {
        $this->container['target_group_member_status_id'] = $target_group_member_status_id;

        return $this;
    }

    /**
     * Gets send_reminder_mails
     *
     * @return bool
     */
    public function getSendReminderMails()
    {
        return $this->container['send_reminder_mails'];
    }

    /**
     * Sets send_reminder_mails
     *
     * @param bool $send_reminder_mails send_reminder_mails
     *
     * @return $this
     */
    public function setSendReminderMails($send_reminder_mails)
    {
        $this->container['send_reminder_mails'] = $send_reminder_mails;

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
