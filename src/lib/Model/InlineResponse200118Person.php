<?php
/**
 * InlineResponse200118Person
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
 * OpenAPI Generator version: 5.4.0
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
 * InlineResponse200118Person Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse200118Person implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_118_person';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'domain_type' => 'string',
        'domain_identifier' => 'string',
        'api_url' => 'string',
        'frontend_url' => 'string',
        'image_url' => 'string',
        'domain_attributes' => '\StevenBuehner\ChurchTools\Model\InlineResponse200118PersonDomainAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'domain_type' => null,
        'domain_identifier' => null,
        'api_url' => null,
        'frontend_url' => null,
        'image_url' => null,
        'domain_attributes' => null
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
        'title' => 'title',
        'domain_type' => 'domainType',
        'domain_identifier' => 'domainIdentifier',
        'api_url' => 'apiUrl',
        'frontend_url' => 'frontendUrl',
        'image_url' => 'imageUrl',
        'domain_attributes' => 'domainAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'domain_type' => 'setDomainType',
        'domain_identifier' => 'setDomainIdentifier',
        'api_url' => 'setApiUrl',
        'frontend_url' => 'setFrontendUrl',
        'image_url' => 'setImageUrl',
        'domain_attributes' => 'setDomainAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'domain_type' => 'getDomainType',
        'domain_identifier' => 'getDomainIdentifier',
        'api_url' => 'getApiUrl',
        'frontend_url' => 'getFrontendUrl',
        'image_url' => 'getImageUrl',
        'domain_attributes' => 'getDomainAttributes'
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['domain_type'] = $data['domain_type'] ?? null;
        $this->container['domain_identifier'] = $data['domain_identifier'] ?? null;
        $this->container['api_url'] = $data['api_url'] ?? null;
        $this->container['frontend_url'] = $data['frontend_url'] ?? null;
        $this->container['image_url'] = $data['image_url'] ?? null;
        $this->container['domain_attributes'] = $data['domain_attributes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['domain_type'] === null) {
            $invalidProperties[] = "'domain_type' can't be null";
        }
        if ((mb_strlen($this->container['domain_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['domain_identifier'] === null) {
            $invalidProperties[] = "'domain_identifier' can't be null";
        }
        if ((mb_strlen($this->container['domain_identifier']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain_identifier', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['api_url'] === null) {
            $invalidProperties[] = "'api_url' can't be null";
        }
        if ((mb_strlen($this->container['api_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'api_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['frontend_url'] === null) {
            $invalidProperties[] = "'frontend_url' can't be null";
        }
        if ((mb_strlen($this->container['frontend_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'frontend_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['image_url'] === null) {
            $invalidProperties[] = "'image_url' can't be null";
        }
        if ($this->container['domain_attributes'] === null) {
            $invalidProperties[] = "'domain_attributes' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling InlineResponse200118Person., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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

        if ((mb_strlen($domain_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain_type when calling InlineResponse200118Person., must be bigger than or equal to 1.');
        }

        $this->container['domain_type'] = $domain_type;

        return $this;
    }

    /**
     * Gets domain_identifier
     *
     * @return string
     */
    public function getDomainIdentifier()
    {
        return $this->container['domain_identifier'];
    }

    /**
     * Sets domain_identifier
     *
     * @param string $domain_identifier domain_identifier
     *
     * @return self
     */
    public function setDomainIdentifier($domain_identifier)
    {

        if ((mb_strlen($domain_identifier) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain_identifier when calling InlineResponse200118Person., must be bigger than or equal to 1.');
        }

        $this->container['domain_identifier'] = $domain_identifier;

        return $this;
    }

    /**
     * Gets api_url
     *
     * @return string
     */
    public function getApiUrl()
    {
        return $this->container['api_url'];
    }

    /**
     * Sets api_url
     *
     * @param string $api_url api_url
     *
     * @return self
     */
    public function setApiUrl($api_url)
    {

        if ((mb_strlen($api_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $api_url when calling InlineResponse200118Person., must be bigger than or equal to 1.');
        }

        $this->container['api_url'] = $api_url;

        return $this;
    }

    /**
     * Gets frontend_url
     *
     * @return string
     */
    public function getFrontendUrl()
    {
        return $this->container['frontend_url'];
    }

    /**
     * Sets frontend_url
     *
     * @param string $frontend_url frontend_url
     *
     * @return self
     */
    public function setFrontendUrl($frontend_url)
    {

        if ((mb_strlen($frontend_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $frontend_url when calling InlineResponse200118Person., must be bigger than or equal to 1.');
        }

        $this->container['frontend_url'] = $frontend_url;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets domain_attributes
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200118PersonDomainAttributes
     */
    public function getDomainAttributes()
    {
        return $this->container['domain_attributes'];
    }

    /**
     * Sets domain_attributes
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse200118PersonDomainAttributes $domain_attributes domain_attributes
     *
     * @return self
     */
    public function setDomainAttributes($domain_attributes)
    {
        $this->container['domain_attributes'] = $domain_attributes;

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


