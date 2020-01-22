# Bleumi\Pay\PaymentsApi


# **createPayment**
> \Bleumi\Pay\Model\CreatePaymentResponse createPayment($body, $chain)

This method generates a unique wallet address in the specified network to accept payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $createReq = new \Bleumi\Pay\Model\CreatePaymentRequest();  
    $chain = new \Bleumi\Pay\Model\Chain(); // \Bleumi\Pay\Model\Chain | Ethereum network in which payment is to be created. Please refer documentation for Supported Networks
    $createReq->setId('<ID>'); // string | Replace <ID> with the unique identifier of the payment
    $createReq->setBuyerAddress("<BUYER_ADDR>"); // Replace <BUYER_ADDR> with the Buyer Address
    $createReq->setTransferAddress("<MERCHANT_ADDR>"); // Replace <MERCHANT_ADDR> with the Merchant's Enthereum Network Address

    $result = $apiInstance->createPayment($createReq, $chain::GOERLI);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPayment: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\CreatePaymentRequest**](../Model/CreatePaymentRequest.md)|  |
 **chain** | [**\Bleumi\Pay\Model\Chain**](../Model/.md)| Ethereum network in which payment is to be created. Please refer documentation for Supported Networks | [optional]

### Return type

[**\Bleumi\Pay\Model\CreatePaymentResponse**](../Model/CreatePaymentResponse.md)

Field | Type | Description
----- | ----- | -----
addr | string | Wallet address

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ---- 
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema
ValidationError <br> <i>wallet_already_exists&#124;&lt;addr&gt;</i> | A wallet with address &lt;addr&gt; has already been created with the specified payment 'id' for the given network


# **getPayment**
> \Bleumi\Pay\Model\Payment getPayment($id)

This method retrieves the wallet addresses & token balances for a given payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "<ID>"; // string | Replace <ID> with the unique identifier of the payment (specified during Create Payment)

