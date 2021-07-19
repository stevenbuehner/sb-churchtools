# StevenBuehner\ChurchTools\FinanceApi

All URIs are relative to *https://teambb.church.tools/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyFinanceTemplate**](FinanceApi.md#applyfinancetemplate) | **POST** /finance/templates/{id} | Apply finance template
[**batchTransaction**](FinanceApi.md#batchtransaction) | **PATCH** /finance/transactions | Transaction Batch Processing
[**createCashDiscount**](FinanceApi.md#createcashdiscount) | **POST** /finance/cashdiscounts | Create new cash discout
[**createCostCenter**](FinanceApi.md#createcostcenter) | **POST** /finance/costcenters | Create new cost center
[**createNewAccount**](FinanceApi.md#createnewaccount) | **POST** /finance/accounts | Create new account
[**createNewAccountClass**](FinanceApi.md#createnewaccountclass) | **POST** /finance/accountclasses | Create new account class
[**createNewAccountGroup**](FinanceApi.md#createnewaccountgroup) | **POST** /finance/accountgroups | Create new account group
[**createNewAccountType**](FinanceApi.md#createnewaccounttype) | **POST** /finance/accounttypes | Create new account type
[**createNewAccountingPeriod**](FinanceApi.md#createnewaccountingperiod) | **POST** /finance/accountingperiods | Create new accounting period
[**createNewClient**](FinanceApi.md#createnewclient) | **POST** /finance/clients | Create new client
[**createNewTransaction**](FinanceApi.md#createnewtransaction) | **POST** /finance/transactions | Create new transaction
[**createNewTransactionPurpose**](FinanceApi.md#createnewtransactionpurpose) | **POST** /finance/transactionpurposes | Create new transaction purpose
[**createTaxRate**](FinanceApi.md#createtaxrate) | **POST** /finance/taxrates | Create new tax rate
[**createTaxType**](FinanceApi.md#createtaxtype) | **POST** /finance/taxtypes | Create new tax type
[**deleteAccount**](FinanceApi.md#deleteaccount) | **DELETE** /finance/accounts/{id} | Delete account
[**deleteAccountClass**](FinanceApi.md#deleteaccountclass) | **DELETE** /finance/accountclasses/{id} | Delete account class
[**deleteAccountGroup**](FinanceApi.md#deleteaccountgroup) | **DELETE** /finance/accountgroups/{id} | Delete account group
[**deleteAccountType**](FinanceApi.md#deleteaccounttype) | **DELETE** /finance/accounttypes/{id} | Delete account type
[**deleteAccountingPeriod**](FinanceApi.md#deleteaccountingperiod) | **DELETE** /finance/accountingperiods/{id} | Delete accounting period
[**deleteAccountsForAccountingPeriod**](FinanceApi.md#deleteaccountsforaccountingperiod) | **DELETE** /finance/accountingperiods/{id}/accounts | Delete accounts for accounting period
[**deleteCashDiscount**](FinanceApi.md#deletecashdiscount) | **DELETE** /finance/cashdiscounts/{id} | Delete cash discount
[**deleteClient**](FinanceApi.md#deleteclient) | **DELETE** /finance/clients/{id} | Delete client
[**deleteCostCenter**](FinanceApi.md#deletecostcenter) | **DELETE** /finance/costcenters/{id} | Delete cost center
[**deleteTaxRate**](FinanceApi.md#deletetaxrate) | **DELETE** /finance/taxrates/{id} | Delete tax rate
[**deleteTaxType**](FinanceApi.md#deletetaxtype) | **DELETE** /finance/taxtypes/{id} | Delete tax type
[**deleteTransaction**](FinanceApi.md#deletetransaction) | **DELETE** /finance/transactions/{id} | Delete transaction
[**deleteTransactionPurpose**](FinanceApi.md#deletetransactionpurpose) | **DELETE** /finance/transactionpurposes/{id} | Delete transaction purpose
[**exportFinanceTemplate**](FinanceApi.md#exportfinancetemplate) | **GET** /finance/templates/export | Epports a finance template based on the masterdata for a given accounting period
[**getAccountById**](FinanceApi.md#getaccountbyid) | **GET** /finance/accounts/{id} | Get a account
[**getAccountClassById**](FinanceApi.md#getaccountclassbyid) | **GET** /finance/accountclasses/{id} | Get a account class
[**getAccountGroupById**](FinanceApi.md#getaccountgroupbyid) | **GET** /finance/accountgroups/{id} | Get a account group
[**getAccountTypeById**](FinanceApi.md#getaccounttypebyid) | **GET** /finance/accounttypes/{id} | Get a account type
[**getAccountingPeriodById**](FinanceApi.md#getaccountingperiodbyid) | **GET** /finance/accountingperiods/{id} | Get a accounting period
[**getAllAccountClasses**](FinanceApi.md#getallaccountclasses) | **GET** /finance/accountclasses | Get all account classes ordered by id
[**getAllAccountGroups**](FinanceApi.md#getallaccountgroups) | **GET** /finance/accountgroups | Get all account groups ordered by id
[**getAllAccountTypes**](FinanceApi.md#getallaccounttypes) | **GET** /finance/accounttypes | Get all account types ordered by id
[**getAllAccountingPeriods**](FinanceApi.md#getallaccountingperiods) | **GET** /finance/accountingperiods | Get all accounting periods
[**getAllAccounts**](FinanceApi.md#getallaccounts) | **GET** /finance/accounts | Get all accounts ordered by accounting period and number
[**getAllCashDiscounts**](FinanceApi.md#getallcashdiscounts) | **GET** /finance/cashdiscounts | Get all cash discounts ordered by id
[**getAllClients**](FinanceApi.md#getallclients) | **GET** /finance/clients | Get all clients
[**getAllCostCenters**](FinanceApi.md#getallcostcenters) | **GET** /finance/costcenters | Get all cost centers ordered by accounting period and number ascending
[**getAllDonators**](FinanceApi.md#getalldonators) | **GET** /finance/donators | Get all donators including their donation information (e.g. donation amount)
[**getAllFinanceTemplates**](FinanceApi.md#getallfinancetemplates) | **GET** /finance/templates | Get all finance templates
[**getAllTaxRates**](FinanceApi.md#getalltaxrates) | **GET** /finance/taxrates | Get all tax rates ordered by id
[**getAllTaxTypes**](FinanceApi.md#getalltaxtypes) | **GET** /finance/taxtypes | Get all tax types
[**getAllTransactionPurposes**](FinanceApi.md#getalltransactionpurposes) | **GET** /finance/transactionpurposes | Get all transaction purposes
[**getAllTransactions**](FinanceApi.md#getalltransactions) | **GET** /finance/transactions | Get all transaction
[**getCashDiscount**](FinanceApi.md#getcashdiscount) | **GET** /finance/cashdiscounts/{id} | Get a cash discount
[**getClientById**](FinanceApi.md#getclientbyid) | **GET** /finance/clients/{id} | Get a client
[**getCostCenter**](FinanceApi.md#getcostcenter) | **GET** /finance/costcenters/{id} | Get a cost center
[**getDonationReceipt**](FinanceApi.md#getdonationreceipt) | **GET** /finance/donationreceipt | Get donation receipt PDFs (cover letter and attachment)
[**getFinanceAccountsCsv**](FinanceApi.md#getfinanceaccountscsv) | **GET** /finance/accounts/csv | Your GET endpoint
[**getTaxRate**](FinanceApi.md#gettaxrate) | **GET** /finance/taxrates/{id} | Get a tax rate
[**getTaxType**](FinanceApi.md#gettaxtype) | **GET** /finance/taxtypes/{id} | Get a tax type
[**getTransactionById**](FinanceApi.md#gettransactionbyid) | **GET** /finance/transactions/{id} | Get a transaction
[**getTransactionPurposeById**](FinanceApi.md#gettransactionpurposebyid) | **GET** /finance/transactionpurposes/{id} | Get a transaction purpose
[**postFinanceReports**](FinanceApi.md#postfinancereports) | **POST** /finance/reports/{reportType} | Issue new Finance Report
[**updateAccount**](FinanceApi.md#updateaccount) | **PUT** /finance/accounts/{id} | Update account
[**updateAccountClass**](FinanceApi.md#updateaccountclass) | **PUT** /finance/accountclasses/{id} | Update account class
[**updateAccountGroup**](FinanceApi.md#updateaccountgroup) | **PUT** /finance/accountgroups/{id} | Update account group
[**updateAccountType**](FinanceApi.md#updateaccounttype) | **PUT** /finance/accounttypes/{id} | Update account type
[**updateAccountingPeriod**](FinanceApi.md#updateaccountingperiod) | **PUT** /finance/accountingperiods/{id} | Update accounting period
[**updateCashDiscount**](FinanceApi.md#updatecashdiscount) | **PUT** /finance/cashdiscounts/{id} | Update cash discount
[**updateClient**](FinanceApi.md#updateclient) | **PUT** /finance/clients/{id} | Update client
[**updateCostCenter**](FinanceApi.md#updatecostcenter) | **PUT** /finance/costcenters/{id} | Update cost center
[**updateTaxRate**](FinanceApi.md#updatetaxrate) | **PUT** /finance/taxrates/{id} | Update tax rate
[**updateTaxType**](FinanceApi.md#updatetaxtype) | **PUT** /finance/taxtypes/{id} | Update tax type
[**updateTransaction**](FinanceApi.md#updatetransaction) | **PUT** /finance/transactions/{id} | Update transaction
[**updateTransactionPurpose**](FinanceApi.md#updatetransactionpurpose) | **PUT** /finance/transactionpurposes/{id} | Update transaction purpose

# **applyFinanceTemplate**
> applyFinanceTemplate($id, $accounting_period_id)

Apply finance template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of finance template
$accounting_period_id = 56; // int | Filter by accounting period

try {
    $apiInstance->applyFinanceTemplate($id, $accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->applyFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of finance template |
 **accounting_period_id** | **int**| Filter by accounting period |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batchTransaction**
> \StevenBuehner\ChurchTools\Model\InlineResponse20069 batchTransaction($body)

Transaction Batch Processing

Batch API for Transactions. The batch API needs two informations sets. Firstly the `changeset`, which holds the information for the batch command. Either a field that needs to be updated or a trigger keyword to start a command. Secondly, a set of `filters`. Filters are either transaction filters, which resolve to a list of transaction IDs, or you can explicitly state a list of IDs to include or exclude from the batch command.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body43(); // \StevenBuehner\ChurchTools\Model\Body43 | Batch information consists of changeset and filters.

try {
    $result = $apiInstance->batchTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->batchTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body43**](../Model/Body43.md)| Batch information consists of changeset and filters. | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20069**](../Model/InlineResponse20069.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCashDiscount**
> \StevenBuehner\ChurchTools\Model\InlineResponse20058 createCashDiscount($body)

Create new cash discout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body33(); // \StevenBuehner\ChurchTools\Model\Body33 | Cash discount data

try {
    $result = $apiInstance->createCashDiscount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCashDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body33**](../Model/Body33.md)| Cash discount data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCostCenter**
> \StevenBuehner\ChurchTools\Model\InlineResponse20060 createCostCenter($body)

Create new cost center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body35(); // \StevenBuehner\ChurchTools\Model\Body35 | cost center data

try {
    $result = $apiInstance->createCostCenter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCostCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body35**](../Model/Body35.md)| cost center data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewAccount**
> \StevenBuehner\ChurchTools\Model\InlineResponse20049 createNewAccount($body)

Create new account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body25(); // \StevenBuehner\ChurchTools\Model\Body25 | Account data

try {
    $result = $apiInstance->createNewAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body25**](../Model/Body25.md)| Account data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewAccountClass**
> \StevenBuehner\ChurchTools\Model\InlineResponse20053 createNewAccountClass($body)

Create new account class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body29(); // \StevenBuehner\ChurchTools\Model\Body29 | Account classes sorted by sort key.

try {
    $result = $apiInstance->createNewAccountClass($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body29**](../Model/Body29.md)| Account classes sorted by sort key. |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewAccountGroup**
> \StevenBuehner\ChurchTools\Model\InlineResponse20055 createNewAccountGroup($body)

Create new account group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body31(); // \StevenBuehner\ChurchTools\Model\Body31 | Account groups sorted by sort key.

try {
    $result = $apiInstance->createNewAccountGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body31**](../Model/Body31.md)| Account groups sorted by sort key. |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewAccountType**
> \StevenBuehner\ChurchTools\Model\InlineResponse20051 createNewAccountType($body)

Create new account type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body27(); // \StevenBuehner\ChurchTools\Model\Body27 | Account Type data

try {
    $result = $apiInstance->createNewAccountType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body27**](../Model/Body27.md)| Account Type data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewAccountingPeriod**
> \StevenBuehner\ChurchTools\Model\InlineResponse2012 createNewAccountingPeriod($body)

Create new accounting period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body23(); // \StevenBuehner\ChurchTools\Model\Body23 | Accounting period data

try {
    $result = $apiInstance->createNewAccountingPeriod($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body23**](../Model/Body23.md)| Accounting period data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewClient**
> \StevenBuehner\ChurchTools\Model\InlineResponse20046 createNewClient($body)

Create new client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body21(); // \StevenBuehner\ChurchTools\Model\Body21 | Client data

try {
    $result = $apiInstance->createNewClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body21**](../Model/Body21.md)| Client data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewTransaction**
> \StevenBuehner\ChurchTools\Model\InlineResponse20068 createNewTransaction($body)

Create new transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body42(); // \StevenBuehner\ChurchTools\Model\Body42 | Transaction data

try {
    $result = $apiInstance->createNewTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body42**](../Model/Body42.md)| Transaction data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewTransactionPurpose**
> \StevenBuehner\ChurchTools\Model\InlineResponse20070 createNewTransactionPurpose($body)

Create new transaction purpose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body45(); // \StevenBuehner\ChurchTools\Model\Body45 | Transaction purpose data

try {
    $result = $apiInstance->createNewTransactionPurpose($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body45**](../Model/Body45.md)| Transaction purpose data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTaxRate**
> \StevenBuehner\ChurchTools\Model\InlineResponse20066 createTaxRate($body)

Create new tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body40(); // \StevenBuehner\ChurchTools\Model\Body40 | Tax rate data

try {
    $result = $apiInstance->createTaxRate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body40**](../Model/Body40.md)| Tax rate data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTaxType**
> \StevenBuehner\ChurchTools\Model\InlineResponse20064 createTaxType($body)

Create new tax type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body37(); // \StevenBuehner\ChurchTools\Model\Body37 | tax type data

try {
    $result = $apiInstance->createTaxType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body37**](../Model/Body37.md)| tax type data |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccount**
> deleteAccount($id, $dry_run)

Delete account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountClass**
> deleteAccountClass($id, $dry_run)

Delete account class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account class
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountClass($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account class |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountGroup**
> deleteAccountGroup($id, $dry_run)

Delete account group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account group
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountGroup($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account group |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountType**
> deleteAccountType($id, $dry_run)

Delete account type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account type
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account type |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountingPeriod**
> deleteAccountingPeriod($id, $dry_run)

Delete accounting period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of accounting period
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountingPeriod($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of accounting period |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountsForAccountingPeriod**
> deleteAccountsForAccountingPeriod($id)

Delete accounts for accounting period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of accounting period

try {
    $apiInstance->deleteAccountsForAccountingPeriod($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountsForAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of accounting period |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCashDiscount**
> deleteCashDiscount($id, $dry_run)

Delete cash discount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of cash discount
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCashDiscount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCashDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of cash discount |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteClient**
> deleteClient($id, $dry_run)

Delete client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of client
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteClient($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of client |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCostCenter**
> deleteCostCenter($id, $dry_run)

Delete cost center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of cost center
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCostCenter($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCostCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of cost center |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaxRate**
> deleteTaxRate($id, $dry_run)

Delete tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of tax rate
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxRate($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax rate |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaxType**
> deleteTaxType($id, $dry_run)

Delete tax type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of tax type
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax type |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTransaction**
> deleteTransaction($id, $dry_run)

Delete transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of transaction
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTransaction($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of transaction |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTransactionPurpose**
> deleteTransactionPurpose($id, $dry_run)

Delete transaction purpose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of transaction purpose
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTransactionPurpose($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of transaction purpose |
 **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportFinanceTemplate**
> exportFinanceTemplate($accounting_period_id)

Epports a finance template based on the masterdata for a given accounting period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Filter by accounting period

try {
    $apiInstance->exportFinanceTemplate($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->exportFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period |

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20050 getAccountById($id)

Get a account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account

try {
    $result = $apiInstance->getAccountById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountClassById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20054 getAccountClassById($id)

Get a account class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account class

try {
    $result = $apiInstance->getAccountClassById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountClassById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account class |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountGroupById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20056 getAccountGroupById($id)

Get a account group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account group

try {
    $result = $apiInstance->getAccountGroupById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountGroupById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account group |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountTypeById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20052 getAccountTypeById($id)

Get a account type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of account type

try {
    $result = $apiInstance->getAccountTypeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account type |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountingPeriodById**
> \StevenBuehner\ChurchTools\Model\InlineResponse2012 getAccountingPeriodById($id)

Get a accounting period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of accounting period

try {
    $result = $apiInstance->getAccountingPeriodById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountingPeriodById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of accounting period |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAccountClasses**
> \StevenBuehner\ChurchTools\Model\InlineResponse20053 getAllAccountClasses()

Get all account classes ordered by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountClasses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountClasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAccountGroups**
> \StevenBuehner\ChurchTools\Model\InlineResponse20055 getAllAccountGroups()

Get all account groups ordered by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAccountTypes**
> \StevenBuehner\ChurchTools\Model\InlineResponse20051 getAllAccountTypes()

Get all account types ordered by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAccountingPeriods**
> \StevenBuehner\ChurchTools\Model\InlineResponse20048 getAllAccountingPeriods()

Get all accounting periods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllAccountingPeriods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccountingPeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAccounts**
> \StevenBuehner\ChurchTools\Model\InlineResponse20049 getAllAccounts($accounting_period_id)

Get all accounts ordered by accounting period and number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Filter by accounting period

try {
    $result = $apiInstance->getAllAccounts($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCashDiscounts**
> \StevenBuehner\ChurchTools\Model\InlineResponse20057 getAllCashDiscounts($accounting_period_id)

Get all cash discounts ordered by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Filter by accounting period

try {
    $result = $apiInstance->getAllCashDiscounts($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCashDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllClients**
> \StevenBuehner\ChurchTools\Model\InlineResponse20046 getAllClients()

Get all clients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCostCenters**
> \StevenBuehner\ChurchTools\Model\InlineResponse20059 getAllCostCenters($accounting_period_id)

Get all cost centers ordered by accounting period and number ascending

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Filter by accounting period

try {
    $result = $apiInstance->getAllCostCenters($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCostCenters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDonators**
> \StevenBuehner\ChurchTools\Model\InlineResponse20061 getAllDonators($accounting_period_id, $order_by, $order_direction, $page, $limit)

Get all donators including their donation information (e.g. donation amount)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Filter by accounting period
$order_by = "order_by_example"; // string | Default is `name`.
$order_direction = "order_direction_example"; // string | Way of direction: ascending or descending
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllDonators($accounting_period_id, $order_by, $order_direction, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllDonators: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period |
 **order_by** | **string**| Default is &#x60;name&#x60;. | [optional]
 **order_direction** | **string**| Way of direction: ascending or descending | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllFinanceTemplates**
> \StevenBuehner\ChurchTools\Model\InlineResponse20072[] getAllFinanceTemplates()

Get all finance templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllFinanceTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllFinanceTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20072[]**](../Model/InlineResponse20072.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTaxRates**
> \StevenBuehner\ChurchTools\Model\InlineResponse20065 getAllTaxRates($accounting_period_id)

Get all tax rates ordered by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Filter by accounting period

try {
    $result = $apiInstance->getAllTaxRates($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTaxRates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTaxTypes**
> \StevenBuehner\ChurchTools\Model\InlineResponse20063 getAllTaxTypes()

Get all tax types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllTaxTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTaxTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTransactionPurposes**
> \StevenBuehner\ChurchTools\Model\InlineResponse20070 getAllTransactionPurposes()

Get all transaction purposes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllTransactionPurposes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTransactionPurposes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllTransactions**
> \StevenBuehner\ChurchTools\Model\InlineResponse20067 getAllTransactions($accounting_period_id, $created_pid, $cost_center_ids, $donator_ids, $account_ids, $is_donation, $is_income, $start_date, $end_date, $is_immutable, $order_by, $order_direction, $page, $limit)

Get all transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Filter by accounting period
$created_pid = 56; // int | Filter by person ID. Get all transactions the person has created. But only show those the user can see.
$cost_center_ids = array(56); // int[] | Filter by cost centers.
$donator_ids = array(56); // int[] | Filter by donator or donator spouse. Provide an array of person ids.
$account_ids = array(56); // int[] | Filter by account/contra account. All transactions match, where either account or contra account is in the list.
$is_donation = true; // bool | Filter by donations. `true` = Only donations, `false` = Other than donation.
$is_income = true; // bool | Filter transactions by income or outcome transactions. An account group has a flag `cash asset account` to indicate accounts for income/outcome.
$start_date = new \DateTime("2013-10-20"); // \DateTime | Show transactions after this date.
$end_date = new \DateTime("2013-10-20"); // \DateTime | Show transactions before this date.
$is_immutable = true; // bool | Filter transactions, whether transaction is immutable.
$order_by = "order_by_example"; // string | Default is `date`. Order transactions either by document date, amount, or modified date. For `date` and `amount` a second sorting happens by modified. The order direction for modified date is the same as for date and amount.
$order_direction = "order_direction_example"; // string | Way of direction: ascending or descending
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllTransactions($accounting_period_id, $created_pid, $cost_center_ids, $donator_ids, $account_ids, $is_donation, $is_income, $start_date, $end_date, $is_immutable, $order_by, $order_direction, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period |
 **created_pid** | **int**| Filter by person ID. Get all transactions the person has created. But only show those the user can see. | [optional]
 **cost_center_ids** | [**int[]**](../Model/int.md)| Filter by cost centers. | [optional]
 **donator_ids** | [**int[]**](../Model/int.md)| Filter by donator or donator spouse. Provide an array of person ids. | [optional]
 **account_ids** | [**int[]**](../Model/int.md)| Filter by account/contra account. All transactions match, where either account or contra account is in the list. | [optional]
 **is_donation** | **bool**| Filter by donations. &#x60;true&#x60; &#x3D; Only donations, &#x60;false&#x60; &#x3D; Other than donation. | [optional]
 **is_income** | **bool**| Filter transactions by income or outcome transactions. An account group has a flag &#x60;cash asset account&#x60; to indicate accounts for income/outcome. | [optional]
 **start_date** | **\DateTime**| Show transactions after this date. | [optional]
 **end_date** | **\DateTime**| Show transactions before this date. | [optional]
 **is_immutable** | **bool**| Filter transactions, whether transaction is immutable. | [optional]
 **order_by** | **string**| Default is &#x60;date&#x60;. Order transactions either by document date, amount, or modified date. For &#x60;date&#x60; and &#x60;amount&#x60; a second sorting happens by modified. The order direction for modified date is the same as for date and amount. | [optional]
 **order_direction** | **string**| Way of direction: ascending or descending | [optional]
 **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1]
 **limit** | **int**| Number of results per page. | [optional] [default to 10]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20067**](../Model/InlineResponse20067.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCashDiscount**
> \StevenBuehner\ChurchTools\Model\InlineResponse20058 getCashDiscount($id)

Get a cash discount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of cash discount

try {
    $result = $apiInstance->getCashDiscount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCashDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of cash discount |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClientById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20047 getClientById($id)

Get a client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of client

try {
    $result = $apiInstance->getClientById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getClientById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of client |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCostCenter**
> \StevenBuehner\ChurchTools\Model\InlineResponse20060 getCostCenter($id)

Get a cost center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of cost center

try {
    $result = $apiInstance->getCostCenter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCostCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of cost center |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDonationReceipt**
> \StevenBuehner\ChurchTools\Model\InlineResponse20062 getDonationReceipt($accounting_period_id, $donator_id, $donator_spouse_id)

Get donation receipt PDFs (cover letter and attachment)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | Accounting period to create the donation receipt for
$donator_id = 56; // int | ID of the donator person to create the donation receipt for
$donator_spouse_id = 56; // int | ID of the donator spouse to create the donation receipt for

try {
    $result = $apiInstance->getDonationReceipt($accounting_period_id, $donator_id, $donator_spouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getDonationReceipt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Accounting period to create the donation receipt for |
 **donator_id** | **int**| ID of the donator person to create the donation receipt for |
 **donator_spouse_id** | **int**| ID of the donator spouse to create the donation receipt for | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFinanceAccountsCsv**
> getFinanceAccountsCsv($accounting_period_id)

Your GET endpoint

Exports all Accounts for the given acounting period as csv

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 56; // int | The accounting period to get the result set from

try {
    $apiInstance->getFinanceAccountsCsv($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getFinanceAccountsCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| The accounting period to get the result set from | [optional]

### Return type

void (empty response body)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxRate**
> \StevenBuehner\ChurchTools\Model\InlineResponse20066 getTaxRate($id)

Get a tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of tax rate

try {
    $result = $apiInstance->getTaxRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax rate |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxType**
> \StevenBuehner\ChurchTools\Model\InlineResponse20064 getTaxType($id)

Get a tax type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of tax type

try {
    $result = $apiInstance->getTaxType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax type |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20068 getTransactionById($id)

Get a transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of transaction

try {
    $result = $apiInstance->getTransactionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of transaction |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionPurposeById**
> \StevenBuehner\ChurchTools\Model\InlineResponse20071 getTransactionPurposeById($id)

Get a transaction purpose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of transaction purpose

try {
    $result = $apiInstance->getTransactionPurposeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionPurposeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of transaction purpose |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20071**](../Model/InlineResponse20071.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFinanceReports**
> \StevenBuehner\ChurchTools\Model\InlineResponse20092 postFinanceReports($report_type, $body)

Issue new Finance Report

Issue new finance report. _Balance_ and _Profit-Loss_ reports are available. The result provides the URI to the generated PDF file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_type = "report_type_example"; // string | Report Key
$body = new \StevenBuehner\ChurchTools\Model\Body56(); // \StevenBuehner\ChurchTools\Model\Body56 | 

try {
    $result = $apiInstance->postFinanceReports($report_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postFinanceReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_type** | **string**| Report Key |
 **body** | [**\StevenBuehner\ChurchTools\Model\Body56**](../Model/Body56.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20092**](../Model/InlineResponse20092.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccount**
> \StevenBuehner\ChurchTools\Model\InlineResponse20050 updateAccount($body, $id)

Update account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body26(); // \StevenBuehner\ChurchTools\Model\Body26 | Account data
$id = 56; // int | ID of account

try {
    $result = $apiInstance->updateAccount($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body26**](../Model/Body26.md)| Account data |
 **id** | **int**| ID of account |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountClass**
> \StevenBuehner\ChurchTools\Model\InlineResponse20054 updateAccountClass($body, $id)

Update account class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body30(); // \StevenBuehner\ChurchTools\Model\Body30 | Account Class data
$id = 56; // int | ID of account class

try {
    $result = $apiInstance->updateAccountClass($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body30**](../Model/Body30.md)| Account Class data |
 **id** | **int**| ID of account class |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountGroup**
> \StevenBuehner\ChurchTools\Model\InlineResponse20056 updateAccountGroup($body, $id)

Update account group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body32(); // \StevenBuehner\ChurchTools\Model\Body32 | Account Group data
$id = 56; // int | ID of account group

try {
    $result = $apiInstance->updateAccountGroup($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body32**](../Model/Body32.md)| Account Group data |
 **id** | **int**| ID of account group |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountType**
> \StevenBuehner\ChurchTools\Model\InlineResponse20052 updateAccountType($body, $id)

Update account type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body28(); // \StevenBuehner\ChurchTools\Model\Body28 | Account Type data
$id = 56; // int | ID of account type

try {
    $result = $apiInstance->updateAccountType($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body28**](../Model/Body28.md)| Account Type data |
 **id** | **int**| ID of account type |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountingPeriod**
> \StevenBuehner\ChurchTools\Model\InlineResponse2012 updateAccountingPeriod($body, $id)

Update accounting period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body24(); // \StevenBuehner\ChurchTools\Model\Body24 | Accounting period data
$id = 56; // int | ID of accounting period

try {
    $result = $apiInstance->updateAccountingPeriod($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body24**](../Model/Body24.md)| Accounting period data |
 **id** | **int**| ID of accounting period |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCashDiscount**
> \StevenBuehner\ChurchTools\Model\InlineResponse20058 updateCashDiscount($body, $id)

Update cash discount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body34(); // \StevenBuehner\ChurchTools\Model\Body34 | cash discount data
$id = 56; // int | ID of cash discount

try {
    $result = $apiInstance->updateCashDiscount($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCashDiscount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body34**](../Model/Body34.md)| cash discount data |
 **id** | **int**| ID of cash discount |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateClient**
> \StevenBuehner\ChurchTools\Model\InlineResponse20047 updateClient($body, $id)

Update client

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body22(); // \StevenBuehner\ChurchTools\Model\Body22 | Client data
$id = 56; // int | ID of client

try {
    $result = $apiInstance->updateClient($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body22**](../Model/Body22.md)| Client data |
 **id** | **int**| ID of client |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCostCenter**
> \StevenBuehner\ChurchTools\Model\InlineResponse20060 updateCostCenter($body, $id)

Update cost center

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body36(); // \StevenBuehner\ChurchTools\Model\Body36 | cost center data
$id = 56; // int | ID of cost center

try {
    $result = $apiInstance->updateCostCenter($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCostCenter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body36**](../Model/Body36.md)| cost center data |
 **id** | **int**| ID of cost center |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxRate**
> \StevenBuehner\ChurchTools\Model\InlineResponse20066 updateTaxRate($body, $id)

Update tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body41(); // \StevenBuehner\ChurchTools\Model\Body41 | Tax rate data
$id = 56; // int | ID of tax rate

try {
    $result = $apiInstance->updateTaxRate($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body41**](../Model/Body41.md)| Tax rate data |
 **id** | **int**| ID of tax rate |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxType**
> \StevenBuehner\ChurchTools\Model\InlineResponse20064 updateTaxType($body, $id)

Update tax type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body38(); // \StevenBuehner\ChurchTools\Model\Body38 | tax type data
$id = 56; // int | ID of tax type

try {
    $result = $apiInstance->updateTaxType($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body38**](../Model/Body38.md)| tax type data |
 **id** | **int**| ID of tax type |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxType**
> \StevenBuehner\ChurchTools\Model\InlineResponse20064 updateTaxType($name, $sort_key, $id)

Update tax type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$sort_key = 56; // int | 
$id = 56; // int | ID of tax type

try {
    $result = $apiInstance->updateTaxType($name, $sort_key, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **sort_key** | **int**|  |
 **id** | **int**| ID of tax type |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransaction**
> \StevenBuehner\ChurchTools\Model\InlineResponse20068 updateTransaction($body, $id)

Update transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body44(); // \StevenBuehner\ChurchTools\Model\Body44 | Transaction data
$id = 56; // int | ID of transaction

try {
    $result = $apiInstance->updateTransaction($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body44**](../Model/Body44.md)| Transaction data |
 **id** | **int**| ID of transaction |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransactionPurpose**
> \StevenBuehner\ChurchTools\Model\InlineResponse20071 updateTransactionPurpose($body, $id)

Update transaction purpose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \StevenBuehner\ChurchTools\Model\Body46(); // \StevenBuehner\ChurchTools\Model\Body46 | transaction purpose data
$id = 56; // int | ID of transaction purpose

try {
    $result = $apiInstance->updateTransactionPurpose($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\StevenBuehner\ChurchTools\Model\Body46**](../Model/Body46.md)| transaction purpose data |
 **id** | **int**| ID of transaction purpose |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20071**](../Model/InlineResponse20071.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

