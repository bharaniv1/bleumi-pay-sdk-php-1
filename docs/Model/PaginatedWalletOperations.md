# PaginatedWalletOperations

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**results** | [**\Bleumi\Pay\Model\WalletOperation[]**](WalletOperation.md) | List of operations of the wallet in the current page | The list is restricted to a maximum of 10 wallet operations. If there are more operations a cursor is passed in the 'nextToken' field.  
**next_token** | **string** | Cursor to fetch next page of results, empty if no more results |  [optional]  Passing this as the 'nextToken' query parameter will fetch the next page.