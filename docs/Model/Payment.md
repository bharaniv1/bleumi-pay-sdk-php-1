# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**created_at** | **int** |  | 
**status** | [**\Bleumi\Pay\Model\PaymentStatus**](PaymentStatus.md) |  | 
**amount_paid** | **string** |  | 
**payment_amount** | **string** |  | 
**token** | [**\Bleumi\Pay\Model\Token**](Token.md) |  | 
**from_address** | [**\Bleumi\Pay\Model\Address**](Address.md) |  | [optional] 
**from_memo** | **string** |  | [optional] 
**to_address** | [**\Bleumi\Pay\Model\Address**](Address.md) |  | 
**to_memo** | **string** |  | [optional] 
**payment_address** | [**\Bleumi\Pay\Model\PaymentAddress**](PaymentAddress.md) |  | [optional] 
**is_processing** | **bool** |  | 
**transfers** | [**\Bleumi\Pay\Model\Transfer[]**](Transfer.md) |  | 
