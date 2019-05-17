# PaymentUpdateInput

## Properties
Name | Type | Network |Description | Notes
------------ | ------------- | ------------- | -------------| -------------
**paymentAmount** | **String** | Both |Payment amount requested. |   Minimum payment amount is 10.  Decimal places are restricted by the token being used. Please refer to the token list and ensure paymentAmount specified does not exceed the token capability
**fromAddress** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md) or [**\Bleumi\Pay\Model\StellarAddress**](StellarAddress.md) |Both | The source Ethereum/Stellar Network address from which payment is being made  |  [optional] Refunds (for cancelled request or excess payment) will be sent to this address. Incoming payments are not processed until this field is set using the create or update endpoints.
**fromMemo** | [**\Bleumi\Pay\Model\StellarMemo**](StellarMemo.md) |Stellar only |  [optional] Memo to be used while making transfer to fromAddress | 
**toAddress** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md) or [**\Bleumi\Pay\Model\StellarAddress**](StellarAddress.md) | Both |The target Ethereum/Stellar Network address to which payment is being sent . | Payment amount (minus charges) will be sent to this address. 
**toMemo** | [**\Bleumi\Pay\Model\StellarMemo**](StellarMemo.md) | Stellar only |[optional] Memo to be used while making transfer to toAddress |  
