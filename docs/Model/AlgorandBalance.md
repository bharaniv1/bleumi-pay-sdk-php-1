# AlgorandBalance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alg_mainnet** <br>(Optional)| [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Algorand MainNet | 
**alg_testnet** <br>(Optional)| [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Algorand TestNet | 

## Example - Algorand TestNet

```json 
{
    "balances": {
        "algorand": {
            "alg_testnet": {
                "ALGO": {
                    "blockNum": "4457461",
                    "token_balance": "10000000",
                    "balance": "10",
                    "token_decimals": 6
                }
            }
        }
    }
}
```