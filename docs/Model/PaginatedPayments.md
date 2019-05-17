# PaginatedPayments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**results** | [**List&lt;Payment&gt;**](Payment.md) | List of Payment requests in the current page | The list is restricted to a maximum of 100 payment requests. If there are more payment requests a cursor is passed in the 'nextToken' field.  
**nextToken** | **String** | Cursor to fetch next page of results, empty if no more results |  [optional] Passing this as the 'nextToken' query parameter will fetch the next page.
