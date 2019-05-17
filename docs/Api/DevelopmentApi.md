# Bleumi\Pay\DevelopmentApi

Method | HTTP request | Description
------------- | ------------- | -------------
[**friendbot**](DevelopmentApi.md#friendbot) | **POST** /v1/friendbot | Fund Stellar test addresses with 10,000 tokens

# **friendbot**
> friendbot($addr, $issuer)

This method provides test tokens to any Stellar address on the test network.
To test payments on the Test network you can use the friendbot endpoint to request tokens for a particular address. Each request to the endpoint will provide the caller with 10,000 tokens.
Payment requests are fullfilled every 15 minutes. 

Note: Please ensure the targetAddress meets the Minimum Account Balance & Trustline requirements before running this sample code. For details, please visit [How to establish Stellar Trustline documentation](http://pay.bleumi.com/wp-content/uploads/2019/05/trustline_stellar.pdf).


### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addr** | [**\Bleumi\Pay\Model\StellarAddress**](../Model/StellarAddress.md)|  |
 **issuer** | [**\Bleumi\Pay\Model\StellarAddress**](../Model/StellarAddress.md)| Asset Issuer |

### Return type

void (empty response body)
