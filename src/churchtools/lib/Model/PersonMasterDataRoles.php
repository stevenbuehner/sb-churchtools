<?php
/**
 * PersonMasterDataRoles
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
 * PersonMasterDataRoles Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PersonMasterDataRoles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PersonMasterData_roles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'group_type_id' => 'int',
'name' => 'string',
'shorty' => 'string',
'sort_key' => 'int',
'to_delete' => 'bool',
'has_requested' => 'bool',
'is_leader' => 'bool',
'is_default' => 'bool',
'is_hidden' => 'bool',
'grow_path_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'group_type_id' => null,
'name' => null,
'shorty' => null,
'sort_key' => null,
'to_delete' => null,
'has_requested' => null,
'is_leader' => null,
'is_default' => null,
'is_hidden' => null,
'grow_path_id' => null    ];

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
'group_type_id' => 'groupTypeId',
'name' => 'name',
'shorty' => 'shorty',
'sort_key' => 'sortKey',
'to_delete' => 'toDelete',
'has_requested' => 'hasRequested',
'is_leader' => 'isLeader',
'is_default' => 'isDefault',
'is_hidden' => 'isHidden',
'grow_path_id' => 'growPathId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'group_type_id' => 'setGroupTypeId',
'name' => 'setName',
'shorty' => 'setShorty',
'sort_key' => 'setSortKey',
'to_delete' => 'setToDelete',
'has_requested' => 'setHasRequested',
'is_leader' => 'setIsLeader',
'is_default' => 'setIsDefault',
'is_hidden' => 'setIsHidden',
'grow_path_id' => 'setGrowPathId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'group_type_id' => 'getGroupTypeId',
'name' => 'getName',
'shorty' => 'getShorty',
'sort_key' => 'getSortKey',
'to_delete' => 'getToDelete',
'has_requested' => 'getHasRequested',
'is_leader' => 'getIsLeader',
'is_default' => 'getIsDefault',
'is_hidden' => 'getIsHidden',
'grow_path_id' => 'getGrowPathId'    ];

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
        $this->container['group_type_id'] = isset($data['group_type_id']) ? $data['group_type_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['shorty'] = isset($data['shorty']) ? $data['shorty'] : null;
        $this->container['sort_key'] = isset($data['sort_key']) ? $data['sort_key'] : null;
        $this->container['to_delete'] = isset($data['to_delete']) ? $data['to_delete'] : null;
        $this->container['has_requested'] = isset($data['has_requested']) ? $data['has_requested'] : null;
        $this->container['is_leader'] = isset($data['is_leader']) ? $data['is_leader'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['is_hidden'] = isset($data['is_hidden']) ? $data['is_hidden'] : null;
        $this->container['grow_path_id'] = isset($data['grow_path_id']) ? $data['grow_path_id'] : null;
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
     * @param int $id ID of this group type role.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets group_type_id
     *
     * @return int
     */
    public function getGroupTypeId()
    {
        return $this->container['group_type_id'];
    }

    /**
     * Sets group_type_id
     *
     * @param int $group_type_id ID of corresponding group type.
     *
     * @return $this
     */
    public function setGroupTypeId($group_type_id)
    {
        $this->container['group_type_id'] = $group_type_id;

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
     * @param string $name Name of role.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets shorty
     *
     * @return string
     */
    public function getShorty()
    {
        return $this->container['shorty'];
    }

    /**
     * Sets shorty
     *
     * @param string $shorty Abbreviation of the name.
     *
     * @return $this
     */
    public function setShorty($shorty)
    {
        $this->container['shorty'] = $shorty;

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
     * @param int $sort_key Number used for sorting roles.
     *
     * @return $this
     */
    public function setSortKey($sort_key)
    {
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets to_delete
     *
     * @return bool
     */
    public function getToDelete()
    {
        return $this->container['to_delete'];
    }

    /**
     * Sets to_delete
     *
     * @param bool $to_delete Flag, if members of this role can be deleted or removed from the group.
     *
     * @return $this
     */
    public function setToDelete($to_delete)
    {
        $this->container['to_delete'] = $to_delete;

        return $this;
    }

    /**
     * Gets has_requested
     *
     * @return bool
     */
    public function getHasRequested()
    {
        return $this->container['has_requested'];
    }

    /**
     * Sets has_requested
     *
     * @param bool $has_requested Flag, if group member is requesting group access.
     *
     * @return $this
     */
    public function setHasRequested($has_requested)
    {
        $this->container['has_requested'] = $has_requested;

        return $this;
    }

    /**
     * Gets is_leader
     *
     * @return bool
     */
    public function getIsLeader()
    {
        return $this->container['is_leader'];
    }

    /**
     * Sets is_leader
     *
     * @param bool $is_leader Flag, this role is a leader.
     *
     * @return $this
     */
    public function setIsLeader($is_leader)
    {
        $this->container['is_leader'] = $is_leader;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default Indicator of default roles.
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool $is_hidden Flag, if this role is hidden in groups.
     *
     * @return $this
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets grow_path_id
     *
     * @return int
     */
    public function getGrowPathId()
    {
        return $this->container['grow_path_id'];
    }

    /**
     * Sets grow_path_id
     *
     * @param int $grow_path_id ID of the grow path.
     *
     * @return $this
     */
    public function setGrowPathId($grow_path_id)
    {
        $this->container['grow_path_id'] = $grow_path_id;

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
