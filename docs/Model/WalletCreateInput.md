# WalletCreateInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID identifying the wallet; specified here to create the wallet by your system | 
**token** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md) | ECR-20 Token contract address | 
**buyer_address** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md) | The Ethereum network address of the buyer | 
**transfer_to_payment_processor** | **bool** | If set, the settle operation will sent the settled amount the payment processor otherwise it will send the settled amount the contract owner  | 
