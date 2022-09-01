<?php
/**
 * GetAllAccounts200ResponseDataInner
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
 * GetAllAccounts200ResponseDataInner Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetAllAccounts200ResponseDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'getAllAccounts_200_response_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_group_id' => 'int',
        'accounting_period_id' => 'int',
        'balance' => 'int',
        'id' => 'int',
        'is_donation_account' => 'bool',
        'is_opening_balance_account' => 'bool',
        'meta' => '\StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta',
        'name' => 'string',
        'number' => 'string',
        'permissions' => '\StevenBuehner\ChurchTools\Model\GetAllAccounts200ResponseDataInnerPermissions',
        'taxe_rate_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_group_id' => null,
        'accounting_period_id' => null,
        'balance' => null,
        'id' => null,
        'is_donation_account' => null,
        'is_opening_balance_account' => null,
        'meta' => null,
        'name' => null,
        'number' => null,
        'permissions' => null,
        'taxe_rate_id' => null
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
        'account_group_id' => 'accountGroupId',
        'accounting_period_id' => 'accountingPeriodId',
        'balance' => 'balance',
        'id' => 'id',
        'is_donation_account' => 'isDonationAccount',
        'is_opening_balance_account' => 'isOpeningBalanceAccount',
        'meta' => 'meta',
        'name' => 'name',
        'number' => 'number',
        'permissions' => 'permissions',
        'taxe_rate_id' => 'taxeRateId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_group_id' => 'setAccountGroupId',
        'accounting_period_id' => 'setAccountingPeriodId',
        'balance' => 'setBalance',
        'id' => 'setId',
        'is_donation_account' => 'setIsDonationAccount',
        'is_opening_balance_account' => 'setIsOpeningBalanceAccount',
        'meta' => 'setMeta',
        'name' => 'setName',
        'number' => 'setNumber',
        'permissions' => 'setPermissions',
        'taxe_rate_id' => 'setTaxeRateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_group_id' => 'getAccountGroupId',
        'accounting_period_id' => 'getAccountingPeriodId',
        'balance' => 'getBalance',
        'id' => 'getId',
        'is_donation_account' => 'getIsDonationAccount',
        'is_opening_balance_account' => 'getIsOpeningBalanceAccount',
        'meta' => 'getMeta',
        'name' => 'getName',
        'number' => 'getNumber',
        'permissions' => 'getPermissions',
        'taxe_rate_id' => 'getTaxeRateId'
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
        $this->container['account_group_id'] = $data['account_group_id'] ?? null;
        $this->container['accounting_period_id'] = $data['accounting_period_id'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['is_donation_account'] = $data['is_donation_account'] ?? null;
        $this->container['is_opening_balance_account'] = $data['is_opening_balance_account'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['permissions'] = $data['permissions'] ?? null;
        $this->container['taxe_rate_id'] = $data['taxe_rate_id'] ?? null;
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
     * Gets account_group_id
     *
     * @return int|null
     */
    public function getAccountGroupId()
    {
        return $this->container['account_group_id'];
    }

    /**
     * Sets account_group_id
     *
     * @param int|null $account_group_id account_group_id
     *
     * @return self
     */
    public function setAccountGroupId($account_group_id)
    {
        $this->container['account_group_id'] = $account_group_id;

        return $this;
    }

    /**
     * Gets accounting_period_id
     *
     * @return int|null
     */
    public function getAccountingPeriodId()
    {
        return $this->container['accounting_period_id'];
    }

    /**
     * Sets accounting_period_id
     *
     * @param int|null $accounting_period_id accounting_period_id
     *
     * @return self
     */
    public function setAccountingPeriodId($accounting_period_id)
    {
        $this->container['accounting_period_id'] = $accounting_period_id;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int|null $balance Current balance of account in cent.
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

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
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_donation_account
     *
     * @return bool|null
     */
    public function getIsDonationAccount()
    {
        return $this->container['is_donation_account'];
    }

    /**
     * Sets is_donation_account
     *
     * @param bool|null $is_donation_account is_donation_account
     *
     * @return self
     */
    public function setIsDonationAccount($is_donation_account)
    {
        $this->container['is_donation_account'] = $is_donation_account;

        return $this;
    }

    /**
     * Gets is_opening_balance_account
     *
     * @return bool|null
     */
    public function getIsOpeningBalanceAccount()
    {
        return $this->container['is_opening_balance_account'];
    }

    /**
     * Sets is_opening_balance_account
     *
     * @param bool|null $is_opening_balance_account is_opening_balance_account
     *
     * @return self
     */
    public function setIsOpeningBalanceAccount($is_opening_balance_account)
    {
        $this->container['is_opening_balance_account'] = $is_opening_balance_account;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\GetBookings200ResponseDataInnerBaseMeta|null $meta meta
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \StevenBuehner\ChurchTools\Model\GetAllAccounts200ResponseDataInnerPermissions|null
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \StevenBuehner\ChurchTools\Model\GetAllAccounts200ResponseDataInnerPermissions|null $permissions permissions
     *
     * @return self
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets taxe_rate_id
     *
     * @return int|null
     */
    public function getTaxeRateId()
    {
        return $this->container['taxe_rate_id'];
    }

    /**
     * Sets taxe_rate_id
     *
     * @param int|null $taxe_rate_id taxe_rate_id
     *
     * @return self
     */
    public function setTaxeRateId($taxe_rate_id)
    {
        $this->container['taxe_rate_id'] = $taxe_rate_id;

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


