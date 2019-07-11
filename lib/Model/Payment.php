<?php
/**
 * Payment
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Payment implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'created_at' => 'int',
        'updated_at' => 'int',
        'status' => '\Bleumi\Pay\Model\PaymentStatus',
        'amount_paid' => 'string',
        'payment_amount' => 'string',
        'token' => '\Bleumi\Pay\Model\Token',
        'from_address' => '\Bleumi\Pay\Model\Address',
        'from_memo' => '\Bleumi\Pay\Model\StellarMemo',
        'to_address' => '\Bleumi\Pay\Model\Address',
        'to_memo' => '\Bleumi\Pay\Model\StellarMemo',
        'payment_address' => '\Bleumi\Pay\Model\PaymentAddress',
        'is_processing' => 'bool',
        'transfers' => '\Bleumi\Pay\Model\Transfer[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'created_at' => 'int64',
        'updated_at' => 'int64',
        'status' => null,
        'amount_paid' => null,
        'payment_amount' => null,
        'token' => null,
        'from_address' => null,
        'from_memo' => null,
        'to_address' => null,
        'to_memo' => null,
        'payment_address' => null,
        'is_processing' => null,
        'transfers' => null    ];

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
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'status' => 'status',
        'amount_paid' => 'amountPaid',
        'payment_amount' => 'paymentAmount',
        'token' => 'token',
        'from_address' => 'fromAddress',
        'from_memo' => 'fromMemo',
        'to_address' => 'toAddress',
        'to_memo' => 'toMemo',
        'payment_address' => 'paymentAddress',
        'is_processing' => 'isProcessing',
        'transfers' => 'transfers'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'status' => 'setStatus',
        'amount_paid' => 'setAmountPaid',
        'payment_amount' => 'setPaymentAmount',
        'token' => 'setToken',
        'from_address' => 'setFromAddress',
        'from_memo' => 'setFromMemo',
        'to_address' => 'setToAddress',
        'to_memo' => 'setToMemo',
        'payment_address' => 'setPaymentAddress',
        'is_processing' => 'setIsProcessing',
        'transfers' => 'setTransfers'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'status' => 'getStatus',
        'amount_paid' => 'getAmountPaid',
        'payment_amount' => 'getPaymentAmount',
        'token' => 'getToken',
        'from_address' => 'getFromAddress',
        'from_memo' => 'getFromMemo',
        'to_address' => 'getToAddress',
        'to_memo' => 'getToMemo',
        'payment_address' => 'getPaymentAddress',
        'is_processing' => 'getIsProcessing',
        'transfers' => 'getTransfers'    ];

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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['amount_paid'] = isset($data['amount_paid']) ? $data['amount_paid'] : null;
        $this->container['payment_amount'] = isset($data['payment_amount']) ? $data['payment_amount'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['from_address'] = isset($data['from_address']) ? $data['from_address'] : null;
        $this->container['from_memo'] = isset($data['from_memo']) ? $data['from_memo'] : null;
        $this->container['to_address'] = isset($data['to_address']) ? $data['to_address'] : null;
        $this->container['to_memo'] = isset($data['to_memo']) ? $data['to_memo'] : null;
        $this->container['payment_address'] = isset($data['payment_address']) ? $data['payment_address'] : null;
        $this->container['is_processing'] = isset($data['is_processing']) ? $data['is_processing'] : null;
        $this->container['transfers'] = isset($data['transfers']) ? $data['transfers'] : null;
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
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['amount_paid'] === null) {
            $invalidProperties[] = "'amount_paid' can't be null";
        }
        if ($this->container['payment_amount'] === null) {
            $invalidProperties[] = "'payment_amount' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
        if ($this->container['to_address'] === null) {
            $invalidProperties[] = "'to_address' can't be null";
        }
        if ($this->container['is_processing'] === null) {
            $invalidProperties[] = "'is_processing' can't be null";
        }
        if ($this->container['transfers'] === null) {
            $invalidProperties[] = "'transfers' can't be null";
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param int $created_at created_at
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
     * @param int $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Bleumi\Pay\Model\PaymentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Bleumi\Pay\Model\PaymentStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount_paid
     *
     * @return string
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param string $amount_paid amount_paid
     *
     * @return $this
     */
    public function setAmountPaid($amount_paid)
    {
        $this->container['amount_paid'] = $amount_paid;

        return $this;
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
     * @return string
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
     * Gets payment_address
     *
     * @return \Bleumi\Pay\Model\PaymentAddress
     */
    public function getPaymentAddress()
    {
        return $this->container['payment_address'];
    }

    /**
     * Sets payment_address
     *
     * @param \Bleumi\Pay\Model\PaymentAddress $payment_address payment_address
     *
     * @return $this
     */
    public function setPaymentAddress($payment_address)
    {
        $this->container['payment_address'] = $payment_address;

        return $this;
    }

    /**
     * Gets is_processing
     *
     * @return bool
     */
    public function getIsProcessing()
    {
        return $this->container['is_processing'];
    }

    /**
     * Sets is_processing
     *
     * @param bool $is_processing is_processing
     *
     * @return $this
     */
    public function setIsProcessing($is_processing)
    {
        $this->container['is_processing'] = $is_processing;

        return $this;
    }

    /**
     * Gets transfers
     *
     * @return \Bleumi\Pay\Model\Transfer[]
     */
    public function getTransfers()
    {
        return $this->container['transfers'];
    }

    /**
     * Sets transfers
     *
     * @param \Bleumi\Pay\Model\Transfer[] $transfers transfers
     *
     * @return $this
     */
    public function setTransfers($transfers)
    {
        $this->container['transfers'] = $transfers;

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
