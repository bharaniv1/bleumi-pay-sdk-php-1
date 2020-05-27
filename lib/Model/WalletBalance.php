<?php
/**
 * WalletBalance
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bleumi Pay REST API
 *
 * A simple and powerful REST API to integrate ERC-20, Ethereum, xDai, Algorand payments and/or payouts into your business or application
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
 * WalletBalance Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WalletBalance implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WalletBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'balance' => 'string',
'token_balance' => 'string',
'token_decimals' => 'int',
'block_num' => 'string',
'safety' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'balance' => null,
'token_balance' => null,
'token_decimals' => 'int64',
'block_num' => null,
'safety' => null    ];

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
        'balance' => 'balance',
'token_balance' => 'token_balance',
'token_decimals' => 'token_decimals',
'block_num' => 'blockNum',
'safety' => 'safety'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
'token_balance' => 'setTokenBalance',
'token_decimals' => 'setTokenDecimals',
'block_num' => 'setBlockNum',
'safety' => 'setSafety'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
'token_balance' => 'getTokenBalance',
'token_decimals' => 'getTokenDecimals',
'block_num' => 'getBlockNum',
'safety' => 'getSafety'    ];

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
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['token_balance'] = isset($data['token_balance']) ? $data['token_balance'] : null;
        $this->container['token_decimals'] = isset($data['token_decimals']) ? $data['token_decimals'] : null;
        $this->container['block_num'] = isset($data['block_num']) ? $data['block_num'] : null;
        $this->container['safety'] = isset($data['safety']) ? $data['safety'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['token_balance'] === null) {
            $invalidProperties[] = "'token_balance' can't be null";
        }
        if ($this->container['token_decimals'] === null) {
            $invalidProperties[] = "'token_decimals' can't be null";
        }
        if ($this->container['block_num'] === null) {
            $invalidProperties[] = "'block_num' can't be null";
        }
        if ($this->container['safety'] === null) {
            $invalidProperties[] = "'safety' can't be null";
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
     * Gets balance
     *
     * @return string
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param string $balance Token balance for the wallet
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets token_balance
     *
     * @return string
     */
    public function getTokenBalance()
    {
        return $this->container['token_balance'];
    }

    /**
     * Sets token_balance
     *
     * @param string $token_balance Token balance for the wallet in Ethereum format
     *
     * @return $this
     */
    public function setTokenBalance($token_balance)
    {
        $this->container['token_balance'] = $token_balance;

        return $this;
    }

    /**
     * Gets token_decimals
     *
     * @return int
     */
    public function getTokenDecimals()
    {
        return $this->container['token_decimals'];
    }

    /**
     * Sets token_decimals
     *
     * @param int $token_decimals Token decimal places
     *
     * @return $this
     */
    public function setTokenDecimals($token_decimals)
    {
        $this->container['token_decimals'] = $token_decimals;

        return $this;
    }

    /**
     * Gets block_num
     *
     * @return string
     */
    public function getBlockNum()
    {
        return $this->container['block_num'];
    }

    /**
     * Sets block_num
     *
     * @param string $block_num Block in which the balance was last updated
     *
     * @return $this
     */
    public function setBlockNum($block_num)
    {
        $this->container['block_num'] = $block_num;

        return $this;
    }

    /**
     * Gets safety
     *
     * @return string
     */
    public function getSafety()
    {
        return $this->container['safety'];
    }

    /**
     * Sets safety
     *
     * @param string $safety Safety level indicator
     *
     * @return $this
     */
    public function setSafety($safety)
    {
        $this->container['safety'] = $safety;

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
