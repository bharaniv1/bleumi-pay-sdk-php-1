<?php
/**
 * Wallet
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bleumi Pay API
 *
 * A simple and powerful REST API to integrate ERC20 payments into your business or application
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@bleumi.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.9-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bleumi\Pay\Model;

use \ArrayAccess;
use \Bleumi\Pay\ObjectSerializer;
use JsonSerializable;

/**
 * Wallet Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Wallet implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Wallet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'chain' => 'string',
'addr' => 'string',
'balances' => 'map[string,\Bleumi\Pay\Model\WalletBalance]',
'inputs' => '\Bleumi\Pay\Model\WalletInputs',
'created_at' => 'int',
'updated_at' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'chain' => null,
'addr' => null,
'balances' => null,
'inputs' => null,
'created_at' => 'int64',
'updated_at' => 'int64'    ];

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
'chain' => 'chain',
'addr' => 'addr',
'balances' => 'balances',
'inputs' => 'inputs',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'chain' => 'setChain',
'addr' => 'setAddr',
'balances' => 'setBalances',
'inputs' => 'setInputs',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'chain' => 'getChain',
'addr' => 'getAddr',
'balances' => 'getBalances',
'inputs' => 'getInputs',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt'    ];

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
        $this->container['chain'] = isset($data['chain']) ? $data['chain'] : null;
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['balances'] = isset($data['balances']) ? $data['balances'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['chain'] === null) {
            $invalidProperties[] = "'chain' can't be null";
        }
        if ($this->container['addr'] === null) {
            $invalidProperties[] = "'addr' can't be null";
        }
        if ($this->container['balances'] === null) {
            $invalidProperties[] = "'balances' can't be null";
        }
        if ($this->container['inputs'] === null) {
            $invalidProperties[] = "'inputs' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique ID identifying the wallet; specified when it was created by your system
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets chain
     *
     * @return string
     */
    public function getChain()
    {
        return $this->container['chain'];
    }

    /**
     * Sets chain
     *
     * @param string $chain Ethereum network in which wallet is to be created. Please refer to the [network list](https://pay.bleumi.com/docs/#supported-ethereum-networks)
     *
     * @return $this
     */
    public function setChain($chain)
    {
        $this->container['chain'] = $chain;

        return $this;
    }

    /**
     * Gets addr
     *
     * @return string
     */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
     * Sets addr
     *
     * @param string $addr Wallet address
     *
     * @return $this
     */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;

        return $this;
    }

    /**
     * Gets balances
     *
     * @return map[string,\Bleumi\Pay\Model\WalletBalance]
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param map[string,\Bleumi\Pay\Model\WalletBalance] $balances The current token balance
     *
     * @return $this
     */
    public function setBalances($balances)
    {
        $this->container['balances'] = $balances;

        return $this;
    }

    /**
     * Gets inputs
     *
     * @return \Bleumi\Pay\Model\WalletInputs
     */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
     * Sets inputs
     *
     * @param \Bleumi\Pay\Model\WalletInputs $inputs inputs
     *
     * @return $this
     */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at UNIX timestamp when the wallet was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return int
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param int $updated_at UNIX timestamp when the lastest operation was performed
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
    
    /**
     * Customize the way json_encode() renders the object.
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }
}
