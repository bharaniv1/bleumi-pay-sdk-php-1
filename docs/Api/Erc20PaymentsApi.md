# Bleumi\Pay\Erc20PaymentsApi


# **createWallet**
> \Bleumi\Pay\Model\WalletCreateOutput createWallet($body, $chain)

Create an unique wallet address to accept payments for an ERC-20 token from a buyer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\Erc20PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bleumi\Pay\Model\WalletCreateInput(); // \Bleumi\Pay\Model\WalletCreateInput | 
$chain = new \Bleumi\Pay\Model\EthNetwork(); // \Bleumi\Pay\Model\EthNetwork | Ethereum network in which wallet is to be created.

try {
    $tokenAddress = new \Bleumi\Pay\Model\EthAddress("<TOKEN_ADDR>"); // Replace <BUYER_ADDR> with the Buyer's Enthereum Network Address 
    $buyerAddress = new \Bleumi\Pay\Model\EthAddress("<BUYER_ADDR>"); // Replace <TOKEN_ADDR> with the Token Contract Address
    $merchantAddress = new \Bleumi\Pay\Model\EthAddress("<MERCHANT_ADDR>"); // Replace <MERCHANT_ADDR> with the Merchant's Enthereum Network Address
    $body->setBuyerAddress($buyerAddress);
    $body->setToken($tokenAddress);
    $body->setId($id);
    $body->settransferAddress($merchantAddress);
    $result = $apiInstance->createWallet($body, $chain::ROPSTEN);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\WalletCreateInput**](../Model/WalletCreateInput.md)| Request body - used to specify the parameters for the wallet creations. |
 **chain** | [**\Bleumi\Pay\Model\EthNetwork**](../Model/.md)| Ethereum network in which wallet is to be created. Please refer to the [network list](https://pay.bleumi.com/docs/#supported-ethereum-networks) |

### Return type

[**\Bleumi\Pay\Model\WalletCreateOutput**](../Model/WalletCreateOutput.md)

# **getWallet**
> \Bleumi\Pay\Model\Wallet getWallet($id)

Return a specific wallet

### Example
```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\Erc20PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$id = "<ID>"; // string | Unique ID identifying the wallet in your system

try {
    $result = $apiInstance->getWallet($id);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the wallet to get the details |

### Return type

[**\Bleumi\Pay\Model\Wallet**](../Model/Wallet.md)

# **listWallets**
> \Bleumi\Pay\Model\PaginatedWallets listWallets($next_token, $sort_by, $start_at, $end_at)

This method retrieves a list of wallets.
The list of wallets is returned as an array in the 'results' field. The list is restricted to a maximum of 10 wallets.
If there are more wallets a cursor is passed in the 'nextToken' field. Passing this as the 'nextToken' query parameter will fetch the next page.
When the value of 'nextToken' field is an empty string, there are no more wallets.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');

$apiInstance = new Bleumi\Pay\Api\Erc20PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);

$next_token = ""; // string | Cursor to start results from
$sort_by = "<SORT_BY>"; // string | Sort wallets by | Eg. "createdAt"
$start_at = "<START_TIMESTAMP>"; // string | Get wallets from this timestamp | Eg. 1546300800 for 1-JAN-2019
$end_at = ""; // string | Get wallets till this timestamp

try {
    $result = $apiInstance->listWallets($next_token, $sort_by, $start_at, $end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_token** | **string**| Cursor to start results from | [optional]
 **sort_by** | **string**| Sort wallets by | [optional] <b>'createdAt'</b> - results will be sorted by created time in ascending order. <br/><b>'updatedAt'</b> - results will be sorted by last updated time in ascending order.
 **start_at** | **string**| Get wallets from this timestamp | [optional] Get payments from this timestamp (UNIX). Will be compared to created or updated time based on the value of sortBy parameter.
 **end_at** | **string**| Get wallets till this timestamp | [optional] Get payments till this timestamp (UNIX). Will be compared to created or updated time based on the value of sortBy parameter.

### Return type

[**\Bleumi\Pay\Model\PaginatedWallets**](../Model/PaginatedWallets.md)

# **settleWallet**
> \Bleumi\Pay\Model\WalletOperationOutput settleWallet($body, $id)

Settle a wallet, settle amount will be transferred to the payment processor or the merchant as specified at the time of creation of the wallet. Supply the unique id that was used when the wallet was created.

If the settle amount is less than the current wallet balance, the requested amount will be sent to the seller. The remaining amount will be refunded to the buyer. At the end of settle operation, the wallet balance will be zero.

If the settle amount is more than the current wallet balance, no action is performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\Erc20PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$body = new \Bleumi\Pay\Model\WalletOperationInput(); // \Bleumi\Pay\Model\WalletOperationInput | 
$id = "<ID>"; // string | Unique ID identifying the wallet in your system

try {
    $body->setAmount('<AMT>'); // string | Amount to settle.
    $result = $apiInstance->settleWallet($body, $id);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the wallet to settle (withdraw) the funds from |
 **body** | [**\Bleumi\Pay\Model\WalletOperationInput**](../Model/WalletOperationInput.md)| Request body - used to specify the amount to settle. |


### Return type

[**\Bleumi\Pay\Model\WalletOperationOutput**](../Model/WalletOperationOutput.md)

# **refundWallet**
> \Bleumi\Pay\Model\WalletOperationOutput refundWallet($id)

Refund wallet. The entire wallet amount will be transferred to the buyer. Supply the unique id that was used when the wallet was created.

At the end of refund operation, the wallet balance will be zero.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\Erc20PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$id = "<ID>"; // string | Unique ID identifying the wallet in your system

try {
    $result = $apiInstance->refundWallet($id);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The ID of the wallet to refund the funds to the Buyer |

### Return type

[**\Bleumi\Pay\Model\WalletOperationOutput**](../Model/WalletOperationOutput.md)

# **getWalletOperation**
> \Bleumi\Pay\Model\WalletOperation getWalletOperation($id, $txid)

Return a specific operation of the wallet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\Erc20PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$id = "<ID>"; // string | Unique ID identifying the wallet in your system
$txid = "<TXID>"; // string | ID of a specific operation of the wallet

try {
    $result = $apiInstance->getWalletOperation($id, $txid);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID of the wallet for which you need the wallet operation detail |
 **txid** | **string**| Transaction ID of a specific operation of the wallet |

### Return type

[**\Bleumi\Pay\Model\WalletOperation**](../Model/WalletOperation.md)

# **getWalletOperations**
> \Bleumi\Pay\Model\PaginatedWalletOperations getWalletOperations($id, $next_token)

This method retrieves the list of wallet operations performed by the mechant on a specific wallet.
The list of wallet operations is returned as an array in the 'results' field. The list is restricted to a maximum of 10 wallet operations.
If there are more wallet operations a cursor is passed in the 'nextToken' field. Passing this as the 'nextToken' query parameter will fetch the next page.
When the value of 'nextToken' field is an empty string, there are no more wallet operations.


### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\Erc20PaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$id = "<ID>"; // string | Unique ID identifying the wallet in your system
$next_token = ""; // string | Cursor to start results from

try {
    $result = $apiInstance->getWalletOperations($id, $next_token);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID of the wallet for which you need the list of operations that was performed by the merchant (or) the payment processor |
 **next_token** | **string**| The token to fetch the next page, supply blank value to get the first page of wallet operations | [optional]

### Return type

[**\Bleumi\Pay\Model\PaginatedWalletOperations**](../Model/PaginatedWalletOperations.md)
