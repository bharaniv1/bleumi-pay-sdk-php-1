<?php
/**
 * RequestValidator
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bleumi\Pay
 * @author   Bleumi
 * @link     https://github.com/bleumi/bleumi-pay-sdk-php
 */
 /**
 * Bleumi Pay REST API
 *
 * A simple and powerful REST API to integrate ERC-20, Ethereum, xDai, Algorand payments and/or payouts into your business or application
 *
 * OpenAPI spec version: 1.0.0
 * Contact: info@bleumi.com
 */

namespace Bleumi\Pay;

class RequestValidator
{
    public static function isEthAddress($addr = null)
    {
        if (isset($addr)) {
            if (preg_match("/^0x[a-fA-F0-9]{40}$/", $addr) || ($addr === "ETH") || ($addr === "XDAI") || ($addr === "XDAIT")) {
                return true;
            } 
        }
        return false;
    }

    public static function isAlgoAddress($addr = null)
    {
        if (isset($addr)) {
            if (preg_match("/^[A-Z2-7+=*]{58}$/", $addr) || ($addr === "ALGO") ) {
                return true;
            } 
        }
        return false;
    }

    public static function isAlgoNet($chain = null)
    {
        if (isset($chain)) {
            if ( ($chain === "alg_mainnet") || ($chain === "alg_testnet")) {
                return true;
            } 
        }
        return false;
    }

    public static function checkAlgoAddress ($name, $input) {
        $msg = null;
        if (!self::isAlgoAddress($input)) {
            $msg = "'$name' is not a valid Algorand address";
        }
        return $msg;
    }

    public static function checkEthAddress ($name, $input) {
        $msg = null;
        if (!self::isEthAddress($input)) {
            $msg = "'$name' is not a valid Ethereum address";
        }
        return $msg;
    }

    public static function checkRequiredParam ($name, $input) {
        if (!isset($input)) {
            return "Missing the required parameter '$name' ";
        }
        return null;
    }

    public static function checkNetworkAddress ($name, $input, $chain=null, $mandatory=false) {
        $msg = null;

        if ($mandatory === true) {
            $msg = self::checkRequiredParam($name, $input);
            if (isset($msg)) {
                return $msg;
            }
        }

        $msg = self::checkRequiredParam('Chain', $chain);
        if (isset($msg)) {
            return $msg;
        }

        if (isset($input)) {
            if (self::isAlgoNet($chain)) {
                $msg = self::checkAlgoAddress($name, $input);
            } else {
                $msg = self::checkEthAddress($name, $input);
            }
        }

        return $msg;
    }

    // validateCreatePaymentRequest - checks if createPayment request parameters are valid
    public static function validateCreatePaymentRequest($body, $chain = null)
    {
        //Checking if 'id' is provided for payment creation
        $msg = self::checkRequiredParam('Id', $body['id']);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Chain' is provided
        $msg = self::checkRequiredParam('Chain', $chain);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'BuyerAddress' is provided & is a valid network address
        $msg = self::checkNetworkAddress('BuyerAddress', $body['buyer_address'], $chain, true);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'TransferAddress' is provided & is a valid network address
        $msg = self::checkNetworkAddress('TransferAddress', $body['transfer_address'], $chain, true);
        if ($msg !== null) {
            return $msg;
        }

        //If 'Token' is provided, it has to be a valid network address.
        $token = $body['token'];
        if (isset($token)) {
            $msg = self::checkNetworkAddress('Algorand Standard Asset Token', $token, $chain, false);
            if ($msg !== null) {
                return $msg;
            }
        }
    }

    // validateRefundPaymentRequest - checks if refundPayment parameters are valid
    public static function validateRefundPaymentRequest($body, $chain = null) {
        
        //Checking if 'Chain' is provided
        $msg = self::checkRequiredParam('Chain', $chain);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Token' is provided while refunding payment    
        $msg = self::checkNetworkAddress('Token', $body['token'], $chain, true);
        if ($msg !== null) {
            return $msg;
        }

    }

