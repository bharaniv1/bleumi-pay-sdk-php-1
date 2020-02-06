<?php
/**
 * AlgorandBalance
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
 * AlgorandBalance Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlgorandBalance implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlgorandBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alg_mainnet' => 'map[string,\Bleumi\Pay\Model\WalletBalance]',
'alg_testnet' => 'map[string,\Bleumi\Pay\Model\WalletBalance]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alg_mainnet' => null,
'alg_testnet' => null    ];

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
        'alg_mainnet' => 'alg_mainnet',
'alg_testnet' => 'alg_testnet'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alg_mainnet' => 'setAlgMainnet',
'alg_testnet' => 'setAlgTestnet'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alg_mainnet' => 'getAlgMainnet',
'alg_testnet' => 'getAlgTestnet'    ];

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
        $this->container['alg_mainnet'] = isset($data['alg_mainnet']) ? $data['alg_mainnet'] : null;
        $this->container['alg_testnet'] = isset($data['alg_testnet']) ? $data['alg_testnet'] : null;
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
     * Gets alg_mainnet
     *
     * @return map[string,\Bleumi\Pay\Model\WalletBalance]
     */
    public function getAlgMainnet()
    {
        return $this->container['alg_mainnet'];
    }

    /**
     * Sets alg_mainnet
     *
     * @param map[string,\Bleumi\Pay\Model\WalletBalance] $alg_mainnet alg_mainnet
     *
     * @return $this
     */
    public function setAlgMainnet($alg_mainnet)
    {
        $this->container['alg_mainnet'] = $alg_mainnet;

        return $this;
    }

    /**
     * Gets alg_testnet
     *
     * @return map[string,\Bleumi\Pay\Model\WalletBalance]
     */
    public function getAlgTestnet()
    {
        return $this->container['alg_testnet'];
    }

    /**
     * Sets alg_testnet
     *
     * @param map[string,\Bleumi\Pay\Model\WalletBalance] $alg_testnet alg_testnet
     *
     * @return $this
     */
    public function setAlgTestnet($alg_testnet)
    {
        $this->container['alg_testnet'] = $alg_testnet;

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
