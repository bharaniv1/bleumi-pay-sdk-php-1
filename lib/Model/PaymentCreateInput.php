<?php
/**
 * PaymentCreateInput
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

/**
 * PaymentCreateInput Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCreateInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentCreateInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_amount' => 'string',
        'token' => '\Bleumi\Pay\Model\Token',
        'from_address' => '\Bleumi\Pay\Model\Address',
        'from_memo' => '\Bleumi\Pay\Model\StellarMemo',
        'to_address' => '\Bleumi\Pay\Model\Address',
        'to_memo' => '\Bleumi\Pay\Model\StellarMemo' ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_amount' => null,
        'token' => null,
        'from_address' => null,
        'from_memo' => null,
        'to_address' => null,
        'to_memo' => null    ];

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
        'payment_amount' => 'paymentAmount',
        'token' => 'token',
        'from_address' => 'fromAddress',
        'from_memo' => 'fromMemo',
        'to_address' => 'toAddress',
        'to_memo' => 'toMemo'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_amount' => 'setPaymentAmount',
        'token' => 'setToken',
        'from_address' => 'setFromAddress',
        'from_memo' => 'setFromMemo',
        'to_address' => 'setToAddress',
        'to_memo' => 'setToMemo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_amount' => 'getPaymentAmount',
        'token' => 'getToken',
        'from_address' => 'getFromAddress',
        'from_memo' => 'getFromMemo',
        'to_address' => 'getToAddress',
        'to_memo' => 'getToMemo'    ];

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
        $this->container['payment_amount'] = isset($data['payment_amount']) ? $data['payment_amount'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['from_address'] = isset($data['from_address']) ? $data['from_address'] : null;
        $this->container['from_memo'] = isset($data['from_memo']) ? $data['from_memo'] : null;
        $this->container['to_address'] = isset($data['to_address']) ? $data['to_address'] : null;
        $this->container['to_memo'] = isset($data['to_memo']) ? $data['to_memo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payment_amount'] === null) {
            $invalidProperties[] = "'payment_amount' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['from_address'] === null) {
            $invalidProperties[] = "'from_address' can't be null";
        }
        if ($this->container['to_address'] === null) {
            $invalidProperties[] = "'to_address' can't be null";
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
     * Gets payment_amount
     *
     * @return string
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param string $payment_amount payment_amount
     *
     * @return $this
     */
    public function setPaymentAmount($payment_amount)
    {
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets token
     *
     * @return \Bleumi\Pay\Model\Token
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param \Bleumi\Pay\Model\Token $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets from_address
     *
     * @return \Bleumi\Pay\Model\Address
     */
    public function getFromAddress()
    {
        return $this->container['from_address'];
    }

    /**
     * Sets from_address
     *
     * @param \Bleumi\Pay\Model\Address $from_address from_address
     *
     * @return $this
     */
    public function setFromAddress($from_address)
    {
        $this->container['from_address'] = $from_address;

        return $this;
    }

    /**
     * Gets from_memo
     *
     * @return \Bleumi\Pay\Model\StellarMemo
     */
    public function getFromMemo()
    {
        return $this->container['from_memo'];
    }

    /**
     * Sets from_memo
     *
     * @param string $from_memo from_memo
     *
     * @return $this
     */
    public function setFromMemo($from_memo)
    {
        $this->container['from_memo'] = $from_memo;

        return $this;
    }

    /**
     * Gets to_address
     *
     * @return \Bleumi\Pay\Model\Address
     */
    public function getToAddress()
    {
        return $this->container['to_address'];
    }

    /**
     * Sets to_address
     *
     * @param \Bleumi\Pay\Model\Address $to_address to_address
     *
     * @return $this
     */
    public function setToAddress($to_address)
    {
        $this->container['to_address'] = $to_address;

        return $this;
    }

    /**
     * Gets to_memo
     *
     * @return \Bleumi\Pay\Model\StellarMemo
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
