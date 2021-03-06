<?php
/**
 * ValidateCheckoutRequest
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
 * ValidateCheckoutRequest Class Doc Comment
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ValidateCheckoutRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ValidateCheckoutRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hmac_input' => 'string',
'hmac_key_id' => 'string',
'hmac_alg' => 'string',
'hmac_value' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hmac_input' => null,
'hmac_key_id' => null,
'hmac_alg' => null,
'hmac_value' => null    ];

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
        'hmac_input' => 'hmac_input',
'hmac_key_id' => 'hmac_keyId',
'hmac_alg' => 'hmac_alg',
'hmac_value' => 'hmac_value'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hmac_input' => 'setHmacInput',
'hmac_key_id' => 'setHmacKeyId',
'hmac_alg' => 'setHmacAlg',
'hmac_value' => 'setHmacValue'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hmac_input' => 'getHmacInput',
'hmac_key_id' => 'getHmacKeyId',
'hmac_alg' => 'getHmacAlg',
'hmac_value' => 'getHmacValue'    ];

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
        $this->container['hmac_input'] = isset($data['hmac_input']) ? $data['hmac_input'] : null;
        $this->container['hmac_key_id'] = isset($data['hmac_key_id']) ? $data['hmac_key_id'] : null;
        $this->container['hmac_alg'] = isset($data['hmac_alg']) ? $data['hmac_alg'] : null;
        $this->container['hmac_value'] = isset($data['hmac_value']) ? $data['hmac_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['hmac_input'] === null) {
            $invalidProperties[] = "'hmac_input' can't be null";
        }
        if ($this->container['hmac_key_id'] === null) {
            $invalidProperties[] = "'hmac_key_id' can't be null";
        }
        if ($this->container['hmac_alg'] === null) {
            $invalidProperties[] = "'hmac_alg' can't be null";
        }
        if ($this->container['hmac_value'] === null) {
            $invalidProperties[] = "'hmac_value' can't be null";
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
     * Gets hmac_input
     *
     * @return string
     */
    public function getHmacInput()
    {
        return $this->container['hmac_input'];
    }

    /**
     * Sets hmac_input
     *
     * @param string $hmac_input Payment Details. Passed as GET parameter in successUrl.
     *
     * @return $this
     */
    public function setHmacInput($hmac_input)
    {
        $this->container['hmac_input'] = $hmac_input;

        return $this;
    }

    /**
     * Gets hmac_key_id
     *
     * @return string
     */
    public function getHmacKeyId()
    {
        return $this->container['hmac_key_id'];
    }

    /**
     * Sets hmac_key_id
     *
     * @param string $hmac_key_id KeyId used to generate the HMAC. Passed as GET parameter in successUrl.
     *
     * @return $this
     */
    public function setHmacKeyId($hmac_key_id)
    {
        $this->container['hmac_key_id'] = $hmac_key_id;

        return $this;
    }

    /**
     * Gets hmac_alg
     *
     * @return string
     */
    public function getHmacAlg()
    {
        return $this->container['hmac_alg'];
    }

    /**
     * Sets hmac_alg
     *
     * @param string $hmac_alg Algorithm used to generate the HMAC. Passed as GET parameter in successUrl.
     *
     * @return $this
     */
    public function setHmacAlg($hmac_alg)
    {
        $this->container['hmac_alg'] = $hmac_alg;

        return $this;
    }

    /**
     * Gets hmac_value
     *
     * @return string
     */
    public function getHmacValue()
    {
        return $this->container['hmac_value'];
    }

    /**
     * Sets hmac_value
     *
     * @param string $hmac_value HMAC passed as GET parameter in successUrl.
     *
     * @return $this
     */
    public function setHmacValue($hmac_value)
    {
        $this->container['hmac_value'] = $hmac_value;

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
