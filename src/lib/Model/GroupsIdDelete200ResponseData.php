<?php
/**
 * GroupsIdDelete200ResponseData
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
 * GroupsIdDelete200ResponseData Class Doc Comment
 *
 * @category Class
 * @description The group model structures all information in different objects: &#x60;information&#x60;, &#x60;settings&#x60;, &#x60;followUp&#x60;, and &#x60;roles&#x60;. Custom group fields are added to the root level of this model.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GroupsIdDelete200ResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_groups__id__delete_200_response_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'guid' => 'string',
        'name' => 'string',
        'security_level_for_group' => 'int',
        'permissions' => '\StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataPermissions',
        'information' => '\StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataInformation',
        'settings' => '\StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataSettings',
        'follow_up' => '\StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataFollowUp',
        'roles' => '\StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataRolesInner[]'
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
        'guid' => null,
        'name' => null,
        'security_level_for_group' => null,
        'permissions' => null,
        'information' => null,
        'settings' => null,
        'follow_up' => null,
        'roles' => null
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
        'guid' => 'guid',
        'name' => 'name',
        'security_level_for_group' => 'securityLevelForGroup',
        'permissions' => 'permissions',
        'information' => 'information',
        'settings' => 'settings',
        'follow_up' => 'followUp',
        'roles' => 'roles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'guid' => 'setGuid',
        'name' => 'setName',
        'security_level_for_group' => 'setSecurityLevelForGroup',
        'permissions' => 'setPermissions',
        'information' => 'setInformation',
        'settings' => 'setSettings',
        'follow_up' => 'setFollowUp',
        'roles' => 'setRoles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'guid' => 'getGuid',
        'name' => 'getName',
        'security_level_for_group' => 'getSecurityLevelForGroup',
        'permissions' => 'getPermissions',
        'information' => 'getInformation',
        'settings' => 'getSettings',
        'follow_up' => 'getFollowUp',
        'roles' => 'getRoles'
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
        $this->container['guid'] = $data['guid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['security_level_for_group'] = $data['security_level_for_group'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
        $this->container['information'] = $data['information'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['follow_up'] = $data['follow_up'] ?? null;
        $this->container['roles'] = $data['roles'] ?? null;
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
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string|null
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string|null $guid guid
     *
     * @return self
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets security_level_for_group
     *
     * @return int|null
     */
    public function getSecurityLevelForGroup()
    {
        return $this->container['security_level_for_group'];
    }

    /**
     * Sets security_level_for_group
     *
     * @param int|null $security_level_for_group You can see group fields up to this security level.
     *
     * @return self
     */
    public function setSecurityLevelForGroup($security_level_for_group)
    {
        $this->container['security_level_for_group'] = $security_level_for_group;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataPermissions|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataPermissions|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets information
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataInformation|null
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataInformation|null $information information
     *
     * @return self
     */
    public function setInformation($information)
    {
        $this->container['information'] = $information;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataSettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataSettings|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets follow_up
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataFollowUp|null
     */
    public function getFollowUp()
    {
        return $this->container['follow_up'];
    }

    /**
     * Sets follow_up
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataFollowUp|null $follow_up follow_up
     *
     * @return self
     */
    public function setFollowUp($follow_up)
    {
        $this->container['follow_up'] = $follow_up;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataRolesInner[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupsIdDelete200ResponseDataRolesInner[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

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


