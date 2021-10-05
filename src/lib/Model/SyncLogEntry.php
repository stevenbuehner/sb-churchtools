<?php
/**
 * SyncLogEntry
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
 * SyncLogEntry Class Doc Comment
 *
 * @category Class
 * @description Log entry during a sync execution.
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SyncLogEntry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Sync_Log_Entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'float',
        'date' => '\DateTime',
        'job' => '\StevenBuehner\ChurchTools\Model\InlineResponse200111Job',
        'type' => 'string',
        'level' => 'string',
        'message_i18n' => 'string',
        'message_args' => 'object',
        'is_dry_run' => 'bool',
        'domain_type' => 'string',
        'domain_id' => 'string',
        'source_entity_id' => 'string',
        'system' => 'string'
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
        'date' => 'date-time',
        'job' => null,
        'type' => null,
        'level' => null,
        'message_i18n' => null,
        'message_args' => null,
        'is_dry_run' => null,
        'domain_type' => null,
        'domain_id' => null,
        'source_entity_id' => null,
        'system' => null
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
        'date' => 'date',
        'job' => 'job',
        'type' => 'type',
        'level' => 'level',
        'message_i18n' => 'messageI18n',
        'message_args' => 'messageArgs',
        'is_dry_run' => 'isDryRun',
        'domain_type' => 'domainType',
        'domain_id' => 'domainId',
        'source_entity_id' => 'sourceEntityId',
        'system' => 'system'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'job' => 'setJob',
        'type' => 'setType',
        'level' => 'setLevel',
        'message_i18n' => 'setMessageI18n',
        'message_args' => 'setMessageArgs',
        'is_dry_run' => 'setIsDryRun',
        'domain_type' => 'setDomainType',
        'domain_id' => 'setDomainId',
        'source_entity_id' => 'setSourceEntityId',
        'system' => 'setSystem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'job' => 'getJob',
        'type' => 'getType',
        'level' => 'getLevel',
        'message_i18n' => 'getMessageI18n',
        'message_args' => 'getMessageArgs',
        'is_dry_run' => 'getIsDryRun',
        'domain_type' => 'getDomainType',
        'domain_id' => 'getDomainId',
        'source_entity_id' => 'getSourceEntityId',
        'system' => 'getSystem'
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
        $this->container['date'] = $data['date'] ?? null;
        $this->container['job'] = $data['job'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['level'] = $data['level'] ?? null;
        $this->container['message_i18n'] = $data['message_i18n'] ?? null;
        $this->container['message_args'] = $data['message_args'] ?? null;
        $this->container['is_dry_run'] = $data['is_dry_run'] ?? null;
        $this->container['domain_type'] = $data['domain_type'] ?? null;
        $this->container['domain_id'] = $data['domain_id'] ?? null;
        $this->container['source_entity_id'] = $data['source_entity_id'] ?? null;
        $this->container['system'] = $data['system'] ?? null;
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
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ((mb_strlen($this->container['date']) < 1)) {
            $invalidProperties[] = "invalid value for 'date', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['job'] === null) {
            $invalidProperties[] = "'job' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ((mb_strlen($this->container['type']) < 1)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ((mb_strlen($this->container['level']) < 1)) {
            $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['message_i18n']) && (mb_strlen($this->container['message_i18n']) < 1)) {
            $invalidProperties[] = "invalid value for 'message_i18n', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['is_dry_run'] === null) {
            $invalidProperties[] = "'is_dry_run' can't be null";
        }
        if ($this->container['domain_type'] === null) {
            $invalidProperties[] = "'domain_type' can't be null";
        }
        if ((mb_strlen($this->container['domain_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['domain_id'] === null) {
            $invalidProperties[] = "'domain_id' can't be null";
        }
        if ((mb_strlen($this->container['domain_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'domain_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['source_entity_id'] === null) {
            $invalidProperties[] = "'source_entity_id' can't be null";
        }
        if ((mb_strlen($this->container['source_entity_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'source_entity_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['system'] === null) {
            $invalidProperties[] = "'system' can't be null";
        }
        if ((mb_strlen($this->container['system']) < 1)) {
            $invalidProperties[] = "invalid value for 'system', the character length must be bigger than or equal to 1.";
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
     * @param float $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return self
     */
    public function setDate($date)
    {

        if ((mb_strlen($date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $date when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets job
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200111Job
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse200111Job $job job
     *
     * @return self
     */
    public function setJob($job)
    {
        $this->container['job'] = $job;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {

        if ((mb_strlen($type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $type when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level level
     *
     * @return self
     */
    public function setLevel($level)
    {

        if ((mb_strlen($level) < 1)) {
            throw new \InvalidArgumentException('invalid length for $level when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets message_i18n
     *
     * @return string|null
     */
    public function getMessageI18n()
    {
        return $this->container['message_i18n'];
    }

    /**
     * Sets message_i18n
     *
     * @param string|null $message_i18n message_i18n
     *
     * @return self
     */
    public function setMessageI18n($message_i18n)
    {

        if (!is_null($message_i18n) && (mb_strlen($message_i18n) < 1)) {
            throw new \InvalidArgumentException('invalid length for $message_i18n when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['message_i18n'] = $message_i18n;

        return $this;
    }

    /**
     * Gets message_args
     *
     * @return object|null
     */
    public function getMessageArgs()
    {
        return $this->container['message_args'];
    }

    /**
     * Sets message_args
     *
     * @param object|null $message_args message_args
     *
     * @return self
     */
    public function setMessageArgs($message_args)
    {
        $this->container['message_args'] = $message_args;

        return $this;
    }

    /**
     * Gets is_dry_run
     *
     * @return bool
     */
    public function getIsDryRun()
    {
        return $this->container['is_dry_run'];
    }

    /**
     * Sets is_dry_run
     *
     * @param bool $is_dry_run is_dry_run
     *
     * @return self
     */
    public function setIsDryRun($is_dry_run)
    {
        $this->container['is_dry_run'] = $is_dry_run;

        return $this;
    }

    /**
     * Gets domain_type
     *
     * @return string
     */
    public function getDomainType()
    {
        return $this->container['domain_type'];
    }

    /**
     * Sets domain_type
     *
     * @param string $domain_type domain_type
     *
     * @return self
     */
    public function setDomainType($domain_type)
    {

        if ((mb_strlen($domain_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain_type when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['domain_type'] = $domain_type;

        return $this;
    }

    /**
     * Gets domain_id
     *
     * @return string
     */
    public function getDomainId()
    {
        return $this->container['domain_id'];
    }

    /**
     * Sets domain_id
     *
     * @param string $domain_id domain_id
     *
     * @return self
     */
    public function setDomainId($domain_id)
    {

        if ((mb_strlen($domain_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $domain_id when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['domain_id'] = $domain_id;

        return $this;
    }

    /**
     * Gets source_entity_id
     *
     * @return string
     */
    public function getSourceEntityId()
    {
        return $this->container['source_entity_id'];
    }

    /**
     * Sets source_entity_id
     *
     * @param string $source_entity_id source_entity_id
     *
     * @return self
     */
    public function setSourceEntityId($source_entity_id)
    {

        if ((mb_strlen($source_entity_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $source_entity_id when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['source_entity_id'] = $source_entity_id;

        return $this;
    }

    /**
     * Gets system
     *
     * @return string
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param string $system system
     *
     * @return self
     */
    public function setSystem($system)
    {

        if ((mb_strlen($system) < 1)) {
            throw new \InvalidArgumentException('invalid length for $system when calling SyncLogEntry., must be bigger than or equal to 1.');
        }

        $this->container['system'] = $system;

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


