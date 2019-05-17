# Payment


## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | Payment request id | 
**status** | [**PaymentStatus**](PaymentStatus.md) | Status of the payment request. <br> Possible values : <ul>  <li>'outstanding'</li><li>'partiallyPaid'</li><li>'paid'</li><li>'cancelled'</li><li>'settled' </li><li>'failed'</li></ul> | 
**amountPaid** | **String** | Total amount received on 'paymentAddress.addr' | 
**paymentAmount** | **String** |Payment amount requested  | 
**token** | [**ERC20Token**](ERC20Token.md) / [**StellarToken**](StellarToken.md) | The token of the Payment | 
**fromAddress** | [**EthAddress**](EthAddress.md) / [**StellarAddress**](StellarAddress.md) | The Network address from which payment is made. |  [optional] Refunds will be sent to this address.
**fromMemo** | [**StellarMemo**](StellarMemo.md) | (Stellar Only) The memo text for any transfer to the from address |  [optional]
**toAddress** | [**EthAddress**](EthAddress.md) / [**StellarAddress**](StellarAddress.md) | The Network address to which payment will be sent on successful processing | 
**toMemo** | [**StellarMemo**](StellarMemo.md) | (Stellar Only) The memo text for transfer to the to address |  [optional]
**paymentAddress** | [**ERC20PaymentAddress**](ERC20PaymentAddress.md) / [**StellarPaymentAddress**](StellarPaymentAddress.md) | Address to which payments must be sent. |  [optional]
**isProcessing** | **Boolean** | Indicates whether payment fullfillment is in process. Request cannot be updated once this is set to 'true'. | 
**transfers** | [**List&lt;Transfer&gt;**](Transfer.md) | The list of network transfers associated with this payment | 

