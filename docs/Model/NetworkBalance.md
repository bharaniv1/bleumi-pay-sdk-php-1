# NetworkBalance

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mainnet** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in MainNet | [optional] 
**xdai** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in xDAI | [optional] 
**goerli** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Goerli TestNet | [optional] 
**kovan** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Kovan TestNet | [optional] 
**rinkeby** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Rinkeby TestNet | [optional] 
**ropsten** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Ropsten TestNet | [optional] 
**xdai_testnet** | [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in xDAI TestNet | [optional] 



## Example

```json
{
    "xdai_testnet": {
        "XDAIT": {
            "balance": "1",
            "token_decimals": 15,
            "blockNum": "1698324",
            "token_balance": "1000000000000000"
        }
    }
}

```