<?php
/**
 * PersonMasterData
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
 * PersonMasterData Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PersonMasterData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PersonMasterData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'roles' => '\StevenBuehner\ChurchTools\Model\InlineResponse20042Data[]',
        'age_groups' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataAgeGroups[]',
        'target_groups' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataTargetGroups[]',
        'group_types' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupTypes[]',
        'group_categories' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupCategories[]',
        'group_statuses' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupStatuses[]',
        'departments' => '\StevenBuehner\ChurchTools\Model\InlineResponse20030Data[]',
        'statuses' => '\StevenBuehner\ChurchTools\Model\InlineResponse2005Data[]',
        'campuses' => '\StevenBuehner\ChurchTools\Model\InlineResponse201Data[]',
        'contact_labels' => '\StevenBuehner\ChurchTools\Model\ContactLabel[]',
        'grow_paths' => '\StevenBuehner\ChurchTools\Model\GrowPath[]',
        'follow_ups' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataFollowUps[]',
        'follow_up_intervals' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataFollowUpIntervals[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'roles' => null,
        'age_groups' => null,
        'target_groups' => null,
        'group_types' => null,
        'group_categories' => null,
        'group_statuses' => null,
        'departments' => null,
        'statuses' => null,
        'campuses' => null,
        'contact_labels' => null,
        'grow_paths' => null,
        'follow_ups' => null,
        'follow_up_intervals' => null
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
        'roles' => 'roles',
        'age_groups' => 'ageGroups',
        'target_groups' => 'targetGroups',
        'group_types' => 'groupTypes',
        'group_categories' => 'groupCategories',
        'group_statuses' => 'groupStatuses',
        'departments' => 'departments',
        'statuses' => 'statuses',
        'campuses' => 'campuses',
        'contact_labels' => 'contactLabels',
        'grow_paths' => 'growPaths',
        'follow_ups' => 'followUps',
        'follow_up_intervals' => 'followUpIntervals'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'roles' => 'setRoles',
        'age_groups' => 'setAgeGroups',
        'target_groups' => 'setTargetGroups',
        'group_types' => 'setGroupTypes',
        'group_categories' => 'setGroupCategories',
        'group_statuses' => 'setGroupStatuses',
        'departments' => 'setDepartments',
        'statuses' => 'setStatuses',
        'campuses' => 'setCampuses',
        'contact_labels' => 'setContactLabels',
        'grow_paths' => 'setGrowPaths',
        'follow_ups' => 'setFollowUps',
        'follow_up_intervals' => 'setFollowUpIntervals'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'roles' => 'getRoles',
        'age_groups' => 'getAgeGroups',
        'target_groups' => 'getTargetGroups',
        'group_types' => 'getGroupTypes',
        'group_categories' => 'getGroupCategories',
        'group_statuses' => 'getGroupStatuses',
        'departments' => 'getDepartments',
        'statuses' => 'getStatuses',
        'campuses' => 'getCampuses',
        'contact_labels' => 'getContactLabels',
        'grow_paths' => 'getGrowPaths',
        'follow_ups' => 'getFollowUps',
        'follow_up_intervals' => 'getFollowUpIntervals'
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
        $this->container['roles'] = $data['roles'] ?? null;
        $this->container['age_groups'] = $data['age_groups'] ?? null;
        $this->container['target_groups'] = $data['target_groups'] ?? null;
        $this->container['group_types'] = $data['group_types'] ?? null;
        $this->container['group_categories'] = $data['group_categories'] ?? null;
        $this->container['group_statuses'] = $data['group_statuses'] ?? null;
        $this->container['departments'] = $data['departments'] ?? null;
        $this->container['statuses'] = $data['statuses'] ?? null;
        $this->container['campuses'] = $data['campuses'] ?? null;
        $this->container['contact_labels'] = $data['contact_labels'] ?? null;
        $this->container['grow_paths'] = $data['grow_paths'] ?? null;
        $this->container['follow_ups'] = $data['follow_ups'] ?? null;
        $this->container['follow_up_intervals'] = $data['follow_up_intervals'] ?? null;
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
     * Gets roles
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20042Data[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20042Data[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets age_groups
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAgeGroups[]|null
     */
    public function getAgeGroups()
    {
        return $this->container['age_groups'];
    }

    /**
     * Sets age_groups
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAgeGroups[]|null $age_groups age_groups
     *
     * @return self
     */
    public function setAgeGroups($age_groups)
    {
        $this->container['age_groups'] = $age_groups;

        return $this;
    }

    /**
     * Gets target_groups
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTargetGroups[]|null
     */
    public function getTargetGroups()
    {
        return $this->container['target_groups'];
    }

    /**
     * Sets target_groups
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTargetGroups[]|null $target_groups target_groups
     *
     * @return self
     */
    public function setTargetGroups($target_groups)
    {
        $this->container['target_groups'] = $target_groups;

        return $this;
    }

    /**
     * Gets group_types
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupTypes[]|null
     */
    public function getGroupTypes()
    {
        return $this->container['group_types'];
    }

    /**
     * Sets group_types
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupTypes[]|null $group_types group_types
     *
     * @return self
     */
    public function setGroupTypes($group_types)
    {
        $this->container['group_types'] = $group_types;

        return $this;
    }

    /**
     * Gets group_categories
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupCategories[]|null
     */
    public function getGroupCategories()
    {
        return $this->container['group_categories'];
    }

    /**
     * Sets group_categories
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupCategories[]|null $group_categories group_categories
     *
     * @return self
     */
    public function setGroupCategories($group_categories)
    {
        $this->container['group_categories'] = $group_categories;

        return $this;
    }

    /**
     * Gets group_statuses
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupStatuses[]|null
     */
    public function getGroupStatuses()
    {
        return $this->container['group_statuses'];
    }

    /**
     * Sets group_statuses
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataGroupStatuses[]|null $group_statuses group_statuses
     *
     * @return self
     */
    public function setGroupStatuses($group_statuses)
    {
        $this->container['group_statuses'] = $group_statuses;

        return $this;
    }

    /**
     * Gets departments
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20030Data[]|null
     */
    public function getDepartments()
    {
        return $this->container['departments'];
    }

    /**
     * Sets departments
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20030Data[]|null $departments departments
     *
     * @return self
     */
    public function setDepartments($departments)
    {
        $this->container['departments'] = $departments;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse2005Data[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse2005Data[]|null $statuses statuses
     *
     * @return self
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets campuses
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse201Data[]|null
     */
    public function getCampuses()
    {
        return $this->container['campuses'];
    }

    /**
     * Sets campuses
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse201Data[]|null $campuses campuses
     *
     * @return self
     */
    public function setCampuses($campuses)
    {
        $this->container['campuses'] = $campuses;

        return $this;
    }

    /**
     * Gets contact_labels
     *
     * @return \StevenBuehner\ChurchTools\Model\ContactLabel[]|null
     */
    public function getContactLabels()
    {
        return $this->container['contact_labels'];
    }

    /**
     * Sets contact_labels
     *
     * @param \StevenBuehner\ChurchTools\Model\ContactLabel[]|null $contact_labels contact_labels
     *
     * @return self
     */
    public function setContactLabels($contact_labels)
    {
        $this->container['contact_labels'] = $contact_labels;

        return $this;
    }

    /**
     * Gets grow_paths
     *
     * @return \StevenBuehner\ChurchTools\Model\GrowPath[]|null
     */
    public function getGrowPaths()
    {
        return $this->container['grow_paths'];
    }

    /**
     * Sets grow_paths
     *
     * @param \StevenBuehner\ChurchTools\Model\GrowPath[]|null $grow_paths grow_paths
     *
     * @return self
     */
    public function setGrowPaths($grow_paths)
    {
        $this->container['grow_paths'] = $grow_paths;

        return $this;
    }

    /**
     * Gets follow_ups
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataFollowUps[]|null
     */
    public function getFollowUps()
    {
        return $this->container['follow_ups'];
    }

    /**
     * Sets follow_ups
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataFollowUps[]|null $follow_ups follow_ups
     *
     * @return self
     */
    public function setFollowUps($follow_ups)
    {
        $this->container['follow_ups'] = $follow_ups;

        return $this;
    }

    /**
     * Gets follow_up_intervals
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataFollowUpIntervals[]|null
     */
    public function getFollowUpIntervals()
    {
        return $this->container['follow_up_intervals'];
    }

    /**
     * Sets follow_up_intervals
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataFollowUpIntervals[]|null $follow_up_intervals follow_up_intervals
     *
     * @return self
     */
    public function setFollowUpIntervals($follow_up_intervals)
    {
        $this->container['follow_up_intervals'] = $follow_up_intervals;

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


