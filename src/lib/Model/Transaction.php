<?php
/**
 * Transaction
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
 * OpenAPI Generator version: 6.4.0
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
 * Transaction Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Transaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'int',
        'amount' => 'int',
        'cash_discount_amount' => 'int',
        'cash_discount_id' => 'int',
        'contra_account_id' => 'int',
        'cost_center_id' => 'int',
        'document_date' => '\DateTime',
        'document_number' => 'string',
        'donator' => '\StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson',
        'donator_spouse' => '\StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson',
        'id' => 'int',
        'is_immutable' => 'bool',
        'meta' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseMeta',
        'note' => 'string',
        'permissions' => '\StevenBuehner\ChurchTools\Model\GetAllTransactions200ResponseDataInnerPermissions',
        'split_transaction_id' => 'int',
        'tax_rate_id' => 'int',
        'tax_transaction_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'amount' => null,
        'cash_discount_amount' => null,
        'cash_discount_id' => null,
        'contra_account_id' => null,
        'cost_center_id' => null,
        'document_date' => 'date',
        'document_number' => null,
        'donator' => null,
        'donator_spouse' => null,
        'id' => null,
        'is_immutable' => null,
        'meta' => null,
        'note' => null,
        'permissions' => null,
        'split_transaction_id' => null,
        'tax_rate_id' => null,
        'tax_transaction_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
		'amount' => false,
		'cash_discount_amount' => false,
		'cash_discount_id' => false,
		'contra_account_id' => false,
		'cost_center_id' => true,
		'document_date' => false,
		'document_number' => false,
		'donator' => false,
		'donator_spouse' => false,
		'id' => false,
		'is_immutable' => false,
		'meta' => false,
		'note' => false,
		'permissions' => false,
		'split_transaction_id' => false,
		'tax_rate_id' => false,
		'tax_transaction_id' => false
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
        'account_id' => 'accountId',
        'amount' => 'amount',
        'cash_discount_amount' => 'cashDiscountAmount',
        'cash_discount_id' => 'cashDiscountId',
        'contra_account_id' => 'contraAccountId',
        'cost_center_id' => 'costCenterId',
        'document_date' => 'documentDate',
        'document_number' => 'documentNumber',
        'donator' => 'donator',
        'donator_spouse' => 'donatorSpouse',
        'id' => 'id',
        'is_immutable' => 'isImmutable',
        'meta' => 'meta',
        'note' => 'note',
        'permissions' => 'permissions',
        'split_transaction_id' => 'splitTransactionId',
        'tax_rate_id' => 'taxRateId',
        'tax_transaction_id' => 'taxTransactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'amount' => 'setAmount',
        'cash_discount_amount' => 'setCashDiscountAmount',
        'cash_discount_id' => 'setCashDiscountId',
        'contra_account_id' => 'setContraAccountId',
        'cost_center_id' => 'setCostCenterId',
        'document_date' => 'setDocumentDate',
        'document_number' => 'setDocumentNumber',
        'donator' => 'setDonator',
        'donator_spouse' => 'setDonatorSpouse',
        'id' => 'setId',
        'is_immutable' => 'setIsImmutable',
        'meta' => 'setMeta',
        'note' => 'setNote',
        'permissions' => 'setPermissions',
        'split_transaction_id' => 'setSplitTransactionId',
        'tax_rate_id' => 'setTaxRateId',
        'tax_transaction_id' => 'setTaxTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'amount' => 'getAmount',
        'cash_discount_amount' => 'getCashDiscountAmount',
        'cash_discount_id' => 'getCashDiscountId',
        'contra_account_id' => 'getContraAccountId',
        'cost_center_id' => 'getCostCenterId',
        'document_date' => 'getDocumentDate',
        'document_number' => 'getDocumentNumber',
        'donator' => 'getDonator',
        'donator_spouse' => 'getDonatorSpouse',
        'id' => 'getId',
        'is_immutable' => 'getIsImmutable',
        'meta' => 'getMeta',
        'note' => 'getNote',
        'permissions' => 'getPermissions',
        'split_transaction_id' => 'getSplitTransactionId',
        'tax_rate_id' => 'getTaxRateId',
        'tax_transaction_id' => 'getTaxTransactionId'
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('cash_discount_amount', $data ?? [], null);
        $this->setIfExists('cash_discount_id', $data ?? [], null);
        $this->setIfExists('contra_account_id', $data ?? [], null);
        $this->setIfExists('cost_center_id', $data ?? [], null);
        $this->setIfExists('document_date', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('donator', $data ?? [], null);
        $this->setIfExists('donator_spouse', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_immutable', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
        $this->setIfExists('split_transaction_id', $data ?? [], null);
        $this->setIfExists('tax_rate_id', $data ?? [], null);
        $this->setIfExists('tax_transaction_id', $data ?? [], null);
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
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|null $amount Value is in cent.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets cash_discount_amount
     *
     * @return int|null
     */
    public function getCashDiscountAmount()
    {
        return $this->container['cash_discount_amount'];
    }

    /**
     * Sets cash_discount_amount
     *
     * @param int|null $cash_discount_amount Value is in cent.
     *
     * @return self
     */
    public function setCashDiscountAmount($cash_discount_amount)
    {
        if (is_null($cash_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable cash_discount_amount cannot be null');
        }
        $this->container['cash_discount_amount'] = $cash_discount_amount;

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
        if (is_null($cash_discount_id)) {
            throw new \InvalidArgumentException('non-nullable cash_discount_id cannot be null');
        }
        $this->container['cash_discount_id'] = $cash_discount_id;

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
        if (is_null($contra_account_id)) {
            throw new \InvalidArgumentException('non-nullable contra_account_id cannot be null');
        }
        $this->container['contra_account_id'] = $contra_account_id;

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
        if (is_null($cost_center_id)) {
            array_push($this->openAPINullablesSetToNull, 'cost_center_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cost_center_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cost_center_id'] = $cost_center_id;

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
        if (is_null($document_date)) {
            throw new \InvalidArgumentException('non-nullable document_date cannot be null');
        }
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
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets donator
     *
     * @return \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson|null
     */
    public function getDonator()
    {
        return $this->container['donator'];
    }

    /**
     * Sets donator
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson|null $donator donator
     *
     * @return self
     */
    public function setDonator($donator)
    {
        if (is_null($donator)) {
            throw new \InvalidArgumentException('non-nullable donator cannot be null');
        }
        $this->container['donator'] = $donator;

        return $this;
    }

    /**
     * Gets donator_spouse
     *
     * @return \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson|null
     */
    public function getDonatorSpouse()
    {
        return $this->container['donator_spouse'];
    }

    /**
     * Sets donator_spouse
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllCampuses200ResponseDataInnerTeamInnerPerson|null $donator_spouse donator_spouse
     *
     * @return self
     */
    public function setDonatorSpouse($donator_spouse)
    {
        if (is_null($donator_spouse)) {
            throw new \InvalidArgumentException('non-nullable donator_spouse cannot be null');
        }
        $this->container['donator_spouse'] = $donator_spouse;

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
        if (is_null($is_immutable)) {
            throw new \InvalidArgumentException('non-nullable is_immutable cannot be null');
        }
        $this->container['is_immutable'] = $is_immutable;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\GetBookings200ResponseMeta|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\GetBookings200ResponseMeta|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

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
        if (is_null($note)) {
            throw new \InvalidArgumentException('non-nullable note cannot be null');
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \StevenBuehner\ChurchTools\Model\GetAllTransactions200ResponseDataInnerPermissions|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllTransactions200ResponseDataInnerPermissions|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $this->container['permissions'] = $permissions;

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
        if (is_null($split_transaction_id)) {
            throw new \InvalidArgumentException('non-nullable split_transaction_id cannot be null');
        }
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
     * @param int|null $tax_rate_id If a tax rate is set for the transaction, the corresponding tax transaction is returned in the field taxTransactionId.
     *
     * @return self
     */
    public function setTaxRateId($tax_rate_id)
    {
        if (is_null($tax_rate_id)) {
            throw new \InvalidArgumentException('non-nullable tax_rate_id cannot be null');
        }
        $this->container['tax_rate_id'] = $tax_rate_id;

        return $this;
    }

    /**
     * Gets tax_transaction_id
     *
     * @return int|null
     */
    public function getTaxTransactionId()
    {
        return $this->container['tax_transaction_id'];
    }

    /**
     * Sets tax_transaction_id
     *
     * @param int|null $tax_transaction_id Reference to the transaction which is a split booking for taxes.
     *
     * @return self
     */
    public function setTaxTransactionId($tax_transaction_id)
    {
        if (is_null($tax_transaction_id)) {
            throw new \InvalidArgumentException('non-nullable tax_transaction_id cannot be null');
        }
        $this->container['tax_transaction_id'] = $tax_transaction_id;

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


