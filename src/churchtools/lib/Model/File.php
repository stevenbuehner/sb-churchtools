<?php
/**
 * File
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
 * File Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class File implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'File';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'filename' => 'string',
'file_url' => 'string',
'image_url' => 'string',
'relative_url' => 'string',
'type' => 'string',
'show_only_when_editable' => 'bool',
'security_level_id' => 'int',
'size' => 'int',
'domain_type' => 'string',
'domain_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'filename' => null,
'file_url' => null,
'image_url' => null,
'relative_url' => null,
'type' => null,
'show_only_when_editable' => null,
'security_level_id' => null,
'size' => null,
'domain_type' => null,
'domain_id' => null    ];

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
        'id' => 'id',
'name' => 'name',
'filename' => 'filename',
'file_url' => 'fileUrl',
'image_url' => 'imageUrl',
'relative_url' => 'relativeUrl',
'type' => 'type',
'show_only_when_editable' => 'showOnlyWhenEditable',
'security_level_id' => 'securityLevelId',
'size' => 'size',
'domain_type' => 'domainType',
'domain_id' => 'domainId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'filename' => 'setFilename',
'file_url' => 'setFileUrl',
'image_url' => 'setImageUrl',
'relative_url' => 'setRelativeUrl',
'type' => 'setType',
'show_only_when_editable' => 'setShowOnlyWhenEditable',
'security_level_id' => 'setSecurityLevelId',
'size' => 'setSize',
'domain_type' => 'setDomainType',
'domain_id' => 'setDomainId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'filename' => 'getFilename',
'file_url' => 'getFileUrl',
'image_url' => 'getImageUrl',
'relative_url' => 'getRelativeUrl',
'type' => 'getType',
'show_only_when_editable' => 'getShowOnlyWhenEditable',
'security_level_id' => 'getSecurityLevelId',
'size' => 'getSize',
'domain_type' => 'getDomainType',
'domain_id' => 'getDomainId'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['file_url'] = isset($data['file_url']) ? $data['file_url'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['relative_url'] = isset($data['relative_url']) ? $data['relative_url'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['show_only_when_editable'] = isset($data['show_only_when_editable']) ? $data['show_only_when_editable'] : null;
        $this->container['security_level_id'] = isset($data['security_level_id']) ? $data['security_level_id'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['domain_type'] = isset($data['domain_type']) ? $data['domain_type'] : null;
        $this->container['domain_id'] = isset($data['domain_id']) ? $data['domain_id'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets file_url
     *
     * @return string
     */
    public function getFileUrl()
    {
        return $this->container['file_url'];
    }

    /**
     * Sets file_url
     *
     * @param string $file_url file_url
     *
     * @return $this
     */
    public function setFileUrl($file_url)
    {
        $this->container['file_url'] = $file_url;

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
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets relative_url
     *
     * @return string
     */
    public function getRelativeUrl()
    {
        return $this->container['relative_url'];
    }

    /**
     * Sets relative_url
     *
     * @param string $relative_url relative_url
     *
     * @return $this
     */
    public function setRelativeUrl($relative_url)
    {
        $this->container['relative_url'] = $relative_url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets show_only_when_editable
     *
     * @return bool
     */
    public function getShowOnlyWhenEditable()
    {
        return $this->container['show_only_when_editable'];
    }

    /**
     * Sets show_only_when_editable
     *
     * @param bool $show_only_when_editable show_only_when_editable
     *
     * @return $this
     */
    public function setShowOnlyWhenEditable($show_only_when_editable)
    {
        $this->container['show_only_when_editable'] = $show_only_when_editable;

        return $this;
    }

    /**
     * Gets security_level_id
     *
     * @return int
     */
    public function getSecurityLevelId()
    {
        return $this->container['security_level_id'];
    }

    /**
     * Sets security_level_id
     *
     * @param int $security_level_id security_level_id
     *
     * @return $this
     */
    public function setSecurityLevelId($security_level_id)
    {
        $this->container['security_level_id'] = $security_level_id;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size The file size in byte
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * @return $this
     */
    public function setDomainType($domain_type)
    {
        $this->container['domain_type'] = $domain_type;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return string
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string $domain_id domain_id
     *
     * @return $this
     */
    public function setDomainId($domain_id)
    {
        $this->container['domain_id'] = $domain_id;

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
