<?php
/**
 * GetPublicgroupsGroupIdForm200Response
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
 * GetPublicgroupsGroupIdForm200Response Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetPublicgroupsGroupIdForm200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_publicgroups_groupId_form_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'form' => '\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseFormInner[]',
        'group' => '\StevenBuehner\ChurchTools\Model\PublicGroup1',
        'requester_id' => 'int',
        'sign_up_persons' => '\StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseSignUpPersonsInner[]',
        'token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'form' => null,
        'group' => null,
        'requester_id' => null,
        'sign_up_persons' => null,
        'token' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email' => false,
		'form' => false,
		'group' => false,
		'requester_id' => false,
		'sign_up_persons' => false,
		'token' => false
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
        'email' => 'email',
        'form' => 'form',
        'group' => 'group',
        'requester_id' => 'requesterId',
        'sign_up_persons' => 'signUpPersons',
        'token' => 'token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'form' => 'setForm',
        'group' => 'setGroup',
        'requester_id' => 'setRequesterId',
        'sign_up_persons' => 'setSignUpPersons',
        'token' => 'setToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'form' => 'getForm',
        'group' => 'getGroup',
        'requester_id' => 'getRequesterId',
        'sign_up_persons' => 'getSignUpPersons',
        'token' => 'getToken'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('form', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('requester_id', $data ?? [], null);
        $this->setIfExists('sign_up_persons', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
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

        if ($this->container['form'] === null) {
            $invalidProperties[] = "'form' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email If the user is not yet signed in, this specifies the email address the user has provided.
     *
     * @return self
     */
    public function setEmail($email)
    {

        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets form
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseFormInner[]
     */
    public function getForm()
    {
        return $this->container['form'];
    }

    /**
     * Sets form
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseFormInner[] $form List of form fields.
     *
     * @return self
     */
    public function setForm($form)
    {

        if (is_null($form)) {
            throw new \InvalidArgumentException('non-nullable form cannot be null');
        }

        $this->container['form'] = $form;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \StevenBuehner\ChurchTools\Model\PublicGroup1
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \StevenBuehner\ChurchTools\Model\PublicGroup1 $group group
     *
     * @return self
     */
    public function setGroup($group)
    {

        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }

        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets requester_id
     *
     * @return int|null
     */
    public function getRequesterId()
    {
        return $this->container['requester_id'];
    }

    /**
     * Sets requester_id
     *
     * @param int|null $requester_id If the user is signed in, this specifies the user ID of the requester.
     *
     * @return self
     */
    public function setRequesterId($requester_id)
    {

        if (is_null($requester_id)) {
            throw new \InvalidArgumentException('non-nullable requester_id cannot be null');
        }

        $this->container['requester_id'] = $requester_id;

        return $this;
    }

    /**
     * Gets sign_up_persons
     *
     * @return \StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseSignUpPersonsInner[]|null
     */
    public function getSignUpPersons()
    {
        return $this->container['sign_up_persons'];
    }

    /**
     * Sets sign_up_persons
     *
     * @param \StevenBuehner\ChurchTools\Model\GetPublicgroupsGroupIdForm200ResponseSignUpPersonsInner[]|null $sign_up_persons Lists all persons the current user is allowed to sign up for. This includes spouses, children below the age of 16 and all persons with the same email address.
     *
     * @return self
     */
    public function setSignUpPersons($sign_up_persons)
    {

        if (is_null($sign_up_persons)) {
            throw new \InvalidArgumentException('non-nullable sign_up_persons cannot be null');
        }

        $this->container['sign_up_persons'] = $sign_up_persons;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token The sign up token.
     *
     * @return self
     */
    public function setToken($token)
    {

        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }

        $this->container['token'] = $token;

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


