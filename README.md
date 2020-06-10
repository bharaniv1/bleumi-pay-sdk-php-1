<img src="./assets/images/BleumiPay.png" height="30">

# Bleumi Pay SDK for PHP

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/bleumi/bleumi-pay-sdk-php/master/LICENSE)

The Bleumi Pay SDK helps you integrate Algo, Algorand Standard Asset, Ethereum, ERC-20, RSK, RSK ERC-20 & xDai payments and payouts into your business or application. The SDK bundles [Bleumi Pay API](https://pay.bleumi.com/docs/#introduction) into one SDK to ease implementation and support.

**bleumi-pay-sdk-php** is a PHP library that provides an interface between your PHP application and [Bleumi Pay API](https://pay.bleumi.com/docs/#introduction). This tutorial covers the basics, including examples, needed to use the SDK.

## Getting Started

### Pre-requisites

#### Development Environment

PHP 5.5 and later

#### Obtain An API Key

Bleumi Pay SDK uses API keys to authenticate requests. You can obtain an API key through the [Bleumi Pay Dashboard](https://pay.bleumi.com/app/).


### Install Package

[![packagist (scoped)](https://img.shields.io/packagist/v/bleumi/bleumi-pay-sdk-php.svg)](https://packagist.org/packages/bleumi/bleumi-pay-sdk-php)

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
        "bleumi/bleumi-pay-sdk-php":"1.0.23"
    }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/bleumi-pay-sdk-php/vendor/autoload.php');
```

### Run Sample Code

The following code generates an unique checkout URL to accept payment from the buyer.

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

More examples can be found under each method in [SDK Classes](#sdk-classes) section.

## SDK Classes

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
HostedCheckoutsApi | [**createCheckoutUrl**](docs/Api/HostedCheckoutsApi.md#createcheckouturl) | **POST** /v1/payment/hc | Generate a unique checkout URL to accept payment.
HostedCheckoutsApi | [**listTokens**](docs/Api/HostedCheckoutsApi.md#listtokens) | **GET** /v1/payment/hc/tokens | Retrieve all tokens configured for the Hosted Checkout in your account in the [Bleumi Pay Dashboard](https://pay.bleumi.com/app/).
HostedCheckoutsApi | [**validateCheckoutPayment**](docs/Api/HostedCheckoutsApi.md#validatecheckoutpayment) | **POST** /v1/payment/hc/validate | Validate the GET parameters passed by Hosted Checkout in successUrl upon successfully completing payment.
PaymentsApi | [**getPayment**](docs/Api/PaymentsApi.md#getpayment) | **GET** /v1/payment/{id} | Retrieve the wallet addresses &amp; token balances for a given payment
PaymentsApi | [**listPayments**](docs/Api/PaymentsApi.md#listpayments) | **GET** /v1/payment | Retrieve all payments created.
PaymentsApi | [**settlePayment**](docs/Api/PaymentsApi.md#settlepayment) | **POST** /v1/payment/{id}/settle | Settle a specific amount of a token for a given payment to the transferAddress and remaining balance (if any) will be refunded to the buyerAddress
PaymentsApi | [**refundPayment**](docs/Api/PaymentsApi.md#refundpayment) | **POST** /v1/payment/{id}/refund | Refund the balance of a token for a given payment to the buyerAddress
PaymentsApi | [**getPaymentOperation**](docs/Api/PaymentsApi.md#getpaymentoperation) | **GET** /v1/payment/{id}/operation/{txid} | Retrieve a payment operation for a specific payment.
PaymentsApi | [**listPaymentOperations**](docs/Api/PaymentsApi.md#listpaymentoperations) | **GET** /v1/payment/{id}/operation | Retrieve all payment operations for a specific payment.
PayoutsApi | [**createPayout**](docs/Api/PayoutsApi.md#createpayout) | **POST** /v1/payout | Create a payout.
PayoutsApi | [**listPayouts**](docs/Api/PayoutsApi.md#listpayouts) | **GET** /v1/payout | Returns a list of payouts

## Documentation For Models

 - [AlgorandAddress](docs/Model/AlgorandAddress.md)
 - [AlgorandBalance](docs/Model/AlgorandBalance.md)
 - [AlgorandWalletAddress](docs/Model/AlgorandWalletAddress.md)
 - [AlgorandWalletInputs](docs/Model/AlgorandWalletInputs.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [Chain](docs/Model/Chain.md)
 - [CheckoutToken](docs/Model/CheckoutToken.md)
 - [CreateCheckoutUrlRequest](docs/Model/CreateCheckoutUrlRequest.md)
 - [CreateCheckoutUrlResponse](docs/Model/CreateCheckoutUrlResponse.md)
 - [CreatePayoutRequest](docs/Model/CreatePayoutRequest.md)
 - [CreatePayoutResponse](docs/Model/CreatePayoutResponse.md)
 - [EthereumAddress](docs/Model/EthereumAddress.md)
 - [EthereumBalance](docs/Model/EthereumBalance.md)
 - [EthereumWalletAddress](docs/Model/EthereumWalletAddress.md)
 - [EthereumWalletInputs](docs/Model/EthereumWalletInputs.md)
 - [PaginatedPaymentOperations](docs/Model/PaginatedPaymentOperations.md)
 - [PaginatedPayments](docs/Model/PaginatedPayments.md)
 - [PaginatedPayoutItems](docs/Model/PaginatedPayoutItems.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentAddresses](docs/Model/PaymentAddresses.md)
 - [PaymentBalances](docs/Model/PaymentBalances.md)
 - [PaymentOperation](docs/Model/PaymentOperation.md)
 - [PaymentOperationInputs](docs/Model/PaymentOperationInputs.md)
 - [PaymentOperationResponse](docs/Model/PaymentOperationResponse.md)
 - [PaymentRefundRequest](docs/Model/PaymentRefundRequest.md)
 - [PaymentSettleRequest](docs/Model/PaymentSettleRequest.md)
 - [Payout](docs/Model/Payout.md)
 - [PayoutItem](docs/Model/PayoutItem.md)
 - [PayoutItemInputs](docs/Model/PayoutItemInputs.md)
 - [RskAddress](docs/Model/RskAddress.md)
 - [RskBalance](docs/Model/RskBalance.md)
 - [ValidateCheckoutRequest](docs/Model/ValidateCheckoutRequest.md)
 - [ValidateCheckoutResponse](docs/Model/ValidateCheckoutResponse.md)
 - [WalletBalance](docs/Model/WalletBalance.md)

## Limitations

 - [Bleumi Pay API Limits](https://pay.bleumi.com/docs/#api-limits)


## License

Copyright 2020 Bleumi, Inc.

Code licensed under the [MIT License](LICENSE).