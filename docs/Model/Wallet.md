# Wallet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID identifying the wallet |
**chain** | **string** | Ethereum network of the wallet. Please refer to the [Supported Ethereum Networks.](https://pay.bleumi.com/docs/#supported-ethereum-networks) |
**addr** | **string** | Wallet address | 
**balances** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the balance, token-digits and token-balance for each ERC-20 token in the wallet. | updated.<br>'0' - No incoming/outgoing transactions recorded. | 
**inputs** | [**\Bleumi\Pay\Model\WalletInputs**](WalletInputs.md) | Parameters required to interact with the  [Payment Processor](https://pay.bleumi.com/docs/#payment-processor-address) |
**created_at** | **int** | The created UNIX timestamp of the wallet | 
**updated_at** | **int** | The last updated UNIX timestamp of the wallet |



