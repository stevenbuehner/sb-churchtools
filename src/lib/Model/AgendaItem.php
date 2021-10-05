<?php
/**
 * AgendaItem
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
 * AgendaItem Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AgendaItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Agenda_Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'position' => 'int',
        'type' => 'string',
        'title' => 'string',
        'note' => 'string',
        'duration' => 'int',
        'start' => '\DateTime',
        'is_before_event' => 'bool',
        'responsible' => '\StevenBuehner\ChurchTools\Model\Agenda1Responsible',
        'service_group_notes' => '\StevenBuehner\ChurchTools\Model\Agenda1ServiceGroupNotes[]',
        'song' => '\StevenBuehner\ChurchTools\Model\Agenda1Song',
        'meta' => '\StevenBuehner\ChurchTools\Model\Agenda1Meta',
        'start_times' => '\StevenBuehner\ChurchTools\Model\Agenda1StartTimes'
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
        'position' => null,
        'type' => null,
        'title' => null,
        'note' => null,
        'duration' => null,
        'start' => 'date-time',
        'is_before_event' => null,
        'responsible' => null,
        'service_group_notes' => null,
        'song' => null,
        'meta' => null,
        'start_times' => null
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
        'position' => 'position',
        'type' => 'type',
        'title' => 'title',
        'note' => 'note',
        'duration' => 'duration',
        'start' => 'start',
        'is_before_event' => 'isBeforeEvent',
        'responsible' => 'responsible',
        'service_group_notes' => 'serviceGroupNotes',
        'song' => 'song',
        'meta' => 'meta',
        'start_times' => 'startTimes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'position' => 'setPosition',
        'type' => 'setType',
        'title' => 'setTitle',
        'note' => 'setNote',
        'duration' => 'setDuration',
        'start' => 'setStart',
        'is_before_event' => 'setIsBeforeEvent',
        'responsible' => 'setResponsible',
        'service_group_notes' => 'setServiceGroupNotes',
        'song' => 'setSong',
        'meta' => 'setMeta',
        'start_times' => 'setStartTimes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'position' => 'getPosition',
        'type' => 'getType',
        'title' => 'getTitle',
        'note' => 'getNote',
        'duration' => 'getDuration',
        'start' => 'getStart',
        'is_before_event' => 'getIsBeforeEvent',
        'responsible' => 'getResponsible',
        'service_group_notes' => 'getServiceGroupNotes',
        'song' => 'getSong',
        'meta' => 'getMeta',
        'start_times' => 'getStartTimes'
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

    const TYPE_NORMAL = 'normal';
    const TYPE_SONG = 'song';
    const TYPE_HEADER = 'header';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_SONG,
            self::TYPE_HEADER,
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
        $this->container['position'] = $data['position'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['is_before_event'] = $data['is_before_event'] ?? null;
        $this->container['responsible'] = $data['responsible'] ?? null;
        $this->container['service_group_notes'] = $data['service_group_notes'] ?? null;
        $this->container['song'] = $data['song'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['start_times'] = $data['start_times'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Duration of agenda item in seconds.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start The start time of a position is dynamically calculated based on previous items and the start time of the event.
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets is_before_event
     *
     * @return bool|null
     */
    public function getIsBeforeEvent()
    {
        return $this->container['is_before_event'];
    }

    /**
     * Sets is_before_event
     *
     * @param bool|null $is_before_event is_before_event
     *
     * @return self
     */
    public function setIsBeforeEvent($is_before_event)
    {
        $this->container['is_before_event'] = $is_before_event;

        return $this;
    }

    /**
     * Gets responsible
     *
     * @return \StevenBuehner\ChurchTools\Model\Agenda1Responsible|null
     */
    public function getResponsible()
    {
        return $this->container['responsible'];
    }

    /**
     * Sets responsible
     *
     * @param \StevenBuehner\ChurchTools\Model\Agenda1Responsible|null $responsible responsible
     *
     * @return self
     */
    public function setResponsible($responsible)
    {
        $this->container['responsible'] = $responsible;

        return $this;
    }

    /**
     * Gets service_group_notes
     *
     * @return \StevenBuehner\ChurchTools\Model\Agenda1ServiceGroupNotes[]|null
     */
    public function getServiceGroupNotes()
    {
        return $this->container['service_group_notes'];
    }

    /**
     * Sets service_group_notes
     *
     * @param \StevenBuehner\ChurchTools\Model\Agenda1ServiceGroupNotes[]|null $service_group_notes Array of notes per service group. You will only see the service groups, you are allowed to see.
     *
     * @return self
     */
    public function setServiceGroupNotes($service_group_notes)
    {
        $this->container['service_group_notes'] = $service_group_notes;

        return $this;
    }

    /**
     * Gets song
     *
     * @return \StevenBuehner\ChurchTools\Model\Agenda1Song|null
     */
    public function getSong()
    {
        return $this->container['song'];
    }

    /**
     * Sets song
     *
     * @param \StevenBuehner\ChurchTools\Model\Agenda1Song|null $song song
     *
     * @return self
     */
    public function setSong($song)
    {
        $this->container['song'] = $song;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\Agenda1Meta|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\Agenda1Meta|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets start_times
     *
     * @return \StevenBuehner\ChurchTools\Model\Agenda1StartTimes|null
     */
    public function getStartTimes()
    {
        return $this->container['start_times'];
    }

    /**
     * Sets start_times
     *
     * @param \StevenBuehner\ChurchTools\Model\Agenda1StartTimes|null $start_times start_times
     *
     * @return self
     */
    public function setStartTimes($start_times)
    {
        $this->container['start_times'] = $start_times;

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


