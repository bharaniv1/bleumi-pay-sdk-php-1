# PaymentSettleRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | <b>ETH</b> - for Ethereum ; <b>XDAI</b> - for xDai ; <b>XDAIT</b> - for xDai Testnet ; ALGO - Algo; <b>&lt;asset id&gt;</b> - for Algorand Standard Asset; <b>&lt;contract address of ERC-20 token&gt;</b> - for ERC-20 Tokens; | 
**amount** | **string** | Amount to be settled | 

## Example

```json
{
    "amount": "5",
    "token": "0x84df8548086ec9025e9c93297058bed706e90ddd"
}
```