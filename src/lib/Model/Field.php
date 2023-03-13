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
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'delete_on_archive' => false,
		'field_category_code' => false,
		'field_type_code' => false,
		'hide_in_frontend' => false,
		'id' => false,
		'is_active' => false,
		'is_new_person_field' => false,
		'key' => false,
		'length' => false,
		'line_ending' => false,
		'name' => false,
		'name_translated' => false,
		'nullable' => false,
		'options' => false,
		'sec_level' => false,
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
        $this->setIfExists('delete_on_archive', $data ?? [], null);
        $this->setIfExists('field_category_code', $data ?? [], null);
        $this->setIfExists('field_type_code', $data ?? [], null);
        $this->setIfExists('hide_in_frontend', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_new_person_field', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('line_ending', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('name_translated', $data ?? [], null);
        $this->setIfExists('nullable', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('sec_level', $data ?? [], null);
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
        if (is_null($delete_on_archive)) {
            throw new \InvalidArgumentException('non-nullable delete_on_archive cannot be null');
        }
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
        if (is_null($field_category_code)) {
            throw new \InvalidArgumentException('non-nullable field_category_code cannot be null');
        }
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
        if (is_null($field_type_code)) {
            throw new \InvalidArgumentException('non-nullable field_type_code cannot be null');
        }
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
        if (is_null($hide_in_frontend)) {
            throw new \InvalidArgumentException('non-nullable hide_in_frontend cannot be null');
        }
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
     * @param bool|null $is_active Active Flag
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
        if (is_null($is_new_person_field)) {
            throw new \InvalidArgumentException('non-nullable is_new_person_field cannot be null');
        }
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
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }
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
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
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
        if (is_null($line_ending)) {
            throw new \InvalidArgumentException('non-nullable line_ending cannot be null');
        }
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
     * @param string|null $name_translated Field name translated
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
        if (is_null($nullable)) {
            throw new \InvalidArgumentException('non-nullable nullable cannot be null');
        }
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
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
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
        if (is_null($sec_level)) {
            throw new \InvalidArgumentException('non-nullable sec_level cannot be null');
        }
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
     * @param int|null $sort_key Used to sort all campuses
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

