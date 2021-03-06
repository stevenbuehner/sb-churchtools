<?php
/**
 * CostCenter
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
 * CostCenter Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CostCenter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cost_Center';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'number' => 'string',
        'name' => 'string',
        'budget' => 'float',
        'budget_balance' => 'float',
        'budget_spent' => 'float',
        'budget_last_period' => 'float',
        'accounting_period_id' => 'int',
        'group' => '\StevenBuehner\ChurchTools\Model\GroupDomainObject1',
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
        'number' => null,
        'name' => null,
        'budget' => 'integer',
        'budget_balance' => 'integer',
        'budget_spent' => 'integer',
        'budget_last_period' => 'integer',
        'accounting_period_id' => null,
        'group' => null,
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
        'number' => 'number',
        'name' => 'name',
        'budget' => 'budget',
        'budget_balance' => 'budgetBalance',
        'budget_spent' => 'budgetSpent',
        'budget_last_period' => 'budgetLastPeriod',
        'accounting_period_id' => 'accountingPeriodId',
        'group' => 'group',
        'meta' => 'meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'name' => 'setName',
        'budget' => 'setBudget',
        'budget_balance' => 'setBudgetBalance',
        'budget_spent' => 'setBudgetSpent',
        'budget_last_period' => 'setBudgetLastPeriod',
        'accounting_period_id' => 'setAccountingPeriodId',
        'group' => 'setGroup',
        'meta' => 'setMeta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'name' => 'getName',
        'budget' => 'getBudget',
        'budget_balance' => 'getBudgetBalance',
        'budget_spent' => 'getBudgetSpent',
        'budget_last_period' => 'getBudgetLastPeriod',
        'accounting_period_id' => 'getAccountingPeriodId',
        'group' => 'getGroup',
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
        $this->container['number'] = $data['number'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['budget'] = $data['budget'] ?? null;
        $this->container['budget_balance'] = $data['budget_balance'] ?? null;
        $this->container['budget_spent'] = $data['budget_spent'] ?? null;
        $this->container['budget_last_period'] = $data['budget_last_period'] ?? null;
        $this->container['accounting_period_id'] = $data['accounting_period_id'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
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
     * Gets budget
     *
     * @return float|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float|null $budget Budget is in cent.
     *
     * @return self
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets budget_balance
     *
     * @return float|null
     */
    public function getBudgetBalance()
    {
        return $this->container['budget_balance'];
    }

    /**
     * Sets budget_balance
     *
     * @param float|null $budget_balance Remaining amount. (Budget - Cost Center Expenses). Budget balance is in cent.
     *
     * @return self
     */
    public function setBudgetBalance($budget_balance)
    {
        $this->container['budget_balance'] = $budget_balance;

        return $this;
    }

    /**
     * Gets budget_spent
     *
     * @return float|null
     */
    public function getBudgetSpent()
    {
        return $this->container['budget_spent'];
    }

    /**
     * Sets budget_spent
     *
     * @param float|null $budget_spent Cost Center Expences. (Outcome - Income). In cent
     *
     * @return self
     */
    public function setBudgetSpent($budget_spent)
    {
        $this->container['budget_spent'] = $budget_spent;

        return $this;
    }

    /**
     * Gets budget_last_period
     *
     * @return float|null
     */
    public function getBudgetLastPeriod()
    {
        return $this->container['budget_last_period'];
    }

    /**
     * Sets budget_last_period
     *
     * @param float|null $budget_last_period Budget for the cost center with the same number in the previous accounting period.
     *
     * @return self
     */
    public function setBudgetLastPeriod($budget_last_period)
    {
        $this->container['budget_last_period'] = $budget_last_period;

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
     * Gets group
     *
     * @return \StevenBuehner\ChurchTools\Model\GroupDomainObject1|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \StevenBuehner\ChurchTools\Model\GroupDomainObject1|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

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


