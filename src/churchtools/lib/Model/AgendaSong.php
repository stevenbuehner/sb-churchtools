<?php
/**
 * AgendaSong
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
 * AgendaSong Class Doc Comment
 *
 * @category Class
 * @description If the type is &#x60;song&#x60; the song object is added to this item. &#x60;normal&#x60; and &#x60;header&#x60; items do not include this object.
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgendaSong implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Agenda_song';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'song_id' => 'int',
'arrangement_id' => 'int',
'title' => 'string',
'arrangement' => 'string',
'category' => 'string',
'key' => 'string',
'bpm' => 'string',
'default_arrangement' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'song_id' => null,
'arrangement_id' => null,
'title' => null,
'arrangement' => null,
'category' => null,
'key' => null,
'bpm' => null,
'default_arrangement' => null    ];

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
        'song_id' => 'songId',
'arrangement_id' => 'arrangementId',
'title' => 'title',
'arrangement' => 'arrangement',
'category' => 'category',
'key' => 'key',
'bpm' => 'bpm',
'default_arrangement' => 'defaultArrangement'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'song_id' => 'setSongId',
'arrangement_id' => 'setArrangementId',
'title' => 'setTitle',
'arrangement' => 'setArrangement',
'category' => 'setCategory',
'key' => 'setKey',
'bpm' => 'setBpm',
'default_arrangement' => 'setDefaultArrangement'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'song_id' => 'getSongId',
'arrangement_id' => 'getArrangementId',
'title' => 'getTitle',
'arrangement' => 'getArrangement',
'category' => 'getCategory',
'key' => 'getKey',
'bpm' => 'getBpm',
'default_arrangement' => 'getDefaultArrangement'    ];

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
        $this->container['song_id'] = isset($data['song_id']) ? $data['song_id'] : null;
        $this->container['arrangement_id'] = isset($data['arrangement_id']) ? $data['arrangement_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['arrangement'] = isset($data['arrangement']) ? $data['arrangement'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['bpm'] = isset($data['bpm']) ? $data['bpm'] : null;
        $this->container['default_arrangement'] = isset($data['default_arrangement']) ? $data['default_arrangement'] : null;
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
     * Gets song_id
     *
     * @return int
     */
    public function getSongId()
    {
        return $this->container['song_id'];
    }

    /**
     * Sets song_id
     *
     * @param int $song_id song_id
     *
     * @return $this
     */
    public function setSongId($song_id)
    {
        $this->container['song_id'] = $song_id;

        return $this;
    }

    /**
     * Gets arrangement_id
     *
     * @return int
     */
    public function getArrangementId()
    {
        return $this->container['arrangement_id'];
    }

    /**
     * Sets arrangement_id
     *
     * @param int $arrangement_id arrangement_id
     *
     * @return $this
     */
    public function setArrangementId($arrangement_id)
    {
        $this->container['arrangement_id'] = $arrangement_id;

        return $this;
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
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets arrangement
     *
     * @return string
     */
    public function getArrangement()
    {
        return $this->container['arrangement'];
    }

    /**
     * Sets arrangement
     *
     * @param string $arrangement arrangement
     *
     * @return $this
     */
    public function setArrangement($arrangement)
    {
        $this->container['arrangement'] = $arrangement;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets bpm
     *
     * @return string
     */
    public function getBpm()
    {
        return $this->container['bpm'];
    }

    /**
     * Sets bpm
     *
     * @param string $bpm bpm
     *
     * @return $this
     */
    public function setBpm($bpm)
    {
        $this->container['bpm'] = $bpm;

        return $this;
    }

    /**
     * Gets default_arrangement
     *
     * @return string
     */
    public function getDefaultArrangement()
    {
        return $this->container['default_arrangement'];
    }

    /**
     * Sets default_arrangement
     *
     * @param string $default_arrangement default_arrangement
     *
     * @return $this
     */
    public function setDefaultArrangement($default_arrangement)
    {
        $this->container['default_arrangement'] = $default_arrangement;

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
