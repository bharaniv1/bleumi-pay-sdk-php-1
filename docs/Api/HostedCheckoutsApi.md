# Bleumi\Pay\HostedCheckoutsApi

# **createCheckoutUrl**
> \Bleumi\Pay\Model\CreateCheckoutUrlResponse createCheckoutUrl($body)

This method generates an unique checkout URL to accept payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\HostedCheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain = new \Bleumi\Pay\Model\Chain(); 

try {
    $createReq = new \Bleumi\Pay\Model\CreateCheckoutUrlRequest();  // Checkout URL creation parameters. 
    $createReq->setId("<ID>"); // string |  Eg. '1'
    $createReq->setCurrency("<CURRENCY>"); // string |  Eg. 'USD'
    $createReq->setAmount("<AMOUNT>"); // string | Eg. '10'
    $createReq->setSuccessUrl("<SUCCESS_URL>"); // string | Eg. https://demo.store/api/completeOrder
    $createReq->setCancelUrl("<CANCEL_ORDER_URL>"); // string | Eg. https://demo.store/api/cancelOrder
    $createReq->setToken("<TOKEN>"); // string |  Replace <TOKEN>  by anyone of the following values: 'ETH' or 'XDAI' or 'XDAIT' or ECR-20 Contract Address or 'RBTC' or RSK ECR-20 Contract Address or 'Asset ID' of Algorand Standard Asset. | Optional
    $createReq->setChain($chain::GOERLI); //Optional, but required if '<Token>' is specified; Replace GOERLI with the Chain as required
    $result = $apiInstance->createCheckoutUrl($createReq);
    echo  json_encode($result, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    echo 'Exception when calling HostedCheckoutsApi->createCheckoutUrl: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    if (method_exists($e, 'getResponseBody')) {
        echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\CreateCheckoutUrlRequest**](../Model/CreateCheckoutUrlRequest.md)| Specify checkout URL creation parameters. |

### Return type

[**\Bleumi\Pay\Model\CreateCheckoutUrlResponse**](../Model/CreateCheckoutUrlResponse.md)

Field | Type | Description
----- | ----- | -----
id | string | Unique identifier generated for this checkout URL
url | string | URL for buyer to complete payment

Format - hmac_input GET parameter passed in successUrl

The hmac_input GET parameter passed to successUrl contains payment parameters as a pipe ('|') separated string in the following order,
<ul style="font-weight: 500">
        <li><b>Chain</b> - Please refer documentation for <a href="https://pay.bleumi.com/docs/#supported-networks" target="_blank">Supported Networks</a> </li>
        <li><b>Wallet Address</b></li>
        <li><b>Token</b><br> 
            <i>ETH</i> - for Ethereum<br> 
            <i>XDAI</i> - for xDai<br> 
            <i>XDAIT</i> - for xDai Testnet<br> 
            <i>ALGO</i> - for Algo <br> 
            <i>RBTC</i> - for R-BTC <br> 
            <i>&lt;asset id&gt;</i> - for Algorand Standard Asset <br> 
            <i>&lt;contract address of ERC-20 token&gt;</i> - for ERC-20; Please refer to <a href="https://pay.bleumi.com/docs/#erc-20" target="_blank">ERC-20 Tokens</a> for contract address;<br> 
            <i>&lt;contract address of RSK ERC-20 token&gt;</i> - for RSK ERC-20; Please refer to <a href="https://pay.bugnet.work/docs/#rsk-tokens-erc-20" target="_blank">RSK ERC-20 Tokens</a> for contract address;<br> 
        </li>
        <li><b>Amount</b> - Token amount for the payment</li>
        <li><b>Number of block confirmations</b><br> 
        <li><b>Transaction Hash</b><br> 
        </li>
    </li>
</ul>

Call [Validate a Checkout Payment ](#validateCheckoutPayment) endpoint to validate the GET parameters passed in successUrl and then cross-check the payment parameters of hmac.input GET parameter with your database.

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema
ValidationError <br> <i>no_tokens_defined</i> | Please configure tokens for the Hosted Checkout in your account in the <a href="https://pay.bleumi.com/app/" target="_blank">Bleumi Pay Dashboard</a>
ValidationError <br> <i>no_tokens_defined_for_currency</i> | No tokens have been defined in your account for the specified currency
ValidationError <br> <i>invalid_token</i> | The token provided is not valid for the specified currency


# **listTokens**
> \Bleumi\Pay\Model\CheckoutToken[] listTokens()

Retrieve all tokens configured for the Hosted Checkout in your account in the [Bleumi Pay Dashboard](https://pay.bleumi.com/app/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\HostedCheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listTokens();
    echo  json_encode($result, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    echo 'Exception when calling HostedCheckoutsApi->listTokens: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    if (method_exists($e, 'getResponseBody')) {
        echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
    }
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bleumi\Pay\Model\CheckoutToken[]**](../Model/CheckoutToken.md)

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
ValidationError <br> <i>no_tokens_defined</i> | No tokens have been defined in your account


# **validateCheckoutPayment**
> \Bleumi\Pay\Model\ValidateCheckoutResponse validateCheckoutPayment($body)

Validate the GET parameters passed by Hosted Checkout in successUrl upon successfully completing payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\HostedCheckoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $validateReq = new \Bleumi\Pay\Model\ValidateCheckoutRequest();  // \Bleumi\Pay\Model\ValidateCheckoutRequest | Specify validation of checkout parameters.
    $validateReq->setHmacAlg('<ALG>'); // Eg. HMAC-SHA256-HEX
    $validateReq->setHmacInput('<INPUT>'); // Eg. rsk_testnet|0xbed61c55cc290b55c1c4c327148bdede56a831f4|0xb9f624160bb2755aa25366cc307ed27e39a4f296|10|0|0x16e54beb3ea4b4206b62ca32b1d2cf4ad15d9af2234564c2166ff3ccc817d5c1
    $validateReq->setHmacKeyId('<VER>'); // Eg. v1
    $validateReq->setHmacValue('<HMAC_VALUE>'); // Eg. c782cbad4394383599b7cf9f9d62990f289649b35edd82cd1c7d58dd65e9fc03
    $result = $apiInstance->validateCheckoutPayment($validateReq);
    echo  json_encode($result, JSON_PRETTY_PRINT);
} catch (Exception $e) {
    echo 'Exception when calling HostedCheckoutsApi->validateCheckoutPayment: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    if (method_exists($e, 'getResponseBody')) {
        echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
    }
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\ValidateCheckoutRequest**](../Model/ValidateCheckoutRequest.md)| Specify validation of checkout parameters. |

### Return type

[**\Bleumi\Pay\Model\ValidateCheckoutResponse**](../Model/ValidateCheckoutResponse.md)

Field | Type | Description
----- | ----- | -----
valid | boolean | <b>true</b> - The data has been generated by Bleumi Pay <br> <b>false</b> - The data has not been generated by Bleumi Pay, the payment must be treated as unpaid

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema
