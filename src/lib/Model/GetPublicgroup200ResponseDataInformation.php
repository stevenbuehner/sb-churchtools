<?php
/**
 * GetPublicgroup200ResponseDataInformation
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
 * OpenAPI Generator version: 6.4.0
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
 * GetPublicgroup200ResponseDataInformation Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPublicgroup200ResponseDataInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getPublicgroup_200_response_data_information';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'age_groups' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataAgeGroupsInner[]',
        'campus' => 'mixed',
        'group_category' => '\StevenBuehner\ChurchTools\Model\GetPublicgroup200ResponseDataInformationGroupCategory',
        'group_places' => '\StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200Response[]',
        'image_url' => 'string',
        'meeting_time' => 'string',
        'note' => 'string',
        'target_group' => '\StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataTargetGroupsInner',
        'weekday' => 'mixed'
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
        'campus' => null,
        'group_category' => null,
        'group_places' => null,
        'image_url' => null,
        'meeting_time' => null,
        'note' => null,
        'target_group' => null,
        'weekday' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'age_groups' => false,
		'campus' => true,
		'group_category' => false,
		'group_places' => false,
		'image_url' => false,
		'meeting_time' => false,
		'note' => false,
		'target_group' => false,
		'weekday' => true
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
        'age_groups' => 'ageGroups',
        'campus' => 'campus',
        'group_category' => 'groupCategory',
        'group_places' => 'groupPlaces',
        'image_url' => 'imageUrl',
        'meeting_time' => 'meetingTime',
        'note' => 'note',
        'target_group' => 'targetGroup',
        'weekday' => 'weekday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'age_groups' => 'setAgeGroups',
        'campus' => 'setCampus',
        'group_category' => 'setGroupCategory',
        'group_places' => 'setGroupPlaces',
        'image_url' => 'setImageUrl',
        'meeting_time' => 'setMeetingTime',
        'note' => 'setNote',
        'target_group' => 'setTargetGroup',
        'weekday' => 'setWeekday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'age_groups' => 'getAgeGroups',
        'campus' => 'getCampus',
        'group_category' => 'getGroupCategory',
        'group_places' => 'getGroupPlaces',
        'image_url' => 'getImageUrl',
        'meeting_time' => 'getMeetingTime',
        'note' => 'getNote',
        'target_group' => 'getTargetGroup',
        'weekday' => 'getWeekday'
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
        $this->setIfExists('age_groups', $data ?? [], null);
        $this->setIfExists('campus', $data ?? [], null);
        $this->setIfExists('group_category', $data ?? [], null);
        $this->setIfExists('group_places', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('meeting_time', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('target_group', $data ?? [], null);
        $this->setIfExists('weekday', $data ?? [], null);
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
        if (is_null($age_groups)) {
            throw new \InvalidArgumentException('non-nullable age_groups cannot be null');
        }
        $this->container['age_groups'] = $age_groups;

        return $this;
    }

    /**
     * Gets campus
     *
     * @return mixed|null
     */
    public function getCampus()
    {
        return $this->container['campus'];
    }

    /**
     * Sets campus
     *
     * @param mixed|null $campus campus
     *
     * @return self
     */
    public function setCampus($campus)
    {
        if (is_null($campus)) {
            array_push($this->openAPINullablesSetToNull, 'campus');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('campus', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['campus'] = $campus;

        return $this;
    }

    /**
     * Gets group_category
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPublicgroup200ResponseDataInformationGroupCategory|null
     */
    public function getGroupCategory()
    {
        return $this->container['group_category'];
    }

    /**
     * Sets group_category
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPublicgroup200ResponseDataInformationGroupCategory|null $group_category group_category
     *
     * @return self
     */
    public function setGroupCategory($group_category)
    {
        if (is_null($group_category)) {
            throw new \InvalidArgumentException('non-nullable group_category cannot be null');
        }
        $this->container['group_category'] = $group_category;

        return $this;
    }

    /**
     * Gets group_places
     *
     * @return \StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200Response[]|null
     */
    public function getGroupPlaces()
    {
        return $this->container['group_places'];
    }

    /**
     * Sets group_places
     *
     * @param \StevenBuehner\ChurchTools\Model\GetGrupsIdPlaces200Response[]|null $group_places group_places
     *
     * @return self
     */
    public function setGroupPlaces($group_places)
    {
        if (is_null($group_places)) {
            throw new \InvalidArgumentException('non-nullable group_places cannot be null');
        }
        $this->container['group_places'] = $group_places;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url image_url
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        if (is_null($image_url)) {
            throw new \InvalidArgumentException('non-nullable image_url cannot be null');
        }
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets meeting_time
     *
     * @return string|null
     */
    public function getMeetingTime()
    {
        return $this->container['meeting_time'];
    }

    /**
     * Sets meeting_time
     *
     * @param string|null $meeting_time meeting_time
     *
     * @return self
     */
    public function setMeetingTime($meeting_time)
    {
        if (is_null($meeting_time)) {
            throw new \InvalidArgumentException('non-nullable meeting_time cannot be null');
        }
        $this->container['meeting_time'] = $meeting_time;

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
     * Gets target_group
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataTargetGroupsInner|null
     */
    public function getTargetGroup()
    {
        return $this->container['target_group'];
    }

    /**
     * Sets target_group
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonMasterdata200ResponseDataTargetGroupsInner|null $target_group target_group
     *
     * @return self
     */
    public function setTargetGroup($target_group)
    {
        if (is_null($target_group)) {
            throw new \InvalidArgumentException('non-nullable target_group cannot be null');
        }
        $this->container['target_group'] = $target_group;

        return $this;
    }

    /**
     * Gets weekday
     *
     * @return mixed|null
     */
    public function getWeekday()
    {
        return $this->container['weekday'];
    }

    /**
     * Sets weekday
     *
     * @param mixed|null $weekday weekday
     *
     * @return self
     */
    public function setWeekday($weekday)
    {
        if (is_null($weekday)) {
            array_push($this->openAPINullablesSetToNull, 'weekday');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('weekday', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['weekday'] = $weekday;

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


