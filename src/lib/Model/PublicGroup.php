<?php
/**
 * PublicGroup
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
 * PublicGroup Class Doc Comment
 *
 * @category Class
 * @description Information about a public group, e.g. to be displayed on a group homepage.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublicGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublicGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'name' => 'string',
        'information' => '\StevenBuehner\ChurchTools\Model\PublicGroupInformation',
        'children' => 'array',
        'auto_accept' => 'bool',
        'allow_waitinglist' => 'bool',
        'max_member_count' => 'float',
        'current_member_count' => 'float',
        'requested_places_count' => 'float',
        'requested_waitinglist_places_count' => 'float',
        'can_sign_up' => 'bool',
        'sign_up_conditions' => '\StevenBuehner\ChurchTools\Model\PublicGroupSignUpConditions',
        'sign_up_persons' => '\StevenBuehner\ChurchTools\Model\PublicGroupSignUpPersonsInner[]',
        'sign_up_headline' => 'string'
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
        'name' => null,
        'information' => null,
        'children' => null,
        'auto_accept' => null,
        'allow_waitinglist' => null,
        'max_member_count' => null,
        'current_member_count' => null,
        'requested_places_count' => null,
        'requested_waitinglist_places_count' => null,
        'can_sign_up' => null,
        'sign_up_conditions' => null,
        'sign_up_persons' => null,
        'sign_up_headline' => null
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
        'name' => 'name',
        'information' => 'information',
        'children' => 'children',
        'auto_accept' => 'autoAccept',
        'allow_waitinglist' => 'allowWaitinglist',
        'max_member_count' => 'maxMemberCount',
        'current_member_count' => 'currentMemberCount',
        'requested_places_count' => 'requestedPlacesCount',
        'requested_waitinglist_places_count' => 'requestedWaitinglistPlacesCount',
        'can_sign_up' => 'canSignUp',
        'sign_up_conditions' => 'signUpConditions',
        'sign_up_persons' => 'signUpPersons',
        'sign_up_headline' => 'signUpHeadline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'information' => 'setInformation',
        'children' => 'setChildren',
        'auto_accept' => 'setAutoAccept',
        'allow_waitinglist' => 'setAllowWaitinglist',
        'max_member_count' => 'setMaxMemberCount',
        'current_member_count' => 'setCurrentMemberCount',
        'requested_places_count' => 'setRequestedPlacesCount',
        'requested_waitinglist_places_count' => 'setRequestedWaitinglistPlacesCount',
        'can_sign_up' => 'setCanSignUp',
        'sign_up_conditions' => 'setSignUpConditions',
        'sign_up_persons' => 'setSignUpPersons',
        'sign_up_headline' => 'setSignUpHeadline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'information' => 'getInformation',
        'children' => 'getChildren',
        'auto_accept' => 'getAutoAccept',
        'allow_waitinglist' => 'getAllowWaitinglist',
        'max_member_count' => 'getMaxMemberCount',
        'current_member_count' => 'getCurrentMemberCount',
        'requested_places_count' => 'getRequestedPlacesCount',
        'requested_waitinglist_places_count' => 'getRequestedWaitinglistPlacesCount',
        'can_sign_up' => 'getCanSignUp',
        'sign_up_conditions' => 'getSignUpConditions',
        'sign_up_persons' => 'getSignUpPersons',
        'sign_up_headline' => 'getSignUpHeadline'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['information'] = $data['information'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
        $this->container['auto_accept'] = $data['auto_accept'] ?? null;
        $this->container['allow_waitinglist'] = $data['allow_waitinglist'] ?? null;
        $this->container['max_member_count'] = $data['max_member_count'] ?? null;
        $this->container['current_member_count'] = $data['current_member_count'] ?? null;
        $this->container['requested_places_count'] = $data['requested_places_count'] ?? null;
        $this->container['requested_waitinglist_places_count'] = $data['requested_waitinglist_places_count'] ?? null;
        $this->container['can_sign_up'] = $data['can_sign_up'] ?? null;
        $this->container['sign_up_conditions'] = $data['sign_up_conditions'] ?? null;
        $this->container['sign_up_persons'] = $data['sign_up_persons'] ?? null;
        $this->container['sign_up_headline'] = $data['sign_up_headline'] ?? null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['information'] === null) {
            $invalidProperties[] = "'information' can't be null";
        }
        if ($this->container['auto_accept'] === null) {
            $invalidProperties[] = "'auto_accept' can't be null";
        }
        if ($this->container['allow_waitinglist'] === null) {
            $invalidProperties[] = "'allow_waitinglist' can't be null";
        }
        if ($this->container['max_member_count'] === null) {
            $invalidProperties[] = "'max_member_count' can't be null";
        }
        if ($this->container['current_member_count'] === null) {
            $invalidProperties[] = "'current_member_count' can't be null";
        }
        if ($this->container['requested_places_count'] === null) {
            $invalidProperties[] = "'requested_places_count' can't be null";
        }
        if ($this->container['requested_waitinglist_places_count'] === null) {
            $invalidProperties[] = "'requested_waitinglist_places_count' can't be null";
        }
        if ($this->container['can_sign_up'] === null) {
            $invalidProperties[] = "'can_sign_up' can't be null";
        }
        if ($this->container['sign_up_conditions'] === null) {
            $invalidProperties[] = "'sign_up_conditions' can't be null";
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
     * @param float $id The public group ID.
     *
     * @return self
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
     * @param string $name Name of the group, e.g. to be displayed as title.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets information
     *
     * @return \StevenBuehner\ChurchTools\Model\PublicGroupInformation
     */
    public function getInformation()
    {
        return $this->container['information'];
    }

    /**
     * Sets information
     *
     * @param \StevenBuehner\ChurchTools\Model\PublicGroupInformation $information information
     *
     * @return self
     */
    public function setInformation($information)
    {
        $this->container['information'] = $information;

        return $this;
    }

    /**
     * Gets children
     *
     * @return array|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param array|null $children Lists all (direct) child group IDs for the current group.
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets auto_accept
     *
     * @return bool
     */
    public function getAutoAccept()
    {
        return $this->container['auto_accept'];
    }

    /**
     * Sets auto_accept
     *
     * @param bool $auto_accept If true, group sign up requests will be accepted automatically.
     *
     * @return self
     */
    public function setAutoAccept($auto_accept)
    {
        $this->container['auto_accept'] = $auto_accept;

        return $this;
    }

    /**
     * Gets allow_waitinglist
     *
     * @return bool
     */
    public function getAllowWaitinglist()
    {
        return $this->container['allow_waitinglist'];
    }

    /**
     * Sets allow_waitinglist
     *
     * @param bool $allow_waitinglist If true, group sign is allowed even if group is full.
     *
     * @return self
     */
    public function setAllowWaitinglist($allow_waitinglist)
    {
        $this->container['allow_waitinglist'] = $allow_waitinglist;

        return $this;
    }

    /**
     * Gets max_member_count
     *
     * @return float
     */
    public function getMaxMemberCount()
    {
        return $this->container['max_member_count'];
    }

    /**
     * Sets max_member_count
     *
     * @param float $max_member_count Maximum number of members until the group is considered as full.
     *
     * @return self
     */
    public function setMaxMemberCount($max_member_count)
    {
        $this->container['max_member_count'] = $max_member_count;

        return $this;
    }

    /**
     * Gets current_member_count
     *
     * @return float
     */
    public function getCurrentMemberCount()
    {
        return $this->container['current_member_count'];
    }

    /**
     * Sets current_member_count
     *
     * @param float $current_member_count Current number of members in the group.
     *
     * @return self
     */
    public function setCurrentMemberCount($current_member_count)
    {
        $this->container['current_member_count'] = $current_member_count;

        return $this;
    }

    /**
     * Gets requested_places_count
     *
     * @return float
     */
    public function getRequestedPlacesCount()
    {
        return $this->container['requested_places_count'];
    }

    /**
     * Sets requested_places_count
     *
     * @param float $requested_places_count Number of member requests
     *
     * @return self
     */
    public function setRequestedPlacesCount($requested_places_count)
    {
        $this->container['requested_places_count'] = $requested_places_count;

        return $this;
    }

    /**
     * Gets requested_waitinglist_places_count
     *
     * @return float
     */
    public function getRequestedWaitinglistPlacesCount()
    {
        return $this->container['requested_waitinglist_places_count'];
    }

    /**
     * Sets requested_waitinglist_places_count
     *
     * @param float $requested_waitinglist_places_count Number of member requests with waiting list position
     *
     * @return self
     */
    public function setRequestedWaitinglistPlacesCount($requested_waitinglist_places_count)
    {
        $this->container['requested_waitinglist_places_count'] = $requested_waitinglist_places_count;

        return $this;
    }

    /**
     * Gets can_sign_up
     *
     * @return bool
     */
    public function getCanSignUp()
    {
        return $this->container['can_sign_up'];
    }

    /**
     * Sets can_sign_up
     *
     * @param bool $can_sign_up Indicates if the current user (either logged in or not) can sign up. This summarizes the information in signUpConditions.
     *
     * @return self
     */
    public function setCanSignUp($can_sign_up)
    {
        $this->container['can_sign_up'] = $can_sign_up;

        return $this;
    }

    /**
     * Gets sign_up_conditions
     *
     * @return \StevenBuehner\ChurchTools\Model\PublicGroupSignUpConditions
     */
    public function getSignUpConditions()
    {
        return $this->container['sign_up_conditions'];
    }

    /**
     * Sets sign_up_conditions
     *
     * @param \StevenBuehner\ChurchTools\Model\PublicGroupSignUpConditions $sign_up_conditions sign_up_conditions
     *
     * @return self
     */
    public function setSignUpConditions($sign_up_conditions)
    {
        $this->container['sign_up_conditions'] = $sign_up_conditions;

        return $this;
    }

    /**
     * Gets sign_up_persons
     *
     * @return \StevenBuehner\ChurchTools\Model\PublicGroupSignUpPersonsInner[]|null
     */
    public function getSignUpPersons()
    {
        return $this->container['sign_up_persons'];
    }

    /**
     * Sets sign_up_persons
     *
     * @param \StevenBuehner\ChurchTools\Model\PublicGroupSignUpPersonsInner[]|null $sign_up_persons Lists all persons the current user is allowed to sign up for. This includes spouses, children below the age of 16 and all persons with the same email address.
     *
     * @return self
     */
    public function setSignUpPersons($sign_up_persons)
    {
        $this->container['sign_up_persons'] = $sign_up_persons;

        return $this;
    }

    /**
     * Gets sign_up_headline
     *
     * @return string|null
     */
    public function getSignUpHeadline()
    {
        return $this->container['sign_up_headline'];
    }

    /**
     * Sets sign_up_headline
     *
     * @param string|null $sign_up_headline Text which can be displayed as a headline for the sign up section
     *
     * @return self
     */
    public function setSignUpHeadline($sign_up_headline)
    {
        $this->container['sign_up_headline'] = $sign_up_headline;

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


