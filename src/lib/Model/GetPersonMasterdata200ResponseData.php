<?php
/**
 * GetPersonMasterdata200ResponseData
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
 * GetPersonMasterdata200ResponseData Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPersonMasterdata200ResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getPersonMasterdata_200_response_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'age_groups' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataAgeGroupsInner[]',
        'campuses' => '\StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInner[]',
        'contact_labels' => '\StevenBuehner\ChurchTools\Model\GetContactlabels200ResponseDataInner[]',
        'departments' => '\StevenBuehner\ChurchTools\Model\GetDepartments200ResponseDataInner[]',
        'follow_up_intervals' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataFollowUpIntervalsInner[]',
        'follow_ups' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataFollowUpsInner[]',
        'group_categories' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupCategoriesInner[]',
        'group_meeting_templates' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupMeetingTemplatesInner[]',
        'group_statuses' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupStatusesInner[]',
        'group_types' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupTypesInner[]',
        'grow_paths' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGrowPathsInner[]',
        'roles' => '\StevenBuehner\ChurchTools\Model\GetAllGroupTypeRoles200ResponseDataInner[]',
        'statuses' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataStatusesInner[]',
        'target_groups' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataTargetGroupsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'age_groups' => null,
        'campuses' => null,
        'contact_labels' => null,
        'departments' => null,
        'follow_up_intervals' => null,
        'follow_ups' => null,
        'group_categories' => null,
        'group_meeting_templates' => null,
        'group_statuses' => null,
        'group_types' => null,
        'grow_paths' => null,
        'roles' => null,
        'statuses' => null,
        'target_groups' => null
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
        'age_groups' => 'ageGroups',
        'campuses' => 'campuses',
        'contact_labels' => 'contactLabels',
        'departments' => 'departments',
        'follow_up_intervals' => 'followUpIntervals',
        'follow_ups' => 'followUps',
        'group_categories' => 'groupCategories',
        'group_meeting_templates' => 'groupMeetingTemplates',
        'group_statuses' => 'groupStatuses',
        'group_types' => 'groupTypes',
        'grow_paths' => 'growPaths',
        'roles' => 'roles',
        'statuses' => 'statuses',
        'target_groups' => 'targetGroups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age_groups' => 'setAgeGroups',
        'campuses' => 'setCampuses',
        'contact_labels' => 'setContactLabels',
        'departments' => 'setDepartments',
        'follow_up_intervals' => 'setFollowUpIntervals',
        'follow_ups' => 'setFollowUps',
        'group_categories' => 'setGroupCategories',
        'group_meeting_templates' => 'setGroupMeetingTemplates',
        'group_statuses' => 'setGroupStatuses',
        'group_types' => 'setGroupTypes',
        'grow_paths' => 'setGrowPaths',
        'roles' => 'setRoles',
        'statuses' => 'setStatuses',
        'target_groups' => 'setTargetGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age_groups' => 'getAgeGroups',
        'campuses' => 'getCampuses',
        'contact_labels' => 'getContactLabels',
        'departments' => 'getDepartments',
        'follow_up_intervals' => 'getFollowUpIntervals',
        'follow_ups' => 'getFollowUps',
        'group_categories' => 'getGroupCategories',
        'group_meeting_templates' => 'getGroupMeetingTemplates',
        'group_statuses' => 'getGroupStatuses',
        'group_types' => 'getGroupTypes',
        'grow_paths' => 'getGrowPaths',
        'roles' => 'getRoles',
        'statuses' => 'getStatuses',
        'target_groups' => 'getTargetGroups'
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
        $this->container['age_groups'] = $data['age_groups'] ?? null;
        $this->container['campuses'] = $data['campuses'] ?? null;
        $this->container['contact_labels'] = $data['contact_labels'] ?? null;
        $this->container['departments'] = $data['departments'] ?? null;
        $this->container['follow_up_intervals'] = $data['follow_up_intervals'] ?? null;
        $this->container['follow_ups'] = $data['follow_ups'] ?? null;
        $this->container['group_categories'] = $data['group_categories'] ?? null;
        $this->container['group_meeting_templates'] = $data['group_meeting_templates'] ?? null;
        $this->container['group_statuses'] = $data['group_statuses'] ?? null;
        $this->container['group_types'] = $data['group_types'] ?? null;
        $this->container['grow_paths'] = $data['grow_paths'] ?? null;
        $this->container['roles'] = $data['roles'] ?? null;
        $this->container['statuses'] = $data['statuses'] ?? null;
        $this->container['target_groups'] = $data['target_groups'] ?? null;
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
     * Gets age_groups
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataAgeGroupsInner[]|null
     */
    public function getAgeGroups()
    {
        return $this->container['age_groups'];
    }

    /**
     * Sets age_groups
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataAgeGroupsInner[]|null $age_groups age_groups
     *
     * @return self
     */
    public function setAgeGroups($age_groups)
    {
        $this->container['age_groups'] = $age_groups;

        return $this;
    }

    /**
     * Gets campuses
     *
     * @return \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInner[]|null
     */
    public function getCampuses()
    {
        return $this->container['campuses'];
    }

    /**
     * Sets campuses
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInner[]|null $campuses campuses
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
     * @return \StevenBuehner\ChurchTools\Model\GetContactlabels200ResponseDataInner[]|null
     */
    public function getContactLabels()
    {
        return $this->container['contact_labels'];
    }

    /**
     * Sets contact_labels
     *
     * @param \StevenBuehner\ChurchTools\Model\GetContactlabels200ResponseDataInner[]|null $contact_labels contact_labels
     *
     * @return self
     */
    public function setContactLabels($contact_labels)
    {
        $this->container['contact_labels'] = $contact_labels;

        return $this;
    }

    /**
     * Gets departments
     *
     * @return \StevenBuehner\ChurchTools\Model\GetDepartments200ResponseDataInner[]|null
     */
    public function getDepartments()
    {
        return $this->container['departments'];
    }

    /**
     * Sets departments
     *
     * @param \StevenBuehner\ChurchTools\Model\GetDepartments200ResponseDataInner[]|null $departments departments
     *
     * @return self
     */
    public function setDepartments($departments)
    {
        $this->container['departments'] = $departments;

        return $this;
    }

    /**
     * Gets follow_up_intervals
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataFollowUpIntervalsInner[]|null
     */
    public function getFollowUpIntervals()
    {
        return $this->container['follow_up_intervals'];
    }

    /**
     * Sets follow_up_intervals
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataFollowUpIntervalsInner[]|null $follow_up_intervals follow_up_intervals
     *
     * @return self
     */
    public function setFollowUpIntervals($follow_up_intervals)
    {
        $this->container['follow_up_intervals'] = $follow_up_intervals;

        return $this;
    }

    /**
     * Gets follow_ups
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataFollowUpsInner[]|null
     */
    public function getFollowUps()
    {
        return $this->container['follow_ups'];
    }

    /**
     * Sets follow_ups
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataFollowUpsInner[]|null $follow_ups follow_ups
     *
     * @return self
     */
    public function setFollowUps($follow_ups)
    {
        $this->container['follow_ups'] = $follow_ups;

        return $this;
    }

    /**
     * Gets group_categories
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupCategoriesInner[]|null
     */
    public function getGroupCategories()
    {
        return $this->container['group_categories'];
    }

    /**
     * Sets group_categories
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupCategoriesInner[]|null $group_categories group_categories
     *
     * @return self
     */
    public function setGroupCategories($group_categories)
    {
        $this->container['group_categories'] = $group_categories;

        return $this;
    }

    /**
     * Gets group_meeting_templates
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupMeetingTemplatesInner[]|null
     */
    public function getGroupMeetingTemplates()
    {
        return $this->container['group_meeting_templates'];
    }

    /**
     * Sets group_meeting_templates
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupMeetingTemplatesInner[]|null $group_meeting_templates group_meeting_templates
     *
     * @return self
     */
    public function setGroupMeetingTemplates($group_meeting_templates)
    {
        $this->container['group_meeting_templates'] = $group_meeting_templates;

        return $this;
    }

    /**
     * Gets group_statuses
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupStatusesInner[]|null
     */
    public function getGroupStatuses()
    {
        return $this->container['group_statuses'];
    }

    /**
     * Sets group_statuses
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupStatusesInner[]|null $group_statuses group_statuses
     *
     * @return self
     */
    public function setGroupStatuses($group_statuses)
    {
        $this->container['group_statuses'] = $group_statuses;

        return $this;
    }

    /**
     * Gets group_types
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupTypesInner[]|null
     */
    public function getGroupTypes()
    {
        return $this->container['group_types'];
    }

    /**
     * Sets group_types
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGroupTypesInner[]|null $group_types group_types
     *
     * @return self
     */
    public function setGroupTypes($group_types)
    {
        $this->container['group_types'] = $group_types;

        return $this;
    }

    /**
     * Gets grow_paths
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGrowPathsInner[]|null
     */
    public function getGrowPaths()
    {
        return $this->container['grow_paths'];
    }

    /**
     * Sets grow_paths
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataGrowPathsInner[]|null $grow_paths grow_paths
     *
     * @return self
     */
    public function setGrowPaths($grow_paths)
    {
        $this->container['grow_paths'] = $grow_paths;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \StevenBuehner\ChurchTools\Model\GetAllGroupTypeRoles200ResponseDataInner[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllGroupTypeRoles200ResponseDataInner[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataStatusesInner[]|null
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataStatusesInner[]|null $statuses statuses
     *
     * @return self
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets target_groups
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataTargetGroupsInner[]|null
     */
    public function getTargetGroups()
    {
        return $this->container['target_groups'];
    }

    /**
     * Sets target_groups
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataTargetGroupsInner[]|null $target_groups target_groups
     *
     * @return self
     */
    public function setTargetGroups($target_groups)
    {
        $this->container['target_groups'] = $target_groups;

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


