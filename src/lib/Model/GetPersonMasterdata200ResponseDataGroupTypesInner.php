<?php
/**
 * GetPersonMasterdata200ResponseDataGroupTypesInner
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
 * OpenAPI Generator version: 6.4.0
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
 * GetPersonMasterdata200ResponseDataGroupTypesInner Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPersonMasterdata200ResponseDataGroupTypesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getPersonMasterdata_200_response_data_groupTypes_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_for_new_person' => 'bool',
        'deep_permission' => 'int',
        'id' => 'int',
        'is_leader_necessary' => 'bool',
        'name' => 'string',
        'name_translated' => 'string',
        'shorty' => 'string',
        'sort_key' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available_for_new_person' => null,
        'deep_permission' => null,
        'id' => null,
        'is_leader_necessary' => null,
        'name' => null,
        'name_translated' => null,
        'shorty' => null,
        'sort_key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_for_new_person' => false,
		'deep_permission' => false,
		'id' => false,
		'is_leader_necessary' => false,
		'name' => false,
		'name_translated' => false,
		'shorty' => false,
		'sort_key' => false
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
        'available_for_new_person' => 'availableForNewPerson',
        'deep_permission' => 'deepPermission',
        'id' => 'id',
        'is_leader_necessary' => 'isLeaderNecessary',
        'name' => 'name',
        'name_translated' => 'nameTranslated',
        'shorty' => 'shorty',
        'sort_key' => 'sortKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_for_new_person' => 'setAvailableForNewPerson',
        'deep_permission' => 'setDeepPermission',
        'id' => 'setId',
        'is_leader_necessary' => 'setIsLeaderNecessary',
        'name' => 'setName',
        'name_translated' => 'setNameTranslated',
        'shorty' => 'setShorty',
        'sort_key' => 'setSortKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_for_new_person' => 'getAvailableForNewPerson',
        'deep_permission' => 'getDeepPermission',
        'id' => 'getId',
        'is_leader_necessary' => 'getIsLeaderNecessary',
        'name' => 'getName',
        'name_translated' => 'getNameTranslated',
        'shorty' => 'getShorty',
        'sort_key' => 'getSortKey'
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
        $this->setIfExists('available_for_new_person', $data ?? [], null);
        $this->setIfExists('deep_permission', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_leader_necessary', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_translated', $data ?? [], null);
        $this->setIfExists('shorty', $data ?? [], null);
        $this->setIfExists('sort_key', $data ?? [], null);
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
     * Gets available_for_new_person
     *
     * @return bool|null
     */
    public function getAvailableForNewPerson()
    {
        return $this->container['available_for_new_person'];
    }

    /**
     * Sets available_for_new_person
     *
     * @param bool|null $available_for_new_person available_for_new_person
     *
     * @return self
     */
    public function setAvailableForNewPerson($available_for_new_person)
    {
        if (is_null($available_for_new_person)) {
            throw new \InvalidArgumentException('non-nullable available_for_new_person cannot be null');
        }
        $this->container['available_for_new_person'] = $available_for_new_person;

        return $this;
    }

    /**
     * Gets deep_permission
     *
     * @return int|null
     */
    public function getDeepPermission()
    {
        return $this->container['deep_permission'];
    }

    /**
     * Sets deep_permission
     *
     * @param int|null $deep_permission deep_permission
     *
     * @return self
     */
    public function setDeepPermission($deep_permission)
    {
        if (is_null($deep_permission)) {
            throw new \InvalidArgumentException('non-nullable deep_permission cannot be null');
        }
        $this->container['deep_permission'] = $deep_permission;

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
     * Gets is_leader_necessary
     *
     * @return bool|null
     */
    public function getIsLeaderNecessary()
    {
        return $this->container['is_leader_necessary'];
    }

    /**
     * Sets is_leader_necessary
     *
     * @param bool|null $is_leader_necessary is_leader_necessary
     *
     * @return self
     */
    public function setIsLeaderNecessary($is_leader_necessary)
    {
        if (is_null($is_leader_necessary)) {
            throw new \InvalidArgumentException('non-nullable is_leader_necessary cannot be null');
        }
        $this->container['is_leader_necessary'] = $is_leader_necessary;

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
     * @param string|null $name_translated name_translated
     *
     * @return self
     */
    public function setNameTranslated($name_translated)
    {
        if (is_null($name_translated)) {
            throw new \InvalidArgumentException('non-nullable name_translated cannot be null');
        }
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

