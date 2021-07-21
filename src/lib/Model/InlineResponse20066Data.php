<?php
/**
 * InlineResponse20066Data
 *
 * PHP version 7.2
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
 * OpenAPI Generator version: 5.2.0
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
 * InlineResponse20066Data Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse20066Data implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_66_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'document_date' => '\DateTime',
        'document_number' => 'string',
        'account_id' => 'int',
        'contra_account_id' => 'int',
        'amount' => 'float',
        'note' => 'string',
        'is_immutable' => 'bool',
        'cost_center_id' => 'int',
        'donator' => '\StevenBuehner\ChurchTools\Model\InlineResponse20018Person',
        'donator_spouse' => '\StevenBuehner\ChurchTools\Model\InlineResponse20018Person',
        'split_transaction_id' => 'int',
        'tax_rate_id' => 'int',
        'tax_amount' => 'float',
        'cash_discount_id' => 'int',
        'cash_discount_amount' => 'float',
        'permissions' => '\StevenBuehner\ChurchTools\Model\InlineResponse20066Permissions',
        'meta' => '\StevenBuehner\ChurchTools\Model\EntityMetaData'
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
        'document_date' => 'date',
        'document_number' => null,
        'account_id' => null,
        'contra_account_id' => null,
        'amount' => 'integer',
        'note' => null,
        'is_immutable' => null,
        'cost_center_id' => null,
        'donator' => null,
        'donator_spouse' => null,
        'split_transaction_id' => null,
        'tax_rate_id' => null,
        'tax_amount' => 'integer',
        'cash_discount_id' => null,
        'cash_discount_amount' => 'integer',
        'permissions' => null,
        'meta' => null
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
        'document_date' => 'documentDate',
        'document_number' => 'documentNumber',
        'account_id' => 'accountId',
        'contra_account_id' => 'contraAccountId',
        'amount' => 'amount',
        'note' => 'note',
        'is_immutable' => 'isImmutable',
        'cost_center_id' => 'costCenterId',
        'donator' => 'donator',
        'donator_spouse' => 'donatorSpouse',
        'split_transaction_id' => 'splitTransactionId',
        'tax_rate_id' => 'taxRateId',
        'tax_amount' => 'taxAmount',
        'cash_discount_id' => 'cashDiscountId',
        'cash_discount_amount' => 'cashDiscountAmount',
        'permissions' => 'permissions',
        'meta' => 'meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_date' => 'setDocumentDate',
        'document_number' => 'setDocumentNumber',
        'account_id' => 'setAccountId',
        'contra_account_id' => 'setContraAccountId',
        'amount' => 'setAmount',
        'note' => 'setNote',
        'is_immutable' => 'setIsImmutable',
        'cost_center_id' => 'setCostCenterId',
        'donator' => 'setDonator',
        'donator_spouse' => 'setDonatorSpouse',
        'split_transaction_id' => 'setSplitTransactionId',
        'tax_rate_id' => 'setTaxRateId',
        'tax_amount' => 'setTaxAmount',
        'cash_discount_id' => 'setCashDiscountId',
        'cash_discount_amount' => 'setCashDiscountAmount',
        'permissions' => 'setPermissions',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_date' => 'getDocumentDate',
        'document_number' => 'getDocumentNumber',
        'account_id' => 'getAccountId',
        'contra_account_id' => 'getContraAccountId',
        'amount' => 'getAmount',
        'note' => 'getNote',
        'is_immutable' => 'getIsImmutable',
        'cost_center_id' => 'getCostCenterId',
        'donator' => 'getDonator',
        'donator_spouse' => 'getDonatorSpouse',
        'split_transaction_id' => 'getSplitTransactionId',
        'tax_rate_id' => 'getTaxRateId',
        'tax_amount' => 'getTaxAmount',
        'cash_discount_id' => 'getCashDiscountId',
        'cash_discount_amount' => 'getCashDiscountAmount',
        'permissions' => 'getPermissions',
        'meta' => 'getMeta'
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
        $this->container['document_date'] = $data['document_date'] ?? null;
        $this->container['document_number'] = $data['document_number'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['contra_account_id'] = $data['contra_account_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['is_immutable'] = $data['is_immutable'] ?? null;
        $this->container['cost_center_id'] = $data['cost_center_id'] ?? null;
        $this->container['donator'] = $data['donator'] ?? null;
        $this->container['donator_spouse'] = $data['donator_spouse'] ?? null;
        $this->container['split_transaction_id'] = $data['split_transaction_id'] ?? null;
        $this->container['tax_rate_id'] = $data['tax_rate_id'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['cash_discount_id'] = $data['cash_discount_id'] ?? null;
        $this->container['cash_discount_amount'] = $data['cash_discount_amount'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
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
     * Gets document_date
     *
     * @return \DateTime|null
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param \DateTime|null $document_date document_date
     *
     * @return self
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number document_number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int|null $account_id account_id
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets contra_account_id
     *
     * @return int|null
     */
    public function getContraAccountId()
    {
        return $this->container['contra_account_id'];
    }

    /**
     * Sets contra_account_id
     *
     * @param int|null $contra_account_id contra_account_id
     *
     * @return self
     */
    public function setContraAccountId($contra_account_id)
    {
        $this->container['contra_account_id'] = $contra_account_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount Value is in cent.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets is_immutable
     *
     * @return bool|null
     */
    public function getIsImmutable()
    {
        return $this->container['is_immutable'];
    }

    /**
     * Sets is_immutable
     *
     * @param bool|null $is_immutable If a transaction is immutable, no field can be change or deleted.
     *
     * @return self
     */
    public function setIsImmutable($is_immutable)
    {
        $this->container['is_immutable'] = $is_immutable;

        return $this;
    }

    /**
     * Gets cost_center_id
     *
     * @return int|null
     */
    public function getCostCenterId()
    {
        return $this->container['cost_center_id'];
    }

    /**
     * Sets cost_center_id
     *
     * @param int|null $cost_center_id cost_center_id
     *
     * @return self
     */
    public function setCostCenterId($cost_center_id)
    {
        $this->container['cost_center_id'] = $cost_center_id;

        return $this;
    }

    /**
     * Gets donator
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20018Person|null
     */
    public function getDonator()
    {
        return $this->container['donator'];
    }

    /**
     * Sets donator
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20018Person|null $donator donator
     *
     * @return self
     */
    public function setDonator($donator)
    {
        $this->container['donator'] = $donator;

        return $this;
    }

    /**
     * Gets donator_spouse
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20018Person|null
     */
    public function getDonatorSpouse()
    {
        return $this->container['donator_spouse'];
    }

    /**
     * Sets donator_spouse
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20018Person|null $donator_spouse donator_spouse
     *
     * @return self
     */
    public function setDonatorSpouse($donator_spouse)
    {
        $this->container['donator_spouse'] = $donator_spouse;

        return $this;
    }

    /**
     * Gets split_transaction_id
     *
     * @return int|null
     */
    public function getSplitTransactionId()
    {
        return $this->container['split_transaction_id'];
    }

    /**
     * Sets split_transaction_id
     *
     * @param int|null $split_transaction_id split_transaction_id
     *
     * @return self
     */
    public function setSplitTransactionId($split_transaction_id)
    {
        $this->container['split_transaction_id'] = $split_transaction_id;

        return $this;
    }

    /**
     * Gets tax_rate_id
     *
     * @return int|null
     */
    public function getTaxRateId()
    {
        return $this->container['tax_rate_id'];
    }

    /**
     * Sets tax_rate_id
     *
     * @param int|null $tax_rate_id tax_rate_id
     *
     * @return self
     */
    public function setTaxRateId($tax_rate_id)
    {
        $this->container['tax_rate_id'] = $tax_rate_id;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float|null $tax_amount Value is in cent.
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets cash_discount_id
     *
     * @return int|null
     */
    public function getCashDiscountId()
    {
        return $this->container['cash_discount_id'];
    }

    /**
     * Sets cash_discount_id
     *
     * @param int|null $cash_discount_id cash_discount_id
     *
     * @return self
     */
    public function setCashDiscountId($cash_discount_id)
    {
        $this->container['cash_discount_id'] = $cash_discount_id;

        return $this;
    }

    /**
     * Gets cash_discount_amount
     *
     * @return float|null
     */
    public function getCashDiscountAmount()
    {
        return $this->container['cash_discount_amount'];
    }

    /**
     * Sets cash_discount_amount
     *
     * @param float|null $cash_discount_amount Value is in cent.
     *
     * @return self
     */
    public function setCashDiscountAmount($cash_discount_amount)
    {
        $this->container['cash_discount_amount'] = $cash_discount_amount;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20066Permissions|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20066Permissions|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\EntityMetaData|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\EntityMetaData|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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