    // validateSettlePaymentRequest - checks if settlePayment parameters are valid
    public static function validateSettlePaymentRequest($body, $chain = null) {
        
        //Checking if 'Amount' is provided for payment creation
        $msg = self::checkRequiredParam('Amount', $body['amount']);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Chain' is provided
        $msg = self::checkRequiredParam('Chain', $chain);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Token' is provided while settling payment    
        $msg = self::checkNetworkAddress('Token', $body['token'], $chain, true);
        if ($msg !== null) {
            return $msg;
        }

    }

    // validateCreateCheckoutURL - checks if createCheckoutURL parameters are valid
    public static function validateCreateCheckoutURLRequest($body) {

        //Checking if 'Id' is provided
        $msg = self::checkRequiredParam('Id', $body['id']);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Currency' is provided
        $msg = self::checkRequiredParam('Currency', $body['currency']);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Amount' is provided
        $msg = self::checkRequiredParam('Amount', $body['amount']);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Cancel_Url' is provided
        $msg = self::checkRequiredParam('Cancel_Url', $body['cancel_url']);
        if ($msg !== null) {
            return $msg;
        }

        //Checking if 'Success_Url' is provided
        $msg = self::checkRequiredParam('Success_Url', $body['success_url']);
        if ($msg !== null) {
            return $msg;
        }

        $token = $body['token'];
        $chain = $body['chain'];

        //If 'Token' is provided, it has to be a valid network address.
        if (isset($token)) {

            //If 'Token' is provided, 'Chain' is a required parameter.
            $msg = self::checkRequiredParam('Chain', $body['chain']);
            if ($msg !== null) {
                return $msg;
            }

            //Checking if 'Token' is a valid network address
            $msg = self::checkNetworkAddress('Token', $token, $chain, false);
            if ($msg !== null) {
                return $msg;
            }
        }

    }

    // validateCheckoutPaymentParams - checks if ValidateCheckoutPayment parameters are valid
    public static function validateCheckoutPaymentParams($body, $chain = null) {
        
        //Check if 'hmac_alg' is provided
        $msg = self::checkRequiredParam('hmac_alg', $body['hmac_alg']);
        if ($msg !== null) {
            return $msg;
        }

        //Check if 'hmac_key_id' is provided
        $msg = self::checkRequiredParam('hmac_key_id', $body['hmac_key_id']);
        if ($msg !== null) {
            return $msg;
        }

        //Check if 'hmac_input' is provided
        $msg = self::checkRequiredParam('hmac_input', $body['hmac_input']);
        if ($msg !== null) {
            return $msg;
        }

        //Check if 'hmac_value' is provided
        $msg = self::checkRequiredParam('hmac_value', $body['hmac_value']);
        if ($msg !== null) {
            return $msg;
        }
            
    }

    // validateCreatePayoutRequest - checks if createPayout parameters are valid
    public static function validateCreatePayoutRequest($body, $chain = null) {
        
        //Check if 'txid' is provided
        $msg = self::checkRequiredParam('txid', $body['txid']);
        if ($msg !== null) {
            return $msg;
        }

        //Check if 'Token' is valid network address.
        $token = $body['token'];
        if (isset($token)) {
            $msg = self::checkNetworkAddress('Token', $token, $chain, true);
            if ($msg !== null) {
                return $msg;
            }
        }

        //Check if 'Payouts' array is defined.
        $payouts = $body['payouts'];
        
        //Check if 'Payouts' array contains at least 1 payout defined
        if ($payouts === null || (is_array($payouts) && count($payouts) === 0)) {
            return "No payouts defined.";
        } else {

            foreach ($payouts as $payout) {
            
                //Check if for given payout, 'TransferAddress' is provided 
                $msg = self::checkNetworkAddress('TransferAddress', $payout['transfer_address'], $chain, true);
                if ($msg !== null) {
                    return $msg;
                }

                //Check if for given payout, 'Amount' is provided 
                $msg = self::checkRequiredParam('Amount', $payout['amount']);
                if ($msg !== null) {
                    return $msg;
                }

                //For Algorand payouts, check if for given payout, 'Authorization' is provided 
                if (self::isAlgoNet($chain)) {
                    $msg = self::checkRequiredParam('Authorization', $body['authorization']);
                    if ($msg !== null) {
                        return $msg;
                    }
                }
            }
        } 
            
    }

}