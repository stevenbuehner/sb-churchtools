<?php
/**
 * Song1
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
 * OpenAPI Generator version: 6.2.1
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
 * Song1 Class Doc Comment
 *
 * @category Class
 * @description Song and Arrangement information.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Song1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Song_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrangements' => '\StevenBuehner\ChurchTools\Model\Arrangement1[]',
        'author' => 'string',
        'category' => '\StevenBuehner\ChurchTools\Model\SongCategory',
        'ccli' => 'string',
        'copyright' => 'string',
        'id' => 'int',
        'meta' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta',
        'name' => 'string',
        'note' => 'string',
        'should_practice' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'arrangements' => null,
        'author' => null,
        'category' => null,
        'ccli' => null,
        'copyright' => null,
        'id' => null,
        'meta' => null,
        'name' => null,
        'note' => null,
        'should_practice' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'arrangements' => false,
		'author' => false,
		'category' => false,
		'ccli' => false,
		'copyright' => false,
		'id' => false,
		'meta' => false,
		'name' => false,
		'note' => false,
		'should_practice' => false
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
        'arrangements' => 'arrangements',
        'author' => 'author',
        'category' => 'category',
        'ccli' => 'ccli',
        'copyright' => 'copyright',
        'id' => 'id',
        'meta' => 'meta',
        'name' => 'name',
        'note' => 'note',
        'should_practice' => 'shouldPractice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrangements' => 'setArrangements',
        'author' => 'setAuthor',
        'category' => 'setCategory',
        'ccli' => 'setCcli',
        'copyright' => 'setCopyright',
        'id' => 'setId',
        'meta' => 'setMeta',
        'name' => 'setName',
        'note' => 'setNote',
        'should_practice' => 'setShouldPractice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrangements' => 'getArrangements',
        'author' => 'getAuthor',
        'category' => 'getCategory',
        'ccli' => 'getCcli',
        'copyright' => 'getCopyright',
        'id' => 'getId',
        'meta' => 'getMeta',
        'name' => 'getName',
        'note' => 'getNote',
        'should_practice' => 'getShouldPractice'
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
        $this->setIfExists('arrangements', $data ?? [], null);
        $this->setIfExists('author', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('ccli', $data ?? [], null);
        $this->setIfExists('copyright', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('should_practice', $data ?? [], null);
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
     * Gets arrangements
     *
     * @return \StevenBuehner\ChurchTools\Model\Arrangement1[]|null
     */
    public function getArrangements()
    {
        return $this->container['arrangements'];
    }

    /**
     * Sets arrangements
     *
     * @param \StevenBuehner\ChurchTools\Model\Arrangement1[]|null $arrangements All arrangements for that song
     *
     * @return self
     */
    public function setArrangements($arrangements)
    {

        if (is_null($arrangements)) {
            throw new \InvalidArgumentException('non-nullable arrangements cannot be null');
        }

        $this->container['arrangements'] = $arrangements;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {

        if (is_null($author)) {
            throw new \InvalidArgumentException('non-nullable author cannot be null');
        }

        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \StevenBuehner\ChurchTools\Model\SongCategory|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \StevenBuehner\ChurchTools\Model\SongCategory|null $category category
     *
     * @return self
     */
    public function setCategory($category)
    {

        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets ccli
     *
     * @return string|null
     */
    public function getCcli()
    {
        return $this->container['ccli'];
    }

    /**
     * Sets ccli
     *
     * @param string|null $ccli ccli
     *
     * @return self
     */
    public function setCcli($ccli)
    {

        if (is_null($ccli)) {
            throw new \InvalidArgumentException('non-nullable ccli cannot be null');
        }

        $this->container['ccli'] = $ccli;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return string|null
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param string|null $copyright copyright
     *
     * @return self
     */
    public function setCopyright($copyright)
    {

        if (is_null($copyright)) {
            throw new \InvalidArgumentException('non-nullable copyright cannot be null');
        }

        $this->container['copyright'] = $copyright;

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
     * @param int|null $id id
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
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {

        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }

        $this->container['meta'] = $meta;

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
     * @param string|null $name name
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
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {

        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }

        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets should_practice
     *
     * @return bool|null
     */
    public function getShouldPractice()
    {
        return $this->container['should_practice'];
    }

    /**
     * Sets should_practice
     *
     * @param bool|null $should_practice should_practice
     *
     * @return self
     */
    public function setShouldPractice($should_practice)
    {

        if (is_null($should_practice)) {
            throw new \InvalidArgumentException('non-nullable should_practice cannot be null');
        }

        $this->container['should_practice'] = $should_practice;

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


