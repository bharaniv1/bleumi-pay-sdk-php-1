# Bleumi Pay SDK for PHP

The Bleumi Pay SDK is a one-stop shop to help you integrate ERC-20 payments into your business or application. The SDK bundles [Bleumi Pay API](https://pay.bleumi.com/docs/#introduction) into one SDK to ease implementation and support.

bleumi-pay-sdk-php is a PHP library that provides an interface between your PHP application and [Bleumi Pay API](https://pay.bleumi.com/docs/#introduction). This tutorial covers the basics, including examples, needed to use the SDK.

## Getting Started

### Pre-requisites

#### Development Environment

PHP 5.5 and later

#### Obtain An API Key

Bleumi Pay SDK uses API keys to authenticate requests. You can obtain an API key through the [Bleumi Pay developer portal](https://pay.bleumi.com/app/).


### Install Package
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
    "require": {
        "bleumi/bleumi-pay-sdk-php":"1.0.11"
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

The following code creates a wallet to accept payment from the buyer specific for the ECR-20 Token.

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
    $tokenAddress = new \Bleumi\Pay\Model\EthAddress("<TOKEN_ADDR>"); // Replace <BUYER_ADDR> with the Buyer Address
    $buyerAddress = new \Bleumi\Pay\Model\EthAddress("<BUYER_ADDR>"); // Replace <TOKEN_ADDR> with the Token Address
    $body->setBuyerAddress($buyerAddress);
    $body->setToken($tokenAddress);
    $body->setId($id);
    $body->setTransferToPaymentProcessor(false);
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

More examples can be found under each method in [SDK Classes](README.md#sdk-classes) section.

## SDK Classes

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
Erc20PaymentsApi | [**createWallet**](docs/Api/Erc20PaymentsApi.md#createwallet) | **POST** /v1/payment/erc20/wallet | Create an unique wallet address to accept payments for an ERC-20 token from a buyer
Erc20PaymentsApi | [**getWallet**](docs/Api/Erc20PaymentsApi.md#getwallet) | **GET** /v1/payment/erc20/wallet/{id} | Return a specific wallet
Erc20PaymentsApi | [**listWallets**](docs/Api/Erc20PaymentsApi.md#listwallets) | **GET** /v1/payment/erc20/wallet | Returns a list of wallets
Erc20PaymentsApi | [**settleWallet**](docs/Api/Erc20PaymentsApi.md#settlewallet) | **POST** /v1/payment/erc20/wallet/{id}/settle | Settle a payment, amount received will be transferred even if less than payment amount
Erc20PaymentsApi | [**refundWallet**](docs/Api/Erc20PaymentsApi.md#refundwallet) | **POST** /v1/payment/erc20/wallet/{id}/refund | Refund wallet
Erc20PaymentsApi | [**getWalletOperation**](docs/Api/Erc20PaymentsApi.md#getwalletoperation) | **GET** /v1/payment/erc20/wallet/{id}/operation/{txid} | Return a specific operation of the wallet
Erc20PaymentsApi | [**getWalletOperations**](docs/Api/Erc20PaymentsApi.md#getwalletoperations) | **GET** /v1/payment/erc20/wallet/{id}/operation | Return the list of operations performed by the mechant on a specific wallet


## Documentation For Models

 - [BadRequest](docs/Model/BadRequest.md)
 - [EthAddress](docs/Model/EthAddress.md)
 - [EthNetwork](docs/Model/EthNetwork.md)
 - [PaginatedWalletOperations](docs/Model/PaginatedWalletOperations.md)
 - [PaginatedWallets](docs/Model/PaginatedWallets.md)
 - [Wallet](docs/Model/Wallet.md)
 - [WalletCreateInput](docs/Model/WalletCreateInput.md)
 - [WalletCreateOutput](docs/Model/WalletCreateOutput.md)
 - [WalletOperation](docs/Model/WalletOperation.md)
 - [WalletOperationInput](docs/Model/WalletOperationInput.md)
 - [WalletOperationOutput](docs/Model/WalletOperationOutput.md)

## Limitations

 - [Bleumi Pay API Limits](https://pay.bleumi.com/docs/#api-limits)


## License

Copyright 2019 Bleumi, Inc.

Code licensed under the [MIT License](docs/MITLicense.md).