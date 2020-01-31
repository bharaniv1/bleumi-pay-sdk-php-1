# PaymentBalances

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ethereum** <br>(Optional) | [**\Bleumi\Pay\Model\EthereumBalance**](EthereumBalance.md) | A dictionary which gives the wallet balances in Ethereum Network |
**algorand** <br> (Optional)| [**\Bleumi\Pay\Model\AlgorandBalance**](AlgorandBalance.md) | A dictionary which gives the wallet balances in Algorand Network |



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