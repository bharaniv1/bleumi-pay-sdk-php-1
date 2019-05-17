# Bleumi\Pay\GasApi


Method | HTTP request | Description
------------- | ------------- | -------------
[**estimateGas**](GasApi.md#estimateGas) | **GET** /v1/gas/estimate | Returns the current expected gas price

# **estimateGas**
> \Bleumi\Pay\Model\EstimatedGas estimateGas($network, $addr)

Returns the current expected gas price in USD for the transafer of funds to the specified address 

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>'); // Replace <Your API Key> with your actual API key

$apiInstance = new Bleumi\Pay\Api\GasApi(
    new GuzzleHttp\Client(),
    $config
);
$network = \Bleumi\Pay\Model\EthNetwork::ROPSTEN; // \Bleumi\Pay\Model\EthNetwork | 
$addr = '0x8c9Ca106c78633F91Bc90dF47b3dDAb13043b0D1'; // | Any Ethereum Address

try {
    $result = $apiInstance->estimateGas($network, $addr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GasApi->estimateGas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | [**\Bleumi\Pay\Model\EthNetwork**](../Model/EthNetwork.md)| Ethereum network used. | Must be one of the [supported networks](Ethereum.md#Supported-Ethereum-Networks).
 **addr** | [**\Bleumi\Pay\Model\EthAddress**](../Model/EthAddress.md)| Any Ethereum Network address |

### Return type

[**\Bleumi\Pay\Model\EstimatedGas**](../Model/EstimatedGas.md)

