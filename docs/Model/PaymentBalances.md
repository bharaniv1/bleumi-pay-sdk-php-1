# PaymentBalances

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ethereum** | [**\Bleumi\Pay\Model\NetworkBalance**](NetworkBalance.md) | A dictionary which gives the token balances in each network |  


## Example

```json
{
    "ethereum": {
        "xdai_testnet": {
            "XDAIT": {
                "balance": "1",
                "token_decimals": 15,
                "blockNum": "1698324",
                "token_balance": "1000000000000000"
            }
        }
    }
}
```