<?php
/**
 * GetPersonMasterdata200ResponseDataCampusesInnerGroupsInner
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
 * GetPersonMasterdata200ResponseDataCampusesInnerGroupsInner Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPersonMasterdata200ResponseDataCampusesInnerGroupsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getPersonMasterdata_200_response_data_campuses_inner_groups_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataCampusesInnerGroupsInnerGroup',
        'group_homepage_api' => 'string',
        'group_homepage_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group' => null,
        'group_homepage_api' => null,
        'group_homepage_url' => null
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
        'group' => 'group',
        'group_homepage_api' => 'groupHomepageApi',
        'group_homepage_url' => 'groupHomepageUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group' => 'setGroup',
        'group_homepage_api' => 'setGroupHomepageApi',
        'group_homepage_url' => 'setGroupHomepageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group' => 'getGroup',
        'group_homepage_api' => 'getGroupHomepageApi',
        'group_homepage_url' => 'getGroupHomepageUrl'
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
        $this->container['group'] = $data['group'] ?? null;
        $this->container['group_homepage_api'] = $data['group_homepage_api'] ?? null;
        $this->container['group_homepage_url'] = $data['group_homepage_url'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['group_homepage_api'] === null) {
            $invalidProperties[] = "'group_homepage_api' can't be null";
        }
        if ((mb_strlen($this->container['group_homepage_api']) < 1)) {
            $invalidProperties[] = "invalid value for 'group_homepage_api', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['group_homepage_url'] === null) {
            $invalidProperties[] = "'group_homepage_url' can't be null";
        }
        if ((mb_strlen($this->container['group_homepage_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'group_homepage_url', the character length must be bigger than or equal to 1.";
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
     * Gets group
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataCampusesInnerGroupsInnerGroup|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataCampusesInnerGroupsInnerGroup|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets group_homepage_api
     *
     * @return string
     */
    public function getGroupHomepageApi()
    {
        return $this->container['group_homepage_api'];
    }

    /**
     * Sets group_homepage_api
     *
     * @param string $group_homepage_api group_homepage_api
     *
     * @return self
     */
    public function setGroupHomepageApi($group_homepage_api)
    {

        if ((mb_strlen($group_homepage_api) < 1)) {
            throw new \InvalidArgumentException('invalid length for $group_homepage_api when calling GetPersonMasterdata200ResponseDataCampusesInnerGroupsInner., must be bigger than or equal to 1.');
        }

        $this->container['group_homepage_api'] = $group_homepage_api;

        return $this;
    }

    /**
     * Gets group_homepage_url
     *
     * @return string
     */
    public function getGroupHomepageUrl()
    {
        return $this->container['group_homepage_url'];
    }

    /**
     * Sets group_homepage_url
     *
     * @param string $group_homepage_url group_homepage_url
     *
     * @return self
     */
    public function setGroupHomepageUrl($group_homepage_url)
    {

        if ((mb_strlen($group_homepage_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $group_homepage_url when calling GetPersonMasterdata200ResponseDataCampusesInnerGroupsInner., must be bigger than or equal to 1.');
        }

        $this->container['group_homepage_url'] = $group_homepage_url;

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


