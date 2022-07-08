# StevenBuehner\ChurchTools\FinanceApi

All URIs are relative to /api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyFinanceTemplate()**](FinanceApi.md#applyFinanceTemplate) | **POST** /finance/templates/{id} | Apply finance template
[**batchTransaction()**](FinanceApi.md#batchTransaction) | **PATCH** /finance/transactions | Transaction Batch Processing
[**createCashDiscount()**](FinanceApi.md#createCashDiscount) | **POST** /finance/cashdiscounts | Create new cash discout
[**createCostCenter()**](FinanceApi.md#createCostCenter) | **POST** /finance/costcenters | Create new cost center
[**createNewAccount()**](FinanceApi.md#createNewAccount) | **POST** /finance/accounts | Create new account
[**createNewAccountClass()**](FinanceApi.md#createNewAccountClass) | **POST** /finance/accountclasses | Create new account class
[**createNewAccountGroup()**](FinanceApi.md#createNewAccountGroup) | **POST** /finance/accountgroups | Create new account group
[**createNewAccountType()**](FinanceApi.md#createNewAccountType) | **POST** /finance/accounttypes | Create new account type
[**createNewAccountingPeriod()**](FinanceApi.md#createNewAccountingPeriod) | **POST** /finance/accountingperiods | Create new accounting period
[**createNewClient()**](FinanceApi.md#createNewClient) | **POST** /finance/clients | Create new client
[**createNewTransaction()**](FinanceApi.md#createNewTransaction) | **POST** /finance/transactions | Create new transaction
[**createNewTransactionPurpose()**](FinanceApi.md#createNewTransactionPurpose) | **POST** /finance/transactionpurposes | Create new transaction purpose
[**createTaxRate()**](FinanceApi.md#createTaxRate) | **POST** /finance/taxrates | Create new tax rate
[**createTaxType()**](FinanceApi.md#createTaxType) | **POST** /finance/taxtypes | Create new tax type
[**deleteAccount()**](FinanceApi.md#deleteAccount) | **DELETE** /finance/accounts/{id} | Delete account
[**deleteAccountClass()**](FinanceApi.md#deleteAccountClass) | **DELETE** /finance/accountclasses/{id} | Delete account class
[**deleteAccountGroup()**](FinanceApi.md#deleteAccountGroup) | **DELETE** /finance/accountgroups/{id} | Delete account group
[**deleteAccountType()**](FinanceApi.md#deleteAccountType) | **DELETE** /finance/accounttypes/{id} | Delete account type
[**deleteAccountingPeriod()**](FinanceApi.md#deleteAccountingPeriod) | **DELETE** /finance/accountingperiods/{id} | Delete accounting period
[**deleteAccountsForAccountingPeriod()**](FinanceApi.md#deleteAccountsForAccountingPeriod) | **DELETE** /finance/accountingperiods/{id}/accounts | Delete accounts for accounting period
[**deleteCashDiscount()**](FinanceApi.md#deleteCashDiscount) | **DELETE** /finance/cashdiscounts/{id} | Delete cash discount
[**deleteClient()**](FinanceApi.md#deleteClient) | **DELETE** /finance/clients/{id} | Delete client
[**deleteCostCenter()**](FinanceApi.md#deleteCostCenter) | **DELETE** /finance/costcenters/{id} | Delete cost center
[**deleteTaxRate()**](FinanceApi.md#deleteTaxRate) | **DELETE** /finance/taxrates/{id} | Delete tax rate
[**deleteTaxType()**](FinanceApi.md#deleteTaxType) | **DELETE** /finance/taxtypes/{id} | Delete tax type
[**deleteTransaction()**](FinanceApi.md#deleteTransaction) | **DELETE** /finance/transactions/{id} | Delete transaction
[**deleteTransactionPurpose()**](FinanceApi.md#deleteTransactionPurpose) | **DELETE** /finance/transactionpurposes/{id} | Delete transaction purpose
[**exportFinanceTemplate()**](FinanceApi.md#exportFinanceTemplate) | **GET** /finance/templates/export | Epports a finance template based on the masterdata for a given accounting period
[**getAccountById()**](FinanceApi.md#getAccountById) | **GET** /finance/accounts/{id} | Get a account
[**getAccountClassById()**](FinanceApi.md#getAccountClassById) | **GET** /finance/accountclasses/{id} | Get a account class
[**getAccountGroupById()**](FinanceApi.md#getAccountGroupById) | **GET** /finance/accountgroups/{id} | Get a account group
[**getAccountTypeById()**](FinanceApi.md#getAccountTypeById) | **GET** /finance/accounttypes/{id} | Get a account type
[**getAccountingPeriodById()**](FinanceApi.md#getAccountingPeriodById) | **GET** /finance/accountingperiods/{id} | Get a accounting period
[**getAllAccountClasses()**](FinanceApi.md#getAllAccountClasses) | **GET** /finance/accountclasses | Get all account classes ordered by id
[**getAllAccountGroups()**](FinanceApi.md#getAllAccountGroups) | **GET** /finance/accountgroups | Get all account groups ordered by id
[**getAllAccountTypes()**](FinanceApi.md#getAllAccountTypes) | **GET** /finance/accounttypes | Get all account types ordered by id
[**getAllAccountingPeriods()**](FinanceApi.md#getAllAccountingPeriods) | **GET** /finance/accountingperiods | Get all accounting periods
[**getAllAccounts()**](FinanceApi.md#getAllAccounts) | **GET** /finance/accounts | Get all accounts ordered by accounting period and number
[**getAllCashDiscounts()**](FinanceApi.md#getAllCashDiscounts) | **GET** /finance/cashdiscounts | Get all cash discounts ordered by id
[**getAllClients()**](FinanceApi.md#getAllClients) | **GET** /finance/clients | Get all clients
[**getAllCostCenters()**](FinanceApi.md#getAllCostCenters) | **GET** /finance/costcenters | Get all cost centers ordered by accounting period and number ascending
[**getAllDonators()**](FinanceApi.md#getAllDonators) | **GET** /finance/donators | Get all donators including their donation information (e.g. donation amount)
[**getAllFinanceTemplates()**](FinanceApi.md#getAllFinanceTemplates) | **GET** /finance/templates | Get all finance templates
[**getAllTaxRates()**](FinanceApi.md#getAllTaxRates) | **GET** /finance/taxrates | Get all tax rates ordered by id
[**getAllTaxTypes()**](FinanceApi.md#getAllTaxTypes) | **GET** /finance/taxtypes | Get all tax types
[**getAllTransactionPurposes()**](FinanceApi.md#getAllTransactionPurposes) | **GET** /finance/transactionpurposes | Get all transaction purposes
[**getAllTransactions()**](FinanceApi.md#getAllTransactions) | **GET** /finance/transactions | Get all transaction
[**getCashDiscount()**](FinanceApi.md#getCashDiscount) | **GET** /finance/cashdiscounts/{id} | Get a cash discount
[**getClientById()**](FinanceApi.md#getClientById) | **GET** /finance/clients/{id} | Get a client
[**getCostCenter()**](FinanceApi.md#getCostCenter) | **GET** /finance/costcenters/{id} | Get a cost center
[**getDonationReceipt()**](FinanceApi.md#getDonationReceipt) | **GET** /finance/donationreceipt | Get donation receipt PDFs (cover letter and attachment)
[**getFinanceAccountsCsv()**](FinanceApi.md#getFinanceAccountsCsv) | **GET** /finance/accounts/csv | Your GET endpoint
[**getTaxRate()**](FinanceApi.md#getTaxRate) | **GET** /finance/taxrates/{id} | Get a tax rate
[**getTaxType()**](FinanceApi.md#getTaxType) | **GET** /finance/taxtypes/{id} | Get a tax type
[**getTransactionById()**](FinanceApi.md#getTransactionById) | **GET** /finance/transactions/{id} | Get a transaction
[**getTransactionPurposeById()**](FinanceApi.md#getTransactionPurposeById) | **GET** /finance/transactionpurposes/{id} | Get a transaction purpose
[**postFinanceCostcentersBulkcreate()**](FinanceApi.md#postFinanceCostcentersBulkcreate) | **POST** /finance/costcenters/bulkcreate | Import many cost centers
[**postFinanceReports()**](FinanceApi.md#postFinanceReports) | **POST** /finance/reports/{reportType} | Issue new Finance Report
[**updateAccount()**](FinanceApi.md#updateAccount) | **PUT** /finance/accounts/{id} | Update account
[**updateAccountClass()**](FinanceApi.md#updateAccountClass) | **PUT** /finance/accountclasses/{id} | Update account class
[**updateAccountGroup()**](FinanceApi.md#updateAccountGroup) | **PUT** /finance/accountgroups/{id} | Update account group
[**updateAccountType()**](FinanceApi.md#updateAccountType) | **PUT** /finance/accounttypes/{id} | Update account type
[**updateAccountingPeriod()**](FinanceApi.md#updateAccountingPeriod) | **PUT** /finance/accountingperiods/{id} | Update accounting period
[**updateCashDiscount()**](FinanceApi.md#updateCashDiscount) | **PUT** /finance/cashdiscounts/{id} | Update cash discount
[**updateClient()**](FinanceApi.md#updateClient) | **PUT** /finance/clients/{id} | Update client
[**updateCostCenter()**](FinanceApi.md#updateCostCenter) | **PUT** /finance/costcenters/{id} | Update cost center
[**updateTaxRate()**](FinanceApi.md#updateTaxRate) | **PUT** /finance/taxrates/{id} | Update tax rate
[**updateTaxType()**](FinanceApi.md#updateTaxType) | **PUT** /finance/taxtypes/{id} | Update tax type
[**updateTransaction()**](FinanceApi.md#updateTransaction) | **PUT** /finance/transactions/{id} | Update transaction
[**updateTransactionPurpose()**](FinanceApi.md#updateTransactionPurpose) | **PUT** /finance/transactionpurposes/{id} | Update transaction purpose


## `applyFinanceTemplate()`

```php
applyFinanceTemplate($id, $accounting_period_id)
```

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
$id = 1; // int | ID of finance template
$accounting_period_id = 3; // int | Filter by accounting period

try {
    $apiInstance->applyFinanceTemplate($id, $accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->applyFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchTransaction()`

```php
batchTransaction($inline_object41): \StevenBuehner\ChurchTools\Model\InlineResponse20069
```

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
$inline_object41 = new \StevenBuehner\ChurchTools\Model\InlineObject41(); // \StevenBuehner\ChurchTools\Model\InlineObject41

try {
    $result = $apiInstance->batchTransaction($inline_object41);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->batchTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object41** | [**\StevenBuehner\ChurchTools\Model\InlineObject41**](../Model/InlineObject41.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20069**](../Model/InlineResponse20069.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCashDiscount()`

```php
createCashDiscount($inline_object32): \StevenBuehner\ChurchTools\Model\InlineResponse20058
```

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
$inline_object32 = new \StevenBuehner\ChurchTools\Model\InlineObject32(); // \StevenBuehner\ChurchTools\Model\InlineObject32

try {
    $result = $apiInstance->createCashDiscount($inline_object32);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object32** | [**\StevenBuehner\ChurchTools\Model\InlineObject32**](../Model/InlineObject32.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCostCenter()`

```php
createCostCenter($inline_object34): \StevenBuehner\ChurchTools\Model\InlineResponse20060
```

Create new cost center

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
$inline_object34 = new \StevenBuehner\ChurchTools\Model\InlineObject34(); // \StevenBuehner\ChurchTools\Model\InlineObject34

try {
    $result = $apiInstance->createCostCenter($inline_object34);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object34** | [**\StevenBuehner\ChurchTools\Model\InlineObject34**](../Model/InlineObject34.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccount()`

```php
createNewAccount($inline_object24): \StevenBuehner\ChurchTools\Model\InlineResponse20049
```

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
$inline_object24 = new \StevenBuehner\ChurchTools\Model\InlineObject24(); // \StevenBuehner\ChurchTools\Model\InlineObject24

try {
    $result = $apiInstance->createNewAccount($inline_object24);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object24** | [**\StevenBuehner\ChurchTools\Model\InlineObject24**](../Model/InlineObject24.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountClass()`

```php
createNewAccountClass($inline_object28): \StevenBuehner\ChurchTools\Model\InlineResponse20053
```

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
$inline_object28 = new \StevenBuehner\ChurchTools\Model\InlineObject28(); // \StevenBuehner\ChurchTools\Model\InlineObject28

try {
    $result = $apiInstance->createNewAccountClass($inline_object28);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object28** | [**\StevenBuehner\ChurchTools\Model\InlineObject28**](../Model/InlineObject28.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountGroup()`

```php
createNewAccountGroup($inline_object30): \StevenBuehner\ChurchTools\Model\InlineResponse20055
```

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
$inline_object30 = new \StevenBuehner\ChurchTools\Model\InlineObject30(); // \StevenBuehner\ChurchTools\Model\InlineObject30

try {
    $result = $apiInstance->createNewAccountGroup($inline_object30);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object30** | [**\StevenBuehner\ChurchTools\Model\InlineObject30**](../Model/InlineObject30.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountType()`

```php
createNewAccountType($inline_object26): \StevenBuehner\ChurchTools\Model\InlineResponse20051
```

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
$inline_object26 = new \StevenBuehner\ChurchTools\Model\InlineObject26(); // \StevenBuehner\ChurchTools\Model\InlineObject26

try {
    $result = $apiInstance->createNewAccountType($inline_object26);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object26** | [**\StevenBuehner\ChurchTools\Model\InlineObject26**](../Model/InlineObject26.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountingPeriod()`

```php
createNewAccountingPeriod($inline_object22): \StevenBuehner\ChurchTools\Model\InlineResponse2012
```

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
$inline_object22 = new \StevenBuehner\ChurchTools\Model\InlineObject22(); // \StevenBuehner\ChurchTools\Model\InlineObject22

try {
    $result = $apiInstance->createNewAccountingPeriod($inline_object22);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object22** | [**\StevenBuehner\ChurchTools\Model\InlineObject22**](../Model/InlineObject22.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewClient()`

```php
createNewClient($inline_object20): \StevenBuehner\ChurchTools\Model\InlineResponse20046
```

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
$inline_object20 = new \StevenBuehner\ChurchTools\Model\InlineObject20(); // \StevenBuehner\ChurchTools\Model\InlineObject20

try {
    $result = $apiInstance->createNewClient($inline_object20);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object20** | [**\StevenBuehner\ChurchTools\Model\InlineObject20**](../Model/InlineObject20.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewTransaction()`

```php
createNewTransaction($inline_object40): \StevenBuehner\ChurchTools\Model\InlineResponse20068
```

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
$inline_object40 = new \StevenBuehner\ChurchTools\Model\InlineObject40(); // \StevenBuehner\ChurchTools\Model\InlineObject40

try {
    $result = $apiInstance->createNewTransaction($inline_object40);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object40** | [**\StevenBuehner\ChurchTools\Model\InlineObject40**](../Model/InlineObject40.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewTransactionPurpose()`

```php
createNewTransactionPurpose($inline_object43): \StevenBuehner\ChurchTools\Model\InlineResponse20070
```

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
$inline_object43 = new \StevenBuehner\ChurchTools\Model\InlineObject43(); // \StevenBuehner\ChurchTools\Model\InlineObject43

try {
    $result = $apiInstance->createNewTransactionPurpose($inline_object43);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object43** | [**\StevenBuehner\ChurchTools\Model\InlineObject43**](../Model/InlineObject43.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaxRate()`

```php
createTaxRate($inline_object38): \StevenBuehner\ChurchTools\Model\InlineResponse20066
```

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
$inline_object38 = new \StevenBuehner\ChurchTools\Model\InlineObject38(); // \StevenBuehner\ChurchTools\Model\InlineObject38

try {
    $result = $apiInstance->createTaxRate($inline_object38);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object38** | [**\StevenBuehner\ChurchTools\Model\InlineObject38**](../Model/InlineObject38.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaxType()`

```php
createTaxType($inline_object36): \StevenBuehner\ChurchTools\Model\InlineResponse20064
```

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
$inline_object36 = new \StevenBuehner\ChurchTools\Model\InlineObject36(); // \StevenBuehner\ChurchTools\Model\InlineObject36

try {
    $result = $apiInstance->createTaxType($inline_object36);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object36** | [**\StevenBuehner\ChurchTools\Model\InlineObject36**](../Model/InlineObject36.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccount()`

```php
deleteAccount($id, $dry_run)
```

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
$id = 1; // int | ID of account
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountClass()`

```php
deleteAccountClass($id, $dry_run)
```

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
$id = 1; // int | ID of account class
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountClass($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountClass: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountGroup()`

```php
deleteAccountGroup($id, $dry_run)
```

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
$id = 1; // int | ID of account group
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountGroup($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountGroup: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountType()`

```php
deleteAccountType($id, $dry_run)
```

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
$id = 1; // int | ID of account type
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountType: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountingPeriod()`

```php
deleteAccountingPeriod($id, $dry_run)
```

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
$id = 1; // int | ID of accounting period
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountingPeriod($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountsForAccountingPeriod()`

```php
deleteAccountsForAccountingPeriod($id)
```

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
$id = 1; // int | ID of accounting period

try {
    $apiInstance->deleteAccountsForAccountingPeriod($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountsForAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCashDiscount()`

```php
deleteCashDiscount($id, $dry_run)
```

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
$id = 1; // int | ID of cash discount
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCashDiscount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCashDiscount: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteClient()`

```php
deleteClient($id, $dry_run)
```

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
$id = 1; // int | ID of client
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteClient($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCostCenter()`

```php
deleteCostCenter($id, $dry_run)
```

Delete cost center

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
$id = 1; // int | ID of cost center
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCostCenter($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCostCenter: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTaxRate()`

```php
deleteTaxRate($id, $dry_run)
```

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
$id = 1; // int | ID of tax rate
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxRate($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTaxType()`

```php
deleteTaxType($id, $dry_run)
```

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
$id = 1; // int | ID of tax type
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxType: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransaction()`

```php
deleteTransaction($id, $dry_run)
```

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
$id = 1; // int | ID of transaction
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTransaction($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTransactionPurpose()`

```php
deleteTransactionPurpose($id, $dry_run)
```

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
$id = 1; // int | ID of transaction purpose
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTransactionPurpose($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportFinanceTemplate()`

```php
exportFinanceTemplate($accounting_period_id)
```

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
$accounting_period_id = 3; // int | Filter by accounting period

try {
    $apiInstance->exportFinanceTemplate($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->exportFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountById()`

```php
getAccountById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20050
```

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
$id = 1; // int | ID of account

try {
    $result = $apiInstance->getAccountById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountClassById()`

```php
getAccountClassById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20054
```

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
$id = 1; // int | ID of account class

try {
    $result = $apiInstance->getAccountClassById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountClassById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountGroupById()`

```php
getAccountGroupById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20056
```

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
$id = 1; // int | ID of account group

try {
    $result = $apiInstance->getAccountGroupById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountGroupById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTypeById()`

```php
getAccountTypeById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20052
```

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
$id = 1; // int | ID of account type

try {
    $result = $apiInstance->getAccountTypeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountTypeById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountingPeriodById()`

```php
getAccountingPeriodById($id): \StevenBuehner\ChurchTools\Model\InlineResponse2012
```

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
$id = 1; // int | ID of accounting period

try {
    $result = $apiInstance->getAccountingPeriodById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountingPeriodById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountClasses()`

```php
getAllAccountClasses(): \StevenBuehner\ChurchTools\Model\InlineResponse20053
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountGroups()`

```php
getAllAccountGroups(): \StevenBuehner\ChurchTools\Model\InlineResponse20055
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountTypes()`

```php
getAllAccountTypes(): \StevenBuehner\ChurchTools\Model\InlineResponse20051
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountingPeriods()`

```php
getAllAccountingPeriods(): \StevenBuehner\ChurchTools\Model\InlineResponse20048
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccounts()`

```php
getAllAccounts($accounting_period_id, $calculate_balance): \StevenBuehner\ChurchTools\Model\InlineResponse20049
```

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
$accounting_period_id = 2; // int | Filter by accounting period
$calculate_balance = true; // bool | Calculate balance for accounts

try {
    $result = $apiInstance->getAllAccounts($accounting_period_id, $calculate_balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accounting_period_id** | **int**| Filter by accounting period | [optional]
 **calculate_balance** | **bool**| Calculate balance for accounts | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCashDiscounts()`

```php
getAllCashDiscounts($accounting_period_id): \StevenBuehner\ChurchTools\Model\InlineResponse20057
```

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
$accounting_period_id = 3; // int | Filter by accounting period

try {
    $result = $apiInstance->getAllCashDiscounts($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCashDiscounts: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllClients()`

```php
getAllClients(): \StevenBuehner\ChurchTools\Model\InlineResponse20046
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCostCenters()`

```php
getAllCostCenters($accounting_period_id): \StevenBuehner\ChurchTools\Model\InlineResponse20059
```

Get all cost centers ordered by accounting period and number ascending

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
$accounting_period_id = 3; // int | Filter by accounting period

try {
    $result = $apiInstance->getAllCostCenters($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCostCenters: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllDonators()`

```php
getAllDonators($accounting_period_id, $order_by, $order_direction, $page, $limit): \StevenBuehner\ChurchTools\Model\InlineResponse20061
```

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
$accounting_period_id = 3; // int | Filter by accounting period
$order_by = 'order_by_example'; // string | Default is `name`.
$order_direction = 'order_direction_example'; // string | Way of direction: ascending or descending
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllDonators($accounting_period_id, $order_by, $order_direction, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllDonators: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllFinanceTemplates()`

```php
getAllFinanceTemplates(): \StevenBuehner\ChurchTools\Model\InlineResponse20031Data[]
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20031Data[]**](../Model/InlineResponse20031Data.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxRates()`

```php
getAllTaxRates($accounting_period_id): \StevenBuehner\ChurchTools\Model\InlineResponse20065
```

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
$accounting_period_id = 3; // int | Filter by accounting period

try {
    $result = $apiInstance->getAllTaxRates($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTaxRates: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxTypes()`

```php
getAllTaxTypes(): \StevenBuehner\ChurchTools\Model\InlineResponse20063
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTransactionPurposes()`

```php
getAllTransactionPurposes(): \StevenBuehner\ChurchTools\Model\InlineResponse20070
```

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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTransactions()`

```php
getAllTransactions($accounting_period_id, $created_pid, $cost_center_ids, $donator_ids, $account_ids, $is_donation, $is_income, $start_date, $end_date, $is_immutable, $order_by, $order_direction, $page, $limit): \StevenBuehner\ChurchTools\Model\InlineResponse20067
```

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
$accounting_period_id = 3; // int | Filter by accounting period
$created_pid = 56; // int | Filter by person ID. Get all transactions the person has created. But only show those the user can see.
$cost_center_ids = array(56); // int[] | Filter by cost centers.
$donator_ids = array(56); // int[] | Filter by donator or donator spouse. Provide an array of person ids.
$account_ids = array(56); // int[] | Filter by account/contra account. All transactions match, where either account or contra account is in the list.
$is_donation = True; // bool | Filter by donations. `true` = Only donations, `false` = Other than donation.
$is_income = True; // bool | Filter transactions by income or outcome transactions. An account group has a flag `cash asset account` to indicate accounts for income/outcome.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Show transactions after this date.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Show transactions before this date.
$is_immutable = True; // bool | Filter transactions, whether transaction is immutable.
$order_by = 'order_by_example'; // string | Default is `date`. Order transactions either by document date, amount, or modified date. For `date` and `amount` a second sorting happens by modified. The order direction for modified date is the same as for date and amount.
$order_direction = 'order_direction_example'; // string | Way of direction: ascending or descending
$page = 1; // int | Page number to show page in pagenation. If empty, start at first page.
$limit = 10; // int | Number of results per page.

try {
    $result = $apiInstance->getAllTransactions($accounting_period_id, $created_pid, $cost_center_ids, $donator_ids, $account_ids, $is_donation, $is_income, $start_date, $end_date, $is_immutable, $order_by, $order_direction, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTransactions: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCashDiscount()`

```php
getCashDiscount($id): \StevenBuehner\ChurchTools\Model\InlineResponse20058
```

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
$id = 1; // int | ID of cash discount

try {
    $result = $apiInstance->getCashDiscount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCashDiscount: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientById()`

```php
getClientById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20047
```

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
$id = 1; // int | ID of client

try {
    $result = $apiInstance->getClientById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getClientById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCostCenter()`

```php
getCostCenter($id): \StevenBuehner\ChurchTools\Model\InlineResponse20060
```

Get a cost center

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
$id = 1; // int | ID of cost center

try {
    $result = $apiInstance->getCostCenter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCostCenter: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDonationReceipt()`

```php
getDonationReceipt($accounting_period_id, $donator_id, $donator_spouse_id): \StevenBuehner\ChurchTools\Model\InlineResponse20062
```

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
$accounting_period_id = 3; // int | Accounting period to create the donation receipt for
$donator_id = 50; // int | ID of the donator person to create the donation receipt for
$donator_spouse_id = 51; // int | ID of the donator spouse to create the donation receipt for

try {
    $result = $apiInstance->getDonationReceipt($accounting_period_id, $donator_id, $donator_spouse_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getDonationReceipt: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinanceAccountsCsv()`

```php
getFinanceAccountsCsv($accounting_period_id)
```

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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRate()`

```php
getTaxRate($id): \StevenBuehner\ChurchTools\Model\InlineResponse20066
```

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
$id = 1; // int | ID of tax rate

try {
    $result = $apiInstance->getTaxRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxRate: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxType()`

```php
getTaxType($id): \StevenBuehner\ChurchTools\Model\InlineResponse20064
```

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
$id = 1; // int | ID of tax type

try {
    $result = $apiInstance->getTaxType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxType: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionById()`

```php
getTransactionById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20068
```

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
$id = 1; // int | ID of transaction

try {
    $result = $apiInstance->getTransactionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionPurposeById()`

```php
getTransactionPurposeById($id): \StevenBuehner\ChurchTools\Model\InlineResponse20071
```

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
$id = 1; // int | ID of transaction purpose

try {
    $result = $apiInstance->getTransactionPurposeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionPurposeById: ', $e->getMessage(), PHP_EOL;
}
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
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFinanceCostcentersBulkcreate()`

```php
postFinanceCostcentersBulkcreate($inline_object77): \StevenBuehner\ChurchTools\Model\InlineResponse20059
```

Import many cost centers

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
$inline_object77 = new \StevenBuehner\ChurchTools\Model\InlineObject77(); // \StevenBuehner\ChurchTools\Model\InlineObject77

try {
    $result = $apiInstance->postFinanceCostcentersBulkcreate($inline_object77);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postFinanceCostcentersBulkcreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object77** | [**\StevenBuehner\ChurchTools\Model\InlineObject77**](../Model/InlineObject77.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFinanceReports()`

```php
postFinanceReports($report_type, $inline_object55): \StevenBuehner\ChurchTools\Model\InlineResponse20091
```

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
$report_type = balance; // string | Report Key
$inline_object55 = new \StevenBuehner\ChurchTools\Model\InlineObject55(); // \StevenBuehner\ChurchTools\Model\InlineObject55

try {
    $result = $apiInstance->postFinanceReports($report_type, $inline_object55);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postFinanceReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_type** | **string**| Report Key |
 **inline_object55** | [**\StevenBuehner\ChurchTools\Model\InlineObject55**](../Model/InlineObject55.md)|  | [optional]

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20091**](../Model/InlineResponse20091.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($id, $inline_object25): \StevenBuehner\ChurchTools\Model\InlineResponse20050
```

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
$id = 1; // int | ID of account
$inline_object25 = new \StevenBuehner\ChurchTools\Model\InlineObject25(); // \StevenBuehner\ChurchTools\Model\InlineObject25

try {
    $result = $apiInstance->updateAccount($id, $inline_object25);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account |
 **inline_object25** | [**\StevenBuehner\ChurchTools\Model\InlineObject25**](../Model/InlineObject25.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountClass()`

```php
updateAccountClass($id, $inline_object29): \StevenBuehner\ChurchTools\Model\InlineResponse20054
```

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
$id = 1; // int | ID of account class
$inline_object29 = new \StevenBuehner\ChurchTools\Model\InlineObject29(); // \StevenBuehner\ChurchTools\Model\InlineObject29

try {
    $result = $apiInstance->updateAccountClass($id, $inline_object29);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account class |
 **inline_object29** | [**\StevenBuehner\ChurchTools\Model\InlineObject29**](../Model/InlineObject29.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountGroup()`

```php
updateAccountGroup($id, $inline_object31): \StevenBuehner\ChurchTools\Model\InlineResponse20056
```

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
$id = 1; // int | ID of account group
$inline_object31 = new \StevenBuehner\ChurchTools\Model\InlineObject31(); // \StevenBuehner\ChurchTools\Model\InlineObject31

try {
    $result = $apiInstance->updateAccountGroup($id, $inline_object31);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account group |
 **inline_object31** | [**\StevenBuehner\ChurchTools\Model\InlineObject31**](../Model/InlineObject31.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountType()`

```php
updateAccountType($id, $inline_object27): \StevenBuehner\ChurchTools\Model\InlineResponse20052
```

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
$id = 1; // int | ID of account type
$inline_object27 = new \StevenBuehner\ChurchTools\Model\InlineObject27(); // \StevenBuehner\ChurchTools\Model\InlineObject27

try {
    $result = $apiInstance->updateAccountType($id, $inline_object27);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of account type |
 **inline_object27** | [**\StevenBuehner\ChurchTools\Model\InlineObject27**](../Model/InlineObject27.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountingPeriod()`

```php
updateAccountingPeriod($id, $inline_object23): \StevenBuehner\ChurchTools\Model\InlineResponse2012
```

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
$id = 1; // int | ID of accounting period
$inline_object23 = new \StevenBuehner\ChurchTools\Model\InlineObject23(); // \StevenBuehner\ChurchTools\Model\InlineObject23

try {
    $result = $apiInstance->updateAccountingPeriod($id, $inline_object23);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of accounting period |
 **inline_object23** | [**\StevenBuehner\ChurchTools\Model\InlineObject23**](../Model/InlineObject23.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCashDiscount()`

```php
updateCashDiscount($id, $inline_object33): \StevenBuehner\ChurchTools\Model\InlineResponse20058
```

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
$id = 1; // int | ID of cash discount
$inline_object33 = new \StevenBuehner\ChurchTools\Model\InlineObject33(); // \StevenBuehner\ChurchTools\Model\InlineObject33

try {
    $result = $apiInstance->updateCashDiscount($id, $inline_object33);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of cash discount |
 **inline_object33** | [**\StevenBuehner\ChurchTools\Model\InlineObject33**](../Model/InlineObject33.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClient()`

```php
updateClient($id, $inline_object21): \StevenBuehner\ChurchTools\Model\InlineResponse20047
```

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
$id = 1; // int | ID of client
$inline_object21 = new \StevenBuehner\ChurchTools\Model\InlineObject21(); // \StevenBuehner\ChurchTools\Model\InlineObject21

try {
    $result = $apiInstance->updateClient($id, $inline_object21);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of client |
 **inline_object21** | [**\StevenBuehner\ChurchTools\Model\InlineObject21**](../Model/InlineObject21.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCostCenter()`

```php
updateCostCenter($id, $inline_object35): \StevenBuehner\ChurchTools\Model\InlineResponse20060
```

Update cost center

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
$id = 1; // int | ID of cost center
$inline_object35 = new \StevenBuehner\ChurchTools\Model\InlineObject35(); // \StevenBuehner\ChurchTools\Model\InlineObject35

try {
    $result = $apiInstance->updateCostCenter($id, $inline_object35);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of cost center |
 **inline_object35** | [**\StevenBuehner\ChurchTools\Model\InlineObject35**](../Model/InlineObject35.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxRate()`

```php
updateTaxRate($id, $inline_object39): \StevenBuehner\ChurchTools\Model\InlineResponse20066
```

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
$id = 1; // int | ID of tax rate
$inline_object39 = new \StevenBuehner\ChurchTools\Model\InlineObject39(); // \StevenBuehner\ChurchTools\Model\InlineObject39

try {
    $result = $apiInstance->updateTaxRate($id, $inline_object39);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax rate |
 **inline_object39** | [**\StevenBuehner\ChurchTools\Model\InlineObject39**](../Model/InlineObject39.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxType()`

```php
updateTaxType($id, $inline_object37): \StevenBuehner\ChurchTools\Model\InlineResponse20064
```

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
$id = 1; // int | ID of tax type
$inline_object37 = new \StevenBuehner\ChurchTools\Model\InlineObject37(); // \StevenBuehner\ChurchTools\Model\InlineObject37

try {
    $result = $apiInstance->updateTaxType($id, $inline_object37);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of tax type |
 **inline_object37** | [**\StevenBuehner\ChurchTools\Model\InlineObject37**](../Model/InlineObject37.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransaction()`

```php
updateTransaction($id, $inline_object42): \StevenBuehner\ChurchTools\Model\InlineResponse20068
```

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
$id = 1; // int | ID of transaction
$inline_object42 = new \StevenBuehner\ChurchTools\Model\InlineObject42(); // \StevenBuehner\ChurchTools\Model\InlineObject42

try {
    $result = $apiInstance->updateTransaction($id, $inline_object42);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of transaction |
 **inline_object42** | [**\StevenBuehner\ChurchTools\Model\InlineObject42**](../Model/InlineObject42.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionPurpose()`

```php
updateTransactionPurpose($id, $inline_object44): \StevenBuehner\ChurchTools\Model\InlineResponse20071
```

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
$id = 1; // int | ID of transaction purpose
$inline_object44 = new \StevenBuehner\ChurchTools\Model\InlineObject44(); // \StevenBuehner\ChurchTools\Model\InlineObject44

try {
    $result = $apiInstance->updateTransactionPurpose($id, $inline_object44);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of transaction purpose |
 **inline_object44** | [**\StevenBuehner\ChurchTools\Model\InlineObject44**](../Model/InlineObject44.md)|  |

### Return type

[**\StevenBuehner\ChurchTools\Model\InlineResponse20071**](../Model/InlineResponse20071.md)

### Authorization

[Login Token (Header)](../../README.md#Login Token (Header))

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
