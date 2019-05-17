# Payment


## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | Payment request id | 
**status** | [**\Bleumi\Pay\Model\PaymentStatus**](PaymentStatus.md) | Status of the payment request. <br> Possible values : <ul>  <li>'outstanding'</li><li>'partiallyPaid'</li><li>'paid'</li><li>'cancelled'</li><li>'settled' </li><li>'failed'</li></ul> | 
**amountPaid** | **String** | Total amount received on 'paymentAddress.addr' | 
**paymentAmount** | **String** |Payment amount requested  | 
**token** | [**\Bleumi\Pay\Model\ERC20Token**](ERC20Token.md) / [**\Bleumi\Pay\Model\StellarToken**](StellarToken.md) | The token of the Payment | 
**fromAddress** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md) / [**\Bleumi\Pay\Model\StellarAddress**](StellarAddress.md) | The Network address from which payment is made. |  [optional] Refunds will be sent to this address.
**fromMemo** | [**\Bleumi\Pay\Model\StellarMemo**](StellarMemo.md) | (Stellar Only) The memo text for any transfer to the from address |  [optional]
**toAddress** | [**\Bleumi\Pay\Model\EthAddress**](EthAddress.md) / [**\Bleumi\Pay\Model\StellarAddress**](StellarAddress.md) | The Network address to which payment will be sent on successful processing | 
**toMemo** | [**\Bleumi\Pay\Model\StellarMemo**](StellarMemo.md) | (Stellar Only) The memo text for transfer to the to address |  [optional]
**paymentAddress** | [**\Bleumi\Pay\Model\ERC20PaymentAddress**](ERC20PaymentAddress.md) / [**StellarPaymentAddress**](StellarPaymentAddress.md) | Address to which payments must be sent. |  [optional]
**isProcessing** | **Boolean** | Indicates whether payment fullfillment is in process. Request cannot be updated once this is set to 'true'. | 
**transfers** | [**List&lt;\Bleumi\Pay\Model\Transfer&gt;**](Transfer.md) | The list of network transfers associated with this payment | 

