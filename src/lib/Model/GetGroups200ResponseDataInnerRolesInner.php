<?php
/**
 * GetGroups200ResponseDataInnerRolesInner
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
 * GetGroups200ResponseDataInnerRolesInner Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetGroups200ResponseDataInnerRolesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_groups_200_response_data_inner_roles_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can_read_chat' => 'bool',
        'can_write_chat' => 'bool',
        'force_two_factor_auth' => 'bool',
        'group_type_id' => 'int',
        'group_type_role_id' => 'int',
        'grow_path_id' => 'int',
        'has_requested' => 'bool',
        'id' => 'int',
        'is_active' => 'bool',
        'is_default' => 'bool',
        'is_hidden' => 'bool',
        'is_leader' => 'bool',
        'name' => 'string',
        'receive_qr_code' => 'bool',
        'shorty' => 'string',
        'sort_key' => 'int',
        'to_delete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'can_read_chat' => null,
        'can_write_chat' => null,
        'force_two_factor_auth' => null,
        'group_type_id' => null,
        'group_type_role_id' => null,
        'grow_path_id' => null,
        'has_requested' => null,
        'id' => null,
        'is_active' => null,
        'is_default' => null,
        'is_hidden' => null,
        'is_leader' => null,
        'name' => null,
        'receive_qr_code' => null,
        'shorty' => null,
        'sort_key' => null,
        'to_delete' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'can_read_chat' => false,
		'can_write_chat' => false,
		'force_two_factor_auth' => false,
		'group_type_id' => false,
		'group_type_role_id' => false,
		'grow_path_id' => false,
		'has_requested' => false,
		'id' => false,
		'is_active' => false,
		'is_default' => false,
		'is_hidden' => false,
		'is_leader' => false,
		'name' => false,
		'receive_qr_code' => false,
		'shorty' => false,
		'sort_key' => false,
		'to_delete' => false
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
        'can_read_chat' => 'canReadChat',
        'can_write_chat' => 'canWriteChat',
        'force_two_factor_auth' => 'forceTwoFactorAuth',
        'group_type_id' => 'groupTypeId',
        'group_type_role_id' => 'groupTypeRoleId',
        'grow_path_id' => 'growPathId',
        'has_requested' => 'hasRequested',
        'id' => 'id',
        'is_active' => 'isActive',
        'is_default' => 'isDefault',
        'is_hidden' => 'isHidden',
        'is_leader' => 'isLeader',
        'name' => 'name',
        'receive_qr_code' => 'receiveQRCode',
        'shorty' => 'shorty',
        'sort_key' => 'sortKey',
        'to_delete' => 'toDelete'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_read_chat' => 'setCanReadChat',
        'can_write_chat' => 'setCanWriteChat',
        'force_two_factor_auth' => 'setForceTwoFactorAuth',
        'group_type_id' => 'setGroupTypeId',
        'group_type_role_id' => 'setGroupTypeRoleId',
        'grow_path_id' => 'setGrowPathId',
        'has_requested' => 'setHasRequested',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'is_default' => 'setIsDefault',
        'is_hidden' => 'setIsHidden',
        'is_leader' => 'setIsLeader',
        'name' => 'setName',
        'receive_qr_code' => 'setReceiveQrCode',
        'shorty' => 'setShorty',
        'sort_key' => 'setSortKey',
        'to_delete' => 'setToDelete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_read_chat' => 'getCanReadChat',
        'can_write_chat' => 'getCanWriteChat',
        'force_two_factor_auth' => 'getForceTwoFactorAuth',
        'group_type_id' => 'getGroupTypeId',
        'group_type_role_id' => 'getGroupTypeRoleId',
        'grow_path_id' => 'getGrowPathId',
        'has_requested' => 'getHasRequested',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'is_default' => 'getIsDefault',
        'is_hidden' => 'getIsHidden',
        'is_leader' => 'getIsLeader',
        'name' => 'getName',
        'receive_qr_code' => 'getReceiveQrCode',
        'shorty' => 'getShorty',
        'sort_key' => 'getSortKey',
        'to_delete' => 'getToDelete'
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
        $this->setIfExists('can_read_chat', $data ?? [], null);
        $this->setIfExists('can_write_chat', $data ?? [], null);
        $this->setIfExists('force_two_factor_auth', $data ?? [], null);
        $this->setIfExists('group_type_id', $data ?? [], null);
        $this->setIfExists('group_type_role_id', $data ?? [], null);
        $this->setIfExists('grow_path_id', $data ?? [], null);
        $this->setIfExists('has_requested', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_default', $data ?? [], null);
        $this->setIfExists('is_hidden', $data ?? [], null);
        $this->setIfExists('is_leader', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('receive_qr_code', $data ?? [], null);
        $this->setIfExists('shorty', $data ?? [], null);
        $this->setIfExists('sort_key', $data ?? [], null);
        $this->setIfExists('to_delete', $data ?? [], null);
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
     * Gets can_read_chat
     *
     * @return bool|null
     */
    public function getCanReadChat()
    {
        return $this->container['can_read_chat'];
    }

    /**
     * Sets can_read_chat
     *
     * @param bool|null $can_read_chat can_read_chat
     *
     * @return self
     */
    public function setCanReadChat($can_read_chat)
    {

        if (is_null($can_read_chat)) {
            throw new \InvalidArgumentException('non-nullable can_read_chat cannot be null');
        }

        $this->container['can_read_chat'] = $can_read_chat;

        return $this;
    }

    /**
     * Gets can_write_chat
     *
     * @return bool|null
     */
    public function getCanWriteChat()
    {
        return $this->container['can_write_chat'];
    }

    /**
     * Sets can_write_chat
     *
     * @param bool|null $can_write_chat can_write_chat
     *
     * @return self
     */
    public function setCanWriteChat($can_write_chat)
    {

        if (is_null($can_write_chat)) {
            throw new \InvalidArgumentException('non-nullable can_write_chat cannot be null');
        }

        $this->container['can_write_chat'] = $can_write_chat;

        return $this;
    }

    /**
     * Gets force_two_factor_auth
     *
     * @return bool|null
     */
    public function getForceTwoFactorAuth()
    {
        return $this->container['force_two_factor_auth'];
    }

    /**
     * Sets force_two_factor_auth
     *
     * @param bool|null $force_two_factor_auth force_two_factor_auth
     *
     * @return self
     */
    public function setForceTwoFactorAuth($force_two_factor_auth)
    {

        if (is_null($force_two_factor_auth)) {
            throw new \InvalidArgumentException('non-nullable force_two_factor_auth cannot be null');
        }

        $this->container['force_two_factor_auth'] = $force_two_factor_auth;

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

        if (is_null($group_type_role_id)) {
            throw new \InvalidArgumentException('non-nullable group_type_role_id cannot be null');
        }

        $this->container['group_type_role_id'] = $group_type_role_id;

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
     * @param int|null $grow_path_id grow_path_id
     *
     * @return self
     */
    public function setGrowPathId($grow_path_id)
    {

        if (is_null($grow_path_id)) {
            throw new \InvalidArgumentException('non-nullable grow_path_id cannot be null');
        }

        $this->container['grow_path_id'] = $grow_path_id;

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
     * @param bool|null $has_requested has_requested
     *
     * @return self
     */
    public function setHasRequested($has_requested)
    {

        if (is_null($has_requested)) {
            throw new \InvalidArgumentException('non-nullable has_requested cannot be null');
        }

        $this->container['has_requested'] = $has_requested;

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
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {

        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }

        $this->container['is_active'] = $is_active;

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
     * @param bool|null $is_default is_default
     *
     * @return self
     */
    public function setIsDefault($is_default)
    {

        if (is_null($is_default)) {
            throw new \InvalidArgumentException('non-nullable is_default cannot be null');
        }

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
     * @param bool|null $is_hidden is_hidden
     *
     * @return self
     */
    public function setIsHidden($is_hidden)
    {

        if (is_null($is_hidden)) {
            throw new \InvalidArgumentException('non-nullable is_hidden cannot be null');
        }

        $this->container['is_hidden'] = $is_hidden;

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
     * @param bool|null $is_leader is_leader
     *
     * @return self
     */
    public function setIsLeader($is_leader)
    {

        if (is_null($is_leader)) {
            throw new \InvalidArgumentException('non-nullable is_leader cannot be null');
        }

        $this->container['is_leader'] = $is_leader;

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets receive_qr_code
     *
     * @return bool|null
     */
    public function getReceiveQrCode()
    {
        return $this->container['receive_qr_code'];
    }

    /**
     * Sets receive_qr_code
     *
     * @param bool|null $receive_qr_code receive_qr_code
     *
     * @return self
     */
    public function setReceiveQrCode($receive_qr_code)
    {

        if (is_null($receive_qr_code)) {
            throw new \InvalidArgumentException('non-nullable receive_qr_code cannot be null');
        }

        $this->container['receive_qr_code'] = $receive_qr_code;

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
     * @param string|null $shorty shorty
     *
     * @return self
     */
    public function setShorty($shorty)
    {

        if (is_null($shorty)) {
            throw new \InvalidArgumentException('non-nullable shorty cannot be null');
        }

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
     * @param int|null $sort_key sort_key
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
     * @param bool|null $to_delete to_delete
     *
     * @return self
     */
    public function setToDelete($to_delete)
    {

        if (is_null($to_delete)) {
            throw new \InvalidArgumentException('non-nullable to_delete cannot be null');
        }

        $this->container['to_delete'] = $to_delete;

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


