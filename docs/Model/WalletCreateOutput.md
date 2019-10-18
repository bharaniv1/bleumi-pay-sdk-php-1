# WalletCreateOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | [**\Bleumi\Pay\Model\EthNetwork**](EthNetwork.md) | Ethereum network in which wallet is to be created. Please refer to the [network list](https://pay.bleumi.com/docs/#supported-ethereum-networks) | 
**addr** | **string** | Address of the newly created wallet |
**token** | **string** | ECR-20 token contract address |
**balance** | **string** | The current balance of the ECR20 token in the wallet |
**block_num** | **string** | Block in which wallet was last updated, initially set to 0 |