try {
    $result = $apiInstance->getPayment($id);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPayment: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the payment (specified during [Create a Payment](#createPayment)) to retrieve |

### Return type

[**\Bleumi\Pay\Model\Payment**](../Model/Payment.md)

Field | Type | Description
----- | ----- | -----
addresses | dictionary | A dictionary which gives the address of the wallet generated for each network
balances | dictionary | A dictionary which gives the token balances in each network
createdAt | integer | The created UNIX timestamp of the payment
updatedAt | integer | The last updated UNIX timestamp of the payment

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema


# **listPayments**
> \Bleumi\Pay\Model\PaginatedPayments listPayments($next_token, $sort_by, $start_at, $end_at)

This method retrieves all payments created.

### Pagination

The list of payments is returned as an array in the 'results' field. The list is restricted to a maximum of 10 per page.

If there are more than 10 payments, a cursor is returned in the 'nextToken' field. Passing this as the 'nextToken' query parameter will fetch the next page.

When the value of 'nextToken' field is an empty string, there are no more payments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$next_token = null; // string | Cursor to start results from
$sort_by = "createdAt"; // string | Sort payments by
$sort_order = "ascending"; // string | Sort Order for payments
$start_at = "1563271832"; // string | Get payments from this timestamp
$end_at = null; // string | Get payments till this timestamp

try {
    $result = $apiInstance->listPayments($next_token, $sort_by, $sort_order, $start_at, $end_at);
    $payments = $result->getResults();
    $nextToken = $result->getNextToken();
    echo json_encode($payments);
    echo nl2br (" \n ");
    echo 'nextToken:', $nextToken , nl2br (" \n ");
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPayments: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");    
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_token** | **string**| Cursor to start results from | [optional]
 **sort_by** | **string**| Sort payments by | [optional]
 **sort_order** | **string**| Sort Order | [optional]
 **start_at** | **string**| Get payments from this timestamp (unix) | [optional]
 **end_at** | **string**| Get payments till this timestamp (unix) | [optional]

### Return type

[**\Bleumi\Pay\Model\PaginatedPayments**](../Model/PaginatedPayments.md)

Parameter | Type | Description
--------- | ------- | -----------
nextToken |  | Cursor to fetch next set of results (if next set is available)
results[] |  | Array of payments, output format is similar to the response of the [Retrieve a Payment](#getPayment) endpoint

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
MalformedRequest <br> <i>nextToken_invalid</i> | 'nextToken' value is invalid
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema


# **settlePayment**
> \Bleumi\Pay\Model\PaymentOperationResponse settlePayment($body, $id, $chain)

This method settles a specific amount of a token for a given payment to the transferAddress (specified during [Create a Payment](#createPayment)) and remaining balance (if any) will be refunded to the buyerAddress (specified during [Create a Payment](#createPayment)).


### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $chain = new \Bleumi\Pay\Model\Chain(); // \Bleumi\Pay\Model\Chain | The network in which payment is to be created.
    $id = '<ID>';   // string | Replace <ID> with the unique identifier of the payment (specified during Create Payment)
    $settleReq = new \Bleumi\Pay\Model\PaymentSettleRequest();
    $settleReq->setAmount('<AMOUNT>'); // string | Amount to settle
    $settleReq->setToken('<TOKEN>'); // string |  Replace <TOKEN>  by anyone of the following values: 'ETH'/'XDAI'/'XDAIT'/ECR-20 Contract Address

    $result = $apiInstance->settlePayment($settleReq, $id, $chain::ROPSTEN);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->settlePayment: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\PaymentSettleRequest**](../Model/PaymentSettleRequest.md)| Request body - used to specify the amount to settle. |
 **id** | **string**| Unique identifier of the payment (specified during [Create a Payment](#createPayment)) |
 **chain** | [**\Bleumi\Pay\Model\Chain**](../Model/Chain.md)| Ethereum network in which payment is to be created. | [optional]

### Return type

[**\Bleumi\Pay\Model\PaymentOperationResponse**](../Model/PaymentOperationResponse.md)

Parameter | Type | Description
--------- | ------- | -----------
txid |  | Unique identifier for the settle operation

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema
ValidationError <br> <i>no_gas_accounts</i> | No active gas accounts present in account, please activate atleast one account from the developer portal
ValidationError <br> <i>prev_tx_inprogress</i> | A previous operation is still being processed for this wallet
ValidationError <br> <i>invalid_token</i> | Provided token is not valid for the specified 'net' & 'chain'

# **refundPayment**
> \Bleumi\Pay\Model\PaymentOperationResponse refundPayment($body, $id, $chain)

This method refunds the balance of a token for a given payment to the buyerAddress (specified during [Create a Payment](#createPayment)).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $chain = new \Bleumi\Pay\Model\Chain(); // \Bleumi\Pay\Model\Chain | Ethereum network in which payment is to be created.
    $id = '<ID>'; // string | Replace <ID> with the unique identifier of the payment (specified during Create Payment)
    $refundReq = new \Bleumi\Pay\Model\PaymentRefundRequest(); // \Bleumi\Pay\Model\PaymentRefundRequest | Request body - used to specify the token to refund.
    $refundReq->setToken('<TOKEN>'); // string |  Replace <TOKEN>  by anyone of the following values: 'ETH'/'XDAI'/'XDAIT'/ECR-20 Contract Address
    $result = $apiInstance->refundPayment($refundReq, $id, $chain::ROPSTEN);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->refundPayment: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\PaymentRefundRequest**](../Model/PaymentRefundRequest.md)| Request body - used to specify the token to refund. |
 **id** | **string**| Unique identifier of the payment (specified during [Create a Payment](#createPayment)) |
 **chain** | [**\Bleumi\Pay\Model\Chain**](../Model/Chain.md)| Ethereum network in which payment is to be created. | [optional]

### Return type

[**\Bleumi\Pay\Model\PaymentOperationResponse**](../Model/PaymentOperationResponse.md)

Parameter | Type | Description
--------- | ------- | -----------
txid |  | Unique identifier for the refund operation

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema
ValidationError <br> <i>no_gas_accounts</i> | No active gas accounts present in account, please activate atleast one account from the developer portal
ValidationError <br> <i>prev_tx_inprogress</i> | A previous operation is still being processed for this wallet
ValidationError <br> <i>invalid_token</i> | Provided address is not a valid ERC-20 token


# **getPaymentOperation**
> \Bleumi\Pay\Model\PaymentOperation getPaymentOperation($id, $txid)

This method retrieves a payment operation for a specific payment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '<ID>'; // string | Replace <ID> with the unique identifier of the payment (specified during Create Payment)
$txid = '<TXID>'; // string | Replace <TXID> with transaction ID of a specific operation of the payment

try {
    $result = $apiInstance->getPaymentOperation($id, $txid);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getPaymentOperation: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the payment (specified during [Create a Payment](#createPayment)) |
 **txid** | **string**| ID of a specific operation of the payment |

### Return type

[**\Bleumi\Pay\Model\PaymentOperation**](../Model/PaymentOperation.md)


# **listPaymentOperations**
> \Bleumi\Pay\Model\PaginatedPaymentOperations listPaymentOperations($id, $next_token)

This method retrieves all payment operations for a specific payment.

### Pagination

The list of operations is returned as an array in the 'results' field. The list is restricted to a maximum of 10 operations per page.

If there are more than 10 operations for a wallet, a cursor is passed in the 'nextToken' field. Passing this as the 'nextToken' query parameter will fetch the next page. 

When the value of 'nextToken' field is an empty string, there are no more operations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = '<ID>'; // string | Replace <ID> with the unique identifier of the payment (specified during Create Payment)
$next_token = '<NEXT_TOKEN>'; // string | Replace <NEXT_TOKEN> with cursor to start results from

try {
    $result = $apiInstance->listPaymentOperations($id, $next_token);
    $paymentOperations = $result->getResults();
    echo json_encode($paymentOperations);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->listPaymentOperations: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the payment (specified during [Create a Payment](#createPayment)) |
 **next_token** | **string**| Cursor to start results from | [optional]

### Return type

[**\Bleumi\Pay\Model\PaginatedPaymentOperations**](../Model/PaginatedPaymentOperations.md)

Parameter | Type | Description
--------- | ------- | -----------
nextToken |  | Cursor to fetch next set of results (if next set is available)
results[] |  | Array of payment operations, output format is similar to the response of the [Retrieve a Payment Operation](#getPaymentOperation) endpoint

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
MalformedRequest <br> <i>nextToken_invalid</i> | 'nextToken' value is invalid
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema

