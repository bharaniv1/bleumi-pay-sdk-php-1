# Bleumi\Pay\PayoutsApi

Payouts are available only for the Ethereum network today and require you to set up a Private Payment Processor and link it to your account. Please contact support@bleumi.com if you want to enable payouts for your account.


# **createPayout**
> \Bleumi\Pay\Model\CreatePayoutResponse createPayout($body, $chain)

This method makes a payout from your Private Payment Processor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $id = "<ID>"; // string | Replace <ID> with the unique identifier for this payout

    $payout1 = new \Bleumi\Pay\Model\Payout();
    $payout1->setAmount('<PAYOUT_AMT_1>'); // string | Replace <PAYOUT_AMT_1>  with the 1st payout's amount
    $payout1->setTransferAddress('<PAYOUT_ADDR_1>'); // string | Replace <PAYOUT_ADDR_1>  with the 1st payout's receiver's address

    $payout2 = new \Bleumi\Pay\Model\Payout();
    $payout2->setAmount('<PAYOUT_AMT_2>'); // string | Replace <PAYOUT_AMT_2>  with the 2nd payout's amount
    $payout2->setTransferAddress('<PAYOUT_ADDR_2>'); // string | Replace <PAYOUT_ADDR_2>  with the 2nd payout's receiver's address

    $payouts = array($payout1, $payout2); //Add as many payouts to this array as required

    $createReq = new \Bleumi\Pay\Model\CreatePayoutRequest();   // \Bleumi\Pay\Model\CreatePayoutRequest | Request body - used to specify payout creation parameters.
    $createReq->setTxId($id);
    $createReq->setToken("<TOKEN>"); // string |  Replace <TOKEN>  by anyone of the following values: 'ETH'/'XDAI'/'XDAIT'/ECR-20 Contract Address/ Algorand Standard Asset Address
    $createReq->setPayouts($payouts);

    $chain = new \Bleumi\Pay\Model\Chain(); // \Bleumi\Pay\Model\Chain | Ethereum network in which payment is to be created. Please refer documentation for Supported Networks

    $result = $apiInstance->createPayout($createReq, $chain::ROPSTEN);
    $data = json_encode($result, JSON_PRETTY_PRINT);
    echo  $data;
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->createPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bleumi\Pay\Model\CreatePayoutRequest**](../Model/CreatePayoutRequest.md)| Request body - used to specify payout creation parameters. |
 **chain** | [**\Bleumi\Pay\Model\Chain**](../Model/.md)| Ethereum network in which payment is to be created. Please refer documentation for Supported Networks | [optional]

### Return type

[**\Bleumi\Pay\Model\CreatePayoutResponse**](../Model/CreatePayoutResponse.md)

Field | Type | Description
----- | ----- | -----
salt | string | Unique id generated for the given txid

### 400 Errors

The following table is a list of possible error codes that can be returned, along with additional information about how to resolve them for a response with 400 status code.

errorCode <br> <i>errorMessage</i> | Description
---- | ----
ValidationError <br> <i>&lt;details&gt;</i> | Details on input which does not conform to the above schema
ValidationError <br> <i>invalid_token</i> | Provided token is not valid for the specified 'chain'
ValidationError <br> <i>no_gas_accounts</i> | No active gas accounts present in your account. Please activate at least one gas account from the <a href="https://pay.bleumi.com/app/" target="_blank">Bleumi Pay Dashboard</a>.
ValidationError <br> <i>txid_already_exists</i> | The 'txid' provided has been used previously
ValidationError <br> <i>not_whitelisted&#124;&lt;addr&gt;</i> | The &lt;addr&gt; provided has not been whitelisted in your Private Payment Processor
ValidationError <br> <i>payouts_requires_private_payment_processor</i> | Private Payment Processor is not set up and linked to your account


# **listPayouts**
> \Bleumi\Pay\Model\PaginatedPayoutItems listPayouts($next_token, $sort_by, $start_at, $end_at)

This method retrieves all payouts created.

### Pagination

The list of payouts is returned as an array in the 'results' field. The list is restricted to a maximum of 10 payouts per page.

If there are more than 10 payouts, a cursor is returned in the 'nextToken' field. Passing this as the 'nextToken' query parameter will fetch the next page. 

When the value of 'nextToken' field is an empty string, there are no more payouts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Bleumi\Pay\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', '<Your API Key>');

$apiInstance = new Bleumi\Pay\Api\PayoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$next_token = ""; // string | Cursor to start results from
$sort_by = "createdAt"; // string | Sort payments by
$start_at = "1563271832"; // string | Get payouts from this timestamp (unix)
$end_at = ""; // string | Get payouts till this timestamp (unix)

try {
    $result = $apiInstance->listPayouts($next_token, $sort_by, $start_at, $end_at);
    $payouts = $result->getResults();
    $nextToken = $result->getNextToken();
    echo json_encode($payouts);
    echo nl2br (" \n ");
    echo 'nextToken:', $nextToken , nl2br (" \n ");
} catch (Exception $e) {
    echo 'Exception when calling PayoutsApi->listPayouts: ', $e->getMessage(), nl2br (" \n ");
    echo 'Code: ', $e->getCode(), nl2br (" \n ");
    echo 'Response Body: ', $e->getResponseBody(), nl2br (" \n ");
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_token** | **string**| Cursor to start results from | [optional]
 **sort_by** | **string**| Sort payments by | [optional]
 **start_at** | **string**| Get payouts from this timestamp (unix) | [optional]
 **end_at** | **string**| Get payouts till this timestamp (unix) | [optional]

### Return type

[**\Bleumi\Pay\Model\PaginatedPayoutItems**](../Model/PaginatedPayoutItems.md)
