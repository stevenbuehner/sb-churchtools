<?php
/**
 * InlineResponse20027Data
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
 * InlineResponse20027Data Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse20027Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_27_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'service_group_id' => 'int',
'comment_on_confirmation' => 'bool',
'sort_key' => 'int',
'allow_decline' => 'bool',
'allow_exchange' => 'bool',
'comment' => 'string',
'standard' => 'bool',
'hide_person_name' => 'bool',
'send_reminder_mails' => 'bool',
'send_service_request_emails' => 'bool',
'allow_control_live_agenda' => 'bool',
'group_ids' => 'string',
'tag_ids' => 'string',
'cal_text_template' => 'string',
'allow_chat' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'service_group_id' => null,
'comment_on_confirmation' => null,
'sort_key' => null,
'allow_decline' => null,
'allow_exchange' => null,
'comment' => null,
'standard' => null,
'hide_person_name' => null,
'send_reminder_mails' => null,
'send_service_request_emails' => null,
'allow_control_live_agenda' => null,
'group_ids' => null,
'tag_ids' => null,
'cal_text_template' => null,
'allow_chat' => null    ];

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
'name' => 'name',
'service_group_id' => 'serviceGroupId',
'comment_on_confirmation' => 'commentOnConfirmation',
'sort_key' => 'sortKey',
'allow_decline' => 'allowDecline',
'allow_exchange' => 'allowExchange',
'comment' => 'comment',
'standard' => 'standard',
'hide_person_name' => 'hidePersonName',
'send_reminder_mails' => 'sendReminderMails',
'send_service_request_emails' => 'sendServiceRequestEmails',
'allow_control_live_agenda' => 'allowControlLiveAgenda',
'group_ids' => 'groupIds',
'tag_ids' => 'tagIds',
'cal_text_template' => 'calTextTemplate',
'allow_chat' => 'allowChat'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'service_group_id' => 'setServiceGroupId',
'comment_on_confirmation' => 'setCommentOnConfirmation',
'sort_key' => 'setSortKey',
'allow_decline' => 'setAllowDecline',
'allow_exchange' => 'setAllowExchange',
'comment' => 'setComment',
'standard' => 'setStandard',
'hide_person_name' => 'setHidePersonName',
'send_reminder_mails' => 'setSendReminderMails',
'send_service_request_emails' => 'setSendServiceRequestEmails',
'allow_control_live_agenda' => 'setAllowControlLiveAgenda',
'group_ids' => 'setGroupIds',
'tag_ids' => 'setTagIds',
'cal_text_template' => 'setCalTextTemplate',
'allow_chat' => 'setAllowChat'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'service_group_id' => 'getServiceGroupId',
'comment_on_confirmation' => 'getCommentOnConfirmation',
'sort_key' => 'getSortKey',
'allow_decline' => 'getAllowDecline',
'allow_exchange' => 'getAllowExchange',
'comment' => 'getComment',
'standard' => 'getStandard',
'hide_person_name' => 'getHidePersonName',
'send_reminder_mails' => 'getSendReminderMails',
'send_service_request_emails' => 'getSendServiceRequestEmails',
'allow_control_live_agenda' => 'getAllowControlLiveAgenda',
'group_ids' => 'getGroupIds',
'tag_ids' => 'getTagIds',
'cal_text_template' => 'getCalTextTemplate',
'allow_chat' => 'getAllowChat'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['service_group_id'] = isset($data['service_group_id']) ? $data['service_group_id'] : null;
        $this->container['comment_on_confirmation'] = isset($data['comment_on_confirmation']) ? $data['comment_on_confirmation'] : null;
        $this->container['sort_key'] = isset($data['sort_key']) ? $data['sort_key'] : null;
        $this->container['allow_decline'] = isset($data['allow_decline']) ? $data['allow_decline'] : null;
        $this->container['allow_exchange'] = isset($data['allow_exchange']) ? $data['allow_exchange'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['hide_person_name'] = isset($data['hide_person_name']) ? $data['hide_person_name'] : null;
        $this->container['send_reminder_mails'] = isset($data['send_reminder_mails']) ? $data['send_reminder_mails'] : null;
        $this->container['send_service_request_emails'] = isset($data['send_service_request_emails']) ? $data['send_service_request_emails'] : null;
        $this->container['allow_control_live_agenda'] = isset($data['allow_control_live_agenda']) ? $data['allow_control_live_agenda'] : null;
        $this->container['group_ids'] = isset($data['group_ids']) ? $data['group_ids'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['cal_text_template'] = isset($data['cal_text_template']) ? $data['cal_text_template'] : null;
        $this->container['allow_chat'] = isset($data['allow_chat']) ? $data['allow_chat'] : null;
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets service_group_id
     *
     * @return int
     */
    public function getServiceGroupId()
    {
        return $this->container['service_group_id'];
    }

    /**
     * Sets service_group_id
     *
     * @param int $service_group_id service_group_id
     *
     * @return $this
     */
    public function setServiceGroupId($service_group_id)
    {
        $this->container['service_group_id'] = $service_group_id;

        return $this;
    }

    /**
     * Gets comment_on_confirmation
     *
     * @return bool
     */
    public function getCommentOnConfirmation()
    {
        return $this->container['comment_on_confirmation'];
    }

    /**
     * Sets comment_on_confirmation
     *
     * @param bool $comment_on_confirmation comment_on_confirmation
     *
     * @return $this
     */
    public function setCommentOnConfirmation($comment_on_confirmation)
    {
        $this->container['comment_on_confirmation'] = $comment_on_confirmation;

        return $this;
    }

    /**
     * Gets sort_key
     *
     * @return int
     */
    public function getSortKey()
    {
        return $this->container['sort_key'];
    }

    /**
     * Sets sort_key
     *
     * @param int $sort_key sort_key
     *
     * @return $this
     */
    public function setSortKey($sort_key)
    {
        $this->container['sort_key'] = $sort_key;

        return $this;
    }

    /**
     * Gets allow_decline
     *
     * @return bool
     */
    public function getAllowDecline()
    {
        return $this->container['allow_decline'];
    }

    /**
     * Sets allow_decline
     *
     * @param bool $allow_decline allow_decline
     *
     * @return $this
     */
    public function setAllowDecline($allow_decline)
    {
        $this->container['allow_decline'] = $allow_decline;

        return $this;
    }

    /**
     * Gets allow_exchange
     *
     * @return bool
     */
    public function getAllowExchange()
    {
        return $this->container['allow_exchange'];
    }

    /**
     * Sets allow_exchange
     *
     * @param bool $allow_exchange allow_exchange
     *
     * @return $this
     */
    public function setAllowExchange($allow_exchange)
    {
        $this->container['allow_exchange'] = $allow_exchange;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets standard
     *
     * @return bool
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard
     *
     * @param bool $standard standard
     *
     * @return $this
     */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets hide_person_name
     *
     * @return bool
     */
    public function getHidePersonName()
    {
        return $this->container['hide_person_name'];
    }

    /**
     * Sets hide_person_name
     *
     * @param bool $hide_person_name hide_person_name
     *
     * @return $this
     */
    public function setHidePersonName($hide_person_name)
    {
        $this->container['hide_person_name'] = $hide_person_name;

        return $this;
    }

    /**
     * Gets send_reminder_mails
     *
     * @return bool
     */
    public function getSendReminderMails()
    {
        return $this->container['send_reminder_mails'];
    }

    /**
     * Sets send_reminder_mails
     *
     * @param bool $send_reminder_mails send_reminder_mails
     *
     * @return $this
     */
    public function setSendReminderMails($send_reminder_mails)
    {
        $this->container['send_reminder_mails'] = $send_reminder_mails;

        return $this;
    }

    /**
     * Gets send_service_request_emails
     *
     * @return bool
     */
    public function getSendServiceRequestEmails()
    {
        return $this->container['send_service_request_emails'];
    }

    /**
     * Sets send_service_request_emails
     *
     * @param bool $send_service_request_emails send_service_request_emails
     *
     * @return $this
     */
    public function setSendServiceRequestEmails($send_service_request_emails)
    {
        $this->container['send_service_request_emails'] = $send_service_request_emails;

        return $this;
    }

    /**
     * Gets allow_control_live_agenda
     *
     * @return bool
     */
    public function getAllowControlLiveAgenda()
    {
        return $this->container['allow_control_live_agenda'];
    }

    /**
     * Sets allow_control_live_agenda
     *
     * @param bool $allow_control_live_agenda allow_control_live_agenda
     *
     * @return $this
     */
    public function setAllowControlLiveAgenda($allow_control_live_agenda)
    {
        $this->container['allow_control_live_agenda'] = $allow_control_live_agenda;

        return $this;
    }

    /**
     * Gets group_ids
     *
     * @return string
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param string $group_ids Comma separated list of group ids
     *
     * @return $this
     */
    public function setGroupIds($group_ids)
    {
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets tag_ids
     *
     * @return string
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     *
     * @param string $tag_ids Comma separated list of tag ids
     *
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets cal_text_template
     *
     * @return string
     */
    public function getCalTextTemplate()
    {
        return $this->container['cal_text_template'];
    }

    /**
     * Sets cal_text_template
     *
     * @param string $cal_text_template cal_text_template
     *
     * @return $this
     */
    public function setCalTextTemplate($cal_text_template)
    {
        $this->container['cal_text_template'] = $cal_text_template;

        return $this;
    }

    /**
     * Gets allow_chat
     *
     * @return bool
     */
    public function getAllowChat()
    {
        return $this->container['allow_chat'];
    }

    /**
     * Sets allow_chat
     *
     * @param bool $allow_chat allow_chat
     *
     * @return $this
     */
    public function setAllowChat($allow_chat)
    {
        $this->container['allow_chat'] = $allow_chat;

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
