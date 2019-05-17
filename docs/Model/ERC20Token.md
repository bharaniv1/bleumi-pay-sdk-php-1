# ERC20Token

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**network** | [**\Bleumi\Pay\Model\EthNetwork**](EthNetwork.md) | Ethereum network used. | Must be one of the [supported networks](Ethereum.md#Supported-Ethereum-Networks). 
**addr** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md) | ERC20 token address.  | Must be one of the [supported tokens](Ethereum.md#Supported-ERC20-Tokens).
**decimals** |  **Integer**  | Decimal places for ERC20 token, required if token does not implement 'decimals' function | [optional] 
