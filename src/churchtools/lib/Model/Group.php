<?php
/**
 * Group
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
 * Group Class Doc Comment
 *
 * @category Class
 * @description The group model structures all information in different objects: &#x60;information&#x60;, &#x60;settings&#x60;, &#x60;followUp&#x60;, and &#x60;roles&#x60;. Custom group fields are added to the root level of this model.
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Group implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'guid' => 'string',
'name' => 'string',
'security_level_for_group' => 'int',
'information' => '\StevenBuehner\ChurchTools\Model\GroupInformation',
'settings' => '\StevenBuehner\ChurchTools\Model\GroupSettings',
'follow_up' => '\StevenBuehner\ChurchTools\Model\GroupFollowUp',
'roles' => '\StevenBuehner\ChurchTools\Model\GroupRoles[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'guid' => null,
'name' => null,
'security_level_for_group' => null,
'information' => null,
'settings' => null,
'follow_up' => null,
'roles' => null    ];

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
'guid' => 'guid',
'name' => 'name',
'security_level_for_group' => 'securityLevelForGroup',
'information' => 'information',
'settings' => 'settings',
'follow_up' => 'followUp',
'roles' => 'roles'    ];

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
'information' => 'setInformation',
'settings' => 'setSettings',
'follow_up' => 'setFollowUp',
'roles' => 'setRoles'    ];

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
'information' => 'getInformation',
'settings' => 'getSettings',
'follow_up' => 'getFollowUp',
'roles' => 'getRoles'    ];

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
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['security_level_for_group'] = isset($data['security_level_for_group']) ? $data['security_level_for_group'] : null;
        $this->container['information'] = isset($data['information']) ? $data['information'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['follow_up'] = isset($data['follow_up']) ? $data['follow_up'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
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
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string $guid guid
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

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
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets security_level_for_group
     *
     * @return int
     */
    public function getSecurityLevelForGroup()
    {
        return $this->container['security_level_for_group'];
    }

    /**
     * Sets security_level_for_group
     *
     * @param int $security_level_for_group You can see group fields up to this security level.
     *
     * @return $this
     */
    public function setSecurityLevelForGroup($security_level_for_group)
    {
        $this->container['security_level_for_group'] = $security_level_for_group;

        return $this;
    }

    /**
     * Gets information
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupInformation
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupInformation $information information
     *
     * @return $this
     */
    public function setInformation($information)
    {
        $this->container['information'] = $information;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupSettings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupSettings $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets follow_up
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupFollowUp
     */
    public function getFollowUp()
    {
        return $this->container['follow_up'];
    }

    /**
     * Sets follow_up
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupFollowUp $follow_up follow_up
     *
     * @return $this
     */
    public function setFollowUp($follow_up)
    {
        $this->container['follow_up'] = $follow_up;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupRoles[]
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupRoles[] $roles roles
     *
     * @return $this
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
