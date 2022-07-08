<?php
/**
 * AgendaItemSong
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
 * AgendaItemSong Class Doc Comment
 *
 * @category Class
 * @description If the type is &#x60;song&#x60; the song object is added to this item. &#x60;normal&#x60; and &#x60;header&#x60; items do not include this object.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AgendaItemSong implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Agenda_Item_song';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'song_id' => 'int',
        'arrangement_id' => 'int',
        'title' => 'string',
        'arrangement' => 'string',
        'category' => 'string',
        'key' => 'string',
        'bpm' => 'string',
        'default_arrangement' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'song_id' => null,
        'arrangement_id' => null,
        'title' => null,
        'arrangement' => null,
        'category' => null,
        'key' => null,
        'bpm' => null,
        'default_arrangement' => null
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
        'song_id' => 'songId',
        'arrangement_id' => 'arrangementId',
        'title' => 'title',
        'arrangement' => 'arrangement',
        'category' => 'category',
        'key' => 'key',
        'bpm' => 'bpm',
        'default_arrangement' => 'defaultArrangement'
    ];

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
        'default_arrangement' => 'setDefaultArrangement'
    ];

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
        'default_arrangement' => 'getDefaultArrangement'
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
        $this->container['song_id'] = $data['song_id'] ?? null;
        $this->container['arrangement_id'] = $data['arrangement_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['arrangement'] = $data['arrangement'] ?? null;
        $this->container['category'] = $data['category'] ?? null;
        $this->container['key'] = $data['key'] ?? null;
        $this->container['bpm'] = $data['bpm'] ?? null;
        $this->container['default_arrangement'] = $data['default_arrangement'] ?? null;
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
     * @return int|null
     */
    public function getSongId()
    {
        return $this->container['song_id'];
    }

    /**
     * Sets song_id
     *
     * @param int|null $song_id song_id
     *
     * @return self
     */
    public function setSongId($song_id)
    {
        $this->container['song_id'] = $song_id;

        return $this;
    }

    /**
     * Gets arrangement_id
     *
     * @return int|null
     */
    public function getArrangementId()
    {
        return $this->container['arrangement_id'];
    }

    /**
     * Sets arrangement_id
     *
     * @param int|null $arrangement_id arrangement_id
     *
     * @return self
     */
    public function setArrangementId($arrangement_id)
    {
        $this->container['arrangement_id'] = $arrangement_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets arrangement
     *
     * @return string|null
     */
    public function getArrangement()
    {
        return $this->container['arrangement'];
    }

    /**
     * Sets arrangement
     *
     * @param string|null $arrangement arrangement
     *
     * @return self
     */
    public function setArrangement($arrangement)
    {
        $this->container['arrangement'] = $arrangement;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * Gets bpm
     *
     * @return string|null
     */
    public function getBpm()
    {
        return $this->container['bpm'];
    }

    /**
     * Sets bpm
     *
     * @param string|null $bpm bpm
     *
     * @return self
     */
    public function setBpm($bpm)
    {
        $this->container['bpm'] = $bpm;

        return $this;
    }

    /**
     * Gets default_arrangement
     *
     * @return string|null
     */
    public function getDefaultArrangement()
    {
        return $this->container['default_arrangement'];
    }

    /**
     * Sets default_arrangement
     *
     * @param string|null $default_arrangement default_arrangement
     *
     * @return self
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


