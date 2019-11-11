# WalletOperation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID of the wallet; specified when it was created by your system | [optional] 
**func_name** | **string** | Name of the function invoked on the [Payment Processor](https://pay.bleumi.com/docs/#payment-processor-address). Following are the functions available:<br/> - createAndSettleWallet<br/> - createAndRefundWallet |
**status** | **bool** | <b>null</b> - operation in progress <br/> <b>true</b> - operation completed successfuly <br/> <b>false</b> - operation failed to process  |
**inputs** | [**\Bleumi\Pay\Model\WalletOperationInputs**](WalletOperationInputs.md) | The parameters used to interact with the [Payment Processor](https://pay.bleumi.com/docs/#payment-processor-address) on the ethereum network |    
**hash** | **string** | Transaction hash of operation submitted to the network. This field is blank when operation is in progress. |
