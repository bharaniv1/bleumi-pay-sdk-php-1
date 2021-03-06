# EthereumBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mainnet** <br> (Optional)| [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Ethereum MainNet |
**goerli** <br> (Optional)| [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in Ethereum Goerli TestNet |
**xdai** <br> (Optional)| [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in xDAI |
**xdai_testnet** <br> (Optional)| [**map[string,\Bleumi\Pay\Model\WalletBalance]**](WalletBalance.md) | A dictionary which gives the token balances in xDAI TestNet |

## Example

```json
{
    "balances": {
        "ethereum": {
            "goerli": {
                "0x115615dbd0f835344725146fa6343219315f15e5": {
                    "blockNum": "2049977",
                    "token_balance": "10000000",
                    "balance": "10",
                    "token_decimals": 6
                }
            }
        }
    }
}
```
