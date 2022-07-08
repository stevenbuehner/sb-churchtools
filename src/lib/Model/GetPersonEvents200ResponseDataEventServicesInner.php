<?php
/**
 * GetPersonEvents200ResponseDataEventServicesInner
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
 * GetPersonEvents200ResponseDataEventServicesInner Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPersonEvents200ResponseDataEventServicesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getPersonEvents_200_response_data_eventServices_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'person' => '\StevenBuehner\ChurchTools\Model\GetPersonEvents200ResponseDataEventServicesInnerPerson',
        'name' => 'string',
        'service_id' => 'int',
        'agreed' => 'bool',
        'is_valid' => 'bool',
        'requested_date' => '\DateTime',
        'requester_person' => '\StevenBuehner\ChurchTools\Model\GetPersonEvents200ResponseDataEventServicesInnerPerson',
        'comment' => 'string',
        'counter' => 'int',
        'allow_chat' => 'bool',
        'permissions' => 'array'
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
        'person' => null,
        'name' => null,
        'service_id' => null,
        'agreed' => null,
        'is_valid' => null,
        'requested_date' => 'date-time',
        'requester_person' => null,
        'comment' => null,
        'counter' => null,
        'allow_chat' => null,
        'permissions' => null
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
        'person' => 'person',
        'name' => 'name',
        'service_id' => 'serviceId',
        'agreed' => 'agreed',
        'is_valid' => 'isValid',
        'requested_date' => 'requestedDate',
        'requester_person' => 'requesterPerson',
        'comment' => 'comment',
        'counter' => 'counter',
        'allow_chat' => 'allowChat',
        'permissions' => 'permissions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'person' => 'setPerson',
        'name' => 'setName',
        'service_id' => 'setServiceId',
        'agreed' => 'setAgreed',
        'is_valid' => 'setIsValid',
        'requested_date' => 'setRequestedDate',
        'requester_person' => 'setRequesterPerson',
        'comment' => 'setComment',
        'counter' => 'setCounter',
        'allow_chat' => 'setAllowChat',
        'permissions' => 'setPermissions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'person' => 'getPerson',
        'name' => 'getName',
        'service_id' => 'getServiceId',
        'agreed' => 'getAgreed',
        'is_valid' => 'getIsValid',
        'requested_date' => 'getRequestedDate',
        'requester_person' => 'getRequesterPerson',
        'comment' => 'getComment',
        'counter' => 'getCounter',
        'allow_chat' => 'getAllowChat',
        'permissions' => 'getPermissions'
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
        $this->container['person'] = $data['person'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['agreed'] = $data['agreed'] ?? null;
        $this->container['is_valid'] = $data['is_valid'] ?? null;
        $this->container['requested_date'] = $data['requested_date'] ?? null;
        $this->container['requester_person'] = $data['requester_person'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['counter'] = $data['counter'] ?? null;
        $this->container['allow_chat'] = $data['allow_chat'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
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
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets person
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonEvents200ResponseDataEventServicesInnerPerson|null
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonEvents200ResponseDataEventServicesInnerPerson|null $person person
     *
     * @return self
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

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
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return int|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param int|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets agreed
     *
     * @return bool|null
     */
    public function getAgreed()
    {
        return $this->container['agreed'];
    }

    /**
     * Sets agreed
     *
     * @param bool|null $agreed agreed
     *
     * @return self
     */
    public function setAgreed($agreed)
    {
        $this->container['agreed'] = $agreed;

        return $this;
    }

    /**
     * Gets is_valid
     *
     * @return bool|null
     */
    public function getIsValid()
    {
        return $this->container['is_valid'];
    }

    /**
     * Sets is_valid
     *
     * @param bool|null $is_valid is_valid
     *
     * @return self
     */
    public function setIsValid($is_valid)
    {
        $this->container['is_valid'] = $is_valid;

        return $this;
    }

    /**
     * Gets requested_date
     *
     * @return \DateTime|null
     */
    public function getRequestedDate()
    {
        return $this->container['requested_date'];
    }

    /**
     * Sets requested_date
     *
     * @param \DateTime|null $requested_date requested_date
     *
     * @return self
     */
    public function setRequestedDate($requested_date)
    {
        $this->container['requested_date'] = $requested_date;

        return $this;
    }

    /**
     * Gets requester_person
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPersonEvents200ResponseDataEventServicesInnerPerson|null
     */
    public function getRequesterPerson()
    {
        return $this->container['requester_person'];
    }

    /**
     * Sets requester_person
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPersonEvents200ResponseDataEventServicesInnerPerson|null $requester_person requester_person
     *
     * @return self
     */
    public function setRequesterPerson($requester_person)
    {
        $this->container['requester_person'] = $requester_person;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets counter
     *
     * @return int|null
     */
    public function getCounter()
    {
        return $this->container['counter'];
    }

    /**
     * Sets counter
     *
     * @param int|null $counter counter
     *
     * @return self
     */
    public function setCounter($counter)
    {
        $this->container['counter'] = $counter;

        return $this;
    }

    /**
     * Gets allow_chat
     *
     * @return bool|null
     */
    public function getAllowChat()
    {
        return $this->container['allow_chat'];
    }

    /**
     * Sets allow_chat
     *
     * @param bool|null $allow_chat allow_chat
     *
     * @return self
     */
    public function setAllowChat($allow_chat)
    {
        $this->container['allow_chat'] = $allow_chat;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return array|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param array|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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


