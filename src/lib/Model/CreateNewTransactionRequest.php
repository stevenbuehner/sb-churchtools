<?php
/**
 * CreateNewTransactionRequest
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
 * CreateNewTransactionRequest Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateNewTransactionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'createNewTransaction_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_date' => '\DateTime',
        'document_number' => 'string',
        'account_id' => 'int',
        'contra_account_id' => 'int',
        'amount' => 'float',
        'note' => 'string',
        'cost_center_id' => 'int',
        'donator_id' => 'int',
        'donator_spouse_id' => 'int',
        'split_transaction_id' => 'int',
        'tax_rate_id' => 'float',
        'cash_discount_id' => 'int',
        'cash_discount_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document_date' => 'date',
        'document_number' => null,
        'account_id' => null,
        'contra_account_id' => null,
        'amount' => 'integer',
        'note' => null,
        'cost_center_id' => null,
        'donator_id' => null,
        'donator_spouse_id' => null,
        'split_transaction_id' => null,
        'tax_rate_id' => 'integer',
        'cash_discount_id' => null,
        'cash_discount_amount' => 'integer'
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
        'document_date' => 'documentDate',
        'document_number' => 'documentNumber',
        'account_id' => 'accountId',
        'contra_account_id' => 'contraAccountId',
        'amount' => 'amount',
        'note' => 'note',
        'cost_center_id' => 'costCenterId',
        'donator_id' => 'donatorId',
        'donator_spouse_id' => 'donatorSpouseId',
        'split_transaction_id' => 'splitTransactionId',
        'tax_rate_id' => 'taxRateId',
        'cash_discount_id' => 'cashDiscountId',
        'cash_discount_amount' => 'cashDiscountAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_date' => 'setDocumentDate',
        'document_number' => 'setDocumentNumber',
        'account_id' => 'setAccountId',
        'contra_account_id' => 'setContraAccountId',
        'amount' => 'setAmount',
        'note' => 'setNote',
        'cost_center_id' => 'setCostCenterId',
        'donator_id' => 'setDonatorId',
        'donator_spouse_id' => 'setDonatorSpouseId',
        'split_transaction_id' => 'setSplitTransactionId',
        'tax_rate_id' => 'setTaxRateId',
        'cash_discount_id' => 'setCashDiscountId',
        'cash_discount_amount' => 'setCashDiscountAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_date' => 'getDocumentDate',
        'document_number' => 'getDocumentNumber',
        'account_id' => 'getAccountId',
        'contra_account_id' => 'getContraAccountId',
        'amount' => 'getAmount',
        'note' => 'getNote',
        'cost_center_id' => 'getCostCenterId',
        'donator_id' => 'getDonatorId',
        'donator_spouse_id' => 'getDonatorSpouseId',
        'split_transaction_id' => 'getSplitTransactionId',
        'tax_rate_id' => 'getTaxRateId',
        'cash_discount_id' => 'getCashDiscountId',
        'cash_discount_amount' => 'getCashDiscountAmount'
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
        $this->container['document_date'] = $data['document_date'] ?? null;
        $this->container['document_number'] = $data['document_number'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['contra_account_id'] = $data['contra_account_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['cost_center_id'] = $data['cost_center_id'] ?? null;
        $this->container['donator_id'] = $data['donator_id'] ?? null;
        $this->container['donator_spouse_id'] = $data['donator_spouse_id'] ?? null;
        $this->container['split_transaction_id'] = $data['split_transaction_id'] ?? null;
        $this->container['tax_rate_id'] = $data['tax_rate_id'] ?? null;
        $this->container['cash_discount_id'] = $data['cash_discount_id'] ?? null;
        $this->container['cash_discount_amount'] = $data['cash_discount_amount'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['document_date'] === null) {
            $invalidProperties[] = "'document_date' can't be null";
        }
        if ($this->container['document_number'] === null) {
            $invalidProperties[] = "'document_number' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['contra_account_id'] === null) {
            $invalidProperties[] = "'contra_account_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
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
     * Gets document_date
     *
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     *
     * @param \DateTime $document_date document_date
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
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number document_number
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
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id account_id
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
     * @return int
     */
    public function getContraAccountId()
    {
        return $this->container['contra_account_id'];
    }

    /**
     * Sets contra_account_id
     *
     * @param int $contra_account_id contra_account_id
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
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount Value is in cent.
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
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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
     * Gets donator_id
     *
     * @return int|null
     */
    public function getDonatorId()
    {
        return $this->container['donator_id'];
    }

    /**
     * Sets donator_id
     *
     * @param int|null $donator_id donator_id
     *
     * @return self
     */
    public function setDonatorId($donator_id)
    {
        $this->container['donator_id'] = $donator_id;

        return $this;
    }

    /**
     * Gets donator_spouse_id
     *
     * @return int|null
     */
    public function getDonatorSpouseId()
    {
        return $this->container['donator_spouse_id'];
    }

    /**
     * Sets donator_spouse_id
     *
     * @param int|null $donator_spouse_id donator_spouse_id
     *
     * @return self
     */
    public function setDonatorSpouseId($donator_spouse_id)
    {
        $this->container['donator_spouse_id'] = $donator_spouse_id;

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
     * @return float|null
     */
    public function getTaxRateId()
    {
        return $this->container['tax_rate_id'];
    }

    /**
     * Sets tax_rate_id
     *
     * @param float|null $tax_rate_id If set, a corresponding tax split booking automatically gets created.
     *
     * @return self
     */
    public function setTaxRateId($tax_rate_id)
    {
        $this->container['tax_rate_id'] = $tax_rate_id;

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


