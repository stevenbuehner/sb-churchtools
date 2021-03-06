<?php
/**
 * Role
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
 * Role Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Role implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Role';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'group_type_id' => 'int',
        'name' => 'string',
        'name_translated' => 'string',
        'shorty' => 'string',
        'sort_key' => 'int',
        'to_delete' => 'bool',
        'has_requested' => 'bool',
        'is_leader' => 'bool',
        'is_default' => 'bool',
        'is_hidden' => 'bool',
        'grow_path_id' => 'int'
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
        'group_type_id' => null,
        'name' => null,
        'name_translated' => null,
        'shorty' => null,
        'sort_key' => null,
        'to_delete' => null,
        'has_requested' => null,
        'is_leader' => null,
        'is_default' => null,
        'is_hidden' => null,
        'grow_path_id' => null
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
        'group_type_id' => 'groupTypeId',
        'name' => 'name',
        'name_translated' => 'nameTranslated',
        'shorty' => 'shorty',
        'sort_key' => 'sortKey',
        'to_delete' => 'toDelete',
        'has_requested' => 'hasRequested',
        'is_leader' => 'isLeader',
        'is_default' => 'isDefault',
        'is_hidden' => 'isHidden',
        'grow_path_id' => 'growPathId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group_type_id' => 'setGroupTypeId',
        'name' => 'setName',
        'name_translated' => 'setNameTranslated',
        'shorty' => 'setShorty',
        'sort_key' => 'setSortKey',
        'to_delete' => 'setToDelete',
        'has_requested' => 'setHasRequested',
        'is_leader' => 'setIsLeader',
        'is_default' => 'setIsDefault',
        'is_hidden' => 'setIsHidden',
        'grow_path_id' => 'setGrowPathId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group_type_id' => 'getGroupTypeId',
        'name' => 'getName',
        'name_translated' => 'getNameTranslated',
        'shorty' => 'getShorty',
        'sort_key' => 'getSortKey',
        'to_delete' => 'getToDelete',
        'has_requested' => 'getHasRequested',
        'is_leader' => 'getIsLeader',
        'is_default' => 'getIsDefault',
        'is_hidden' => 'getIsHidden',
        'grow_path_id' => 'getGrowPathId'
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
        $this->container['group_type_id'] = $data['group_type_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_translated'] = $data['name_translated'] ?? null;
        $this->container['shorty'] = $data['shorty'] ?? null;
        $this->container['sort_key'] = $data['sort_key'] ?? null;
        $this->container['to_delete'] = $data['to_delete'] ?? null;
        $this->container['has_requested'] = $data['has_requested'] ?? null;
        $this->container['is_leader'] = $data['is_leader'] ?? null;
        $this->container['is_default'] = $data['is_default'] ?? null;
        $this->container['is_hidden'] = $data['is_hidden'] ?? null;
        $this->container['grow_path_id'] = $data['grow_path_id'] ?? null;
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
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id ID of this group type role.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param int|null $group_type_id ID of corresponding group type.
     *
     * @return self
     */
    public function setGroupTypeId($group_type_id)
    {
        $this->container['group_type_id'] = $group_type_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of role.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_translated
     *
     * @return string|null
     */
    public function getNameTranslated()
    {
        return $this->container['name_translated'];
    }

    /**
     * Sets name_translated
     *
     * @param string|null $name_translated Trasnlated name of role.
     *
     * @return self
     */
    public function setNameTranslated($name_translated)
    {
        $this->container['name_translated'] = $name_translated;

        return $this;
    }

    /**
     * Gets shorty
     *
     * @return string|null
     */
    public function getShorty()
    {
        return $this->container['shorty'];
    }

    /**
     * Sets shorty
     *
     * @param string|null $shorty Abbreviation of the name.
     *
     * @return self
     */
    public function setShorty($shorty)
    {
        $this->container['shorty'] = $shorty;

        return $this;
    }

    /**
     * Gets sort_key
     *
     * @return int|null
     */
    public function getSortKey()
    {
        return $this->container['sort_key'];
    }

    /**
     * Sets sort_key
     *
     * @param int|null $sort_key Number used for sorting roles.
     *
     * @return self
     */
    public function setSortKey($sort_key)
    {
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets to_delete
     *
     * @return bool|null
     */
    public function getToDelete()
    {
        return $this->container['to_delete'];
    }

    /**
     * Sets to_delete
     *
     * @param bool|null $to_delete Flag, if members of this role can be deleted or removed from the group.
     *
     * @return self
     */
    public function setToDelete($to_delete)
    {
        $this->container['to_delete'] = $to_delete;

        return $this;
    }

    /**
     * Gets has_requested
     *
     * @return bool|null
     */
    public function getHasRequested()
    {
        return $this->container['has_requested'];
    }

    /**
     * Sets has_requested
     *
     * @param bool|null $has_requested Flag, if group member is requesting group access.
     *
     * @return self
     */
    public function setHasRequested($has_requested)
    {
        $this->container['has_requested'] = $has_requested;

        return $this;
    }

    /**
     * Gets is_leader
     *
     * @return bool|null
     */
    public function getIsLeader()
    {
        return $this->container['is_leader'];
    }

    /**
     * Sets is_leader
     *
     * @param bool|null $is_leader Flag, this role is a leader.
     *
     * @return self
     */
    public function setIsLeader($is_leader)
    {
        $this->container['is_leader'] = $is_leader;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default Indicator of default roles.
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool|null
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool|null $is_hidden Flag, if this role is hidden in groups.
     *
     * @return self
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets grow_path_id
     *
     * @return int|null
     */
    public function getGrowPathId()
    {
        return $this->container['grow_path_id'];
    }

    /**
     * Sets grow_path_id
     *
     * @param int|null $grow_path_id ID of the grow path.
     *
     * @return self
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


