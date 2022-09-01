<?php
/**
 * PersonRelationship
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
 * PersonRelationship Class Doc Comment
 *
 * @category Class
 * @description Relationship information of a person. Notice, that a relationship has a security level. That means you only see those relationships, you are allowed to see.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PersonRelationship implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'personRelationship';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'degree_of_relationship' => 'string',
        'relationship_name' => 'string',
        'relationship_type_id' => 'int',
        'relative' => '\StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'degree_of_relationship' => null,
        'relationship_name' => null,
        'relationship_type_id' => null,
        'relative' => null
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
        'degree_of_relationship' => 'degreeOfRelationship',
        'relationship_name' => 'relationshipName',
        'relationship_type_id' => 'relationshipTypeId',
        'relative' => 'relative'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'degree_of_relationship' => 'setDegreeOfRelationship',
        'relationship_name' => 'setRelationshipName',
        'relationship_type_id' => 'setRelationshipTypeId',
        'relative' => 'setRelative'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'degree_of_relationship' => 'getDegreeOfRelationship',
        'relationship_name' => 'getRelationshipName',
        'relationship_type_id' => 'getRelationshipTypeId',
        'relative' => 'getRelative'
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
        $this->container['degree_of_relationship'] = $data['degree_of_relationship'] ?? null;
        $this->container['relationship_name'] = $data['relationship_name'] ?? null;
        $this->container['relationship_type_id'] = $data['relationship_type_id'] ?? null;
        $this->container['relative'] = $data['relative'] ?? null;
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
     * Gets degree_of_relationship
     *
     * @return string|null
     */
    public function getDegreeOfRelationship()
    {
        return $this->container['degree_of_relationship'];
    }

    /**
     * Sets degree_of_relationship
     *
     * @param string|null $degree_of_relationship Name of type, what this relative is for the user.
     *
     * @return self
     */
    public function setDegreeOfRelationship($degree_of_relationship)
    {
        $this->container['degree_of_relationship'] = $degree_of_relationship;

        return $this;
    }

    /**
     * Gets relationship_name
     *
     * @return string|null
     */
    public function getRelationshipName()
    {
        return $this->container['relationship_name'];
    }

    /**
     * Sets relationship_name
     *
     * @param string|null $relationship_name Name of Relationship
     *
     * @return self
     */
    public function setRelationshipName($relationship_name)
    {
        $this->container['relationship_name'] = $relationship_name;

        return $this;
    }

    /**
     * Gets relationship_type_id
     *
     * @return int|null
     */
    public function getRelationshipTypeId()
    {
        return $this->container['relationship_type_id'];
    }

    /**
     * Sets relationship_type_id
     *
     * @param int|null $relationship_type_id ID of relationship type
     *
     * @return self
     */
    public function setRelationshipTypeId($relationship_type_id)
    {
        $this->container['relationship_type_id'] = $relationship_type_id;

        return $this;
    }

    /**
     * Gets relative
     *
     * @return \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson|null
     */
    public function getRelative()
    {
        return $this->container['relative'];
    }

    /**
     * Sets relative
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson|null $relative relative
     *
     * @return self
     */
    public function setRelative($relative)
    {
        $this->container['relative'] = $relative;

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


