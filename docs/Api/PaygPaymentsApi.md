# Bleumi\Pay\PaygPaymentsApi


Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayment**](PaygPaymentsApi.md#createPayment) | **POST** /v1/payment/payg/{id} | Create a payment request.
[**updatePayment**](PaygPaymentsApi.md#updatePayment) | **PUT** /v1/payment/payg/{id} | Update a payment request.
[**getPayment**](PaygPaymentsApi.md#getPayment) | **GET** /v1/payment/payg/{id} | Retrieves a specific payment request.
[**listPayments**](PaygPaymentsApi.md#listPayments) | **GET** /v1/payments/payg | Retrieves all PAYG payment requests.
[**cancelPayment**](PaygPaymentsApi.md#cancelPayment) | **POST** /v1/payment/payg/{id}/cancel | Cancels a specific payment. Any amount received will be refunded (minus charges) to the address specified in fromAddress.
[**settlePayment**](PaygPaymentsApi.md#settlePayment) | **POST** /v1/payment/payg/{id}/settle | Settle a specific payment which has been partially paid. Current balance (minus charges) will be sent to the address specified in toAddress.

# **createPayment**
> \Bleumi\Pay\Model\Payment createPayment($body, $id)

This method creates a payment request. Incoming payments for a payment request are processed for 7 days (2 days for non-production network) from the time of payment request creation. Payments received outside this window are not processed automatically. If you have received payments outside the window, please contact support@bleumi.com


### Ethereum Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$payment = new \Bleumi\Pay\Model\PaymentCreateInput(); // \Bleumi\Pay\Model\PaymentCreateInput | 
$id = "001-ETH"; // string | Unique ID identifying this record in your system

try {
    $tokenAddress = new \Bleumi\Pay\Model\EthAddress('<ERC20 Token Address>'); // Replace <ERC20 Token Address> with the Ethereum Network Smart Contract address of the Token
    $ethNetwork = \Bleumi\Pay\Model\EthNetwork::ROPSTEN;
    $token = new \Bleumi\Pay\Model\ERC20Token($ethNetwork, $tokenAddress, null);

    $fromAddress = new \Bleumi\Pay\Model\EthAddress('<From Address>'); // Replace <From Address> with Ethereum Address of the Sender
    $toAddress = new \Bleumi\Pay\Model\EthAddress('<To Address>'); // Replace <To Address> with Ethereum Address of the Receiver

    $payment->setPaymentAmount('10.0');
    $payment->setFromAddress($fromAddress);
    $payment->setToAddress($toAddress);
    $payment->setToken($token);    
    $result = $apiInstance->createPayment($payment, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Stellar Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$payment = new \Bleumi\Pay\Model\PaymentCreateInput(); // \Bleumi\Pay\Model\PaymentCreateInput | 
$id = "001-STELLAR"; // string | Unique ID identifying this record in your system

try {
    $issuer = new \Bleumi\Pay\Model\StellarAddress('GDWEVA6U7ZUKAWERV336BIQ7T3UNLLKSF4ENFK3GZ3Q35ZSU7SWH6AYV');
    $network = \Bleumi\Pay\Model\StellarNetwork::TEST;
    $code = "USD";
    $token = new \Bleumi\Pay\Model\StellarToken($network, $issuer, $code);

    $fromAddress = new \Bleumi\Pay\Model\StellarAddress('<From Address>'); // Replace <From Address> with Stellar Address of the Sender
    $toAddress = new \Bleumi\Pay\Model\StellarAddress('<To Address>'); // Replace <To Address> with Stellar Address of the Receiver

    $payment->setPaymentAmount('10.0');
    $payment->setFromAddress($fromAddress);
    $payment->setFromMemo(new \Bleumi\Pay\Model\StellarMemo($id));
    $payment->setToAddress($toAddress);
    $payment->setToken($token);
    $payment->setToMemo(new \Bleumi\Pay\Model\StellarMemo($id));
    $result = $apiInstance->createPayment($payment, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\PaymentCreateInput**](../Model/PaymentCreateInput.md)|  |
 **id** | **string**| Unique ID identifying this record in your system |

### Return type

[**\Bleumi\Pay\Model\Payment**](../Model/Payment.md)


# **updatePayment**
> \Bleumi\Pay\Model\Payment updatePayment($body, $id)

This method updates a specific payment request. 

### Ethereum Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$payment = new \Bleumi\Pay\Model\PaymentUpdateInput(); // \Bleumi\Pay\Model\PaymentUpdateInput | 
$id = "001-ETH"; // string | Unique ID identifying this record in your system

try {
    $toAddress = new \Bleumi\Pay\Model\EthAddress('<To Address>'); // Replace <To Address> with Ethereum Address of the Receiver 

    $payment->setPaymentAmount('15.0'); // Notice payment amount getting updated
    $payment->setToAddress($toAddress);
    $result = $apiInstance->updatePayment($payment, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Stellar Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$payment = new \Bleumi\Pay\Model\PaymentUpdateInput(); // \Bleumi\Pay\Model\PaymentUpdateInput | 
$id = "001-STELLAR"; // string | Unique ID identifying this record in your system

try {
    $toAddress = new \Bleumi\Pay\Model\StellarAddress('<To Address>'); // Replace <To Address> with Stellar Address of the Receiver

    $payment->setPaymentAmount('15.0');
    $payment->setToAddress($toAddress);
    $result = $apiInstance->updatePayment($payment, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->updatePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\PaymentUpdateInput**](../Model/PaymentUpdateInput.md)|  |
 **id** | **string**| Unique ID identifying this record in your system |

### Return type

[**\Bleumi\Pay\Model\Payment**](../Model/Payment.md)



# **getPayment**
> \Bleumi\Pay\Model\Payment getPayment($id)

This method retrieves a specific payment request. Retrieves the details of a payment that has been previously created. Supply the unique payment code that was used when the payment request was created. 


### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$id = "001-ETH"; // string | Unique ID identifying this record in your system

try {
    $result = $apiInstance->getPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID identifying this record in your system |

### Return type

[**\Bleumi\Pay\Model\Payment**](../Model/Payment.md)


# **listPayments**
> \Bleumi\Pay\Model\PaginatedPayments listPayments($next_token, $sort_by, $start_at, $end_at)

This method retrieves all PAYG payment requests. 
<br>The list of payment requests is returned as an array in the 'results' field. The list is restricted to a maximum of 100 payment requests.
<br>If there are more payment requests a cursor is passed in the 'nextToken' field. Passing this as the 'nextToken' query parameter will fetch the next page.
<br>When the value of 'nextToken' field is an empty string, there are no more payment requests.


### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$next_token = ""; // string | Cursor to start results from
$sort_by = "createdAt"; // string | Sort payments by
$start_at = "1546300800"; // string | Get payments from this timestamp
$end_at = ""; // string | Get payments till this timestamp

try {
    $result = $apiInstance->listPayments($next_token, $sort_by, $start_at, $end_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_token** | **string**| Cursor to start results from | [optional]
 **sort_by** | **string**| Sort payments by | [optional]
 **start_at** | **string**| Get payments from this timestamp | [optional]
 **end_at** | **string**| Get payments till this timestamp | [optional]

### Return type

[**\Bleumi\Pay\Model\PaginatedPayments**](../Model/PaginatedPayments.md)



# **cancelPayment**
> cancelPayment($id)

Cancels a payment request that has been previously created. Supply the unique payment code that was used when the payment request was created.
Any amount received will be refunded (minus charges) to the address specified in fromAddress.
<br> Payment requests are processed for 7 days (2 days for non-production network) from the time of payment request creation. Updates to a payment request made outside this window are not processed automatically. If you have made updates outside the window, please contact support@bleumi.com


### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$id = "001-ETH"; // string | Unique ID identifying this record in your system

try {
    $apiInstance->cancelPayment($id);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->cancelPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID identifying this record in your system |

### Return type

void (empty response body)




# **settlePayment**
> settlePayment($id)

Settles a payment request that has been previously marked as partially paid. Supply the unique payment request code that was used when the charge was created.
<br>Current balance (minus charges) will be sent to the address specified in toAddress.
<br>Payment requests are processed for 7 days (2 days for non-production network) from the time of payment request creation. Updates to a payment request made outside this window are not processed automatically. If you have made updates outside the window, please contact support@bleumi.com


### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\PaygPaymentsApi(
    new GuzzleHttp\Client(),
    $config
);
$id = "001-ETH"; // string | Unique ID identifying this record in your system

try {
    $apiInstance->settlePayment($id);
} catch (Exception $e) {
    echo 'Exception when calling PaygPaymentsApi->settlePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID identifying this record in your system |

### Return type

void (empty response body)

