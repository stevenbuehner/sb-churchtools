<?php
/**
 * DbField1
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.2.0
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
 * DbField1 Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DbField1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DbField_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'key' => 'string',
        'name' => 'string',
        'shorty' => 'string',
        'field_category_code' => 'string',
        'field_type_code' => 'string',
        'is_active' => 'bool',
        'is_new_person_field' => 'bool',
        'line_ending' => 'string',
        'sec_level' => 'int',
        'length' => 'int',
        'sort_key' => 'int',
        'delete_on_archive' => 'bool',
        'nullable' => 'bool',
        'options' => 'mixed[]'
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
        'key' => null,
        'name' => null,
        'shorty' => null,
        'field_category_code' => null,
        'field_type_code' => null,
        'is_active' => null,
        'is_new_person_field' => null,
        'line_ending' => null,
        'sec_level' => null,
        'length' => null,
        'sort_key' => null,
        'delete_on_archive' => null,
        'nullable' => null,
        'options' => null
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
        'key' => 'key',
        'name' => 'name',
        'shorty' => 'shorty',
        'field_category_code' => 'fieldCategoryCode',
        'field_type_code' => 'fieldTypeCode',
        'is_active' => 'isActive',
        'is_new_person_field' => 'isNewPersonField',
        'line_ending' => 'lineEnding',
        'sec_level' => 'secLevel',
        'length' => 'length',
        'sort_key' => 'sortKey',
        'delete_on_archive' => 'deleteOnArchive',
        'nullable' => 'nullable',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'key' => 'setKey',
        'name' => 'setName',
        'shorty' => 'setShorty',
        'field_category_code' => 'setFieldCategoryCode',
        'field_type_code' => 'setFieldTypeCode',
        'is_active' => 'setIsActive',
        'is_new_person_field' => 'setIsNewPersonField',
        'line_ending' => 'setLineEnding',
        'sec_level' => 'setSecLevel',
        'length' => 'setLength',
        'sort_key' => 'setSortKey',
        'delete_on_archive' => 'setDeleteOnArchive',
        'nullable' => 'setNullable',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'key' => 'getKey',
        'name' => 'getName',
        'shorty' => 'getShorty',
        'field_category_code' => 'getFieldCategoryCode',
        'field_type_code' => 'getFieldTypeCode',
        'is_active' => 'getIsActive',
        'is_new_person_field' => 'getIsNewPersonField',
        'line_ending' => 'getLineEnding',
        'sec_level' => 'getSecLevel',
        'length' => 'getLength',
        'sort_key' => 'getSortKey',
        'delete_on_archive' => 'getDeleteOnArchive',
        'nullable' => 'getNullable',
        'options' => 'getOptions'
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
        $this->container['key'] = $data['key'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['shorty'] = $data['shorty'] ?? null;
        $this->container['field_category_code'] = $data['field_category_code'] ?? null;
        $this->container['field_type_code'] = $data['field_type_code'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['is_new_person_field'] = $data['is_new_person_field'] ?? null;
        $this->container['line_ending'] = $data['line_ending'] ?? null;
        $this->container['sec_level'] = $data['sec_level'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['sort_key'] = $data['sort_key'] ?? null;
        $this->container['delete_on_archive'] = $data['delete_on_archive'] ?? null;
        $this->container['nullable'] = $data['nullable'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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
        $this->container['shorty'] = $shorty;

        return $this;
    }

    /**
     * Gets field_category_code
     *
     * @return string|null
     */
    public function getFieldCategoryCode()
    {
        return $this->container['field_category_code'];
    }

    /**
     * Sets field_category_code
     *
     * @param string|null $field_category_code field_category_code
     *
     * @return self
     */
    public function setFieldCategoryCode($field_category_code)
    {
        $this->container['field_category_code'] = $field_category_code;

        return $this;
    }

    /**
     * Gets field_type_code
     *
     * @return string|null
     */
    public function getFieldTypeCode()
    {
        return $this->container['field_type_code'];
    }

    /**
     * Sets field_type_code
     *
     * @param string|null $field_type_code field_type_code
     *
     * @return self
     */
    public function setFieldTypeCode($field_type_code)
    {
        $this->container['field_type_code'] = $field_type_code;

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
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_new_person_field
     *
     * @return bool|null
     */
    public function getIsNewPersonField()
    {
        return $this->container['is_new_person_field'];
    }

    /**
     * Sets is_new_person_field
     *
     * @param bool|null $is_new_person_field is_new_person_field
     *
     * @return self
     */
    public function setIsNewPersonField($is_new_person_field)
    {
        $this->container['is_new_person_field'] = $is_new_person_field;

        return $this;
    }

    /**
     * Gets line_ending
     *
     * @return string|null
     */
    public function getLineEnding()
    {
        return $this->container['line_ending'];
    }

    /**
     * Sets line_ending
     *
     * @param string|null $line_ending line_ending
     *
     * @return self
     */
    public function setLineEnding($line_ending)
    {
        $this->container['line_ending'] = $line_ending;

        return $this;
    }

    /**
     * Gets sec_level
     *
     * @return int|null
     */
    public function getSecLevel()
    {
        return $this->container['sec_level'];
    }

    /**
     * Sets sec_level
     *
     * @param int|null $sec_level sec_level
     *
     * @return self
     */
    public function setSecLevel($sec_level)
    {
        $this->container['sec_level'] = $sec_level;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

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
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets delete_on_archive
     *
     * @return bool|null
     */
    public function getDeleteOnArchive()
    {
        return $this->container['delete_on_archive'];
    }

    /**
     * Sets delete_on_archive
     *
     * @param bool|null $delete_on_archive delete_on_archive
     *
     * @return self
     */
    public function setDeleteOnArchive($delete_on_archive)
    {
        $this->container['delete_on_archive'] = $delete_on_archive;

        return $this;
    }

    /**
     * Gets nullable
     *
     * @return bool|null
     */
    public function getNullable()
    {
        return $this->container['nullable'];
    }

    /**
     * Sets nullable
     *
     * @param bool|null $nullable nullable
     *
     * @return self
     */
    public function setNullable($nullable)
    {
        $this->container['nullable'] = $nullable;

        return $this;
    }

    /**
     * Gets options
     *
     * @return mixed[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param mixed[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


