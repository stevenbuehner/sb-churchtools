<?php
/**
 * WikiPage
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
 * WikiPage Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WikiPage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WikiPage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier' => 'string',
        'is_markdown' => 'bool',
        'meta' => '\StevenBuehner\ChurchTools\Model\GetFileWithDomainType200ResponseDataInnerMeta',
        'on_startpage' => 'bool',
        'permissions' => '\StevenBuehner\ChurchTools\Model\WikiPage1Permissions',
        'redirect_to' => 'string',
        'text' => 'string',
        'title' => 'string',
        'version' => 'int',
        'wiki_category' => '\StevenBuehner\ChurchTools\Model\WikiCategory1'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifier' => null,
        'is_markdown' => null,
        'meta' => null,
        'on_startpage' => null,
        'permissions' => null,
        'redirect_to' => null,
        'text' => null,
        'title' => null,
        'version' => null,
        'wiki_category' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'identifier' => false,
		'is_markdown' => false,
		'meta' => false,
		'on_startpage' => false,
		'permissions' => false,
		'redirect_to' => false,
		'text' => false,
		'title' => false,
		'version' => false,
		'wiki_category' => false
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
        'identifier' => 'identifier',
        'is_markdown' => 'isMarkdown',
        'meta' => 'meta',
        'on_startpage' => 'onStartpage',
        'permissions' => 'permissions',
        'redirect_to' => 'redirectTo',
        'text' => 'text',
        'title' => 'title',
        'version' => 'version',
        'wiki_category' => 'wikiCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'is_markdown' => 'setIsMarkdown',
        'meta' => 'setMeta',
        'on_startpage' => 'setOnStartpage',
        'permissions' => 'setPermissions',
        'redirect_to' => 'setRedirectTo',
        'text' => 'setText',
        'title' => 'setTitle',
        'version' => 'setVersion',
        'wiki_category' => 'setWikiCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'is_markdown' => 'getIsMarkdown',
        'meta' => 'getMeta',
        'on_startpage' => 'getOnStartpage',
        'permissions' => 'getPermissions',
        'redirect_to' => 'getRedirectTo',
        'text' => 'getText',
        'title' => 'getTitle',
        'version' => 'getVersion',
        'wiki_category' => 'getWikiCategory'
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
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('is_markdown', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('on_startpage', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
        $this->setIfExists('redirect_to', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('wiki_category', $data ?? [], null);
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

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
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
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {

        if (is_null($identifier)) {
            throw new \InvalidArgumentException('non-nullable identifier cannot be null');
        }

        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets is_markdown
     *
     * @return bool|null
     */
    public function getIsMarkdown()
    {
        return $this->container['is_markdown'];
    }

    /**
     * Sets is_markdown
     *
     * @param bool|null $is_markdown is_markdown
     *
     * @return self
     */
    public function setIsMarkdown($is_markdown)
    {

        if (is_null($is_markdown)) {
            throw new \InvalidArgumentException('non-nullable is_markdown cannot be null');
        }

        $this->container['is_markdown'] = $is_markdown;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\GetFileWithDomainType200ResponseDataInnerMeta|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\GetFileWithDomainType200ResponseDataInnerMeta|null $meta meta
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
     * Gets on_startpage
     *
     * @return bool|null
     */
    public function getOnStartpage()
    {
        return $this->container['on_startpage'];
    }

    /**
     * Sets on_startpage
     *
     * @param bool|null $on_startpage on_startpage
     *
     * @return self
     */
    public function setOnStartpage($on_startpage)
    {

        if (is_null($on_startpage)) {
            throw new \InvalidArgumentException('non-nullable on_startpage cannot be null');
        }

        $this->container['on_startpage'] = $on_startpage;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \StevenBuehner\ChurchTools\Model\WikiPage1Permissions|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \StevenBuehner\ChurchTools\Model\WikiPage1Permissions|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {

        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }

        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets redirect_to
     *
     * @return string|null
     */
    public function getRedirectTo()
    {
        return $this->container['redirect_to'];
    }

    /**
     * Sets redirect_to
     *
     * @param string|null $redirect_to redirect_to
     *
     * @return self
     */
    public function setRedirectTo($redirect_to)
    {

        if (is_null($redirect_to)) {
            throw new \InvalidArgumentException('non-nullable redirect_to cannot be null');
        }

        $this->container['redirect_to'] = $redirect_to;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text text
     *
     * @return self
     */
    public function setText($text)
    {

        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }

        $this->container['text'] = $text;

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

        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {

        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }

        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets wiki_category
     *
     * @return \StevenBuehner\ChurchTools\Model\WikiCategory1|null
     */
    public function getWikiCategory()
    {
        return $this->container['wiki_category'];
    }

    /**
     * Sets wiki_category
     *
     * @param \StevenBuehner\ChurchTools\Model\WikiCategory1|null $wiki_category wiki_category
     *
     * @return self
     */
    public function setWikiCategory($wiki_category)
    {

        if (is_null($wiki_category)) {
            throw new \InvalidArgumentException('non-nullable wiki_category cannot be null');
        }

        $this->container['wiki_category'] = $wiki_category;

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


