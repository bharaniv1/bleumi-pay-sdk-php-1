# Wallet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID identifying the wallet; specified when it was created by your system  |
**created_at** | **int** | UNIX timestamp when the wallet was created  |
**updated_at** | **int** | UNIX timestamp when the lastest operation was performed  |
**chain** | **string** | Ethereum network in which wallet is to be created. Please refer to the [network list](https://pay.bleumi.com/docs/#supported-ethereum-networks) |
**token** | **string** | ERC-20 token address |
**addr** | **string** | Wallet address |
**balance** | **string** |  The current token balance |
**block_num** | **string** | The block number when the wallet was last modified |