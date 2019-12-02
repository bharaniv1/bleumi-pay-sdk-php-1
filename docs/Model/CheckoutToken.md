# CheckoutToken

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | The chain in which the token is defined | 
**transfer_address** | **string** | The destination address when payments are received in this token | 
**name** | **string** | Name of the token | 
**symbol** | **string** | Symbol of the token | 
**decimals** | **string** | The decimal places supported | 


## Example

```json
{
      "chain": "ropsten",
      "transferAddress": "0xd15bdd17175825742a5904b21008dd3a019a060e",
      "name": "USD p18",
      "symbol": "USD18",
      "decimals": 18
}
```