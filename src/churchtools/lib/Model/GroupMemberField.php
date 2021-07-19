<?php
/**
 * GroupMemberField
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
 * GroupMemberField Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupMemberField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupMemberField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'group_id' => 'int',
'field_name' => 'string',
'sort_key' => 'int',
'field_type_id' => 'int',
'security_level' => 'int',
'default_value' => 'string',
'options' => 'string[]',
'use_in_registration_form' => 'bool',
'required_in_registration_form' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'group_id' => null,
'field_name' => null,
'sort_key' => null,
'field_type_id' => null,
'security_level' => null,
'default_value' => null,
'options' => null,
'use_in_registration_form' => null,
'required_in_registration_form' => null    ];

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
        'id' => 'id',
'group_id' => 'groupId',
'field_name' => 'fieldName',
'sort_key' => 'sortKey',
'field_type_id' => 'fieldTypeId',
'security_level' => 'securityLevel',
'default_value' => 'defaultValue',
'options' => 'options',
'use_in_registration_form' => 'useInRegistrationForm',
'required_in_registration_form' => 'requiredInRegistrationForm'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'group_id' => 'setGroupId',
'field_name' => 'setFieldName',
'sort_key' => 'setSortKey',
'field_type_id' => 'setFieldTypeId',
'security_level' => 'setSecurityLevel',
'default_value' => 'setDefaultValue',
'options' => 'setOptions',
'use_in_registration_form' => 'setUseInRegistrationForm',
'required_in_registration_form' => 'setRequiredInRegistrationForm'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'group_id' => 'getGroupId',
'field_name' => 'getFieldName',
'sort_key' => 'getSortKey',
'field_type_id' => 'getFieldTypeId',
'security_level' => 'getSecurityLevel',
'default_value' => 'getDefaultValue',
'options' => 'getOptions',
'use_in_registration_form' => 'getUseInRegistrationForm',
'required_in_registration_form' => 'getRequiredInRegistrationForm'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['sort_key'] = isset($data['sort_key']) ? $data['sort_key'] : null;
        $this->container['field_type_id'] = isset($data['field_type_id']) ? $data['field_type_id'] : null;
        $this->container['security_level'] = isset($data['security_level']) ? $data['security_level'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['use_in_registration_form'] = isset($data['use_in_registration_form']) ? $data['use_in_registration_form'] : null;
        $this->container['required_in_registration_form'] = isset($data['required_in_registration_form']) ? $data['required_in_registration_form'] : null;
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
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name field_name
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

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
     * @return $this
     */
    public function setSortKey($sort_key)
    {
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets field_type_id
     *
     * @return int
     */
    public function getFieldTypeId()
    {
        return $this->container['field_type_id'];
    }

    /**
     * Sets field_type_id
     *
     * @param int $field_type_id field_type_id
     *
     * @return $this
     */
    public function setFieldTypeId($field_type_id)
    {
        $this->container['field_type_id'] = $field_type_id;

        return $this;
    }

    /**
     * Gets security_level
     *
     * @return int
     */
    public function getSecurityLevel()
    {
        return $this->container['security_level'];
    }

    /**
     * Sets security_level
     *
     * @param int $security_level security_level
     *
     * @return $this
     */
    public function setSecurityLevel($security_level)
    {
        $this->container['security_level'] = $security_level;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string $default_value default_value
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets use_in_registration_form
     *
     * @return bool
     */
    public function getUseInRegistrationForm()
    {
        return $this->container['use_in_registration_form'];
    }

    /**
     * Sets use_in_registration_form
     *
     * @param bool $use_in_registration_form use_in_registration_form
     *
     * @return $this
     */
    public function setUseInRegistrationForm($use_in_registration_form)
    {
        $this->container['use_in_registration_form'] = $use_in_registration_form;

        return $this;
    }

    /**
     * Gets required_in_registration_form
     *
     * @return bool
     */
    public function getRequiredInRegistrationForm()
    {
        return $this->container['required_in_registration_form'];
    }

    /**
     * Sets required_in_registration_form
     *
     * @param bool $required_in_registration_form required_in_registration_form
     *
     * @return $this
     */
    public function setRequiredInRegistrationForm($required_in_registration_form)
    {
        $this->container['required_in_registration_form'] = $required_in_registration_form;

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
