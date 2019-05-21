# Transfer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **String** |Status of transfer.|  [optional] Possible values are: <br>'processed' and <br>'not_processed'
**transfer_type** | **string** | Used to distinguish the type of payment. |  [optional] For Ethereum payments value will be 'ethereum'.
**tx_hash** | **string** |Transaction hash of transfer | 
**to_addr** | [**\Bleumi\Pay\Model\Address**](Address.md) |Ethereum/Stellar address to which transfer was made  | 
**transferDest** | **String** |'toAddress' - Payment amount transferred to the address specified in toAddress field. <br><br>'fromAddress' - Refund sent to address specified in fromAddress field. <br><br>'bleumi' - Charges for payment request sent to Bleumi  | 
**to_memo** | **string** | The memo text to be used for the transfer |  [optional] Applicable only for Stellar network
**value** | **string** |Amount that was transferred | 
**timestamp** | **string** |Timestamp (UNIX) when the transfer was made| 
