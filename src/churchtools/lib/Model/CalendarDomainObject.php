<?php
/**
 * CalendarDomainObject
 *
 * PHP version 5
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Model;

use \ArrayAccess;
use \StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * CalendarDomainObject Class Doc Comment
 *
 * @category Class
 * @description Calendar Information as Domain Object
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CalendarDomainObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Calendar DomainObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
'domain_type' => 'string',
'api_url' => 'string',
'frontend_url' => 'string',
'image_url' => 'string',
'domain_attributes' => '\StevenBuehner\ChurchTools\Model\CalendarDomainObjectDomainAttributes',
'domain_identifier' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'title' => null,
'domain_type' => null,
'api_url' => null,
'frontend_url' => null,
'image_url' => null,
'domain_attributes' => null,
'domain_identifier' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
'api_url' => 'apiUrl',
'frontend_url' => 'frontendUrl',
'image_url' => 'imageUrl',
'domain_attributes' => 'domainAttributes',
'domain_identifier' => 'domainIdentifier'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
'domain_type' => 'setDomainType',
'api_url' => 'setApiUrl',
'frontend_url' => 'setFrontendUrl',
'image_url' => 'setImageUrl',
'domain_attributes' => 'setDomainAttributes',
'domain_identifier' => 'setDomainIdentifier'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
'domain_type' => 'getDomainType',
'api_url' => 'getApiUrl',
'frontend_url' => 'getFrontendUrl',
'image_url' => 'getImageUrl',
'domain_attributes' => 'getDomainAttributes',
'domain_identifier' => 'getDomainIdentifier'    ];

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
        return self::$swaggerModelName;
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['domain_type'] = isset($data['domain_type']) ? $data['domain_type'] : null;
        $this->container['api_url'] = isset($data['api_url']) ? $data['api_url'] : null;
        $this->container['frontend_url'] = isset($data['frontend_url']) ? $data['frontend_url'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['domain_attributes'] = isset($data['domain_attributes']) ? $data['domain_attributes'] : null;
        $this->container['domain_identifier'] = isset($data['domain_identifier']) ? $data['domain_identifier'] : null;
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
     * @param string $title Name of calendar
     *
     * @return $this
     */
    public function setTitle($title)
    {
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
     * @param string $domain_type ChurchTools domain type
     *
     * @return $this
     */
    public function setDomainType($domain_type)
    {
        $this->container['domain_type'] = $domain_type;

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
     * @param string $api_url API Endpoint to calendar
     *
     * @return $this
     */
    public function setApiUrl($api_url)
    {
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
     * @param string $frontend_url Frontend link
     *
     * @return $this
     */
    public function setFrontendUrl($frontend_url)
    {
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
     * @param string $image_url Image Url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets domain_attributes
     *
     * @return \StevenBuehner\ChurchTools\Model\CalendarDomainObjectDomainAttributes
     */
    public function getDomainAttributes()
    {
        return $this->container['domain_attributes'];
    }

    /**
     * Sets domain_attributes
     *
     * @param \StevenBuehner\ChurchTools\Model\CalendarDomainObjectDomainAttributes $domain_attributes domain_attributes
     *
     * @return $this
     */
    public function setDomainAttributes($domain_attributes)
    {
        $this->container['domain_attributes'] = $domain_attributes;

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
     * @param string $domain_identifier ID of Calendar
     *
     * @return $this
     */
    public function setDomainIdentifier($domain_identifier)
    {
        $this->container['domain_identifier'] = $domain_identifier;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
