<?php
/**
 * Transfer
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
 * The power of fiat at the speed of cryptocurrency
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.9-SNAPSHOT
 */


namespace Bleumi\Pay\Model;

use \ArrayAccess;
use \Bleumi\Pay\ObjectSerializer;
use JsonSerializable;

/**
 * Transfer Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Transfer implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Transfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transfer_type' => 'string',
'tx_hash' => 'string',
'to_addr' => '\Bleumi\Pay\Model\Address',
'to_memo' => 'string',
'value' => 'string',
'timestamp' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transfer_type' => null,
        'tx_hash' => null,
        'to_addr' => null,
        'to_memo' => null,
        'value' => null,
        'timestamp' => null    ];

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
        'transfer_type' => 'transferType',
        'tx_hash' => 'txHash',
        'to_addr' => 'toAddr',
        'to_memo' => 'toMemo',
        'value' => 'value',
        'timestamp' => 'timestamp'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_type' => 'setTransferType',
        'tx_hash' => 'setTxHash',
        'to_addr' => 'setToAddr',
        'to_memo' => 'setToMemo',
        'value' => 'setValue',
        'timestamp' => 'setTimestamp'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_type' => 'getTransferType',
        'tx_hash' => 'getTxHash',
        'to_addr' => 'getToAddr',
        'to_memo' => 'getToMemo',
        'value' => 'getValue',
        'timestamp' => 'getTimestamp'    ];

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
        $this->container['transfer_type'] = isset($data['transfer_type']) ? $data['transfer_type'] : null;
        $this->container['tx_hash'] = isset($data['tx_hash']) ? $data['tx_hash'] : null;
        $this->container['to_addr'] = isset($data['to_addr']) ? $data['to_addr'] : null;
        $this->container['to_memo'] = isset($data['to_memo']) ? $data['to_memo'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transfer_type'] === null) {
            $invalidProperties[] = "'transfer_type' can't be null";
        }
        if ($this->container['tx_hash'] === null) {
            $invalidProperties[] = "'tx_hash' can't be null";
        }
        if ($this->container['to_addr'] === null) {
            $invalidProperties[] = "'to_addr' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
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
     * Gets transfer_type
     *
     * @return string
     */
    public function getTransferType()
    {
        return $this->container['transfer_type'];
    }

    /**
     * Sets transfer_type
     *
     * @param string $transfer_type transfer_type
     *
     * @return $this
     */
    public function setTransferType($transfer_type)
    {
        $this->container['transfer_type'] = $transfer_type;

        return $this;
    }

    /**
     * Gets tx_hash
     *
     * @return string
     */
    public function getTxHash()
    {
        return $this->container['tx_hash'];
    }

    /**
     * Sets tx_hash
     *
     * @param string $tx_hash tx_hash
     *
     * @return $this
     */
    public function setTxHash($tx_hash)
    {
        $this->container['tx_hash'] = $tx_hash;

        return $this;
    }

    /**
     * Gets to_addr
     *
     * @return \Bleumi\Pay\Model\Address
     */
    public function getToAddr()
    {
        return $this->container['to_addr'];
    }

    /**
     * Sets to_addr
     *
     * @param \Bleumi\Pay\Model\Address $to_addr to_addr
     *
     * @return $this
     */
    public function setToAddr($to_addr)
    {
        $this->container['to_addr'] = $to_addr;

        return $this;
    }

    /**
     * Gets to_memo
     *
     * @return string
     */
    public function getToMemo()
    {
        return $this->container['to_memo'];
    }

    /**
     * Sets to_memo
     *
     * @param string $to_memo to_memo
     *
     * @return $this
     */
    public function setToMemo($to_memo)
    {
        $this->container['to_memo'] = $to_memo;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
