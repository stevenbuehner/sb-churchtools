<?php
/**
 * FinanceMasterData
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
 * FinanceMasterData Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FinanceMasterData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FinanceMasterData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'clients' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataClients[]',
        'accounting_periods' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountingPeriods[]',
        'accounts' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccounts[]',
        'account_types' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountTypes[]',
        'account_classes' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountClasses[]',
        'account_groups' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountGroups[]',
        'cash_discounts' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataCashDiscounts[]',
        'cost_centers' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataCostCenters[]',
        'tax_rates' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataTaxRates[]',
        'tax_types' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataTaxTypes[]',
        'transaction_purposes' => '\StevenBuehner\ChurchTools\Model\InlineResponse20044DataTransactionPurposes[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'clients' => null,
        'accounting_periods' => null,
        'accounts' => null,
        'account_types' => null,
        'account_classes' => null,
        'account_groups' => null,
        'cash_discounts' => null,
        'cost_centers' => null,
        'tax_rates' => null,
        'tax_types' => null,
        'transaction_purposes' => null
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
        'clients' => 'clients',
        'accounting_periods' => 'accountingPeriods',
        'accounts' => 'accounts',
        'account_types' => 'accountTypes',
        'account_classes' => 'accountClasses',
        'account_groups' => 'accountGroups',
        'cash_discounts' => 'cashDiscounts',
        'cost_centers' => 'costCenters',
        'tax_rates' => 'taxRates',
        'tax_types' => 'taxTypes',
        'transaction_purposes' => 'transactionPurposes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clients' => 'setClients',
        'accounting_periods' => 'setAccountingPeriods',
        'accounts' => 'setAccounts',
        'account_types' => 'setAccountTypes',
        'account_classes' => 'setAccountClasses',
        'account_groups' => 'setAccountGroups',
        'cash_discounts' => 'setCashDiscounts',
        'cost_centers' => 'setCostCenters',
        'tax_rates' => 'setTaxRates',
        'tax_types' => 'setTaxTypes',
        'transaction_purposes' => 'setTransactionPurposes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clients' => 'getClients',
        'accounting_periods' => 'getAccountingPeriods',
        'accounts' => 'getAccounts',
        'account_types' => 'getAccountTypes',
        'account_classes' => 'getAccountClasses',
        'account_groups' => 'getAccountGroups',
        'cash_discounts' => 'getCashDiscounts',
        'cost_centers' => 'getCostCenters',
        'tax_rates' => 'getTaxRates',
        'tax_types' => 'getTaxTypes',
        'transaction_purposes' => 'getTransactionPurposes'
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
        $this->container['clients'] = $data['clients'] ?? null;
        $this->container['accounting_periods'] = $data['accounting_periods'] ?? null;
        $this->container['accounts'] = $data['accounts'] ?? null;
        $this->container['account_types'] = $data['account_types'] ?? null;
        $this->container['account_classes'] = $data['account_classes'] ?? null;
        $this->container['account_groups'] = $data['account_groups'] ?? null;
        $this->container['cash_discounts'] = $data['cash_discounts'] ?? null;
        $this->container['cost_centers'] = $data['cost_centers'] ?? null;
        $this->container['tax_rates'] = $data['tax_rates'] ?? null;
        $this->container['tax_types'] = $data['tax_types'] ?? null;
        $this->container['transaction_purposes'] = $data['transaction_purposes'] ?? null;
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
     * Gets clients
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataClients[]|null
     */
    public function getClients()
    {
        return $this->container['clients'];
    }

    /**
     * Sets clients
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataClients[]|null $clients clients
     *
     * @return self
     */
    public function setClients($clients)
    {
        $this->container['clients'] = $clients;

        return $this;
    }

    /**
     * Gets accounting_periods
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountingPeriods[]|null
     */
    public function getAccountingPeriods()
    {
        return $this->container['accounting_periods'];
    }

    /**
     * Sets accounting_periods
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountingPeriods[]|null $accounting_periods accounting_periods
     *
     * @return self
     */
    public function setAccountingPeriods($accounting_periods)
    {
        $this->container['accounting_periods'] = $accounting_periods;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccounts[]|null
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccounts[]|null $accounts accounts
     *
     * @return self
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets account_types
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountTypes[]|null
     */
    public function getAccountTypes()
    {
        return $this->container['account_types'];
    }

    /**
     * Sets account_types
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountTypes[]|null $account_types account_types
     *
     * @return self
     */
    public function setAccountTypes($account_types)
    {
        $this->container['account_types'] = $account_types;

        return $this;
    }

    /**
     * Gets account_classes
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountClasses[]|null
     */
    public function getAccountClasses()
    {
        return $this->container['account_classes'];
    }

    /**
     * Sets account_classes
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountClasses[]|null $account_classes account_classes
     *
     * @return self
     */
    public function setAccountClasses($account_classes)
    {
        $this->container['account_classes'] = $account_classes;

        return $this;
    }

    /**
     * Gets account_groups
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountGroups[]|null
     */
    public function getAccountGroups()
    {
        return $this->container['account_groups'];
    }

    /**
     * Sets account_groups
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataAccountGroups[]|null $account_groups account_groups
     *
     * @return self
     */
    public function setAccountGroups($account_groups)
    {
        $this->container['account_groups'] = $account_groups;

        return $this;
    }

    /**
     * Gets cash_discounts
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataCashDiscounts[]|null
     */
    public function getCashDiscounts()
    {
        return $this->container['cash_discounts'];
    }

    /**
     * Sets cash_discounts
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataCashDiscounts[]|null $cash_discounts cash_discounts
     *
     * @return self
     */
    public function setCashDiscounts($cash_discounts)
    {
        $this->container['cash_discounts'] = $cash_discounts;

        return $this;
    }

    /**
     * Gets cost_centers
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataCostCenters[]|null
     */
    public function getCostCenters()
    {
        return $this->container['cost_centers'];
    }

    /**
     * Sets cost_centers
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataCostCenters[]|null $cost_centers cost_centers
     *
     * @return self
     */
    public function setCostCenters($cost_centers)
    {
        $this->container['cost_centers'] = $cost_centers;

        return $this;
    }

    /**
     * Gets tax_rates
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTaxRates[]|null
     */
    public function getTaxRates()
    {
        return $this->container['tax_rates'];
    }

    /**
     * Sets tax_rates
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTaxRates[]|null $tax_rates tax_rates
     *
     * @return self
     */
    public function setTaxRates($tax_rates)
    {
        $this->container['tax_rates'] = $tax_rates;

        return $this;
    }

    /**
     * Gets tax_types
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTaxTypes[]|null
     */
    public function getTaxTypes()
    {
        return $this->container['tax_types'];
    }

    /**
     * Sets tax_types
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTaxTypes[]|null $tax_types tax_types
     *
     * @return self
     */
    public function setTaxTypes($tax_types)
    {
        $this->container['tax_types'] = $tax_types;

        return $this;
    }

    /**
     * Gets transaction_purposes
     *
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTransactionPurposes[]|null
     */
    public function getTransactionPurposes()
    {
        return $this->container['transaction_purposes'];
    }

    /**
     * Sets transaction_purposes
     *
     * @param \StevenBuehner\ChurchTools\Model\InlineResponse20044DataTransactionPurposes[]|null $transaction_purposes transaction_purposes
     *
     * @return self
     */
    public function setTransactionPurposes($transaction_purposes)
    {
        $this->container['transaction_purposes'] = $transaction_purposes;

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

