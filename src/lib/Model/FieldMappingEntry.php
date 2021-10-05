<?php
/**
 * FieldMappingEntry
 *
 * PHP version 7.3
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
 * OpenAPI Generator version: 5.2.1
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
 * FieldMappingEntry Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FieldMappingEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Field_Mapping_Entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'system' => 'string',
        'from' => 'string',
        'to' => 'string',
        'from_filter' => 'string',
        'to_filter' => 'string',
        'value_mapping' => 'mixed[]',
        'others' => 'mixed[]'
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
        'system' => null,
        'from' => null,
        'to' => null,
        'from_filter' => null,
        'to_filter' => null,
        'value_mapping' => null,
        'others' => null
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
        'system' => 'system',
        'from' => 'from',
        'to' => 'to',
        'from_filter' => 'fromFilter',
        'to_filter' => 'toFilter',
        'value_mapping' => 'valueMapping',
        'others' => 'others'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'system' => 'setSystem',
        'from' => 'setFrom',
        'to' => 'setTo',
        'from_filter' => 'setFromFilter',
        'to_filter' => 'setToFilter',
        'value_mapping' => 'setValueMapping',
        'others' => 'setOthers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'system' => 'getSystem',
        'from' => 'getFrom',
        'to' => 'getTo',
        'from_filter' => 'getFromFilter',
        'to_filter' => 'getToFilter',
        'value_mapping' => 'getValueMapping',
        'others' => 'getOthers'
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

    const SYSTEM_MASTER = 'master';
    const SYSTEM_EXTERNAL_SYSTEM = 'externalSystem';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSystemAllowableValues()
    {
        return [
            self::SYSTEM_MASTER,
            self::SYSTEM_EXTERNAL_SYSTEM,
        ];
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
        $this->container['system'] = $data['system'] ?? null;
        $this->container['from'] = $data['from'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['from_filter'] = $data['from_filter'] ?? null;
        $this->container['to_filter'] = $data['to_filter'] ?? null;
        $this->container['value_mapping'] = $data['value_mapping'] ?? null;
        $this->container['others'] = $data['others'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['system'] === null) {
            $invalidProperties[] = "'system' can't be null";
        }
        $allowedValues = $this->getSystemAllowableValues();
        if (!is_null($this->container['system']) && !in_array($this->container['system'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'system', must be one of '%s'",
                $this->container['system'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
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
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets system
     *
     * @return string
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param string $system system
     *
     * @return self
     */
    public function setSystem($system)
    {
        $allowedValues = $this->getSystemAllowableValues();
        if (!in_array($system, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'system', must be one of '%s'",
                    $system,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets from_filter
     *
     * @return string|null
     */
    public function getFromFilter()
    {
        return $this->container['from_filter'];
    }

    /**
     * Sets from_filter
     *
     * @param string|null $from_filter from_filter
     *
     * @return self
     */
    public function setFromFilter($from_filter)
    {
        $this->container['from_filter'] = $from_filter;

        return $this;
    }

    /**
     * Gets to_filter
     *
     * @return string|null
     */
    public function getToFilter()
    {
        return $this->container['to_filter'];
    }

    /**
     * Sets to_filter
     *
     * @param string|null $to_filter to_filter
     *
     * @return self
     */
    public function setToFilter($to_filter)
    {
        $this->container['to_filter'] = $to_filter;

        return $this;
    }

    /**
     * Gets value_mapping
     *
     * @return mixed[]|null
     */
    public function getValueMapping()
    {
        return $this->container['value_mapping'];
    }

    /**
     * Sets value_mapping
     *
     * @param mixed[]|null $value_mapping value_mapping
     *
     * @return self
     */
    public function setValueMapping($value_mapping)
    {
        $this->container['value_mapping'] = $value_mapping;

        return $this;
    }

    /**
     * Gets others
     *
     * @return mixed[]|null
     */
    public function getOthers()
    {
        return $this->container['others'];
    }

    /**
     * Sets others
     *
     * @param mixed[]|null $others others
     *
     * @return self
     */
    public function setOthers($others)
    {
        $this->container['others'] = $others;

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


