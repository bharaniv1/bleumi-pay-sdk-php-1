<img src="https://pay.bleumi.com/wp-content/uploads/2019/04/logo_dark_bleumi_invoice_6797x1122.png" height="30">

# Bleumi Pay SDK for PHP

[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://raw.githubusercontent.com/bleumi/bleumi-pay-sdk-php/master/LICENSE)

The Bleumi Pay SDK is a one-stop shop to help you integrate ERC-20 payments into your business or application. The SDK bundles [Bleumi Pay API](https://pay.bleumi.com/docs/#introduction) into one SDK to ease implementation and support.

bleumi-pay-sdk-php is a PHP library that provides an interface between your PHP application and [Bleumi Pay API](https://pay.bleumi.com/docs/#introduction). This tutorial covers the basics, including examples, needed to use the SDK.

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
        "bleumi/bleumi-pay-sdk-php":"1.0.14"
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

The following code generates a wallet to accept payment from the buyer specific for the ECR-20 Token.

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
    $buyerAddress = new \Bleumi\Pay\Model\EthAddress("<BUYER_ADDR>"); // Replace <BUYER_ADDR> with the Buyer's Enthereum Network Address
    $merchantAddress = new \Bleumi\Pay\Model\EthAddress("<MERCHANT_ADDR>"); // Replace <MERCHANT_ADDR> with the Merchant's Enthereum Network Address
    $body->setId($id);
    $body->setBuyerAddress($buyerAddress);
    $body->settransferAddress($merchantAddress);
    $result = $apiInstance->generateWallet($body, $chain::ROPSTEN);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

More examples can be found under each method in [SDK Classes](#sdk-classes) section.

## SDK Classes

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
Erc20PaymentsApi | [**generateWallet**](docs/Api/Erc20PaymentsApi.md#generatewallet) | **POST** /v1/payment/eth/wallet | Generates an unique wallet address to accept payments for an ERC-20 token.
Erc20PaymentsApi | [**getWallet**](docs/Api/Erc20PaymentsApi.md#getwallet) | **GET** /v1/payment/eth/wallet/{id} | Retrieve a wallet.
Erc20PaymentsApi | [**listWallets**](docs/Api/Erc20PaymentsApi.md#listwallets) | **GET** /v1/payment/eth/wallet | Retrieve all wallets.
Erc20PaymentsApi | [**settleWallet**](docs/Api/Erc20PaymentsApi.md#settlewallet) | **POST** /v1/payment/eth/wallet/{id}/settle | This method settles a specific amount of an ERC-20 token of a wallet to the transferAddress specified during [Generate Wallet](/docs/Erc20PaymentsApi.md#generatewallet)
Erc20PaymentsApi | [**refundWallet**](docs/Api/Erc20PaymentsApi.md#refundwallet) | **POST** /v1/payment/eth/wallet/{id}/refund | This method refunds the balance of an ERC-20 token of a wallet to the buyerAddress specified during [Generate Wallet](/docs/Erc20PaymentsApi.md#generatewallet).
Erc20PaymentsApi | [**getWalletOperation**](docs/Api/Erc20PaymentsApi.md#getwalletoperation) | **GET** /v1/payment/eth/wallet/{id}/operation/{txid} | Retrieve an operation of a wallet
Erc20PaymentsApi | [**listWalletOperations**](docs/Api/Erc20PaymentsApi.md#listwalletoperations) | **GET** /v1/payment/eth/wallet/{id}/operation | Retrieve all operations of a wallet.

## Documentation For Models

 - [BadRequest](docs/Model/BadRequest.md)
 - [EthAddress](docs/Model/EthAddress.md)
 - [EthNetwork](docs/Model/EthNetwork.md)
 - [PaginatedWalletOperations](docs/Model/PaginatedWalletOperations.md)
 - [PaginatedWallets](docs/Model/PaginatedWallets.md)
 - [Wallet](docs/Model/Wallet.md)
 - [WalletBalance](docs/Model/WalletBalance.md)
 - [WalletCreateInput](docs/Model/WalletCreateInput.md)
 - [WalletCreateOutput](docs/Model/WalletCreateOutput.md)
 - [WalletInputs](docs/Model/WalletInputs.md)
 - [WalletOperation](docs/Model/WalletOperation.md)
 - [WalletOperationInputs](docs/Model/WalletOperationInputs.md)
 - [WalletOperationOutput](docs/Model/WalletOperationOutput.md)
 - [WalletRefundOperationInput](docs/Model/WalletRefundOperationInput.md)
 - [WalletSettleOperationInput](docs/Model/WalletSettleOperationInput.md)

## Limitations

 - [Bleumi Pay API Limits](https://pay.bleumi.com/docs/#api-limits)


## License

Copyright 2019 Bleumi, Inc.

Code licensed under the [MIT License](LICENSE).