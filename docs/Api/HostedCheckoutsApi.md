# Bleumi\Pay\HostedCheckoutsApi

# **createCheckoutUrl**
> \Bleumi\Pay\Model\CreateCheckoutUrlResponse createCheckoutUrl($body)

This method generates a unique checkout URL to accept payment.

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
    $createReq = new \Bleumi\Pay\Model\CreateCheckoutUrlRequest();  // Checkout URL creation parameters. 
    $createReq->setId("<ID>"); // string |  Eg. '1'
    $createReq->setCurrency("<CURRENCY>"); // string |  Eg. 'USD'
    $createReq->setAmount("<AMOUNT>"); // string | Eg. '10'
    $createReq->setSuccessUrl("<SUCCESS_URL>"); // string | Eg. https://demo.store/api/completeOrder
    $createReq->setCancelUrl("<CANCEL_ORDER_URL>"); // string | Eg. https://demo.store/api/cancelOrder
    $createReq->setToken("<TOKEN>"); // string |  Replace <TOKEN>  by anyone of the following values: 'ETH' or 'XDAI' or ECR-20 Contract Address or 'XDAIT'. | Optional
    $createReq->setChain($chain::GOERLI); //Optional; Replace GOERLI with the Chain as required
    $createReq->setBuyerAddress("<BUYER_ADDR>"); // string |  Replace <BUYER_ADDR>  by Network Address of the Buyer. | Optional
    $result = $apiInstance->createCheckoutUrl($createReq);
    $reponse = json_encode($result, JSON_PRETTY_PRINT);
    echo  $reponse;
} catch (Exception $e) {
    echo 'Exception when calling HostedCheckoutsApi->createCheckoutUrl: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
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

### Format - hmac.input GET parameter passed in successUrl

The hmac.input GET parameter passed to successUrl contains payment parameters as a pipe ('|') separated string in the following order,
<ul style="font-weight: 500">
    <li><b>Chain</b> - Please refer documentation for <a href="https://pay.bleumi.com/docs/#supported-networks" target="_blank">Supported Networks</a> </li>
    <li><b>Wallet Address</b></li>
    <li><b>Token</b><br> <i>ETH</i> - for Ethereum<br> <i>XDAI</i> - for xDai<br> <i>XDAIT</i> - for xDai Testnet <br> <i>ALGO</i> - Algo <br> <i>&lt;asset id&gt;</i> - for Algorand Standard Asset;<br> <i>&lt;contract address of ERC-20 token&gt;</i> - for ERC-20; <br>Please refer to [ERC-20 Tokens](https://pay.bleumi.com/docs/#erc-20) for contract address;</li>
    <li><b>Amount</b> - Token amount for the payment</li>
    <li><b>Number of block confirmations</b><br> <i>12</i> - for ETH<br> <i>0</i> - for XDAI<br> <i>0</i> - for XDAIT<br> <i>12</i> - for ERC-20</li></li>
</ul>

<aside class="notice">
Call [Validate a Checkout Payment](#validateCheckoutPayment) endpoint to validate the GET parameters passed in successUrl and then cross-check the payment parameters of hmac.input GET parameter with your database.
</aside>


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
    echo json_encode($result);
    echo nl2br (" \n ");
} catch (Exception $e) {
    echo 'Exception when calling HostedCheckoutsApi->listTokens: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
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
    $validateReq->setHmacInput('<INPUT>'); // Eg. goerli|0xbe33cde200e113f4847c66e9498f2c30e81635ad|0x115615dbd0f835344725146fa6343219315f15e5|10|12
    $validateReq->setHmacKeyId('<VER>'); // Eg. v1
    $validateReq->setHmacValue('<HMAC_VALUE>'); // Eg. 0d910e8dfd087dd0d0b7c3f6504f7f4316b507afc81c09e844cfeee0f3dbaef6
    $result = $apiInstance->validateCheckoutPayment($validateReq);
    $reponse = json_encode($result, JSON_PRETTY_PRINT);
    echo  $reponse;
} catch (Exception $e) {
    echo 'Exception when calling HostedCheckoutsApi->validateCheckoutPayment: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
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
