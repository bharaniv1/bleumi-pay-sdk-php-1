# Bleumi Pay SDK for PHP

The Bleumi Pay SDK is a one-stop shop to help you integrate stablecoin payments (on Ethereum & Stellar Networks) into your business or application. The SDK bundles [Bleumi Pay API](https://pay.bleumi.com/docs/#introduction) into one SDK to ease implementation and support.

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
        "bleumi/bleumi-pay-sdk-php":"1.0.2"
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

The following code funds a Stellar Address (targetAddress) with 10,000 tokens on the test network.

Note: Please ensure the targetAddress meets the Minimum Account Balance & Trustline requirements before running this sample code. For details, please visit [How to establish Stellar Trustline documentation](http://pay.bleumi.com/wp-content/uploads/2019/05/trustline_stellar.pdf).


```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key


$apiInstance = new Bleumi\Pay\Api\DevelopmentApi(
    new GuzzleHttp\Client(),
    $config
);
$addr = '<STELLAR ADDRESS>'; // String | Replace <STELLAR ADDRESS> with an actual Stellar Network Address 
$issuer = 'GDWEVA6U7ZUKAWERV336BIQ7T3UNLLKSF4ENFK3GZ3Q35ZSU7SWH6AYV'; // String | Asset Issuer | Address of USD Test Issuer


try {
    $apiInstance->friendbot($addr, $issuer);
} catch (Exception $e) {
    echo 'Exception when calling DevelopmentApi->friendbot: ', $e->getMessage(), PHP_EOL;
}
?>
```

Use the Stellar Laboratory's [Endpoint Explorer](https://www.stellar.org/laboratory/#explorer?resource=accounts&endpoint=single&network=test) or the following URL to check the balance of the target address.

```
https://horizon-testnet.stellar.org/accounts/<targetAddress>
```

More examples can be found under each method in [SDK Classes](README.md#sdk-classes) section.

## SDK Classes

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
PaygPaymentsApi | [**createPayment**](docs/Api/PaygPaymentsApi.md#createpayment) | **POST** /v1/payment/payg/{id} | Create a payment request.
PaygPaymentsApi | [**updatePayment**](docs/Api/PaygPaymentsApi.md#updatepayment) | **PUT** /v1/payment/payg/{id} | Update a payment request.
PaygPaymentsApi | [**getPayment**](docs/Api/PaygPaymentsApi.md#getpayment) | **GET** /v1/payment/payg/{id} | Retrieves a specific payment request. 
PaygPaymentsApi | [**listPayments**](docs/Api/PaygPaymentsApi.md#listpayments) | **GET** /v1/payments/payg | Retrieves all PAYG payment requests.
PaygPaymentsApi | [**cancelPayment**](docs/Api/PaygPaymentsApi.md#cancelpayment) | **POST** /v1/payment/payg/{id}/cancel | Cancels a specific payment. Any amount received will be refunded (minus charges) to the address specified in fromAddress.
PaygPaymentsApi | [**settlePayment**](docs/Api/PaygPaymentsApi.md#settlepayment) | **POST** /v1/payment/payg/{id}/settle | Settle a specific payment which has been partially paid. Current balance (minus charges) will be sent to the address specified in toAddress.
GasApi | [**estimateGas**](docs/Api/GasApi.md#estimategas) | **GET** /v1/gas/estimate | Provides an estimate of the Ethereum Network Fee for an ERC20 Token.
DevelopmentApi | [**friendbot**](docs/Api/DevelopmentApi.md#friendbot) | **POST** /v1/friendbot | Provides 10,000 tokens to any Stellar address on the test network.


## SDK Data Models

 - [Address](docs/Model/Address.md)
 - [BadRequest](docs/Model/BadRequest.md)
 - [ERC20PaymentAddress](docs/Model/ERC20PaymentAddress.md)
 - [ERC20Token](docs/Model/ERC20Token.md)
 - [EstimatedGas](docs/Model/EstimatedGas.md)
 - [EthAddress](docs/Model/EthAddress.md)
 - [EthNetwork](docs/Model/EthNetwork.md)
 - [PaginatedPayments](docs/Model/PaginatedPayments.md)
 - [Payment](docs/Model/Payment.md)
 - [PaymentAddress](docs/Model/PaymentAddress.md)
 - [PaymentCreateInput](docs/Model/PaymentCreateInput.md)
 - [PaymentStatus](docs/Model/PaymentStatus.md)
 - [PaymentUpdateInput](docs/Model/PaymentUpdateInput.md)
 - [StellarAddress](docs/Model/StellarAddress.md)
 - [StellarNetwork](docs/Model/StellarNetwork.md)
 - [StellarPaymentAddress](docs/Model/StellarPaymentAddress.md)
 - [StellarToken](docs/Model/StellarToken.md)
 - [Token](docs/Model/Token.md)
 - [Transfer](docs/Model/Transfer.md)

## Limitations

 - [Bleumi Pay API Limits](https://pay.bleumi.com/docs/#api-limits)


## License

Copyright 2019 Bleumi, Inc.

Code licensed under the [MIT License](docs/MITLicense.md). 



