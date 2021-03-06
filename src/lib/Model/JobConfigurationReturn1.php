<?php
/**
 * JobConfigurationReturn1
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
 * JobConfigurationReturn1 Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JobConfigurationReturn1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JobConfigurationReturn_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'external_system' => '\StevenBuehner\ChurchTools\Model\ExternalSystem1',
        'domain_type' => 'string',
        'auto_schedule_enabled' => 'bool',
        'create_behavior_master' => 'string',
        'create_behavior_es' => 'string',
        'create_defaults_master' => 'object',
        'create_defaults_es' => 'object',
        'link_behavior' => 'string',
        'link_data' => 'string',
        'update_behavior' => 'string',
        'update_data' => 'string',
        'delete_behavior_master' => 'string',
        'delete_behavior_es' => 'string'
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
        'name' => null,
        'external_system' => null,
        'domain_type' => null,
        'auto_schedule_enabled' => null,
        'create_behavior_master' => null,
        'create_behavior_es' => null,
        'create_defaults_master' => null,
        'create_defaults_es' => null,
        'link_behavior' => null,
        'link_data' => null,
        'update_behavior' => null,
        'update_data' => null,
        'delete_behavior_master' => null,
        'delete_behavior_es' => null
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
        'name' => 'name',
        'external_system' => 'externalSystem',
        'domain_type' => 'domainType',
        'auto_schedule_enabled' => 'autoScheduleEnabled',
        'create_behavior_master' => 'createBehaviorMaster',
        'create_behavior_es' => 'createBehaviorES',
        'create_defaults_master' => 'createDefaultsMaster',
        'create_defaults_es' => 'createDefaultsES',
        'link_behavior' => 'linkBehavior',
        'link_data' => 'linkData',
        'update_behavior' => 'updateBehavior',
        'update_data' => 'updateData',
        'delete_behavior_master' => 'deleteBehaviorMaster',
        'delete_behavior_es' => 'deleteBehaviorES'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'external_system' => 'setExternalSystem',
        'domain_type' => 'setDomainType',
        'auto_schedule_enabled' => 'setAutoScheduleEnabled',
        'create_behavior_master' => 'setCreateBehaviorMaster',
        'create_behavior_es' => 'setCreateBehaviorEs',
        'create_defaults_master' => 'setCreateDefaultsMaster',
        'create_defaults_es' => 'setCreateDefaultsEs',
        'link_behavior' => 'setLinkBehavior',
        'link_data' => 'setLinkData',
        'update_behavior' => 'setUpdateBehavior',
        'update_data' => 'setUpdateData',
        'delete_behavior_master' => 'setDeleteBehaviorMaster',
        'delete_behavior_es' => 'setDeleteBehaviorEs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'external_system' => 'getExternalSystem',
        'domain_type' => 'getDomainType',
        'auto_schedule_enabled' => 'getAutoScheduleEnabled',
        'create_behavior_master' => 'getCreateBehaviorMaster',
        'create_behavior_es' => 'getCreateBehaviorEs',
        'create_defaults_master' => 'getCreateDefaultsMaster',
        'create_defaults_es' => 'getCreateDefaultsEs',
        'link_behavior' => 'getLinkBehavior',
        'link_data' => 'getLinkData',
        'update_behavior' => 'getUpdateBehavior',
        'update_data' => 'getUpdateData',
        'delete_behavior_master' => 'getDeleteBehaviorMaster',
        'delete_behavior_es' => 'getDeleteBehaviorEs'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['external_system'] = $data['external_system'] ?? null;
        $this->container['domain_type'] = $data['domain_type'] ?? null;
        $this->container['auto_schedule_enabled'] = $data['auto_schedule_enabled'] ?? null;
        $this->container['create_behavior_master'] = $data['create_behavior_master'] ?? null;
        $this->container['create_behavior_es'] = $data['create_behavior_es'] ?? null;
        $this->container['create_defaults_master'] = $data['create_defaults_master'] ?? null;
        $this->container['create_defaults_es'] = $data['create_defaults_es'] ?? null;
        $this->container['link_behavior'] = $data['link_behavior'] ?? null;
        $this->container['link_data'] = $data['link_data'] ?? null;
        $this->container['update_behavior'] = $data['update_behavior'] ?? null;
        $this->container['update_data'] = $data['update_data'] ?? null;
        $this->container['delete_behavior_master'] = $data['delete_behavior_master'] ?? null;
        $this->container['delete_behavior_es'] = $data['delete_behavior_es'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['domain_type'] === null) {
            $invalidProperties[] = "'domain_type' can't be null";
        }
        if ($this->container['auto_schedule_enabled'] === null) {
            $invalidProperties[] = "'auto_schedule_enabled' can't be null";
        }
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
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets external_system
     *
     * @return \StevenBuehner\ChurchTools\Model\ExternalSystem1|null
     */
    public function getExternalSystem()
    {
        return $this->container['external_system'];
    }

    /**
     * Sets external_system
     *
     * @param \StevenBuehner\ChurchTools\Model\ExternalSystem1|null $external_system external_system
     *
     * @return self
     */
    public function setExternalSystem($external_system)
    {
        $this->container['external_system'] = $external_system;

        return $this;
    }

    /**
     * Gets domain_type
     *
     * @return string
     */
    public function getDomainType()
    {
        return $this->container['domain_type'];
    }

    /**
     * Sets domain_type
     *
     * @param string $domain_type domain_type
     *
     * @return self
     */
    public function setDomainType($domain_type)
    {
        $this->container['domain_type'] = $domain_type;

        return $this;
    }

    /**
     * Gets auto_schedule_enabled
     *
     * @return bool
     */
    public function getAutoScheduleEnabled()
    {
        return $this->container['auto_schedule_enabled'];
    }

    /**
     * Sets auto_schedule_enabled
     *
     * @param bool $auto_schedule_enabled auto_schedule_enabled
     *
     * @return self
     */
    public function setAutoScheduleEnabled($auto_schedule_enabled)
    {
        $this->container['auto_schedule_enabled'] = $auto_schedule_enabled;

        return $this;
    }

    /**
     * Gets create_behavior_master
     *
     * @return string|null
     */
    public function getCreateBehaviorMaster()
    {
        return $this->container['create_behavior_master'];
    }

    /**
     * Sets create_behavior_master
     *
     * @param string|null $create_behavior_master create_behavior_master
     *
     * @return self
     */
    public function setCreateBehaviorMaster($create_behavior_master)
    {
        $this->container['create_behavior_master'] = $create_behavior_master;

        return $this;
    }

    /**
     * Gets create_behavior_es
     *
     * @return string|null
     */
    public function getCreateBehaviorEs()
    {
        return $this->container['create_behavior_es'];
    }

    /**
     * Sets create_behavior_es
     *
     * @param string|null $create_behavior_es create_behavior_es
     *
     * @return self
     */
    public function setCreateBehaviorEs($create_behavior_es)
    {
        $this->container['create_behavior_es'] = $create_behavior_es;

        return $this;
    }

    /**
     * Gets create_defaults_master
     *
     * @return object|null
     */
    public function getCreateDefaultsMaster()
    {
        return $this->container['create_defaults_master'];
    }

    /**
     * Sets create_defaults_master
     *
     * @param object|null $create_defaults_master create_defaults_master
     *
     * @return self
     */
    public function setCreateDefaultsMaster($create_defaults_master)
    {
        $this->container['create_defaults_master'] = $create_defaults_master;

        return $this;
    }

    /**
     * Gets create_defaults_es
     *
     * @return object|null
     */
    public function getCreateDefaultsEs()
    {
        return $this->container['create_defaults_es'];
    }

    /**
     * Sets create_defaults_es
     *
     * @param object|null $create_defaults_es create_defaults_es
     *
     * @return self
     */
    public function setCreateDefaultsEs($create_defaults_es)
    {
        $this->container['create_defaults_es'] = $create_defaults_es;

        return $this;
    }

    /**
     * Gets link_behavior
     *
     * @return string|null
     */
    public function getLinkBehavior()
    {
        return $this->container['link_behavior'];
    }

    /**
     * Sets link_behavior
     *
     * @param string|null $link_behavior link_behavior
     *
     * @return self
     */
    public function setLinkBehavior($link_behavior)
    {
        $this->container['link_behavior'] = $link_behavior;

        return $this;
    }

    /**
     * Gets link_data
     *
     * @return string|null
     */
    public function getLinkData()
    {
        return $this->container['link_data'];
    }

    /**
     * Sets link_data
     *
     * @param string|null $link_data link_data
     *
     * @return self
     */
    public function setLinkData($link_data)
    {
        $this->container['link_data'] = $link_data;

        return $this;
    }

    /**
     * Gets update_behavior
     *
     * @return string|null
     */
    public function getUpdateBehavior()
    {
        return $this->container['update_behavior'];
    }

    /**
     * Sets update_behavior
     *
     * @param string|null $update_behavior update_behavior
     *
     * @return self
     */
    public function setUpdateBehavior($update_behavior)
    {
        $this->container['update_behavior'] = $update_behavior;

        return $this;
    }

    /**
     * Gets update_data
     *
     * @return string|null
     */
    public function getUpdateData()
    {
        return $this->container['update_data'];
    }

    /**
     * Sets update_data
     *
     * @param string|null $update_data update_data
     *
     * @return self
     */
    public function setUpdateData($update_data)
    {
        $this->container['update_data'] = $update_data;

        return $this;
    }

    /**
     * Gets delete_behavior_master
     *
     * @return string|null
     */
    public function getDeleteBehaviorMaster()
    {
        return $this->container['delete_behavior_master'];
    }

    /**
     * Sets delete_behavior_master
     *
     * @param string|null $delete_behavior_master delete_behavior_master
     *
     * @return self
     */
    public function setDeleteBehaviorMaster($delete_behavior_master)
    {
        $this->container['delete_behavior_master'] = $delete_behavior_master;

        return $this;
    }

    /**
     * Gets delete_behavior_es
     *
     * @return string|null
     */
    public function getDeleteBehaviorEs()
    {
        return $this->container['delete_behavior_es'];
    }

    /**
     * Sets delete_behavior_es
     *
     * @param string|null $delete_behavior_es delete_behavior_es
     *
     * @return self
     */
    public function setDeleteBehaviorEs($delete_behavior_es)
    {
        $this->container['delete_behavior_es'] = $delete_behavior_es;

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


