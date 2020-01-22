# PaymentAddresses

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ethereum** | [**map[string,\Bleumi\Pay\Model\WalletAddress]**](WalletAddress.md) | A dictionary which gives the wallet addresses in Ethereum Network | [optional]
**algorand** | [**map[string,\Bleumi\Pay\Model\WalletAddress]**](WalletAddress.md) | A dictionary which gives the wallet addresses in Algorand Network | [optional]

## Example

```json
{
    "ethereum": {
        "xdai_testnet": {
        "addr": "0xbe1fa332f24ba568108ba55a25eccf93d882f54e"
        },
        "rinkeby": {
        "addr": "0xbea2f9d56c3cc7f2c7e17d294200dd75708eecd8"
        }
    }
}
```