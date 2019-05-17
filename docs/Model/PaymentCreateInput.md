# PaymentCreateInput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentAmount** | **String** | Payment amount requested. | Minimum payment amount is 10.  Decimal places are restricted by the token being used. Please refer to the token list and ensure paymentAmount specified does not exceed the token capability. 
**token** | [**\Bleumi\Pay\Model\ERC20Token**](ERC20Token.md) or [**\Bleumi\Pay\Model\StellarToken**](StellarToken.md) | Details of the Token  | 
**fromAddress** | [**EthAddress**](EthAddress.md)/[**\Bleumi\Pay\Model\StellarAddress**](StellarAddress.md) | The source Network address from which payment is being made  |   (Optional) Refunds (for cancelled request or excess payment) will be sent to this address. Incoming payments are not processed until this field is set using the create or update endpoints.
**fromMemo** | [**\Bleumi\Pay\Model\StellarMemo**](StellarMemo.md) | Memo to be used while making a transfer to fromAddress |  [optional] Applicable only for Stellar Network
**toAddress** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md)/[**\Bleumi\Pay\Model\StellarAddress**](StellarAddress.md) | The target Network address to which payment is being sent  | Payment amount (minus charges) will be sent to this address. 
**toMemo** | [**\Bleumi\Pay\Model\StellarMemo**](StellarMemo.md) | Memo to be used while making a transfer to toAddress |  [optional] Applicable only for Stellar Network
