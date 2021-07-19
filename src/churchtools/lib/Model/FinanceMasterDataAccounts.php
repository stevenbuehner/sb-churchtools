<?php
/**
 * FinanceMasterDataAccounts
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
 * FinanceMasterDataAccounts Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinanceMasterDataAccounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinanceMasterData_accounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'number' => 'string',
'name' => 'string',
'account_group_id' => 'int',
'accounting_period_id' => 'int',
'is_donation_account' => 'bool',
'is_opening_balance_account' => 'bool',
'taxe_rate_id' => 'int',
'balance' => 'float',
'permissions' => '\StevenBuehner\ChurchTools\Model\AccountPermissions',
'meta' => '\StevenBuehner\ChurchTools\Model\EntityMetaData'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'number' => null,
'name' => null,
'account_group_id' => null,
'accounting_period_id' => null,
'is_donation_account' => null,
'is_opening_balance_account' => null,
'taxe_rate_id' => null,
'balance' => 'integer',
'permissions' => null,
'meta' => null    ];

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
'number' => 'number',
'name' => 'name',
'account_group_id' => 'accountGroupId',
'accounting_period_id' => 'accountingPeriodId',
'is_donation_account' => 'isDonationAccount',
'is_opening_balance_account' => 'isOpeningBalanceAccount',
'taxe_rate_id' => 'taxeRateId',
'balance' => 'balance',
'permissions' => 'permissions',
'meta' => 'meta'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'number' => 'setNumber',
'name' => 'setName',
'account_group_id' => 'setAccountGroupId',
'accounting_period_id' => 'setAccountingPeriodId',
'is_donation_account' => 'setIsDonationAccount',
'is_opening_balance_account' => 'setIsOpeningBalanceAccount',
'taxe_rate_id' => 'setTaxeRateId',
'balance' => 'setBalance',
'permissions' => 'setPermissions',
'meta' => 'setMeta'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'number' => 'getNumber',
'name' => 'getName',
'account_group_id' => 'getAccountGroupId',
'accounting_period_id' => 'getAccountingPeriodId',
'is_donation_account' => 'getIsDonationAccount',
'is_opening_balance_account' => 'getIsOpeningBalanceAccount',
'taxe_rate_id' => 'getTaxeRateId',
'balance' => 'getBalance',
'permissions' => 'getPermissions',
'meta' => 'getMeta'    ];

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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_group_id'] = isset($data['account_group_id']) ? $data['account_group_id'] : null;
        $this->container['accounting_period_id'] = isset($data['accounting_period_id']) ? $data['accounting_period_id'] : null;
        $this->container['is_donation_account'] = isset($data['is_donation_account']) ? $data['is_donation_account'] : null;
        $this->container['is_opening_balance_account'] = isset($data['is_opening_balance_account']) ? $data['is_opening_balance_account'] : null;
        $this->container['taxe_rate_id'] = isset($data['taxe_rate_id']) ? $data['taxe_rate_id'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

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
     * Gets account_group_id
     *
     * @return int
     */
    public function getAccountGroupId()
    {
        return $this->container['account_group_id'];
    }

    /**
     * Sets account_group_id
     *
     * @param int $account_group_id account_group_id
     *
     * @return $this
     */
    public function setAccountGroupId($account_group_id)
    {
        $this->container['account_group_id'] = $account_group_id;

        return $this;
    }

    /**
     * Gets accounting_period_id
     *
     * @return int
     */
    public function getAccountingPeriodId()
    {
        return $this->container['accounting_period_id'];
    }

    /**
     * Sets accounting_period_id
     *
     * @param int $accounting_period_id accounting_period_id
     *
     * @return $this
     */
    public function setAccountingPeriodId($accounting_period_id)
    {
        $this->container['accounting_period_id'] = $accounting_period_id;

        return $this;
    }

    /**
     * Gets is_donation_account
     *
     * @return bool
     */
    public function getIsDonationAccount()
    {
        return $this->container['is_donation_account'];
    }

    /**
     * Sets is_donation_account
     *
     * @param bool $is_donation_account is_donation_account
     *
     * @return $this
     */
    public function setIsDonationAccount($is_donation_account)
    {
        $this->container['is_donation_account'] = $is_donation_account;

        return $this;
    }

    /**
     * Gets is_opening_balance_account
     *
     * @return bool
     */
    public function getIsOpeningBalanceAccount()
    {
        return $this->container['is_opening_balance_account'];
    }

    /**
     * Sets is_opening_balance_account
     *
     * @param bool $is_opening_balance_account is_opening_balance_account
     *
     * @return $this
     */
    public function setIsOpeningBalanceAccount($is_opening_balance_account)
    {
        $this->container['is_opening_balance_account'] = $is_opening_balance_account;

        return $this;
    }

    /**
     * Gets taxe_rate_id
     *
     * @return int
     */
    public function getTaxeRateId()
    {
        return $this->container['taxe_rate_id'];
    }

    /**
     * Sets taxe_rate_id
     *
     * @param int $taxe_rate_id taxe_rate_id
     *
     * @return $this
     */
    public function setTaxeRateId($taxe_rate_id)
    {
        $this->container['taxe_rate_id'] = $taxe_rate_id;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float $balance Current balance of account in cent.
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \StevenBuehner\ChurchTools\Model\AccountPermissions
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \StevenBuehner\ChurchTools\Model\AccountPermissions $permissions permissions
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StevenBuehner\ChurchTools\Model\EntityMetaData
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StevenBuehner\ChurchTools\Model\EntityMetaData $meta meta
     *
     * @return $this
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
