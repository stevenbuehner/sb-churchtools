# StevenBuehner\ChurchTools\FinanceApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyFinanceTemplate()**](FinanceApi.md#applyFinanceTemplate) | **POST** /finance/templates/{id} | Apply finance template |
| [**batchTransaction()**](FinanceApi.md#batchTransaction) | **PATCH** /finance/transactions | Transaction Batch Processing |
| [**createAllFinanceDonationReceipts()**](FinanceApi.md#createAllFinanceDonationReceipts) | **POST** /finance/donators/receipts | Create donation receipts |
| [**createCashDiscount()**](FinanceApi.md#createCashDiscount) | **POST** /finance/cashdiscounts | Create new cash discout |
| [**createCostCenter()**](FinanceApi.md#createCostCenter) | **POST** /finance/costcenters | Create new cost center |
| [**createNewAccount()**](FinanceApi.md#createNewAccount) | **POST** /finance/accounts | Create new account |
| [**createNewAccountClass()**](FinanceApi.md#createNewAccountClass) | **POST** /finance/accountclasses | Create new account class |
| [**createNewAccountGroup()**](FinanceApi.md#createNewAccountGroup) | **POST** /finance/accountgroups | Create new account group |
| [**createNewAccountType()**](FinanceApi.md#createNewAccountType) | **POST** /finance/accounttypes | Create new account type |
| [**createNewAccountingPeriod()**](FinanceApi.md#createNewAccountingPeriod) | **POST** /finance/accountingperiods | Create new accounting period |
| [**createNewClient()**](FinanceApi.md#createNewClient) | **POST** /finance/clients | Create new client |
| [**createNewTransaction()**](FinanceApi.md#createNewTransaction) | **POST** /finance/transactions | Create new transaction |
| [**createNewTransactionPurpose()**](FinanceApi.md#createNewTransactionPurpose) | **POST** /finance/transactionpurposes | Create new transaction purpose |
| [**createTaxRate()**](FinanceApi.md#createTaxRate) | **POST** /finance/taxrates | Create new tax rate |
| [**createTaxType()**](FinanceApi.md#createTaxType) | **POST** /finance/taxtypes | Create new tax type |
| [**deleteAccount()**](FinanceApi.md#deleteAccount) | **DELETE** /finance/accounts/{id} | Delete account |
| [**deleteAccountClass()**](FinanceApi.md#deleteAccountClass) | **DELETE** /finance/accountclasses/{id} | Delete account class |
| [**deleteAccountGroup()**](FinanceApi.md#deleteAccountGroup) | **DELETE** /finance/accountgroups/{id} | Delete account group |
| [**deleteAccountType()**](FinanceApi.md#deleteAccountType) | **DELETE** /finance/accounttypes/{id} | Delete account type |
| [**deleteAccountingPeriod()**](FinanceApi.md#deleteAccountingPeriod) | **DELETE** /finance/accountingperiods/{id} | Delete accounting period |
| [**deleteAccountsForAccountingPeriod()**](FinanceApi.md#deleteAccountsForAccountingPeriod) | **DELETE** /finance/accountingperiods/{id}/accounts | Delete accounts for accounting period |
| [**deleteCashDiscount()**](FinanceApi.md#deleteCashDiscount) | **DELETE** /finance/cashdiscounts/{id} | Delete cash discount |
| [**deleteClient()**](FinanceApi.md#deleteClient) | **DELETE** /finance/clients/{id} | Delete client |
| [**deleteCostCenter()**](FinanceApi.md#deleteCostCenter) | **DELETE** /finance/costcenters/{id} | Delete cost center |
| [**deleteFinanceDonationReceipts()**](FinanceApi.md#deleteFinanceDonationReceipts) | **DELETE** /finance/donators/receipts | Delete all donation receipts |
| [**deleteFinanceDonatorsDonatorCoupleId()**](FinanceApi.md#deleteFinanceDonatorsDonatorCoupleId) | **DELETE** /finance/donators/{donatorCoupleId}/receipts | delete-donation-receipt |
| [**deleteTaxRate()**](FinanceApi.md#deleteTaxRate) | **DELETE** /finance/taxrates/{id} | Delete tax rate |
| [**deleteTaxType()**](FinanceApi.md#deleteTaxType) | **DELETE** /finance/taxtypes/{id} | Delete tax type |
| [**deleteTransaction()**](FinanceApi.md#deleteTransaction) | **DELETE** /finance/transactions/{id} | Delete transaction |
| [**deleteTransactionPurpose()**](FinanceApi.md#deleteTransactionPurpose) | **DELETE** /finance/transactionpurposes/{id} | Delete transaction purpose |
| [**exportFinanceTemplate()**](FinanceApi.md#exportFinanceTemplate) | **GET** /finance/templates/export | Epports a finance template based on the masterdata for a given accounting period |
| [**getAccountById()**](FinanceApi.md#getAccountById) | **GET** /finance/accounts/{id} | Get a account |
| [**getAccountClassById()**](FinanceApi.md#getAccountClassById) | **GET** /finance/accountclasses/{id} | Get a account class |
| [**getAccountGroupById()**](FinanceApi.md#getAccountGroupById) | **GET** /finance/accountgroups/{id} | Get a account group |
| [**getAccountTypeById()**](FinanceApi.md#getAccountTypeById) | **GET** /finance/accounttypes/{id} | Get a account type |
| [**getAccountingPeriodById()**](FinanceApi.md#getAccountingPeriodById) | **GET** /finance/accountingperiods/{id} | Get a accounting period |
| [**getAllAccountClasses()**](FinanceApi.md#getAllAccountClasses) | **GET** /finance/accountclasses | Get all account classes ordered by id |
| [**getAllAccountGroups()**](FinanceApi.md#getAllAccountGroups) | **GET** /finance/accountgroups | Get all account groups ordered by id |
| [**getAllAccountTypes()**](FinanceApi.md#getAllAccountTypes) | **GET** /finance/accounttypes | Get all account types ordered by id |
| [**getAllAccountingPeriods()**](FinanceApi.md#getAllAccountingPeriods) | **GET** /finance/accountingperiods | Get all accounting periods |
| [**getAllAccounts()**](FinanceApi.md#getAllAccounts) | **GET** /finance/accounts | Get all accounts ordered by accounting period and number |
| [**getAllCashDiscounts()**](FinanceApi.md#getAllCashDiscounts) | **GET** /finance/cashdiscounts | Get all cash discounts ordered by id |
| [**getAllClients()**](FinanceApi.md#getAllClients) | **GET** /finance/clients | Get all clients |
| [**getAllCostCenters()**](FinanceApi.md#getAllCostCenters) | **GET** /finance/costcenters | Get all cost centers ordered by accounting period and number ascending |
| [**getAllDonationReceipts()**](FinanceApi.md#getAllDonationReceipts) | **GET** /finance/donators/receipts | Get all donators including their donation information (e.g. donation amount) |
| [**getAllDonators()**](FinanceApi.md#getAllDonators) | **GET** /finance/donators | Get all donators including their donation information (e.g. donation amount) |
| [**getAllFinanceTemplates()**](FinanceApi.md#getAllFinanceTemplates) | **GET** /finance/templates | Get all finance templates |
| [**getAllTaxRates()**](FinanceApi.md#getAllTaxRates) | **GET** /finance/taxrates | Get all tax rates ordered by id |
| [**getAllTaxTypes()**](FinanceApi.md#getAllTaxTypes) | **GET** /finance/taxtypes | Get all tax types |
| [**getAllTransactionPurposes()**](FinanceApi.md#getAllTransactionPurposes) | **GET** /finance/transactionpurposes | Get all transaction purposes |
| [**getAllTransactions()**](FinanceApi.md#getAllTransactions) | **GET** /finance/transactions | Get all transaction |
| [**getCashDiscount()**](FinanceApi.md#getCashDiscount) | **GET** /finance/cashdiscounts/{id} | Get a cash discount |
| [**getClientById()**](FinanceApi.md#getClientById) | **GET** /finance/clients/{id} | Get a client |
| [**getCostCenter()**](FinanceApi.md#getCostCenter) | **GET** /finance/costcenters/{id} | Get a cost center |
| [**getDonationReceipt()**](FinanceApi.md#getDonationReceipt) | **GET** /finance/donationreceipt | Get donation receipt PDFs (cover letter and attachment) |
| [**getFinanceAccountsCsv()**](FinanceApi.md#getFinanceAccountsCsv) | **GET** /finance/accounts/csv | Your GET endpoint |
| [**getFinanceDonatorsDonatorCoupleId()**](FinanceApi.md#getFinanceDonatorsDonatorCoupleId) | **GET** /finance/donators/{donatorCoupleId}/receipts | Get donation receipt PDFs (cover letter and attachment) |
| [**getTaxRate()**](FinanceApi.md#getTaxRate) | **GET** /finance/taxrates/{id} | Get a tax rate |
| [**getTaxType()**](FinanceApi.md#getTaxType) | **GET** /finance/taxtypes/{id} | Get a tax type |
| [**getTransactionById()**](FinanceApi.md#getTransactionById) | **GET** /finance/transactions/{id} | Get a transaction |
| [**getTransactionPurposeById()**](FinanceApi.md#getTransactionPurposeById) | **GET** /finance/transactionpurposes/{id} | Get a transaction purpose |
| [**postFinanceCostcentersBulkcreate()**](FinanceApi.md#postFinanceCostcentersBulkcreate) | **POST** /finance/costcenters/bulkcreate | Import many cost centers |
| [**postFinanceReports()**](FinanceApi.md#postFinanceReports) | **POST** /finance/reports/{reportType} | Issue new Finance Report |
| [**updateAccount()**](FinanceApi.md#updateAccount) | **PUT** /finance/accounts/{id} | Update account |
| [**updateAccountClass()**](FinanceApi.md#updateAccountClass) | **PUT** /finance/accountclasses/{id} | Update account class |
| [**updateAccountGroup()**](FinanceApi.md#updateAccountGroup) | **PUT** /finance/accountgroups/{id} | Update account group |
| [**updateAccountType()**](FinanceApi.md#updateAccountType) | **PUT** /finance/accounttypes/{id} | Update account type |
| [**updateAccountingPeriod()**](FinanceApi.md#updateAccountingPeriod) | **PUT** /finance/accountingperiods/{id} | Update accounting period |
| [**updateCashDiscount()**](FinanceApi.md#updateCashDiscount) | **PUT** /finance/cashdiscounts/{id} | Update cash discount |
| [**updateClient()**](FinanceApi.md#updateClient) | **PUT** /finance/clients/{id} | Update client |
| [**updateCostCenter()**](FinanceApi.md#updateCostCenter) | **PUT** /finance/costcenters/{id} | Update cost center |
| [**updateTaxRate()**](FinanceApi.md#updateTaxRate) | **PUT** /finance/taxrates/{id} | Update tax rate |
| [**updateTaxType()**](FinanceApi.md#updateTaxType) | **PUT** /finance/taxtypes/{id} | Update tax type |
| [**updateTransaction()**](FinanceApi.md#updateTransaction) | **PUT** /finance/transactions/{id} | Update transaction |
| [**updateTransactionPurpose()**](FinanceApi.md#updateTransactionPurpose) | **PUT** /finance/transactionpurposes/{id} | Update transaction purpose |


## `applyFinanceTemplate()`

```php
applyFinanceTemplate($id, $accounting_period_id)
```

Apply finance template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $apiInstance->applyFinanceTemplate($id, $accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->applyFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `batchTransaction()`

```php
batchTransaction($batch_transaction_request): \StevenBuehner\ChurchTools\Model\BatchTransaction200Response
```

Transaction Batch Processing

Batch API for Transactions. The batch API needs two informations sets. Firstly the `changeset`, which holds the information for the batch command. Either a field that needs to be updated or a trigger keyword to start a command. Secondly, a set of `filters`. Filters are either transaction filters, which resolve to a list of transaction IDs, or you can explicitly state a list of IDs to include or exclude from the batch command.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_transaction_request = new \StevenBuehner\ChurchTools\Model\BatchTransactionRequest(); // \StevenBuehner\ChurchTools\Model\BatchTransactionRequest | Batch information consists of changeset and filters.

try {
    $result = $apiInstance->batchTransaction($batch_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->batchTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_transaction_request** | [**\StevenBuehner\ChurchTools\Model\BatchTransactionRequest**](../Model/BatchTransactionRequest.md)| Batch information consists of changeset and filters. | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\BatchTransaction200Response**](../Model/BatchTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAllFinanceDonationReceipts()`

```php
createAllFinanceDonationReceipts($accounting_period_id)
```

Create donation receipts

Create all donation receipts for an accounting period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $apiInstance->createAllFinanceDonationReceipts($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createAllFinanceDonationReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCashDiscount()`

```php
createCashDiscount($create_cash_discount_request): \StevenBuehner\ChurchTools\Model\CreateCashDiscount200Response
```

Create new cash discout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_cash_discount_request = new \StevenBuehner\ChurchTools\Model\CreateCashDiscountRequest(); // \StevenBuehner\ChurchTools\Model\CreateCashDiscountRequest | Cash discount data

try {
    $result = $apiInstance->createCashDiscount($create_cash_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_cash_discount_request** | [**\StevenBuehner\ChurchTools\Model\CreateCashDiscountRequest**](../Model/CreateCashDiscountRequest.md)| Cash discount data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateCashDiscount200Response**](../Model/CreateCashDiscount200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCostCenter()`

```php
createCostCenter($create_cost_center_request): \StevenBuehner\ChurchTools\Model\CreateCostCenter200Response
```

Create new cost center

Create new cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_cost_center_request = new \StevenBuehner\ChurchTools\Model\CreateCostCenterRequest(); // \StevenBuehner\ChurchTools\Model\CreateCostCenterRequest | cost center data

try {
    $result = $apiInstance->createCostCenter($create_cost_center_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_cost_center_request** | [**\StevenBuehner\ChurchTools\Model\CreateCostCenterRequest**](../Model/CreateCostCenterRequest.md)| cost center data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateCostCenter200Response**](../Model/CreateCostCenter200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccount()`

```php
createNewAccount($create_new_account_request): \StevenBuehner\ChurchTools\Model\GetAllAccounts200Response
```

Create new account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountRequest | Account data

try {
    $result = $apiInstance->createNewAccount($create_new_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountRequest**](../Model/CreateNewAccountRequest.md)| Account data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllAccounts200Response**](../Model/GetAllAccounts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountClass()`

```php
createNewAccountClass($create_new_account_class_request): \StevenBuehner\ChurchTools\Model\GetAllAccountClasses200Response
```

Create new account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_class_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountClassRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountClassRequest | Account classes sorted by sort key.

try {
    $result = $apiInstance->createNewAccountClass($create_new_account_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_class_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountClassRequest**](../Model/CreateNewAccountClassRequest.md)| Account classes sorted by sort key. | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllAccountClasses200Response**](../Model/GetAllAccountClasses200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountGroup()`

```php
createNewAccountGroup($create_new_account_group_request): \StevenBuehner\ChurchTools\Model\GetAllAccountGroups200Response
```

Create new account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_group_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountGroupRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountGroupRequest | Account groups sorted by sort key.

try {
    $result = $apiInstance->createNewAccountGroup($create_new_account_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_group_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountGroupRequest**](../Model/CreateNewAccountGroupRequest.md)| Account groups sorted by sort key. | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllAccountGroups200Response**](../Model/GetAllAccountGroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountType()`

```php
createNewAccountType($create_new_account_type_request): \StevenBuehner\ChurchTools\Model\GetAllAccountTypes200Response
```

Create new account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_account_type_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountTypeRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountTypeRequest | Account Type data

try {
    $result = $apiInstance->createNewAccountType($create_new_account_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_account_type_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountTypeRequest**](../Model/CreateNewAccountTypeRequest.md)| Account Type data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllAccountTypes200Response**](../Model/GetAllAccountTypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewAccountingPeriod()`

```php
createNewAccountingPeriod($create_new_accounting_period_request): \StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriod201Response
```

Create new accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_accounting_period_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriodRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriodRequest | Accounting period data

try {
    $result = $apiInstance->createNewAccountingPeriod($create_new_accounting_period_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_accounting_period_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriodRequest**](../Model/CreateNewAccountingPeriodRequest.md)| Accounting period data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriod201Response**](../Model/CreateNewAccountingPeriod201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewClient()`

```php
createNewClient($create_new_client_request): \StevenBuehner\ChurchTools\Model\GetAllClients200Response
```

Create new client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_client_request = new \StevenBuehner\ChurchTools\Model\CreateNewClientRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewClientRequest | Client data

try {
    $result = $apiInstance->createNewClient($create_new_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_client_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewClientRequest**](../Model/CreateNewClientRequest.md)| Client data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllClients200Response**](../Model/GetAllClients200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewTransaction()`

```php
createNewTransaction($create_new_transaction_request): \StevenBuehner\ChurchTools\Model\CreateNewTransaction200Response
```

Create new transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_transaction_request = new \StevenBuehner\ChurchTools\Model\CreateNewTransactionRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewTransactionRequest | Transaction data

try {
    $result = $apiInstance->createNewTransaction($create_new_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_transaction_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewTransactionRequest**](../Model/CreateNewTransactionRequest.md)| Transaction data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateNewTransaction200Response**](../Model/CreateNewTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewTransactionPurpose()`

```php
createNewTransactionPurpose($create_new_transaction_purpose_request): \StevenBuehner\ChurchTools\Model\GetAllTransactionPurposes200Response
```

Create new transaction purpose

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_new_transaction_purpose_request = new \StevenBuehner\ChurchTools\Model\CreateNewTransactionPurposeRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewTransactionPurposeRequest | Transaction purpose data

try {
    $result = $apiInstance->createNewTransactionPurpose($create_new_transaction_purpose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createNewTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_new_transaction_purpose_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewTransactionPurposeRequest**](../Model/CreateNewTransactionPurposeRequest.md)| Transaction purpose data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllTransactionPurposes200Response**](../Model/GetAllTransactionPurposes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaxRate()`

```php
createTaxRate($create_tax_rate_request): \StevenBuehner\ChurchTools\Model\CreateTaxRate200Response
```

Create new tax rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tax_rate_request = new \StevenBuehner\ChurchTools\Model\CreateTaxRateRequest(); // \StevenBuehner\ChurchTools\Model\CreateTaxRateRequest | Tax rate data

try {
    $result = $apiInstance->createTaxRate($create_tax_rate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tax_rate_request** | [**\StevenBuehner\ChurchTools\Model\CreateTaxRateRequest**](../Model/CreateTaxRateRequest.md)| Tax rate data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateTaxRate200Response**](../Model/CreateTaxRate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTaxType()`

```php
createTaxType($create_tax_type_request): \StevenBuehner\ChurchTools\Model\CreateTaxType200Response
```

Create new tax type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_tax_type_request = new \StevenBuehner\ChurchTools\Model\CreateTaxTypeRequest(); // \StevenBuehner\ChurchTools\Model\CreateTaxTypeRequest | tax type data

try {
    $result = $apiInstance->createTaxType($create_tax_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->createTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_tax_type_request** | [**\StevenBuehner\ChurchTools\Model\CreateTaxTypeRequest**](../Model/CreateTaxTypeRequest.md)| tax type data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateTaxType200Response**](../Model/CreateTaxType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountClass()`

```php
deleteAccountClass($id)
```

Delete account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteAccountClass($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountGroup()`

```php
deleteAccountGroup($id)
```

Delete account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteAccountGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteAccountingPeriod($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $apiInstance->deleteAccountsForAccountingPeriod($id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteAccountsForAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCashDiscount($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteClient($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteCostCenter($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFinanceDonationReceipts()`

```php
deleteFinanceDonationReceipts($accounting_period_id)
```

Delete all donation receipts

Delete all donation receipts such that you can regenerate the same.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $apiInstance->deleteFinanceDonationReceipts($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteFinanceDonationReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFinanceDonatorsDonatorCoupleId()`

```php
deleteFinanceDonatorsDonatorCoupleId($, $accounting_period_id, $donator_couple_id)
```

delete-donation-receipt

Delete the donation receipts of a parcticular donator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ = '_example'; // string
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$donator_couple_id = 42-43; // string | ID of Donator or Couple

try {
    $apiInstance->deleteFinanceDonatorsDonatorCoupleId($, $accounting_period_id, $donator_couple_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteFinanceDonatorsDonatorCoupleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **** | **string**|  | |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **donator_couple_id** | **string**| ID of Donator or Couple | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxRate($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTaxType($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTransaction($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$dry_run = true; // bool | If set to true, the deletion is simulated but nothing will be deleted.

try {
    $apiInstance->deleteTransactionPurpose($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->deleteTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **dry_run** | **bool**| If set to true, the deletion is simulated but nothing will be deleted. | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $apiInstance->exportFinanceTemplate($accounting_period_id);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->exportFinanceTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountById()`

```php
getAccountById($id): \StevenBuehner\ChurchTools\Model\GetAccountById200Response
```

Get a account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountById200Response**](../Model/GetAccountById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountClassById()`

```php
getAccountClassById($id): \StevenBuehner\ChurchTools\Model\GetAccountClassById200Response
```

Get a account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountClassById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountClassById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountClassById200Response**](../Model/GetAccountClassById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountGroupById()`

```php
getAccountGroupById($id): \StevenBuehner\ChurchTools\Model\GetAccountGroupById200Response
```

Get a account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountGroupById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountGroupById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountGroupById200Response**](../Model/GetAccountGroupById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTypeById()`

```php
getAccountTypeById($id): \StevenBuehner\ChurchTools\Model\GetAccountTypeById200Response
```

Get a account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountTypeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountTypeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountTypeById200Response**](../Model/GetAccountTypeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountingPeriodById()`

```php
getAccountingPeriodById($id): \StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriod201Response
```

Get a accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getAccountingPeriodById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAccountingPeriodById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriod201Response**](../Model/CreateNewAccountingPeriod201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountClasses()`

```php
getAllAccountClasses(): \StevenBuehner\ChurchTools\Model\GetAllAccountClasses200Response
```

Get all account classes ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllAccountClasses200Response**](../Model/GetAllAccountClasses200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountGroups()`

```php
getAllAccountGroups(): \StevenBuehner\ChurchTools\Model\GetAllAccountGroups200Response
```

Get all account groups ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllAccountGroups200Response**](../Model/GetAllAccountGroups200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountTypes()`

```php
getAllAccountTypes(): \StevenBuehner\ChurchTools\Model\GetAllAccountTypes200Response
```

Get all account types ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllAccountTypes200Response**](../Model/GetAllAccountTypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountingPeriods()`

```php
getAllAccountingPeriods(): \StevenBuehner\ChurchTools\Model\GetAllAccountingPeriods200Response
```

Get all accounting periods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllAccountingPeriods200Response**](../Model/GetAllAccountingPeriods200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccounts()`

```php
getAllAccounts($accounting_period_id, $calculate_balance): \StevenBuehner\ChurchTools\Model\GetAllAccounts200Response
```

Get all accounts ordered by accounting period and number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$calculate_balance = true; // bool | Calculate balance for accounts

try {
    $result = $apiInstance->getAllAccounts($accounting_period_id, $calculate_balance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **calculate_balance** | **bool**| Calculate balance for accounts | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllAccounts200Response**](../Model/GetAllAccounts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCashDiscounts()`

```php
getAllCashDiscounts(): \StevenBuehner\ChurchTools\Model\GetAllCashDiscounts200Response
```

Get all cash discounts ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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
    $result = $apiInstance->getAllCashDiscounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCashDiscounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllCashDiscounts200Response**](../Model/GetAllCashDiscounts200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllClients()`

```php
getAllClients(): \StevenBuehner\ChurchTools\Model\GetAllClients200Response
```

Get all clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllClients200Response**](../Model/GetAllClients200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllCostCenters()`

```php
getAllCostCenters($accounting_period_id): \StevenBuehner\ChurchTools\Model\GetAllCostCenters200Response
```

Get all cost centers ordered by accounting period and number ascending

Get all cost centers ordered by accounting period and number ascending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $result = $apiInstance->getAllCostCenters($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllCostCenters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllCostCenters200Response**](../Model/GetAllCostCenters200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllDonationReceipts()`

```php
getAllDonationReceipts($accounting_period_id, $mode, $cleardoublepage): \StevenBuehner\ChurchTools\Model\GetAllDonators200Response
```

Get all donators including their donation information (e.g. donation amount)

Download all donation receipts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$mode = 'twofiles'; // string | mode: seperate letter and attachtment in two files
$cleardoublepage = 'none'; // string | add empty pages to clear double page for  'all', 'letter', 'attachment'

try {
    $result = $apiInstance->getAllDonationReceipts($accounting_period_id, $mode, $cleardoublepage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllDonationReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **mode** | **string**| mode: seperate letter and attachtment in two files | [optional] [default to &#39;twofiles&#39;] |
| **cleardoublepage** | **string**| add empty pages to clear double page for  &#39;all&#39;, &#39;letter&#39;, &#39;attachment&#39; | [optional] [default to &#39;none&#39;] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllDonators200Response**](../Model/GetAllDonators200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllDonators()`

```php
getAllDonators($accounting_period_id, $order_by, $order_direction, $page, $limit): \StevenBuehner\ChurchTools\Model\GetAllDonators200Response
```

Get all donators including their donation information (e.g. donation amount)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **order_by** | **string**| Default is &#x60;name&#x60;. | [optional] |
| **order_direction** | **string**| Way of direction: ascending or descending | [optional] |
| **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllDonators200Response**](../Model/GetAllDonators200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllFinanceTemplates()`

```php
getAllFinanceTemplates(): \StevenBuehner\ChurchTools\Model\UploadFiles200ResponseDataInner[]
```

Get all finance templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\UploadFiles200ResponseDataInner[]**](../Model/UploadFiles200ResponseDataInner.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxRates()`

```php
getAllTaxRates($accounting_period_id): \StevenBuehner\ChurchTools\Model\GetAllTaxRates200Response
```

Get all tax rates ordered by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for

try {
    $result = $apiInstance->getAllTaxRates($accounting_period_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getAllTaxRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllTaxRates200Response**](../Model/GetAllTaxRates200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTaxTypes()`

```php
getAllTaxTypes(): \StevenBuehner\ChurchTools\Model\GetAllTaxTypes200Response
```

Get all tax types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllTaxTypes200Response**](../Model/GetAllTaxTypes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTransactionPurposes()`

```php
getAllTransactionPurposes(): \StevenBuehner\ChurchTools\Model\GetAllTransactionPurposes200Response
```

Get all transaction purposes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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

[**\StevenBuehner\ChurchTools\Model\GetAllTransactionPurposes200Response**](../Model/GetAllTransactionPurposes200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllTransactions()`

```php
getAllTransactions($accounting_period_id, $created_pid, $cost_center_ids, $donator_ids, $account_ids, $is_donation, $is_income, $start_date, $end_date, $is_immutable, $order_by, $order_direction, $page, $limit): \StevenBuehner\ChurchTools\Model\GetAllTransactions200Response
```

Get all transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **created_pid** | **int**| Filter by person ID. Get all transactions the person has created. But only show those the user can see. | [optional] |
| **cost_center_ids** | [**int[]**](../Model/int.md)| Filter by cost centers. | [optional] |
| **donator_ids** | [**int[]**](../Model/int.md)| Filter by donator or donator spouse. Provide an array of person ids. | [optional] |
| **account_ids** | [**int[]**](../Model/int.md)| Filter by account/contra account. All transactions match, where either account or contra account is in the list. | [optional] |
| **is_donation** | **bool**| Filter by donations. &#x60;true&#x60; &#x3D; Only donations, &#x60;false&#x60; &#x3D; Other than donation. | [optional] |
| **is_income** | **bool**| Filter transactions by income or outcome transactions. An account group has a flag &#x60;cash asset account&#x60; to indicate accounts for income/outcome. | [optional] |
| **start_date** | **\DateTime**| Show transactions after this date. | [optional] |
| **end_date** | **\DateTime**| Show transactions before this date. | [optional] |
| **is_immutable** | **bool**| Filter transactions, whether transaction is immutable. | [optional] |
| **order_by** | **string**| Default is &#x60;date&#x60;. Order transactions either by document date, amount, or modified date. For &#x60;date&#x60; and &#x60;amount&#x60; a second sorting happens by modified. The order direction for modified date is the same as for date and amount. | [optional] |
| **order_direction** | **string**| Way of direction: ascending or descending | [optional] |
| **page** | **int**| Page number to show page in pagenation. If empty, start at first page. | [optional] [default to 1] |
| **limit** | **int**| Number of results per page. | [optional] [default to 10] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllTransactions200Response**](../Model/GetAllTransactions200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCashDiscount()`

```php
getCashDiscount($id): \StevenBuehner\ChurchTools\Model\CreateCashDiscount200Response
```

Get a cash discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getCashDiscount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateCashDiscount200Response**](../Model/CreateCashDiscount200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClientById()`

```php
getClientById($id): \StevenBuehner\ChurchTools\Model\GetClientById200Response
```

Get a client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getClientById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getClientById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetClientById200Response**](../Model/GetClientById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCostCenter()`

```php
getCostCenter($id): \StevenBuehner\ChurchTools\Model\CreateCostCenter200Response
```

Get a cost center

Get a cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getCostCenter($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateCostCenter200Response**](../Model/CreateCostCenter200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDonationReceipt()`

```php
getDonationReceipt($accounting_period_id, $donator_id, $donator_spouse_id): \StevenBuehner\ChurchTools\Model\GetDonationReceipt200Response
```

Get donation receipt PDFs (cover letter and attachment)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accounting_period_id = 1; // int | ID of accounting period to get master data for
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **donator_id** | **int**| ID of the donator person to create the donation receipt for | |
| **donator_spouse_id** | **int**| ID of the donator spouse to create the donation receipt for | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetDonationReceipt200Response**](../Model/GetDonationReceipt200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

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


// Configure API key authorization: Login-Token-Header
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accounting_period_id** | **int**| The accounting period to get the result set from | [optional] |

### Return type

void (empty response body)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFinanceDonatorsDonatorCoupleId()`

```php
getFinanceDonatorsDonatorCoupleId($, $accounting_period_id, $donator_couple_id): \StevenBuehner\ChurchTools\Model\GetDonationReceipt200Response
```

Get donation receipt PDFs (cover letter and attachment)

Get the donation receipts of a particular donator

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ = '_example'; // string
$accounting_period_id = 1; // int | ID of accounting period to get master data for
$donator_couple_id = 42-43; // string | ID of Donator or Couple

try {
    $result = $apiInstance->getFinanceDonatorsDonatorCoupleId($, $accounting_period_id, $donator_couple_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getFinanceDonatorsDonatorCoupleId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **** | **string**|  | |
| **accounting_period_id** | **int**| ID of accounting period to get master data for | |
| **donator_couple_id** | **string**| ID of Donator or Couple | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetDonationReceipt200Response**](../Model/GetDonationReceipt200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxRate()`

```php
getTaxRate($id): \StevenBuehner\ChurchTools\Model\CreateTaxRate200Response
```

Get a tax rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getTaxRate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateTaxRate200Response**](../Model/CreateTaxRate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxType()`

```php
getTaxType($id): \StevenBuehner\ChurchTools\Model\CreateTaxType200Response
```

Get a tax type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getTaxType($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateTaxType200Response**](../Model/CreateTaxType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionById()`

```php
getTransactionById($id): \StevenBuehner\ChurchTools\Model\CreateNewTransaction200Response
```

Get a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getTransactionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateNewTransaction200Response**](../Model/CreateNewTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionPurposeById()`

```php
getTransactionPurposeById($id): \StevenBuehner\ChurchTools\Model\GetTransactionPurposeById200Response
```

Get a transaction purpose

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity

try {
    $result = $apiInstance->getTransactionPurposeById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->getTransactionPurposeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetTransactionPurposeById200Response**](../Model/GetTransactionPurposeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFinanceCostcentersBulkcreate()`

```php
postFinanceCostcentersBulkcreate($post_finance_costcenters_bulkcreate_request): \StevenBuehner\ChurchTools\Model\GetAllCostCenters200Response
```

Import many cost centers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_finance_costcenters_bulkcreate_request = new \StevenBuehner\ChurchTools\Model\PostFinanceCostcentersBulkcreateRequest(); // \StevenBuehner\ChurchTools\Model\PostFinanceCostcentersBulkcreateRequest

try {
    $result = $apiInstance->postFinanceCostcentersBulkcreate($post_finance_costcenters_bulkcreate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postFinanceCostcentersBulkcreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_finance_costcenters_bulkcreate_request** | [**\StevenBuehner\ChurchTools\Model\PostFinanceCostcentersBulkcreateRequest**](../Model/PostFinanceCostcentersBulkcreateRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAllCostCenters200Response**](../Model/GetAllCostCenters200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFinanceReports()`

```php
postFinanceReports($report_type, $post_finance_reports_request): \StevenBuehner\ChurchTools\Model\PostFinanceReports200Response
```

Issue new Finance Report

Issue new finance report. _Balance_ and _Profit-Loss_ reports are available. The result provides the URI to the generated PDF file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
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
$post_finance_reports_request = new \StevenBuehner\ChurchTools\Model\PostFinanceReportsRequest(); // \StevenBuehner\ChurchTools\Model\PostFinanceReportsRequest | 

try {
    $result = $apiInstance->postFinanceReports($report_type, $post_finance_reports_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->postFinanceReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_type** | **string**| Report Key | |
| **post_finance_reports_request** | [**\StevenBuehner\ChurchTools\Model\PostFinanceReportsRequest**](../Model/PostFinanceReportsRequest.md)|  | [optional] |

### Return type

[**\StevenBuehner\ChurchTools\Model\PostFinanceReports200Response**](../Model/PostFinanceReports200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccount()`

```php
updateAccount($id, $create_new_account_request): \StevenBuehner\ChurchTools\Model\GetAccountById200Response
```

Update account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_account_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountRequest | Account data

try {
    $result = $apiInstance->updateAccount($id, $create_new_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_account_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountRequest**](../Model/CreateNewAccountRequest.md)| Account data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountById200Response**](../Model/GetAccountById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountClass()`

```php
updateAccountClass($id, $create_new_account_class_request): \StevenBuehner\ChurchTools\Model\GetAccountClassById200Response
```

Update account class

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_account_class_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountClassRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountClassRequest | Account Class data

try {
    $result = $apiInstance->updateAccountClass($id, $create_new_account_class_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountClass: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_account_class_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountClassRequest**](../Model/CreateNewAccountClassRequest.md)| Account Class data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountClassById200Response**](../Model/GetAccountClassById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountGroup()`

```php
updateAccountGroup($id, $create_new_account_group_request): \StevenBuehner\ChurchTools\Model\GetAccountGroupById200Response
```

Update account group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_account_group_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountGroupRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountGroupRequest | Account Group data

try {
    $result = $apiInstance->updateAccountGroup($id, $create_new_account_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_account_group_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountGroupRequest**](../Model/CreateNewAccountGroupRequest.md)| Account Group data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountGroupById200Response**](../Model/GetAccountGroupById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountType()`

```php
updateAccountType($id, $create_new_account_type_request): \StevenBuehner\ChurchTools\Model\GetAccountTypeById200Response
```

Update account type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_account_type_request = new \StevenBuehner\ChurchTools\Model\CreateNewAccountTypeRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewAccountTypeRequest | Account Type data

try {
    $result = $apiInstance->updateAccountType($id, $create_new_account_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_account_type_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewAccountTypeRequest**](../Model/CreateNewAccountTypeRequest.md)| Account Type data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetAccountTypeById200Response**](../Model/GetAccountTypeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountingPeriod()`

```php
updateAccountingPeriod($id, $update_accounting_period_request): \StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriod201Response
```

Update accounting period

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_accounting_period_request = new \StevenBuehner\ChurchTools\Model\UpdateAccountingPeriodRequest(); // \StevenBuehner\ChurchTools\Model\UpdateAccountingPeriodRequest | Accounting period data

try {
    $result = $apiInstance->updateAccountingPeriod($id, $update_accounting_period_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateAccountingPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_accounting_period_request** | [**\StevenBuehner\ChurchTools\Model\UpdateAccountingPeriodRequest**](../Model/UpdateAccountingPeriodRequest.md)| Accounting period data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateNewAccountingPeriod201Response**](../Model/CreateNewAccountingPeriod201Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCashDiscount()`

```php
updateCashDiscount($id, $create_cash_discount_request): \StevenBuehner\ChurchTools\Model\CreateCashDiscount200Response
```

Update cash discount

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_cash_discount_request = new \StevenBuehner\ChurchTools\Model\CreateCashDiscountRequest(); // \StevenBuehner\ChurchTools\Model\CreateCashDiscountRequest | cash discount data

try {
    $result = $apiInstance->updateCashDiscount($id, $create_cash_discount_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCashDiscount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_cash_discount_request** | [**\StevenBuehner\ChurchTools\Model\CreateCashDiscountRequest**](../Model/CreateCashDiscountRequest.md)| cash discount data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateCashDiscount200Response**](../Model/CreateCashDiscount200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClient()`

```php
updateClient($id, $create_new_client_request): \StevenBuehner\ChurchTools\Model\GetClientById200Response
```

Update client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_client_request = new \StevenBuehner\ChurchTools\Model\CreateNewClientRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewClientRequest | Client data

try {
    $result = $apiInstance->updateClient($id, $create_new_client_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateClient: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_client_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewClientRequest**](../Model/CreateNewClientRequest.md)| Client data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetClientById200Response**](../Model/GetClientById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCostCenter()`

```php
updateCostCenter($id, $update_cost_center_request): \StevenBuehner\ChurchTools\Model\CreateCostCenter200Response
```

Update cost center

Update cost center

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_cost_center_request = new \StevenBuehner\ChurchTools\Model\UpdateCostCenterRequest(); // \StevenBuehner\ChurchTools\Model\UpdateCostCenterRequest | cost center data

try {
    $result = $apiInstance->updateCostCenter($id, $update_cost_center_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateCostCenter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_cost_center_request** | [**\StevenBuehner\ChurchTools\Model\UpdateCostCenterRequest**](../Model/UpdateCostCenterRequest.md)| cost center data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateCostCenter200Response**](../Model/CreateCostCenter200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxRate()`

```php
updateTaxRate($id, $create_tax_rate_request): \StevenBuehner\ChurchTools\Model\CreateTaxRate200Response
```

Update tax rate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_tax_rate_request = new \StevenBuehner\ChurchTools\Model\CreateTaxRateRequest(); // \StevenBuehner\ChurchTools\Model\CreateTaxRateRequest | Tax rate data

try {
    $result = $apiInstance->updateTaxRate($id, $create_tax_rate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_tax_rate_request** | [**\StevenBuehner\ChurchTools\Model\CreateTaxRateRequest**](../Model/CreateTaxRateRequest.md)| Tax rate data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateTaxRate200Response**](../Model/CreateTaxRate200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxType()`

```php
updateTaxType($id, $create_tax_type_request): \StevenBuehner\ChurchTools\Model\CreateTaxType200Response
```

Update tax type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_tax_type_request = new \StevenBuehner\ChurchTools\Model\CreateTaxTypeRequest(); // \StevenBuehner\ChurchTools\Model\CreateTaxTypeRequest | tax type data

try {
    $result = $apiInstance->updateTaxType($id, $create_tax_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTaxType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_tax_type_request** | [**\StevenBuehner\ChurchTools\Model\CreateTaxTypeRequest**](../Model/CreateTaxTypeRequest.md)| tax type data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateTaxType200Response**](../Model/CreateTaxType200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransaction()`

```php
updateTransaction($id, $update_transaction_request): \StevenBuehner\ChurchTools\Model\CreateNewTransaction200Response
```

Update transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$update_transaction_request = new \StevenBuehner\ChurchTools\Model\UpdateTransactionRequest(); // \StevenBuehner\ChurchTools\Model\UpdateTransactionRequest | Transaction data

try {
    $result = $apiInstance->updateTransaction($id, $update_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **update_transaction_request** | [**\StevenBuehner\ChurchTools\Model\UpdateTransactionRequest**](../Model/UpdateTransactionRequest.md)| Transaction data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\CreateNewTransaction200Response**](../Model/CreateNewTransaction200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionPurpose()`

```php
updateTransactionPurpose($id, $create_new_transaction_purpose_request): \StevenBuehner\ChurchTools\Model\GetTransactionPurposeById200Response
```

Update transaction purpose

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\FinanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1; // int | ID of Entity
$create_new_transaction_purpose_request = new \StevenBuehner\ChurchTools\Model\CreateNewTransactionPurposeRequest(); // \StevenBuehner\ChurchTools\Model\CreateNewTransactionPurposeRequest | transaction purpose data

try {
    $result = $apiInstance->updateTransactionPurpose($id, $create_new_transaction_purpose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceApi->updateTransactionPurpose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of Entity | |
| **create_new_transaction_purpose_request** | [**\StevenBuehner\ChurchTools\Model\CreateNewTransactionPurposeRequest**](../Model/CreateNewTransactionPurposeRequest.md)| transaction purpose data | |

### Return type

[**\StevenBuehner\ChurchTools\Model\GetTransactionPurposeById200Response**](../Model/GetTransactionPurposeById200Response.md)

### Authorization

[Login-Token-Header](../../README.md#Login-Token-Header)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
