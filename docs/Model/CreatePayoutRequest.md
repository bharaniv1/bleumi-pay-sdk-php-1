# CreatePayoutRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**txid** | **string** | Unique identifier for this payout | 
**token** | **string** | <b>ETH</b> - for Ethereum ; <b>XDAI</b> - for xDai ; <b>XDAIT</b> - for xDai Testnet ; <b>ALGO</b> - Algo; <b>&lt;asset id&gt;</b> - for Algorand Standard Asset; <b>&lt;contract address of ERC-20 token&gt;</b> - for ERC-20 Tokens; | 
**payouts** | [**\Bleumi\Pay\Model\Payout[]**](Payout.md) | Array of payments to be made in this payout. This is an atomic transaction (i.e. either all payments are processed or all of them are rejected). | 


## Example

```json
{
    "txid": "12345-6789",
    "token": "0x84df8548086EC9025E9C93297058Bed706E90DDD",
    "payouts": [
        {
            "transferAddress": "0xD15BDD17175825742A5904b21008dd3A019a060E",
            "amount": "1"
        },
        {
            "transferAddress": "0x7Dc30B85084aA1608e5C1Ce39c804Be177e40A07",
            "amount": "1"
        }
    ]
}
```