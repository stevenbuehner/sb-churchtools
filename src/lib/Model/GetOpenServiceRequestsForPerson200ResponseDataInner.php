<?php
/**
 * GetOpenServiceRequestsForPerson200ResponseDataInner
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
 * GetOpenServiceRequestsForPerson200ResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetOpenServiceRequestsForPerson200ResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getOpenServiceRequestsForPerson_200_response_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreed' => 'bool',
        'comment' => 'string',
        'counter' => 'int',
        'id' => 'int',
        'is_valid' => 'bool',
        'name' => 'string',
        'person' => '\StevenBuehner\ChurchTools\Model\PutCheckinPersons200ResponseData',
        'person_id' => 'int',
        'requested_date' => '\DateTime',
        'requester_person' => '\StevenBuehner\ChurchTools\Model\PutCheckinPersons200ResponseData',
        'requester_person_id' => 'int',
        'service_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreed' => null,
        'comment' => null,
        'counter' => null,
        'id' => null,
        'is_valid' => null,
        'name' => null,
        'person' => null,
        'person_id' => null,
        'requested_date' => 'date-time',
        'requester_person' => null,
        'requester_person_id' => null,
        'service_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'agreed' => false,
		'comment' => false,
		'counter' => false,
		'id' => false,
		'is_valid' => false,
		'name' => false,
		'person' => false,
		'person_id' => false,
		'requested_date' => false,
		'requester_person' => false,
		'requester_person_id' => false,
		'service_id' => false
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
        'agreed' => 'agreed',
        'comment' => 'comment',
        'counter' => 'counter',
        'id' => 'id',
        'is_valid' => 'isValid',
        'name' => 'name',
        'person' => 'person',
        'person_id' => 'personId',
        'requested_date' => 'requestedDate',
        'requester_person' => 'requesterPerson',
        'requester_person_id' => 'requesterPersonId',
        'service_id' => 'serviceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreed' => 'setAgreed',
        'comment' => 'setComment',
        'counter' => 'setCounter',
        'id' => 'setId',
        'is_valid' => 'setIsValid',
        'name' => 'setName',
        'person' => 'setPerson',
        'person_id' => 'setPersonId',
        'requested_date' => 'setRequestedDate',
        'requester_person' => 'setRequesterPerson',
        'requester_person_id' => 'setRequesterPersonId',
        'service_id' => 'setServiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreed' => 'getAgreed',
        'comment' => 'getComment',
        'counter' => 'getCounter',
        'id' => 'getId',
        'is_valid' => 'getIsValid',
        'name' => 'getName',
        'person' => 'getPerson',
        'person_id' => 'getPersonId',
        'requested_date' => 'getRequestedDate',
        'requester_person' => 'getRequesterPerson',
        'requester_person_id' => 'getRequesterPersonId',
        'service_id' => 'getServiceId'
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
        $this->setIfExists('agreed', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('counter', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_valid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('person', $data ?? [], null);
        $this->setIfExists('person_id', $data ?? [], null);
        $this->setIfExists('requested_date', $data ?? [], null);
        $this->setIfExists('requester_person', $data ?? [], null);
        $this->setIfExists('requester_person_id', $data ?? [], null);
        $this->setIfExists('service_id', $data ?? [], null);
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

        if (is_null($agreed)) {
            throw new \InvalidArgumentException('non-nullable agreed cannot be null');
        }

        $this->container['agreed'] = $agreed;

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

        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }

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

        if (is_null($counter)) {
            throw new \InvalidArgumentException('non-nullable counter cannot be null');
        }

        $this->container['counter'] = $counter;

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

        if (is_null($is_valid)) {
            throw new \InvalidArgumentException('non-nullable is_valid cannot be null');
        }

        $this->container['is_valid'] = $is_valid;

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
     * Gets person
     *
     * @return \StevenBuehner\ChurchTools\Model\PutCheckinPersons200ResponseData|null
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param \StevenBuehner\ChurchTools\Model\PutCheckinPersons200ResponseData|null $person person
     *
     * @return self
     */
    public function setPerson($person)
    {

        if (is_null($person)) {
            throw new \InvalidArgumentException('non-nullable person cannot be null');
        }

        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets person_id
     *
     * @return int|null
     * @deprecated
     */
    public function getPersonId()
    {
        return $this->container['person_id'];
    }

    /**
     * Sets person_id
     *
     * @param int|null $person_id person_id
     *
     * @return self
     * @deprecated
     */
    public function setPersonId($person_id)
    {

        if (is_null($person_id)) {
            throw new \InvalidArgumentException('non-nullable person_id cannot be null');
        }

        $this->container['person_id'] = $person_id;

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

        if (is_null($requested_date)) {
            throw new \InvalidArgumentException('non-nullable requested_date cannot be null');
        }

        $this->container['requested_date'] = $requested_date;

        return $this;
    }

    /**
     * Gets requester_person
     *
     * @return \StevenBuehner\ChurchTools\Model\PutCheckinPersons200ResponseData|null
     */
    public function getRequesterPerson()
    {
        return $this->container['requester_person'];
    }

    /**
     * Sets requester_person
     *
     * @param \StevenBuehner\ChurchTools\Model\PutCheckinPersons200ResponseData|null $requester_person requester_person
     *
     * @return self
     */
    public function setRequesterPerson($requester_person)
    {

        if (is_null($requester_person)) {
            throw new \InvalidArgumentException('non-nullable requester_person cannot be null');
        }

        $this->container['requester_person'] = $requester_person;

        return $this;
    }

    /**
     * Gets requester_person_id
     *
     * @return int|null
     * @deprecated
     */
    public function getRequesterPersonId()
    {
        return $this->container['requester_person_id'];
    }

    /**
     * Sets requester_person_id
     *
     * @param int|null $requester_person_id requester_person_id
     *
     * @return self
     * @deprecated
     */
    public function setRequesterPersonId($requester_person_id)
    {

        if (is_null($requester_person_id)) {
            throw new \InvalidArgumentException('non-nullable requester_person_id cannot be null');
        }

        $this->container['requester_person_id'] = $requester_person_id;

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

        if (is_null($service_id)) {
            throw new \InvalidArgumentException('non-nullable service_id cannot be null');
        }

        $this->container['service_id'] = $service_id;

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


