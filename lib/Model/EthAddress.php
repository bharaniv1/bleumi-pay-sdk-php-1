<?php
/**
 * EthAddress
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
 * EthAddress Class Doc Comment
 *
 * @category Class
 * @description Ethereum account address
 * @package  Bleumi\Pay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EthAddress extends Address
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EthAddress';

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct($addr = null)
    {
        if (preg_match("/^0x[a-fA-F0-9]{40}$/", $$addr)) {
            $this->container['addr'] = isset($addr) ? $addr : null;
        } else {
            throw new \Exception("$addr NOT a valid Ethereum address");
        }
    }

}