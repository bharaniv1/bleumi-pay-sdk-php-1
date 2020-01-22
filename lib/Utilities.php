<?php

namespace Bleumi\Pay;

class Utilities
{
    public function isEthAddress($addr = null)
    {
        if (isset($addr)) {
            if (preg_match("/^0x[a-fA-F0-9]{40}$/", $addr) || ($addr === "ETH") || ($addr === "XDAI") || ($addr === "XDAIT")) {
                return true;
            } 
        }
        return false;
    }

    public function isAlgoAddress($addr = null)
    {
        if (isset($addr)) {
            if (preg_match("/^[A-Z2-7]+=*$/", $addr) || ($addr === "ALGO") ) {
                return true;
            } 
        }
        return false;
    }

    public function isAlgoNet($chain = null)
    {
        if (isset($chain)) {
            if ( ($chain === "alg_mainnet") || ($chain === "alg_testnet")) {
                return true;
            } 
        }
        return false;
    }

}