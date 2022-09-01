<?php
/**
 * BatchTransactionRequestFilters
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
 * BatchTransactionRequestFilters Class Doc Comment
 *
 * @category Class
 * @description List of filters
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BatchTransactionRequestFilters implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'batchTransaction_request_filters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_ids' => 'int[]',
        'accounting_period_id' => 'int',
        'cost_center_ids' => 'int[]',
        'created_pid' => 'int',
        'donator_ids' => 'int[]',
        'end_date' => '\DateTime',
        'is_donation' => 'bool',
        'is_immutable' => 'bool',
        'is_income' => 'bool',
        'start_date' => '\DateTime',
        'include' => 'int[]',
        'exclude' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_ids' => null,
        'accounting_period_id' => null,
        'cost_center_ids' => null,
        'created_pid' => null,
        'donator_ids' => null,
        'end_date' => 'date',
        'is_donation' => null,
        'is_immutable' => null,
        'is_income' => null,
        'start_date' => 'date',
        'include' => null,
        'exclude' => null
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
        'account_ids' => 'accountIds',
        'accounting_period_id' => 'accountingPeriodId',
        'cost_center_ids' => 'costCenterIds',
        'created_pid' => 'createdPid',
        'donator_ids' => 'donatorIds',
        'end_date' => 'endDate',
        'is_donation' => 'isDonation',
        'is_immutable' => 'isImmutable',
        'is_income' => 'isIncome',
        'start_date' => 'startDate',
        'include' => 'include',
        'exclude' => 'exclude'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_ids' => 'setAccountIds',
        'accounting_period_id' => 'setAccountingPeriodId',
        'cost_center_ids' => 'setCostCenterIds',
        'created_pid' => 'setCreatedPid',
        'donator_ids' => 'setDonatorIds',
        'end_date' => 'setEndDate',
        'is_donation' => 'setIsDonation',
        'is_immutable' => 'setIsImmutable',
        'is_income' => 'setIsIncome',
        'start_date' => 'setStartDate',
        'include' => 'setInclude',
        'exclude' => 'setExclude'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_ids' => 'getAccountIds',
        'accounting_period_id' => 'getAccountingPeriodId',
        'cost_center_ids' => 'getCostCenterIds',
        'created_pid' => 'getCreatedPid',
        'donator_ids' => 'getDonatorIds',
        'end_date' => 'getEndDate',
        'is_donation' => 'getIsDonation',
        'is_immutable' => 'getIsImmutable',
        'is_income' => 'getIsIncome',
        'start_date' => 'getStartDate',
        'include' => 'getInclude',
        'exclude' => 'getExclude'
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
        $this->container['account_ids'] = $data['account_ids'] ?? null;
        $this->container['accounting_period_id'] = $data['accounting_period_id'] ?? null;
        $this->container['cost_center_ids'] = $data['cost_center_ids'] ?? null;
        $this->container['created_pid'] = $data['created_pid'] ?? null;
        $this->container['donator_ids'] = $data['donator_ids'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['is_donation'] = $data['is_donation'] ?? null;
        $this->container['is_immutable'] = $data['is_immutable'] ?? null;
        $this->container['is_income'] = $data['is_income'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['include'] = $data['include'] ?? null;
        $this->container['exclude'] = $data['exclude'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accounting_period_id'] === null) {
            $invalidProperties[] = "'accounting_period_id' can't be null";
        }
        if ($this->container['include'] === null) {
            $invalidProperties[] = "'include' can't be null";
        }
        if ($this->container['exclude'] === null) {
            $invalidProperties[] = "'exclude' can't be null";
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
     * Gets account_ids
     *
     * @return int[]|null
     */
    public function getAccountIds()
    {
        return $this->container['account_ids'];
    }

    /**
     * Sets account_ids
     *
     * @param int[]|null $account_ids Filter by account/contra account. All transactions match, where either account or contra account is in the list.
     *
     * @return self
     */
    public function setAccountIds($account_ids)
    {
        $this->container['account_ids'] = $account_ids;

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
     * @param int $accounting_period_id Filter by Accounting Period
     *
     * @return self
     */
    public function setAccountingPeriodId($accounting_period_id)
    {
        $this->container['accounting_period_id'] = $accounting_period_id;

        return $this;
    }

    /**
     * Gets cost_center_ids
     *
     * @return int[]|null
     */
    public function getCostCenterIds()
    {
        return $this->container['cost_center_ids'];
    }

    /**
     * Sets cost_center_ids
     *
     * @param int[]|null $cost_center_ids Filter by Cost Centers.
     *
     * @return self
     */
    public function setCostCenterIds($cost_center_ids)
    {
        $this->container['cost_center_ids'] = $cost_center_ids;

        return $this;
    }

    /**
     * Gets created_pid
     *
     * @return int|null
     */
    public function getCreatedPid()
    {
        return $this->container['created_pid'];
    }

    /**
     * Sets created_pid
     *
     * @param int|null $created_pid Filter by person ID. Get all transactions the person has created. But only show those the user can see.
     *
     * @return self
     */
    public function setCreatedPid($created_pid)
    {
        $this->container['created_pid'] = $created_pid;

        return $this;
    }

    /**
     * Gets donator_ids
     *
     * @return int[]|null
     */
    public function getDonatorIds()
    {
        return $this->container['donator_ids'];
    }

    /**
     * Sets donator_ids
     *
     * @param int[]|null $donator_ids Filter by donator or donator spouse. Provide an array of person ids.
     *
     * @return self
     */
    public function setDonatorIds($donator_ids)
    {
        $this->container['donator_ids'] = $donator_ids;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date Show transactions before this date.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets is_donation
     *
     * @return bool|null
     */
    public function getIsDonation()
    {
        return $this->container['is_donation'];
    }

    /**
     * Sets is_donation
     *
     * @param bool|null $is_donation Filter by donations. `true` = Only donations, `false` = Other than donation.
     *
     * @return self
     */
    public function setIsDonation($is_donation)
    {
        $this->container['is_donation'] = $is_donation;

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
     * @param bool|null $is_immutable Filter transactions, whether transaction is immutable.
     *
     * @return self
     */
    public function setIsImmutable($is_immutable)
    {
        $this->container['is_immutable'] = $is_immutable;

        return $this;
    }

    /**
     * Gets is_income
     *
     * @return bool|null
     */
    public function getIsIncome()
    {
        return $this->container['is_income'];
    }

    /**
     * Sets is_income
     *
     * @param bool|null $is_income Filter transactions by income or outcome transactions. An account group has a flag `cash asset account` to indicate accounts for income/outcome.
     *
     * @return self
     */
    public function setIsIncome($is_income)
    {
        $this->container['is_income'] = $is_income;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Show transactions after this date.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets include
     *
     * @return int[]
     */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
     * Sets include
     *
     * @param int[] $include List of Transaction IDs. Only those Transactions are updated.
     *
     * @return self
     */
    public function setInclude($include)
    {
        $this->container['include'] = $include;

        return $this;
    }

    /**
     * Gets exclude
     *
     * @return int[]
     */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
     * Sets exclude
     *
     * @param int[] $exclude List of Transaction IDs. All Transactions except this list of IDs are updated in the given Accouting Period.
     *
     * @return self
     */
    public function setExclude($exclude)
    {
        $this->container['exclude'] = $exclude;

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


