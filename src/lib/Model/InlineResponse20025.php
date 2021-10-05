<?php
/**
 * InlineResponse20025
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
 * OpenAPI Generator version: 5.2.1
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
 * InlineResponse20025 Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20025 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_25';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'parent_group' => 'float',
        'is_enabled' => 'bool',
        'show_leader' => 'bool',
        'show_group_images' => 'bool',
        'show_map' => 'bool',
        'show_filter' => 'bool',
        'default_view' => 'string',
        'sort_by' => 'string',
        'order_direction' => 'string',
        'random_url' => 'string',
        'filter' => 'object[]',
        'meta' => 'object',
        'groups' => '\StevenBuehner\ChurchTools\Model\PublicGroup[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'parent_group' => null,
        'is_enabled' => null,
        'show_leader' => null,
        'show_group_images' => null,
        'show_map' => null,
        'show_filter' => null,
        'default_view' => null,
        'sort_by' => null,
        'order_direction' => null,
        'random_url' => null,
        'filter' => null,
        'meta' => null,
        'groups' => null
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
        'id' => 'id',
        'parent_group' => 'parentGroup',
        'is_enabled' => 'isEnabled',
        'show_leader' => 'showLeader',
        'show_group_images' => 'showGroupImages',
        'show_map' => 'showMap',
        'show_filter' => 'showFilter',
        'default_view' => 'defaultView',
        'sort_by' => 'sortBy',
        'order_direction' => 'orderDirection',
        'random_url' => 'randomUrl',
        'filter' => 'filter',
        'meta' => 'meta',
        'groups' => 'groups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'parent_group' => 'setParentGroup',
        'is_enabled' => 'setIsEnabled',
        'show_leader' => 'setShowLeader',
        'show_group_images' => 'setShowGroupImages',
        'show_map' => 'setShowMap',
        'show_filter' => 'setShowFilter',
        'default_view' => 'setDefaultView',
        'sort_by' => 'setSortBy',
        'order_direction' => 'setOrderDirection',
        'random_url' => 'setRandomUrl',
        'filter' => 'setFilter',
        'meta' => 'setMeta',
        'groups' => 'setGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'parent_group' => 'getParentGroup',
        'is_enabled' => 'getIsEnabled',
        'show_leader' => 'getShowLeader',
        'show_group_images' => 'getShowGroupImages',
        'show_map' => 'getShowMap',
        'show_filter' => 'getShowFilter',
        'default_view' => 'getDefaultView',
        'sort_by' => 'getSortBy',
        'order_direction' => 'getOrderDirection',
        'random_url' => 'getRandomUrl',
        'filter' => 'getFilter',
        'meta' => 'getMeta',
        'groups' => 'getGroups'
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

    const SORT_BY_NAME = 'name';
    const SORT_BY_DATE_OF_FOUNDATION = 'dateOfFoundation';
    const ORDER_DIRECTION_ASC = 'ASC';
    const ORDER_DIRECTION_DESC = 'DESC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSortByAllowableValues()
    {
        return [
            self::SORT_BY_NAME,
            self::SORT_BY_DATE_OF_FOUNDATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderDirectionAllowableValues()
    {
        return [
            self::ORDER_DIRECTION_ASC,
            self::ORDER_DIRECTION_DESC,
        ];
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['parent_group'] = $data['parent_group'] ?? null;
        $this->container['is_enabled'] = $data['is_enabled'] ?? null;
        $this->container['show_leader'] = $data['show_leader'] ?? null;
        $this->container['show_group_images'] = $data['show_group_images'] ?? null;
        $this->container['show_map'] = $data['show_map'] ?? null;
        $this->container['show_filter'] = $data['show_filter'] ?? null;
        $this->container['default_view'] = $data['default_view'] ?? null;
        $this->container['sort_by'] = $data['sort_by'] ?? null;
        $this->container['order_direction'] = $data['order_direction'] ?? null;
        $this->container['random_url'] = $data['random_url'] ?? null;
        $this->container['filter'] = $data['filter'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['groups'] = $data['groups'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['parent_group'] === null) {
            $invalidProperties[] = "'parent_group' can't be null";
        }
        if ($this->container['is_enabled'] === null) {
            $invalidProperties[] = "'is_enabled' can't be null";
        }
        if ($this->container['show_leader'] === null) {
            $invalidProperties[] = "'show_leader' can't be null";
        }
        if ($this->container['show_group_images'] === null) {
            $invalidProperties[] = "'show_group_images' can't be null";
        }
        if ($this->container['show_map'] === null) {
            $invalidProperties[] = "'show_map' can't be null";
        }
        $allowedValues = $this->getSortByAllowableValues();
        if (!is_null($this->container['sort_by']) && !in_array($this->container['sort_by'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sort_by', must be one of '%s'",
                $this->container['sort_by'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderDirectionAllowableValues();
        if (!is_null($this->container['order_direction']) && !in_array($this->container['order_direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order_direction', must be one of '%s'",
                $this->container['order_direction'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['random_url'] === null) {
            $invalidProperties[] = "'random_url' can't be null";
        }
        if ($this->container['meta'] === null) {
            $invalidProperties[] = "'meta' can't be null";
        }
        if ($this->container['groups'] === null) {
            $invalidProperties[] = "'groups' can't be null";
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
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id Group Homepage ID
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_group
     *
     * @return float
     */
    public function getParentGroup()
    {
        return $this->container['parent_group'];
    }

    /**
     * Sets parent_group
     *
     * @param float $parent_group ID of the parent group of all groups that should be displayed in the group homepage
     *
     * @return self
     */
    public function setParentGroup($parent_group)
    {
        $this->container['parent_group'] = $parent_group;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool $is_enabled Wheather the group homepage is enabled. Clients should not display the group homepage if it is not enabled.
     *
     * @return self
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

        return $this;
    }

    /**
     * Gets show_leader
     *
     * @return bool
     */
    public function getShowLeader()
    {
        return $this->container['show_leader'];
    }

    /**
     * Sets show_leader
     *
     * @param bool $show_leader If true, the group homepage is set to display the leaders of each group.
     *
     * @return self
     */
    public function setShowLeader($show_leader)
    {
        $this->container['show_leader'] = $show_leader;

        return $this;
    }

    /**
     * Gets show_group_images
     *
     * @return bool
     */
    public function getShowGroupImages()
    {
        return $this->container['show_group_images'];
    }

    /**
     * Sets show_group_images
     *
     * @param bool $show_group_images If true, the group homepage is set to display group images.
     *
     * @return self
     */
    public function setShowGroupImages($show_group_images)
    {
        $this->container['show_group_images'] = $show_group_images;

        return $this;
    }

    /**
     * Gets show_map
     *
     * @return bool
     */
    public function getShowMap()
    {
        return $this->container['show_map'];
    }

    /**
     * Sets show_map
     *
     * @param bool $show_map If true, the group homepage is set to display an overview map of all groups.
     *
     * @return self
     */
    public function setShowMap($show_map)
    {
        $this->container['show_map'] = $show_map;

        return $this;
    }

    /**
     * Gets show_filter
     *
     * @return bool|null
     */
    public function getShowFilter()
    {
        return $this->container['show_filter'];
    }

    /**
     * Sets show_filter
     *
     * @param bool|null $show_filter If true, selected filters are displayed.
     *
     * @return self
     */
    public function setShowFilter($show_filter)
    {
        $this->container['show_filter'] = $show_filter;

        return $this;
    }

    /**
     * Gets default_view
     *
     * @return string|null
     */
    public function getDefaultView()
    {
        return $this->container['default_view'];
    }

    /**
     * Sets default_view
     *
     * @param string|null $default_view Type how groups are listed on the page.
     *
     * @return self
     */
    public function setDefaultView($default_view)
    {
        $this->container['default_view'] = $default_view;

        return $this;
    }

    /**
     * Gets sort_by
     *
     * @return string|null
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param string|null $sort_by Group field to sort list of groups by.
     *
     * @return self
     */
    public function setSortBy($sort_by)
    {
        $allowedValues = $this->getSortByAllowableValues();
        if (!is_null($sort_by) && !in_array($sort_by, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sort_by', must be one of '%s'",
                    $sort_by,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets order_direction
     *
     * @return string|null
     */
    public function getOrderDirection()
    {
        return $this->container['order_direction'];
    }

    /**
     * Sets order_direction
     *
     * @param string|null $order_direction Direction if groups are sorted ascending or descending.
     *
     * @return self
     */
    public function setOrderDirection($order_direction)
    {
        $allowedValues = $this->getOrderDirectionAllowableValues();
        if (!is_null($order_direction) && !in_array($order_direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order_direction', must be one of '%s'",
                    $order_direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_direction'] = $order_direction;

        return $this;
    }

    /**
     * Gets random_url
     *
     * @return string
     */
    public function getRandomUrl()
    {
        return $this->container['random_url'];
    }

    /**
     * Sets random_url
     *
     * @param string $random_url The group homepage identifier (same as provided as hash request parameter).
     *
     * @return self
     */
    public function setRandomUrl($random_url)
    {
        $this->container['random_url'] = $random_url;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return object[]|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param object[]|null $filter Specifies all filters that can be applied for this group homepage.
     *
     * @return self
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return object
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param object $meta Entity meta data
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \StevenBuehner\ChurchTools\Model\PublicGroup[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \StevenBuehner\ChurchTools\Model\PublicGroup[] $groups Array of groups to be displayed on the group homepage.
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

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


