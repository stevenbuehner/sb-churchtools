<?php
/**
 * Field
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
 * Field Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Field implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Field';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delete_on_archive' => 'bool',
        'field_category_code' => 'string',
        'field_type_code' => 'string',
        'hide_in_frontend' => 'bool',
        'id' => 'int',
        'is_active' => 'bool',
        'is_new_person_field' => 'bool',
        'key' => 'string',
        'length' => 'int',
        'line_ending' => 'string',
        'name' => 'string',
        'name_translated' => 'string',
        'nullable' => 'bool',
        'options' => '\StevenBuehner\ChurchTools\Model\GetAllFields200ResponseDataInnerOptionsInner[]',
        'sec_level' => 'int',
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
        'delete_on_archive' => null,
        'field_category_code' => null,
        'field_type_code' => null,
        'hide_in_frontend' => null,
        'id' => null,
        'is_active' => null,
        'is_new_person_field' => null,
        'key' => null,
        'length' => null,
        'line_ending' => null,
        'name' => null,
        'name_translated' => null,
        'nullable' => null,
        'options' => null,
        'sec_level' => null,
        'shorty' => null,
        'sort_key' => null
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
        'delete_on_archive' => 'deleteOnArchive',
        'field_category_code' => 'fieldCategoryCode',
        'field_type_code' => 'fieldTypeCode',
        'hide_in_frontend' => 'hideInFrontend',
        'id' => 'id',
        'is_active' => 'isActive',
        'is_new_person_field' => 'isNewPersonField',
        'key' => 'key',
        'length' => 'length',
        'line_ending' => 'lineEnding',
        'name' => 'name',
        'name_translated' => 'nameTranslated',
        'nullable' => 'nullable',
        'options' => 'options',
        'sec_level' => 'secLevel',
        'shorty' => 'shorty',
        'sort_key' => 'sortKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delete_on_archive' => 'setDeleteOnArchive',
        'field_category_code' => 'setFieldCategoryCode',
        'field_type_code' => 'setFieldTypeCode',
        'hide_in_frontend' => 'setHideInFrontend',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'is_new_person_field' => 'setIsNewPersonField',
        'key' => 'setKey',
        'length' => 'setLength',
        'line_ending' => 'setLineEnding',
        'name' => 'setName',
        'name_translated' => 'setNameTranslated',
        'nullable' => 'setNullable',
        'options' => 'setOptions',
        'sec_level' => 'setSecLevel',
        'shorty' => 'setShorty',
        'sort_key' => 'setSortKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delete_on_archive' => 'getDeleteOnArchive',
        'field_category_code' => 'getFieldCategoryCode',
        'field_type_code' => 'getFieldTypeCode',
        'hide_in_frontend' => 'getHideInFrontend',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'is_new_person_field' => 'getIsNewPersonField',
        'key' => 'getKey',
        'length' => 'getLength',
        'line_ending' => 'getLineEnding',
        'name' => 'getName',
        'name_translated' => 'getNameTranslated',
        'nullable' => 'getNullable',
        'options' => 'getOptions',
        'sec_level' => 'getSecLevel',
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
        $this->container['delete_on_archive'] = $data['delete_on_archive'] ?? null;
        $this->container['field_category_code'] = $data['field_category_code'] ?? null;
        $this->container['field_type_code'] = $data['field_type_code'] ?? null;
        $this->container['hide_in_frontend'] = $data['hide_in_frontend'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['is_new_person_field'] = $data['is_new_person_field'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['line_ending'] = $data['line_ending'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_translated'] = $data['name_translated'] ?? null;
        $this->container['nullable'] = $data['nullable'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['sec_level'] = $data['sec_level'] ?? null;
        $this->container['shorty'] = $data['shorty'] ?? null;
        $this->container['sort_key'] = $data['sort_key'] ?? null;
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
     * @param bool|null $delete_on_archive Whether the field should be deleted on person archive or not
     *
     * @return self
     */
    public function setDeleteOnArchive($delete_on_archive)
    {
        $this->container['delete_on_archive'] = $delete_on_archive;

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
     * @param string|null $field_category_code The intern code of the field category the field belongs to
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
     * @param string|null $field_type_code The intern code of the field type the field belongs to
     *
     * @return self
     */
    public function setFieldTypeCode($field_type_code)
    {
        $this->container['field_type_code'] = $field_type_code;

        return $this;
    }

    /**
     * Gets hide_in_frontend
     *
     * @return bool|null
     */
    public function getHideInFrontend()
    {
        return $this->container['hide_in_frontend'];
    }

    /**
     * Sets hide_in_frontend
     *
     * @param bool|null $hide_in_frontend Should be hidden in frontend
     *
     * @return self
     */
    public function setHideInFrontend($hide_in_frontend)
    {
        $this->container['hide_in_frontend'] = $hide_in_frontend;

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
     * @param int|null $id ID of field
     *
     * @return self
     */
    public function setId($id)
    {
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
     * @param bool|null $is_active Active Flag
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
     * @param bool|null $is_new_person_field Defines if the field can be used as parameter when creating new persons
     *
     * @return self
     */
    public function setIsNewPersonField($is_new_person_field)
    {
        $this->container['is_new_person_field'] = $is_new_person_field;

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
     * @param string|null $key The key of the field. This is the name that is also used when using the person or group api
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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
     * @param int|null $length The max length of the field
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

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
     * @param string|null $line_ending The line ending that should be used when displaying the field
     *
     * @return self
     */
    public function setLineEnding($line_ending)
    {
        $this->container['line_ending'] = $line_ending;

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
     * @param string|null $name Field name
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
     * @param string|null $name_translated Field name translated
     *
     * @return self
     */
    public function setNameTranslated($name_translated)
    {
        $this->container['name_translated'] = $name_translated;

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
     * @param bool|null $nullable Should define if a field can be null. This is sadly not really enforced in the application right now. So don't bet on it.
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
     * @return \StevenBuehner\ChurchTools\Model\GetAllFields200ResponseDataInnerOptionsInner[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllFields200ResponseDataInnerOptionsInner[]|null $options Possible options for this field
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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
     * @param int|null $sec_level The security level necessary to see this field
     *
     * @return self
     */
    public function setSecLevel($sec_level)
    {
        $this->container['sec_level'] = $sec_level;

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
     * @param string|null $shorty Abbreviation
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
     * @param int|null $sort_key Used to sort all campuses
     *
     * @return self
     */
    public function setSortKey($sort_key)
    {
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


