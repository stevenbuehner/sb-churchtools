<?php
/**
 * PostGroupsRequest
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
 * PostGroupsRequest Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostGroupsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_groups_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'group_type_id' => 'float',
        'group_status_id' => 'float',
        'superior_group_id' => 'float',
        'campus_id' => 'float',
        'force' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'group_type_id' => null,
        'group_status_id' => null,
        'superior_group_id' => null,
        'campus_id' => null,
        'force' => null
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
        'name' => 'name',
        'group_type_id' => 'groupTypeId',
        'group_status_id' => 'groupStatusId',
        'superior_group_id' => 'superiorGroupId',
        'campus_id' => 'campusId',
        'force' => 'force'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'group_type_id' => 'setGroupTypeId',
        'group_status_id' => 'setGroupStatusId',
        'superior_group_id' => 'setSuperiorGroupId',
        'campus_id' => 'setCampusId',
        'force' => 'setForce'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'group_type_id' => 'getGroupTypeId',
        'group_status_id' => 'getGroupStatusId',
        'superior_group_id' => 'getSuperiorGroupId',
        'campus_id' => 'getCampusId',
        'force' => 'getForce'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['group_type_id'] = $data['group_type_id'] ?? null;
        $this->container['group_status_id'] = $data['group_status_id'] ?? null;
        $this->container['superior_group_id'] = $data['superior_group_id'] ?? null;
        $this->container['campus_id'] = $data['campus_id'] ?? null;
        $this->container['force'] = $data['force'] ?? null;
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
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['group_type_id'] === null) {
            $invalidProperties[] = "'group_type_id' can't be null";
        }
        if ($this->container['group_status_id'] === null) {
            $invalidProperties[] = "'group_status_id' can't be null";
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
     * @param string $name Group name
     *
     * @return self
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PostGroupsRequest., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets group_type_id
     *
     * @return float
     */
    public function getGroupTypeId()
    {
        return $this->container['group_type_id'];
    }

    /**
     * Sets group_type_id
     *
     * @param float $group_type_id Id of group type
     *
     * @return self
     */
    public function setGroupTypeId($group_type_id)
    {
        $this->container['group_type_id'] = $group_type_id;

        return $this;
    }

    /**
     * Gets group_status_id
     *
     * @return float
     */
    public function getGroupStatusId()
    {
        return $this->container['group_status_id'];
    }

    /**
     * Sets group_status_id
     *
     * @param float $group_status_id ID of group status
     *
     * @return self
     */
    public function setGroupStatusId($group_status_id)
    {
        $this->container['group_status_id'] = $group_status_id;

        return $this;
    }

    /**
     * Gets superior_group_id
     *
     * @return float|null
     */
    public function getSuperiorGroupId()
    {
        return $this->container['superior_group_id'];
    }

    /**
     * Sets superior_group_id
     *
     * @param float|null $superior_group_id Group ID of superior group
     *
     * @return self
     */
    public function setSuperiorGroupId($superior_group_id)
    {
        $this->container['superior_group_id'] = $superior_group_id;

        return $this;
    }

    /**
     * Gets campus_id
     *
     * @return float|null
     */
    public function getCampusId()
    {
        return $this->container['campus_id'];
    }

    /**
     * Sets campus_id
     *
     * @param float|null $campus_id Campus Id if group is connected to a campus
     *
     * @return self
     */
    public function setCampusId($campus_id)
    {
        $this->container['campus_id'] = $campus_id;

        return $this;
    }

    /**
     * Gets force
     *
     * @return bool|null
     */
    public function getForce()
    {
        return $this->container['force'];
    }

    /**
     * Sets force
     *
     * @param bool|null $force Need to be true, if another group with that name already exists
     *
     * @return self
     */
    public function setForce($force)
    {
        $this->container['force'] = $force;

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


