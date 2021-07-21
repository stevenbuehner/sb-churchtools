<?php
/**
 * WikiPage
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.2.0
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
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
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
        'wiki_category' => '\StevenBuehner\ChurchTools\Model\WikiCategory1',
        'title' => 'string',
        'version' => 'int',
        'text' => 'string',
        'on_startpage' => 'bool',
        'redirect_to' => 'string',
        'permissions' => '\StevenBuehner\ChurchTools\Model\InlineResponse20084Permissions',
        'meta' => '\StevenBuehner\ChurchTools\Model\EntityMetaData',
        'is_markdown' => 'bool'
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
        'wiki_category' => null,
        'title' => null,
        'version' => null,
        'text' => null,
        'on_startpage' => null,
        'redirect_to' => null,
        'permissions' => null,
        'meta' => null,
        'is_markdown' => null
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
        'identifier' => 'identifier',
        'wiki_category' => 'wikiCategory',
        'title' => 'title',
        'version' => 'version',
        'text' => 'text',
        'on_startpage' => 'onStartpage',
        'redirect_to' => 'redirectTo',
        'permissions' => 'permissions',
        'meta' => 'meta',
        'is_markdown' => 'isMarkdown'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'wiki_category' => 'setWikiCategory',
        'title' => 'setTitle',
        'version' => 'setVersion',
        'text' => 'setText',
        'on_startpage' => 'setOnStartpage',
        'redirect_to' => 'setRedirectTo',
        'permissions' => 'setPermissions',
        'meta' => 'setMeta',
        'is_markdown' => 'setIsMarkdown'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'wiki_category' => 'getWikiCategory',
        'title' => 'getTitle',
        'version' => 'getVersion',
        'text' => 'getText',
        'on_startpage' => 'getOnStartpage',
        'redirect_to' => 'getRedirectTo',
        'permissions' => 'getPermissions',
        'meta' => 'getMeta',
        'is_markdown' => 'getIsMarkdown'
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
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['wiki_category'] = $data['wiki_category'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['on_startpage'] = $data['on_startpage'] ?? null;
        $this->container['redirect_to'] = $data['redirect_to'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['is_markdown'] = $data['is_markdown'] ?? null;
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
        $this->container['identifier'] = $identifier;

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
        $this->container['wiki_category'] = $wiki_category;

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
        $this->container['version'] = $version;

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
        $this->container['text'] = $text;

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
        $this->container['on_startpage'] = $on_startpage;

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
        $this->container['redirect_to'] = $redirect_to;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20084Permissions|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20084Permissions|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\EntityMetaData|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\EntityMetaData|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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
        $this->container['is_markdown'] = $is_markdown;

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


