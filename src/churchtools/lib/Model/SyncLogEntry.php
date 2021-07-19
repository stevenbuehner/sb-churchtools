<?php
/**
 * SyncLogEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * OpenAPI spec version: 0.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
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
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SyncLogEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Sync Log Entry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'float',
'date' => '\DateTime',
'job' => '\StevenBuehner\ChurchTools\Model\SyncLogJob',
'type' => 'string',
'level' => 'string',
'message_i18n' => 'string',
'message_args' => 'object',
'is_dry_run' => 'bool',
'domain_type' => 'string',
'domain_id' => 'string',
'source_entity_id' => 'string',
'system' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
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
'system' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
'system' => 'system'    ];

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
'system' => 'setSystem'    ];

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
'system' => 'getSystem'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['job'] = isset($data['job']) ? $data['job'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['message_i18n'] = isset($data['message_i18n']) ? $data['message_i18n'] : null;
        $this->container['message_args'] = isset($data['message_args']) ? $data['message_args'] : null;
        $this->container['is_dry_run'] = isset($data['is_dry_run']) ? $data['is_dry_run'] : null;
        $this->container['domain_type'] = isset($data['domain_type']) ? $data['domain_type'] : null;
        $this->container['domain_id'] = isset($data['domain_id']) ? $data['domain_id'] : null;
        $this->container['source_entity_id'] = isset($data['source_entity_id']) ? $data['source_entity_id'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
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
        if ($this->container['job'] === null) {
            $invalidProperties[] = "'job' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['is_dry_run'] === null) {
            $invalidProperties[] = "'is_dry_run' can't be null";
        }
        if ($this->container['domain_type'] === null) {
            $invalidProperties[] = "'domain_type' can't be null";
        }
        if ($this->container['domain_id'] === null) {
            $invalidProperties[] = "'domain_id' can't be null";
        }
        if ($this->container['source_entity_id'] === null) {
            $invalidProperties[] = "'source_entity_id' can't be null";
        }
        if ($this->container['system'] === null) {
            $invalidProperties[] = "'system' can't be null";
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
     * @return $this
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
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets job
     *
     * @return \StevenBuehner\ChurchTools\Model\SyncLogJob
     */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
     * Sets job
     *
     * @param \StevenBuehner\ChurchTools\Model\SyncLogJob $job job
     *
     * @return $this
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
     * @return $this
     */
    public function setType($type)
    {
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
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets message_i18n
     *
     * @return string
     */
    public function getMessageI18n()
    {
        return $this->container['message_i18n'];
    }

    /**
     * Sets message_i18n
     *
     * @param string $message_i18n message_i18n
     *
     * @return $this
     */
    public function setMessageI18n($message_i18n)
    {
        $this->container['message_i18n'] = $message_i18n;

        return $this;
    }

    /**
     * Gets message_args
     *
     * @return object
     */
    public function getMessageArgs()
    {
        return $this->container['message_args'];
    }

    /**
     * Sets message_args
     *
     * @param object $message_args message_args
     *
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setDomainType($domain_type)
    {
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
     * @return $this
     */
    public function setDomainId($domain_id)
    {
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
     * @return $this
     */
    public function setSourceEntityId($source_entity_id)
    {
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
     * @return $this
     */
    public function setSystem($system)
    {
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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
