# OpenAPIClient-php

The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.

For more information, please visit [https://forum.church.tools/category/22/churchtools-schnittstellen](https://forum.church.tools/category/22/churchtools-schnittstellen).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: Login-Token-Header
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 42; // int | ID of person
$id = 1; // int | ID of Entity

try {
    $apiInstance->deletePersonsAbsence($person_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AbsenceApi->deletePersonsAbsence: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AbsenceApi* | [**deletePersonsAbsence**](docs/Api/AbsenceApi.md#deletepersonsabsence) | **DELETE** /persons/{personId}/absences/{id} | Delete absence
*AbsenceApi* | [**getGroupsAbsences**](docs/Api/AbsenceApi.md#getgroupsabsences) | **GET** /groups/{groupId}/absences | Fetch all absences for persons in a group
*AbsenceApi* | [**getPersonsAbsence**](docs/Api/AbsenceApi.md#getpersonsabsence) | **GET** /persons/{personId}/absences/{id} | Fetch one absence
*AbsenceApi* | [**getPersonsAbsences**](docs/Api/AbsenceApi.md#getpersonsabsences) | **GET** /persons/{personId}/absences | Fetch all absences for a person
*AbsenceApi* | [**postPersonsAbsences**](docs/Api/AbsenceApi.md#postpersonsabsences) | **POST** /persons/{personId}/absences | Create new absence for person
*AbsenceApi* | [**putPersonsAbsence**](docs/Api/AbsenceApi.md#putpersonsabsence) | **PUT** /persons/{personId}/absences/{id} | Update absence
*AdminApi* | [**deleteSecuritylevelId**](docs/Api/AdminApi.md#deletesecuritylevelid) | **DELETE** /securitylevels/{id} | Delete the Security Level
*AdminApi* | [**getAllLogs**](docs/Api/AdminApi.md#getalllogs) | **GET** /logs | Get all log messages
*AdminApi* | [**getLogById**](docs/Api/AdminApi.md#getlogbyid) | **GET** /logs/{id} | Get a log message
*AdminApi* | [**getLoginStatistics**](docs/Api/AdminApi.md#getloginstatistics) | **GET** /logs/statistics/login | 
*AdminApi* | [**getSecuritylevelId**](docs/Api/AdminApi.md#getsecuritylevelid) | **GET** /securitylevels/{id} | Get a particular security level
*AdminApi* | [**getSecuritylevels**](docs/Api/AdminApi.md#getsecuritylevels) | **GET** /securitylevels | get all securitylevels
*AdminApi* | [**patchSecuritylevelId**](docs/Api/AdminApi.md#patchsecuritylevelid) | **PATCH** /securitylevels/{id} | Update the security level
*AdminApi* | [**postSecuritylevelId**](docs/Api/AdminApi.md#postsecuritylevelid) | **POST** /securitylevels/{id} | Create a new security Level
*CalendarApi* | [**createTemplate**](docs/Api/CalendarApi.md#createtemplate) | **POST** /calendars/appointments/templates | Create new appointment template
*CalendarApi* | [**deleteTemplate**](docs/Api/CalendarApi.md#deletetemplate) | **DELETE** /calendars/appointments/templates/{templateId} | Delete a appointment template identified by id
*CalendarApi* | [**getAllTemplates**](docs/Api/CalendarApi.md#getalltemplates) | **GET** /calendars/appointments/templates | get all appointment templates
*CalendarApi* | [**getCalendars**](docs/Api/CalendarApi.md#getcalendars) | **GET** /calendars | Your GET endpoint
*CalendarApi* | [**getCalendarsAppointments**](docs/Api/CalendarApi.md#getcalendarsappointments) | **GET** /calendars/appointments | Your GET endpoint
*CalendarApi* | [**getCalendarsCalendarIdAppointmentsAppointmentIdStartDate**](docs/Api/CalendarApi.md#getcalendarscalendaridappointmentsappointmentidstartdate) | **GET** /calendars/{calendarId}/appointments/{appointmentId}/{startDate} | Your GET endpoint
*CalendarApi* | [**getTemplateById**](docs/Api/CalendarApi.md#gettemplatebyid) | **GET** /calendars/appointments/templates/{templateId} | get a appointment template
*CalendarApi* | [**postCalendarsCalendarIdAppointments**](docs/Api/CalendarApi.md#postcalendarscalendaridappointments) | **POST** /calendars/{calendarId}/appointments | 
*CalendarApi* | [**updateTemplate**](docs/Api/CalendarApi.md#updatetemplate) | **PUT** /calendars/appointments/templates/{templateId} | update a appointment template identified by id
*CampusApi* | [**createNewCampus**](docs/Api/CampusApi.md#createnewcampus) | **POST** /campuses | 
*CampusApi* | [**deleteCampus**](docs/Api/CampusApi.md#deletecampus) | **DELETE** /campuses/{id} | 
*CampusApi* | [**getAllCampuses**](docs/Api/CampusApi.md#getallcampuses) | **GET** /campuses | Get all campuses
*CampusApi* | [**getCampus**](docs/Api/CampusApi.md#getcampus) | **GET** /campuses/{id} | 
*CampusApi* | [**updateCampus**](docs/Api/CampusApi.md#updatecampus) | **PUT** /campuses/{id} | 
*ChatApi* | [**createNewChat**](docs/Api/ChatApi.md#createnewchat) | **POST** /chat | Start new chat
*ChatApi* | [**deleteChat**](docs/Api/ChatApi.md#deletechat) | **DELETE** /chat/{guid} | Delete a chat
*ChatApi* | [**getAllChats**](docs/Api/ChatApi.md#getallchats) | **GET** /chat | Get all chats
*ChatApi* | [**updateChat**](docs/Api/ChatApi.md#updatechat) | **PATCH** /chat/{guid} | Update a chat
*CheckinApi* | [**checkin**](docs/Api/CheckinApi.md#checkin) | **POST** /groups/{groupId}/checkin | Checkin a person to a group
*CheckinApi* | [**getQRCodeCheckin**](docs/Api/CheckinApi.md#getqrcodecheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
*CheckinApi* | [**postCheckinPersons**](docs/Api/CheckinApi.md#postcheckinpersons) | **POST** /checkin/persons | Create new person and add to group
*CheckinApi* | [**putCheckinPersons**](docs/Api/CheckinApi.md#putcheckinpersons) | **PUT** /checkin/persons | Put existing person into group
*ContactLabelApi* | [**deleteContactlabel**](docs/Api/ContactLabelApi.md#deletecontactlabel) | **DELETE** /contactlabels/{id} | Delete Contact Label
*ContactLabelApi* | [**getContactlabel**](docs/Api/ContactLabelApi.md#getcontactlabel) | **GET** /contactlabels/{id} | Get Contact Label
*ContactLabelApi* | [**getContactlabels**](docs/Api/ContactLabelApi.md#getcontactlabels) | **GET** /contactlabels | Get All Contact Labels
*ContactLabelApi* | [**postContactlabels**](docs/Api/ContactLabelApi.md#postcontactlabels) | **POST** /contactlabels | Create new Contact Label
*ContactLabelApi* | [**putContactlabel**](docs/Api/ContactLabelApi.md#putcontactlabel) | **PUT** /contactlabels/{id} | Update Contact Label
*DepartmentApi* | [**getDepartments**](docs/Api/DepartmentApi.md#getdepartments) | **GET** /departments | Get all departments
*EventApi* | [**agendaExport**](docs/Api/EventApi.md#agendaexport) | **POST** /agendas/{agendaId}/export | Exports the agenda
*EventApi* | [**deletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopy**](docs/Api/EventApi.md#deletepersonideventseventidservicesserviceidexchangerequestscopy) | **DELETE** /{personId}/events/{eventId}/services/{serviceId}/exchangerequests/{requestId} | Delete a service exchange request
*EventApi* | [**deletePersonIdExchangerequestsRequestId**](docs/Api/EventApi.md#deletepersonidexchangerequestsrequestid) | **DELETE** /{personId}/exchangerequests/{requestId} | Decline a service exchange request
*EventApi* | [**getAgendaForEvent**](docs/Api/EventApi.md#getagendaforevent) | **GET** /events/{eventId}/agenda | Get agenda for event
*EventApi* | [**getAllEvents**](docs/Api/EventApi.md#getallevents) | **GET** /events | Get all events
*EventApi* | [**getEvent**](docs/Api/EventApi.md#getevent) | **GET** /events/{eventId} | Get a single event
*EventApi* | [**getEventIcal**](docs/Api/EventApi.md#geteventical) | **GET** /events/ical | 
*EventApi* | [**getEventMasterdata**](docs/Api/EventApi.md#geteventmasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot;
*EventApi* | [**getPersonEvents**](docs/Api/EventApi.md#getpersonevents) | **GET** /persons/{personId}/events | Get events that person is involved with
*EventApi* | [**getSongsOfAgenda**](docs/Api/EventApi.md#getsongsofagenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda
*EventApi* | [**personIdEventsEventIdServicesServiceIdExchangerequestsCandidatesGet**](docs/Api/EventApi.md#personideventseventidservicesserviceidexchangerequestscandidatesget) | **GET** /{personId}/events/{eventId}/services/{serviceId}/exchangerequests/candidates | Get candidates for service exchange request
*EventApi* | [**personIdEventsEventIdServicesServiceIdExchangerequestsGet**](docs/Api/EventApi.md#personideventseventidservicesserviceidexchangerequestsget) | **GET** /{personId}/events/{eventId}/services/{serviceId}/exchangerequests | Get all service exchange requests of a user for a service
*EventApi* | [**personIdExchangerequestsGet**](docs/Api/EventApi.md#personidexchangerequestsget) | **GET** /{personId}/exchangerequests | Get all service exchange requests that a user got
*EventApi* | [**postPersonIdEventsEventIdServicesServiceIdExchangerequests**](docs/Api/EventApi.md#postpersonideventseventidservicesserviceidexchangerequests) | **POST** /{personId}/events/{eventId}/services/{serviceId}/exchangerequests | Create a new service exchange request
*EventApi* | [**putPersonIdExchangerequestsRequestId**](docs/Api/EventApi.md#putpersonidexchangerequestsrequestid) | **PUT** /{personId}/exchangerequests/{requestId} | Accept a service exchange request
*EventApi* | [**sendAgendaEmail**](docs/Api/EventApi.md#sendagendaemail) | **POST** /agendas/send | Send agenda email to recipients
*EventApi* | [**sendEventEmail**](docs/Api/EventApi.md#sendeventemail) | **POST** /events/send | Send Mail to Event Participants
*EventApi* | [**startStopEventChat**](docs/Api/EventApi.md#startstopeventchat) | **POST** /events/{eventId}/chat | Start or stop an event chat
*FieldApi* | [**getAllFields**](docs/Api/FieldApi.md#getallfields) | **GET** /fields | Get all fields
*FileApi* | [**deleteFiles**](docs/Api/FileApi.md#deletefiles) | **DELETE** /files/{domainType}/{domainIdentifier} | Delete files that are matching the domainType and domainIdentifier
*FileApi* | [**deleteFilesId**](docs/Api/FileApi.md#deletefilesid) | **DELETE** /files/{id} | 
*FileApi* | [**getFileWithDomainType**](docs/Api/FileApi.md#getfilewithdomaintype) | **GET** /files/{domainType}/{domainIdentifier} | CRUD for files
*FileApi* | [**getFilesMetadata**](docs/Api/FileApi.md#getfilesmetadata) | **GET** /files/{fileId}/metadata | Get Metadata for file
*FileApi* | [**patchFilesId**](docs/Api/FileApi.md#patchfilesid) | **PATCH** /files/{id} | 
*FileApi* | [**putImageOptions**](docs/Api/FileApi.md#putimageoptions) | **PUT** /images/{id}/options | set image-options
*FileApi* | [**uploadFiles**](docs/Api/FileApi.md#uploadfiles) | **POST** /files/{domainType}/{domainIdentifier} | Upload files
*FinanceApi* | [**applyFinanceTemplate**](docs/Api/FinanceApi.md#applyfinancetemplate) | **POST** /finance/templates/{id} | Apply finance template
*FinanceApi* | [**batchTransaction**](docs/Api/FinanceApi.md#batchtransaction) | **PATCH** /finance/transactions | Transaction Batch Processing
*FinanceApi* | [**createAllFinanceDonationReceipts**](docs/Api/FinanceApi.md#createallfinancedonationreceipts) | **POST** /finance/donators/receipts | Create donation receipts
*FinanceApi* | [**createCashDiscount**](docs/Api/FinanceApi.md#createcashdiscount) | **POST** /finance/cashdiscounts | Create new cash discout
*FinanceApi* | [**createCostCenter**](docs/Api/FinanceApi.md#createcostcenter) | **POST** /finance/costcenters | Create new cost center
*FinanceApi* | [**createNewAccount**](docs/Api/FinanceApi.md#createnewaccount) | **POST** /finance/accounts | Create new account
*FinanceApi* | [**createNewAccountClass**](docs/Api/FinanceApi.md#createnewaccountclass) | **POST** /finance/accountclasses | Create new account class
*FinanceApi* | [**createNewAccountGroup**](docs/Api/FinanceApi.md#createnewaccountgroup) | **POST** /finance/accountgroups | Create new account group
*FinanceApi* | [**createNewAccountType**](docs/Api/FinanceApi.md#createnewaccounttype) | **POST** /finance/accounttypes | Create new account type
*FinanceApi* | [**createNewAccountingPeriod**](docs/Api/FinanceApi.md#createnewaccountingperiod) | **POST** /finance/accountingperiods | Create new accounting period
*FinanceApi* | [**createNewClient**](docs/Api/FinanceApi.md#createnewclient) | **POST** /finance/clients | Create new client
*FinanceApi* | [**createNewTransaction**](docs/Api/FinanceApi.md#createnewtransaction) | **POST** /finance/transactions | Create new transaction
*FinanceApi* | [**createNewTransactionPurpose**](docs/Api/FinanceApi.md#createnewtransactionpurpose) | **POST** /finance/transactionpurposes | Create new transaction purpose
*FinanceApi* | [**createTaxRate**](docs/Api/FinanceApi.md#createtaxrate) | **POST** /finance/taxrates | Create new tax rate
*FinanceApi* | [**createTaxType**](docs/Api/FinanceApi.md#createtaxtype) | **POST** /finance/taxtypes | Create new tax type
*FinanceApi* | [**deleteAccount**](docs/Api/FinanceApi.md#deleteaccount) | **DELETE** /finance/accounts/{id} | Delete account
*FinanceApi* | [**deleteAccountClass**](docs/Api/FinanceApi.md#deleteaccountclass) | **DELETE** /finance/accountclasses/{id} | Delete account class
*FinanceApi* | [**deleteAccountGroup**](docs/Api/FinanceApi.md#deleteaccountgroup) | **DELETE** /finance/accountgroups/{id} | Delete account group
*FinanceApi* | [**deleteAccountType**](docs/Api/FinanceApi.md#deleteaccounttype) | **DELETE** /finance/accounttypes/{id} | Delete account type
*FinanceApi* | [**deleteAccountingPeriod**](docs/Api/FinanceApi.md#deleteaccountingperiod) | **DELETE** /finance/accountingperiods/{id} | Delete accounting period
*FinanceApi* | [**deleteAccountsForAccountingPeriod**](docs/Api/FinanceApi.md#deleteaccountsforaccountingperiod) | **DELETE** /finance/accountingperiods/{id}/accounts | Delete accounts for accounting period
*FinanceApi* | [**deleteCashDiscount**](docs/Api/FinanceApi.md#deletecashdiscount) | **DELETE** /finance/cashdiscounts/{id} | Delete cash discount
*FinanceApi* | [**deleteClient**](docs/Api/FinanceApi.md#deleteclient) | **DELETE** /finance/clients/{id} | Delete client
*FinanceApi* | [**deleteCostCenter**](docs/Api/FinanceApi.md#deletecostcenter) | **DELETE** /finance/costcenters/{id} | Delete cost center
*FinanceApi* | [**deleteFinanceDonationReceipts**](docs/Api/FinanceApi.md#deletefinancedonationreceipts) | **DELETE** /finance/donators/receipts | Delete all donation receipts
*FinanceApi* | [**deleteFinanceDonatorsDonatorCoupleId**](docs/Api/FinanceApi.md#deletefinancedonatorsdonatorcoupleid) | **DELETE** /finance/donators/{donatorCoupleId}/receipts | delete-donation-receipt
*FinanceApi* | [**deleteTaxRate**](docs/Api/FinanceApi.md#deletetaxrate) | **DELETE** /finance/taxrates/{id} | Delete tax rate
*FinanceApi* | [**deleteTaxType**](docs/Api/FinanceApi.md#deletetaxtype) | **DELETE** /finance/taxtypes/{id} | Delete tax type
*FinanceApi* | [**deleteTransaction**](docs/Api/FinanceApi.md#deletetransaction) | **DELETE** /finance/transactions/{id} | Delete transaction
*FinanceApi* | [**deleteTransactionPurpose**](docs/Api/FinanceApi.md#deletetransactionpurpose) | **DELETE** /finance/transactionpurposes/{id} | Delete transaction purpose
*FinanceApi* | [**exportFinanceTemplate**](docs/Api/FinanceApi.md#exportfinancetemplate) | **GET** /finance/templates/export | Epports a finance template based on the masterdata for a given accounting period
*FinanceApi* | [**getAccountById**](docs/Api/FinanceApi.md#getaccountbyid) | **GET** /finance/accounts/{id} | Get a account
*FinanceApi* | [**getAccountClassById**](docs/Api/FinanceApi.md#getaccountclassbyid) | **GET** /finance/accountclasses/{id} | Get a account class
*FinanceApi* | [**getAccountGroupById**](docs/Api/FinanceApi.md#getaccountgroupbyid) | **GET** /finance/accountgroups/{id} | Get a account group
*FinanceApi* | [**getAccountTypeById**](docs/Api/FinanceApi.md#getaccounttypebyid) | **GET** /finance/accounttypes/{id} | Get a account type
*FinanceApi* | [**getAccountingPeriodById**](docs/Api/FinanceApi.md#getaccountingperiodbyid) | **GET** /finance/accountingperiods/{id} | Get a accounting period
*FinanceApi* | [**getAllAccountClasses**](docs/Api/FinanceApi.md#getallaccountclasses) | **GET** /finance/accountclasses | Get all account classes ordered by id
*FinanceApi* | [**getAllAccountGroups**](docs/Api/FinanceApi.md#getallaccountgroups) | **GET** /finance/accountgroups | Get all account groups ordered by id
*FinanceApi* | [**getAllAccountTypes**](docs/Api/FinanceApi.md#getallaccounttypes) | **GET** /finance/accounttypes | Get all account types ordered by id
*FinanceApi* | [**getAllAccountingPeriods**](docs/Api/FinanceApi.md#getallaccountingperiods) | **GET** /finance/accountingperiods | Get all accounting periods
*FinanceApi* | [**getAllAccounts**](docs/Api/FinanceApi.md#getallaccounts) | **GET** /finance/accounts | Get all accounts ordered by accounting period and number
*FinanceApi* | [**getAllCashDiscounts**](docs/Api/FinanceApi.md#getallcashdiscounts) | **GET** /finance/cashdiscounts | Get all cash discounts ordered by id
*FinanceApi* | [**getAllClients**](docs/Api/FinanceApi.md#getallclients) | **GET** /finance/clients | Get all clients
*FinanceApi* | [**getAllCostCenters**](docs/Api/FinanceApi.md#getallcostcenters) | **GET** /finance/costcenters | Get all cost centers ordered by accounting period and number ascending
*FinanceApi* | [**getAllDonationReceipts**](docs/Api/FinanceApi.md#getalldonationreceipts) | **GET** /finance/donators/receipts | Get all donators including their donation information (e.g. donation amount)
*FinanceApi* | [**getAllDonators**](docs/Api/FinanceApi.md#getalldonators) | **GET** /finance/donators | Get all donators including their donation information (e.g. donation amount)
*FinanceApi* | [**getAllFinanceTemplates**](docs/Api/FinanceApi.md#getallfinancetemplates) | **GET** /finance/templates | Get all finance templates
*FinanceApi* | [**getAllTaxRates**](docs/Api/FinanceApi.md#getalltaxrates) | **GET** /finance/taxrates | Get all tax rates ordered by id
*FinanceApi* | [**getAllTaxTypes**](docs/Api/FinanceApi.md#getalltaxtypes) | **GET** /finance/taxtypes | Get all tax types
*FinanceApi* | [**getAllTransactionPurposes**](docs/Api/FinanceApi.md#getalltransactionpurposes) | **GET** /finance/transactionpurposes | Get all transaction purposes
*FinanceApi* | [**getAllTransactions**](docs/Api/FinanceApi.md#getalltransactions) | **GET** /finance/transactions | Get all transaction
*FinanceApi* | [**getCashDiscount**](docs/Api/FinanceApi.md#getcashdiscount) | **GET** /finance/cashdiscounts/{id} | Get a cash discount
*FinanceApi* | [**getClientById**](docs/Api/FinanceApi.md#getclientbyid) | **GET** /finance/clients/{id} | Get a client
*FinanceApi* | [**getCostCenter**](docs/Api/FinanceApi.md#getcostcenter) | **GET** /finance/costcenters/{id} | Get a cost center
*FinanceApi* | [**getDonationReceipt**](docs/Api/FinanceApi.md#getdonationreceipt) | **GET** /finance/donationreceipt | Get donation receipt PDFs (cover letter and attachment)
*FinanceApi* | [**getFinanceAccountsCsv**](docs/Api/FinanceApi.md#getfinanceaccountscsv) | **GET** /finance/accounts/csv | Your GET endpoint
*FinanceApi* | [**getFinanceDonatorsDonatorCoupleId**](docs/Api/FinanceApi.md#getfinancedonatorsdonatorcoupleid) | **GET** /finance/donators/{donatorCoupleId}/receipts | Get donation receipt PDFs (cover letter and attachment)
*FinanceApi* | [**getTaxRate**](docs/Api/FinanceApi.md#gettaxrate) | **GET** /finance/taxrates/{id} | Get a tax rate
*FinanceApi* | [**getTaxType**](docs/Api/FinanceApi.md#gettaxtype) | **GET** /finance/taxtypes/{id} | Get a tax type
*FinanceApi* | [**getTransactionById**](docs/Api/FinanceApi.md#gettransactionbyid) | **GET** /finance/transactions/{id} | Get a transaction
*FinanceApi* | [**getTransactionPurposeById**](docs/Api/FinanceApi.md#gettransactionpurposebyid) | **GET** /finance/transactionpurposes/{id} | Get a transaction purpose
*FinanceApi* | [**postFinanceCostcentersBulkcreate**](docs/Api/FinanceApi.md#postfinancecostcentersbulkcreate) | **POST** /finance/costcenters/bulkcreate | Import many cost centers
*FinanceApi* | [**postFinanceReports**](docs/Api/FinanceApi.md#postfinancereports) | **POST** /finance/reports/{reportType} | Issue new Finance Report
*FinanceApi* | [**updateAccount**](docs/Api/FinanceApi.md#updateaccount) | **PUT** /finance/accounts/{id} | Update account
*FinanceApi* | [**updateAccountClass**](docs/Api/FinanceApi.md#updateaccountclass) | **PUT** /finance/accountclasses/{id} | Update account class
*FinanceApi* | [**updateAccountGroup**](docs/Api/FinanceApi.md#updateaccountgroup) | **PUT** /finance/accountgroups/{id} | Update account group
*FinanceApi* | [**updateAccountType**](docs/Api/FinanceApi.md#updateaccounttype) | **PUT** /finance/accounttypes/{id} | Update account type
*FinanceApi* | [**updateAccountingPeriod**](docs/Api/FinanceApi.md#updateaccountingperiod) | **PUT** /finance/accountingperiods/{id} | Update accounting period
*FinanceApi* | [**updateCashDiscount**](docs/Api/FinanceApi.md#updatecashdiscount) | **PUT** /finance/cashdiscounts/{id} | Update cash discount
*FinanceApi* | [**updateClient**](docs/Api/FinanceApi.md#updateclient) | **PUT** /finance/clients/{id} | Update client
*FinanceApi* | [**updateCostCenter**](docs/Api/FinanceApi.md#updatecostcenter) | **PUT** /finance/costcenters/{id} | Update cost center
*FinanceApi* | [**updateTaxRate**](docs/Api/FinanceApi.md#updatetaxrate) | **PUT** /finance/taxrates/{id} | Update tax rate
*FinanceApi* | [**updateTaxType**](docs/Api/FinanceApi.md#updatetaxtype) | **PUT** /finance/taxtypes/{id} | Update tax type
*FinanceApi* | [**updateTransaction**](docs/Api/FinanceApi.md#updatetransaction) | **PUT** /finance/transactions/{id} | Update transaction
*FinanceApi* | [**updateTransactionPurpose**](docs/Api/FinanceApi.md#updatetransactionpurpose) | **PUT** /finance/transactionpurposes/{id} | Update transaction purpose
*GeneralApi* | [**deleteSimulate**](docs/Api/GeneralApi.md#deletesimulate) | **DELETE** /simulate | 
*GeneralApi* | [**getApiInfo**](docs/Api/GeneralApi.md#getapiinfo) | **GET** /info | Information about API
*GeneralApi* | [**getCsrftoken**](docs/Api/GeneralApi.md#getcsrftoken) | **GET** /csrftoken | CSRF token for the current user
*GeneralApi* | [**getCurrentUser**](docs/Api/GeneralApi.md#getcurrentuser) | **GET** /whoami | Currently logged in user.
*GeneralApi* | [**getSearch**](docs/Api/GeneralApi.md#getsearch) | **GET** /search | Global Search
*GeneralApi* | [**postLogin**](docs/Api/GeneralApi.md#postlogin) | **POST** /login | Login with username
*GeneralApi* | [**postSimulate**](docs/Api/GeneralApi.md#postsimulate) | **POST** /simulate | 
*GroupApi* | [**checkin**](docs/Api/GroupApi.md#checkin) | **POST** /groups/{groupId}/checkin | Checkin a person to a group
*GroupApi* | [**createMeeting**](docs/Api/GroupApi.md#createmeeting) | **POST** /groups/{groupId}/meetings | Create a group meeting
*GroupApi* | [**createOrUpdateMember**](docs/Api/GroupApi.md#createorupdatemember) | **PUT** /groups/{groupId}/members/{personId} | Create/Update a group member
*GroupApi* | [**deleteAutomaticEmail**](docs/Api/GroupApi.md#deleteautomaticemail) | **DELETE** /groups/{groupId}/emails/{emailId} | Delete automatic email
*GroupApi* | [**deleteGroup**](docs/Api/GroupApi.md#deletegroup) | **DELETE** /groups/{groupId} | 
*GroupApi* | [**deleteGroupsGroupIdMeetingsMeetingId**](docs/Api/GroupApi.md#deletegroupsgroupidmeetingsmeetingid) | **DELETE** /groups/{groupId}/meetings/{meetingId} | 
*GroupApi* | [**deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId**](docs/Api/GroupApi.md#deletegroupsgroupidmeetingsmeetingidmembersmemberid) | **DELETE** /groups/{groupId}/meetings/{meetingId}/members/{memberId} | Revoke checkin
*GroupApi* | [**deleteMember**](docs/Api/GroupApi.md#deletemember) | **DELETE** /groups/{groupId}/members/{personId} | Delete a group member
*GroupApi* | [**getAllGroupMembers**](docs/Api/GroupApi.md#getallgroupmembers) | **GET** /groups/{groupId}/members | Get all group members
*GroupApi* | [**getAllGroupsForPerson**](docs/Api/GroupApi.md#getallgroupsforperson) | **GET** /persons/{personId}/groups | Get all groups a member is in
*GroupApi* | [**getAllMeetings**](docs/Api/GroupApi.md#getallmeetings) | **GET** /groups/{groupId}/meetings | Get all group meetings for a specific group
*GroupApi* | [**getAutomaticEmail**](docs/Api/GroupApi.md#getautomaticemail) | **GET** /groups/{groupId}/emails/{emailId} | Get one automatic email
*GroupApi* | [**getAutomaticEmails**](docs/Api/GroupApi.md#getautomaticemails) | **GET** /groups/{groupId}/emails | Get all automatic emails of a group
*GroupApi* | [**getGroup**](docs/Api/GroupApi.md#getgroup) | **GET** /groups/{groupId} | Get a group
*GroupApi* | [**getGroupForHomepage**](docs/Api/GroupApi.md#getgroupforhomepage) | **GET** /publicgroups/{groupId}/{hash} | Public information of group
*GroupApi* | [**getGroupHomepage**](docs/Api/GroupApi.md#getgrouphomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
*GroupApi* | [**getGroupRoles**](docs/Api/GroupApi.md#getgrouproles) | **GET** /groups/{groupId}/roles | Get all roles for this group
*GroupApi* | [**getGroupStatistics**](docs/Api/GroupApi.md#getgroupstatistics) | **GET** /groups/{groupId}/statistics | Fetch facts about group
*GroupApi* | [**getGroups**](docs/Api/GroupApi.md#getgroups) | **GET** /groups | Get all groups
*GroupApi* | [**getGroupsGroupIdMeetingsMeetingIdMembers**](docs/Api/GroupApi.md#getgroupsgroupidmeetingsmeetingidmembers) | **GET** /groups/{groupId}/meetings/{meetingId}/members | Get Group Meeting Members
*GroupApi* | [**getGroupsGroupIdMemberfields**](docs/Api/GroupApi.md#getgroupsgroupidmemberfields) | **GET** /groups/{groupId}/memberfields | Get Group member fields
*GroupApi* | [**getGroupsGroupIdMembersStatistics**](docs/Api/GroupApi.md#getgroupsgroupidmembersstatistics) | **GET** /groups/{groupId}/members/statistics | Get statistics for group members
*GroupApi* | [**getGroupsGroupIdTags**](docs/Api/GroupApi.md#getgroupsgroupidtags) | **GET** /groups/{groupId}/tags | Fetch group tags
*GroupApi* | [**getGroupsHierarchies**](docs/Api/GroupApi.md#getgroupshierarchies) | **GET** /groups/hierarchies | Get all group hierarchies
*GroupApi* | [**getGroupsMembers**](docs/Api/GroupApi.md#getgroupsmembers) | **GET** /groups/members | Get all group members
*GroupApi* | [**getGrupsIdPlaces**](docs/Api/GroupApi.md#getgrupsidplaces) | **GET** /groups/{groupId}/places | Get all places of a group
*GroupApi* | [**getPersonMasterdata**](docs/Api/GroupApi.md#getpersonmasterdata) | **GET** /person/masterdata | Get person &amp; groups masterdata
*GroupApi* | [**getPublicgroupsGroupIdForm**](docs/Api/GroupApi.md#getpublicgroupsgroupidform) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
*GroupApi* | [**getQRCodeCheckin**](docs/Api/GroupApi.md#getqrcodecheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
*GroupApi* | [**issueSignUpToken**](docs/Api/GroupApi.md#issuesignuptoken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
*GroupApi* | [**optIns**](docs/Api/GroupApi.md#optins) | **GET** /groups/{groupId}/optins | Get Opt In status of group members
*GroupApi* | [**patchGroupsGroupIdRolesRoleId**](docs/Api/GroupApi.md#patchgroupsgroupidrolesroleid) | **PATCH** /groups/{groupId}/roles/{roleId} | save role
*GroupApi* | [**postAutomaticEmail**](docs/Api/GroupApi.md#postautomaticemail) | **POST** /groups/{groupId}/emails | Save new automatic email for a group role
*GroupApi* | [**postGroups**](docs/Api/GroupApi.md#postgroups) | **POST** /groups | Create Group
*GroupApi* | [**postGroupsGroupIdMeetingsMeetingIdMembersMissing**](docs/Api/GroupApi.md#postgroupsgroupidmeetingsmeetingidmembersmissing) | **POST** /groups/{groupId}/meetings/{meetingId}/members/missing | 
*GroupApi* | [**postPublicgroupsGroupIdMailToLeaders**](docs/Api/GroupApi.md#postpublicgroupsgroupidmailtoleaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
*GroupApi* | [**postPublicgroupsGroupIdSignup**](docs/Api/GroupApi.md#postpublicgroupsgroupidsignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group
*GroupApi* | [**putAutomaticEmail**](docs/Api/GroupApi.md#putautomaticemail) | **PUT** /groups/{groupId}/emails/{emailId} | Update automatic email
*GroupApi* | [**putGroupsGroupIdMeetingsMeetingId**](docs/Api/GroupApi.md#putgroupsgroupidmeetingsmeetingid) | **PUT** /groups/{groupId}/meetings/{meetingId} | 
*GroupApi* | [**startStopGroupChat**](docs/Api/GroupApi.md#startstopgroupchat) | **POST** /groups/{groupId}/chat | Start or stop an event chat
*GroupHomepageApi* | [**getGroupForHomepage**](docs/Api/GroupHomepageApi.md#getgroupforhomepage) | **GET** /publicgroups/{groupId}/{hash} | Public information of group
*GroupHomepageApi* | [**getGroupHomepage**](docs/Api/GroupHomepageApi.md#getgrouphomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
*GroupHomepageApi* | [**getGroupHomepages**](docs/Api/GroupHomepageApi.md#getgrouphomepages) | **GET** /grouphomepages | Get all Grouphomepages
*GroupHomepageApi* | [**getPublicGroupSignoutData**](docs/Api/GroupHomepageApi.md#getpublicgroupsignoutdata) | **GET** /publicgroups/{groupId}/signoutdata | 
*GroupHomepageApi* | [**getPublicgroup**](docs/Api/GroupHomepageApi.md#getpublicgroup) | **GET** /publicgroups/{groupId} | 
*GroupHomepageApi* | [**getPublicgroupsGroupIdForm**](docs/Api/GroupHomepageApi.md#getpublicgroupsgroupidform) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
*GroupHomepageApi* | [**getPublicgroupsGroupIdPossiblerequesters**](docs/Api/GroupHomepageApi.md#getpublicgroupsgroupidpossiblerequesters) | **GET** /publicgroups/{groupId}/possiblerequesters | Your GET endpoint
*GroupHomepageApi* | [**issueSignUpToken**](docs/Api/GroupHomepageApi.md#issuesignuptoken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
*GroupHomepageApi* | [**postPublicgroupsGroupIdMailToLeaders**](docs/Api/GroupHomepageApi.md#postpublicgroupsgroupidmailtoleaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
*GroupHomepageApi* | [**postPublicgroupsGroupIdSignup**](docs/Api/GroupHomepageApi.md#postpublicgroupsgroupidsignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group
*HiddenApi* | [**deleteBookings**](docs/Api/HiddenApi.md#deletebookings) | **DELETE** /bookings | 
*HiddenApi* | [**deleteCalendarsCalendarIdAppointmentsAppointmentId**](docs/Api/HiddenApi.md#deletecalendarscalendaridappointmentsappointmentid) | **DELETE** /calendars/{calendarId}/appointments/{appointmentId} | deleteAppointment
*HiddenApi* | [**deleteFinanceDonators**](docs/Api/HiddenApi.md#deletefinancedonators) | **DELETE** /finance/donators | 
*HiddenApi* | [**deletePersonLoginToken**](docs/Api/HiddenApi.md#deletepersonlogintoken) | **DELETE** /persons/{personId}/logintoken | TODO
*HiddenApi* | [**deletePersonPrivacyPolicy**](docs/Api/HiddenApi.md#deletepersonprivacypolicy) | **DELETE** /persons/{personId}/privacypolicy | TODO
*HiddenApi* | [**deletePersonTwofactor**](docs/Api/HiddenApi.md#deletepersontwofactor) | **DELETE** /persons/{personId}/settings/twofactor | TODO
*HiddenApi* | [**deleteStatement**](docs/Api/HiddenApi.md#deletestatement) | **DELETE** /finance/accountingperiods/{id}/statements/{statementId} | TODO
*HiddenApi* | [**fetchLicense**](docs/Api/HiddenApi.md#fetchlicense) | **GET** /license/fetch | TODO
*HiddenApi* | [**generateSuggestions**](docs/Api/HiddenApi.md#generatesuggestions) | **POST** /finance/accountingperiods/{id}/statements/{statementId}/suggestions | TODO
*HiddenApi* | [**getAccountMovements**](docs/Api/HiddenApi.md#getaccountmovements) | **GET** /finance/accountingperiods/{id}/accounts/{accountId}/movements | TODO
*HiddenApi* | [**getAccountStatementMovements**](docs/Api/HiddenApi.md#getaccountstatementmovements) | **GET** /finance/accountingperiods/{id}/accounts/{accountId}/statements/{statementId}/movements | TODO
*HiddenApi* | [**getAccountStatements**](docs/Api/HiddenApi.md#getaccountstatements) | **GET** /finance/accountingperiods/{id}/accounts/{accountId}/statements | TODO
*HiddenApi* | [**getAccountsExport**](docs/Api/HiddenApi.md#getaccountsexport) | **GET** /finance/accounts/export | TODO
*HiddenApi* | [**getApiProfiles**](docs/Api/HiddenApi.md#getapiprofiles) | **GET** /profiles | Get all profiles
*HiddenApi* | [**getCalendarMeetingRequests**](docs/Api/HiddenApi.md#getcalendarmeetingrequests) | **GET** /calendars/{calendarId}/appointments/{appointmentId}/meetingrequests | TODO
*HiddenApi* | [**getConfig**](docs/Api/HiddenApi.md#getconfig) | **GET** /config | TODO
*HiddenApi* | [**getFile**](docs/Api/HiddenApi.md#getfile) | **GET** /files/{id} | TODO
*HiddenApi* | [**getFinanceTransactionsDatevexport**](docs/Api/HiddenApi.md#getfinancetransactionsdatevexport) | **GET** /finance/transactions/datevexport | datevExport
*HiddenApi* | [**getGroupQRCodeCheckin**](docs/Api/HiddenApi.md#getgroupqrcodecheckin) | **GET** /groups/{groupId}/qrcodecheckin | TODO
*HiddenApi* | [**getGroupQRCodeCheckinPerson**](docs/Api/HiddenApi.md#getgroupqrcodecheckinperson) | **GET** /groups/{groupId}/qrcodecheckin/{personId} | TODO
*HiddenApi* | [**getGroupQRCodeCheckinPersonSend**](docs/Api/HiddenApi.md#getgroupqrcodecheckinpersonsend) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/send | TODO
*HiddenApi* | [**getLabelsTotal**](docs/Api/HiddenApi.md#getlabelstotal) | **GET** /labels/totals | TODO
*HiddenApi* | [**getMenu**](docs/Api/HiddenApi.md#getmenu) | **GET** /menu | TODO
*HiddenApi* | [**getPRMasterdata**](docs/Api/HiddenApi.md#getprmasterdata) | **GET** /pr/masterdata | TODO
*HiddenApi* | [**getPersonLoginstring**](docs/Api/HiddenApi.md#getpersonloginstring) | **GET** /person/{personId}/loginstring | TODO
*HiddenApi* | [**getPersonPrivacyPolicy**](docs/Api/HiddenApi.md#getpersonprivacypolicy) | **GET** /persons/{personId}/privacypolicy | TODO
*HiddenApi* | [**getPersonTwofactor**](docs/Api/HiddenApi.md#getpersontwofactor) | **GET** /persons/{personId}/settings/twofactor | TODO
*HiddenApi* | [**getPersonTwofactorForce**](docs/Api/HiddenApi.md#getpersontwofactorforce) | **GET** /persons/{personId}/settings/twofactor/force | TODO
*HiddenApi* | [**getPersonsEventServices**](docs/Api/HiddenApi.md#getpersonseventservices) | **GET** /persons/{personId}/events/{eventId}/services | TODO
*HiddenApi* | [**getPersonsExport**](docs/Api/HiddenApi.md#getpersonsexport) | **GET** /persons/export | TODO
*HiddenApi* | [**getPersonsSearchOld**](docs/Api/HiddenApi.md#getpersonssearchold) | **GET** /persons/search_old | TODO
*HiddenApi* | [**getProfilesChurch**](docs/Api/HiddenApi.md#getprofileschurch) | **GET** /profiles/church | Get a profile
*HiddenApi* | [**getPublicGroupSignout**](docs/Api/HiddenApi.md#getpublicgroupsignout) | **GET** /publicgroups/{groupId}/signout | TODO
*HiddenApi* | [**getSamlLogin**](docs/Api/HiddenApi.md#getsamllogin) | **GET** /saml/login | TODO
*HiddenApi* | [**getSamlMetadata**](docs/Api/HiddenApi.md#getsamlmetadata) | **GET** /saml/metadata | TODO
*HiddenApi* | [**getSlugcheck**](docs/Api/HiddenApi.md#getslugcheck) | **GET** /profiles/slugcheck/{slug} | Check if a finder slug is free
*HiddenApi* | [**getStatements**](docs/Api/HiddenApi.md#getstatements) | **GET** /finance/accountingperiods/{id}/accounts/statements | TODO
*HiddenApi* | [**getTransactionsCSV**](docs/Api/HiddenApi.md#gettransactionscsv) | **GET** /finance/transactions/csv | TODO deprecated
*HiddenApi* | [**getTransactionsExport**](docs/Api/HiddenApi.md#gettransactionsexport) | **GET** /finance/transactions/export | TODO
*HiddenApi* | [**getTransactionsSummary**](docs/Api/HiddenApi.md#gettransactionssummary) | **GET** /finance/transactions/summary | TODO
*HiddenApi* | [**getUserRules**](docs/Api/HiddenApi.md#getuserrules) | **GET** /finance/accountingperiods/{id}/userrules | TODO
*HiddenApi* | [**patchAccountStatementMovementSuggestion**](docs/Api/HiddenApi.md#patchaccountstatementmovementsuggestion) | **PATCH** /finance/accountingperiods/{id}/accounts/{accountId}/statements/{statementId}/movements/{movementId}/suggestions | TODO
*HiddenApi* | [**patchFileWithDomainType**](docs/Api/HiddenApi.md#patchfilewithdomaintype) | **PATCH** /files/{domainType}/{domainIdentifier} | TODO
*HiddenApi* | [**patchGroup**](docs/Api/HiddenApi.md#patchgroup) | **PATCH** /groups/{groupId} | TODO
*HiddenApi* | [**postAccountStatementMovement**](docs/Api/HiddenApi.md#postaccountstatementmovement) | **POST** /finance/accountingperiods/{id}/accounts/{accountId}/statements/{statementId}/movements/{movementId} | TODO
*HiddenApi* | [**postBookings**](docs/Api/HiddenApi.md#postbookings) | **POST** /bookings | 
*HiddenApi* | [**postBulkAccounts**](docs/Api/HiddenApi.md#postbulkaccounts) | **POST** /finance/accounts/bulkcreate | TODO
*HiddenApi* | [**postBulkTransactions**](docs/Api/HiddenApi.md#postbulktransactions) | **POST** /finance/transactions/bulkcreate | TODO
*HiddenApi* | [**postCostCenterExport**](docs/Api/HiddenApi.md#postcostcenterexport) | **POST** /finance/costcenters/export | TODO
*HiddenApi* | [**postEventIcal**](docs/Api/HiddenApi.md#posteventical) | **POST** /events/ical | TODO
*HiddenApi* | [**postJobLogs**](docs/Api/HiddenApi.md#postjoblogs) | **POST** /jobs/{id}/logs | TODO
*HiddenApi* | [**postLabels**](docs/Api/HiddenApi.md#postlabels) | **POST** /labels | TODO
*HiddenApi* | [**postLoginTotp**](docs/Api/HiddenApi.md#postlogintotp) | **POST** /login/totp | TODO
*HiddenApi* | [**postNps**](docs/Api/HiddenApi.md#postnps) | **POST** /nps | Save NPS score
*HiddenApi* | [**postPersonTwofactor**](docs/Api/HiddenApi.md#postpersontwofactor) | **POST** /persons/{personId}/settings/twofactor | TODO
*HiddenApi* | [**postSamlAcs**](docs/Api/HiddenApi.md#postsamlacs) | **POST** /saml/acs | TODO
*HiddenApi* | [**postStatements**](docs/Api/HiddenApi.md#poststatements) | **POST** /finance/accountingperiods/{id}/statements | TODO
*HiddenApi* | [**postTwofactorTotp**](docs/Api/HiddenApi.md#posttwofactortotp) | **POST** /twofactor/totp | TODO
*HiddenApi* | [**postWikiCategory**](docs/Api/HiddenApi.md#postwikicategory) | **POST** /wiki/categories | TODO
*HiddenApi* | [**putBookings**](docs/Api/HiddenApi.md#putbookings) | **PUT** /bookings | 
*HiddenApi* | [**putCalendarMeetingRequests**](docs/Api/HiddenApi.md#putcalendarmeetingrequests) | **PUT** /calendars/{calendarId}/appointments/{appointmentId}/meetingrequests/{meetingRequestId} | TODO
*HiddenApi* | [**putCalendarsCalendarIdAppointmentsAppointmentId**](docs/Api/HiddenApi.md#putcalendarscalendaridappointmentsappointmentid) | **PUT** /calendars/{calendarId}/appointments/{appointmentId} | updateAppointment
*HiddenApi* | [**putConfig**](docs/Api/HiddenApi.md#putconfig) | **PUT** /config | TODO
*HiddenApi* | [**putJobStatus**](docs/Api/HiddenApi.md#putjobstatus) | **PUT** /jobs/{id}/status | TODO
*HiddenApi* | [**putPersonPassword**](docs/Api/HiddenApi.md#putpersonpassword) | **PUT** /persons/{personId}/password | TODO
*HiddenApi* | [**putPersonPrivacyPolicy**](docs/Api/HiddenApi.md#putpersonprivacypolicy) | **PUT** /persons/{personId}/privacypolicy | TODO
*HiddenApi* | [**putPersonTwofactor**](docs/Api/HiddenApi.md#putpersontwofactor) | **PUT** /persons/{personId}/settings/twofactor | TODO
*HiddenApi* | [**putPersonTwofactorForce**](docs/Api/HiddenApi.md#putpersontwofactorforce) | **PUT** /persons/{personId}/settings/twofactor/force | TODO
*HiddenApi* | [**putProfilesChurch**](docs/Api/HiddenApi.md#putprofileschurch) | **PUT** /profiles/church | 
*HiddenApi* | [**putStatement**](docs/Api/HiddenApi.md#putstatement) | **PUT** /finance/accountingperiods/{id}/statements/{statementId} | TODO
*HiddenApi* | [**putUserRules**](docs/Api/HiddenApi.md#putuserrules) | **PUT** /finance/accountingperiods/{id}/userrules | TODO
*HiddenApi* | [**putWikiCategory**](docs/Api/HiddenApi.md#putwikicategory) | **PUT** /wiki/categories/{wikiCategoryId} | TODO
*HiddenApi* | [**startWebsiteTest**](docs/Api/HiddenApi.md#startwebsitetest) | **GET** /website/starttest | TODO
*JobApi* | [**getJobs**](docs/Api/JobApi.md#getjobs) | **GET** /jobs | Your GET endpoint
*MasterDataApi* | [**fetchMasterDataPerson**](docs/Api/MasterDataApi.md#fetchmasterdataperson) | **GET** /masterdata/person | Fetch all master data for the module \&quot;People &amp; Groups\&quot;
*MasterDataApi* | [**getAllData**](docs/Api/MasterDataApi.md#getalldata) | **GET** /finance/masterdata | Get a master data for finance module
*MasterDataApi* | [**getAllGroupTypeRoles**](docs/Api/MasterDataApi.md#getallgrouptyperoles) | **GET** /masterdata/person/roles | Get all group type roles
*MasterDataApi* | [**getEventMasterdata**](docs/Api/MasterDataApi.md#geteventmasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot;
*MasterDataApi* | [**getPersonMasterdata**](docs/Api/MasterDataApi.md#getpersonmasterdata) | **GET** /person/masterdata | Get person &amp; groups masterdata
*MasterDataApi* | [**getPersonMasterdataRole**](docs/Api/MasterDataApi.md#getpersonmasterdatarole) | **GET** /masterdata/person/roles/{roleId} | Get a group type role
*MasterDataApi* | [**getResourceMasterdata**](docs/Api/MasterDataApi.md#getresourcemasterdata) | **GET** /resource/masterdata | Your GET endpoint
*PermissionApi* | [**getGlobalPermissions**](docs/Api/PermissionApi.md#getglobalpermissions) | **GET** /permissions/global | All Permissions for the Current User
*PermissionApi* | [**getInternalPermissionsForPerson**](docs/Api/PermissionApi.md#getinternalpermissionsforperson) | **GET** /permissions/internal/persons/{personId} | Lookup Person-Related Group Internal Permissions
*PermissionApi* | [**getPermissionsInternalGroupsGroupId**](docs/Api/PermissionApi.md#getpermissionsinternalgroupsgroupid) | **GET** /permissions/internal/groups/{groupId} | Lookup Group-Related Group Internal Permissions
*PersonApi* | [**createPerson**](docs/Api/PersonApi.md#createperson) | **POST** /persons | Create new person
*PersonApi* | [**declineServiceRequestById**](docs/Api/PersonApi.md#declineservicerequestbyid) | **DELETE** /persons/{personId}/servicerequests/{requestId} | Decline a service request for a person
*PersonApi* | [**deleteDeviceForPerson**](docs/Api/PersonApi.md#deletedeviceforperson) | **DELETE** /persons/{personId}/devices/{deviceId} | Remove device for person
*PersonApi* | [**deletePerson**](docs/Api/PersonApi.md#deleteperson) | **DELETE** /persons/{personId} | Delete person
*PersonApi* | [**deletePersonSetting**](docs/Api/PersonApi.md#deletepersonsetting) | **DELETE** /persons/{personId}/settings/{module}/{attribute} | Delete a person setting
*PersonApi* | [**getAllGroupsForPerson**](docs/Api/PersonApi.md#getallgroupsforperson) | **GET** /persons/{personId}/groups | Get all groups a member is in
*PersonApi* | [**getAllPersonSettings**](docs/Api/PersonApi.md#getallpersonsettings) | **GET** /persons/{personId}/settings | Get all person settings
*PersonApi* | [**getAllPersons**](docs/Api/PersonApi.md#getallpersons) | **GET** /persons | Get all persons
*PersonApi* | [**getDeviceForPerson**](docs/Api/PersonApi.md#getdeviceforperson) | **GET** /persons/{personId}/devices/{deviceId} | Fetch one device
*PersonApi* | [**getOpenServiceRequestsForPerson**](docs/Api/PersonApi.md#getopenservicerequestsforperson) | **GET** /persons/{personId}/servicerequests | Get all service requests for a person
*PersonApi* | [**getPersonById**](docs/Api/PersonApi.md#getpersonbyid) | **GET** /persons/{personId} | Get a person by ID or GUID
*PersonApi* | [**getPersonDevices**](docs/Api/PersonApi.md#getpersondevices) | **GET** /persons/{personId}/devices | Fetch all registered devices for person
*PersonApi* | [**getPersonEvents**](docs/Api/PersonApi.md#getpersonevents) | **GET** /persons/{personId}/events | Get events that person is involved with
*PersonApi* | [**getPersonInformation**](docs/Api/PersonApi.md#getpersoninformation) | **GET** /person/{personId}/information | Get PDF with privacy-information
*PersonApi* | [**getPersonMasterdata**](docs/Api/PersonApi.md#getpersonmasterdata) | **GET** /person/masterdata | Get person &amp; groups masterdata
*PersonApi* | [**getPersonModuleSettings**](docs/Api/PersonApi.md#getpersonmodulesettings) | **GET** /persons/{personId}/settings/{module} | Get all person settings of a module
*PersonApi* | [**getPersonProperties**](docs/Api/PersonApi.md#getpersonproperties) | **POST** /persons/properties | Retrieve people&#39;s properties, whether they own an email adress
*PersonApi* | [**getPersonRelationships**](docs/Api/PersonApi.md#getpersonrelationships) | **GET** /persons/{personId}/relationships | Get all relationships linked to this person
*PersonApi* | [**getPersonSetting**](docs/Api/PersonApi.md#getpersonsetting) | **GET** /persons/{personId}/settings/{module}/{attribute} | Get person setting
*PersonApi* | [**getPersonTags**](docs/Api/PersonApi.md#getpersontags) | **GET** /persons/{personId}/tags | Get all tags attached to a person
*PersonApi* | [**getPersonsBirthdays**](docs/Api/PersonApi.md#getpersonsbirthdays) | **GET** /persons/birthdays | Fetch Birthdays
*PersonApi* | [**getPersonsDuplicates**](docs/Api/PersonApi.md#getpersonsduplicates) | **GET** /persons/duplicates | get potential duplicates of persons
*PersonApi* | [**getPersonsIdLogintoken**](docs/Api/PersonApi.md#getpersonsidlogintoken) | **GET** /persons/{personId}/logintoken | Fetch Login Token
*PersonApi* | [**getPersonsPersonidMergeDuplicateid**](docs/Api/PersonApi.md#getpersonspersonidmergeduplicateid) | **GET** /persons/{personId}/merge/{duplicateId} | Get information to compare two person records in order to prepare a  merge
*PersonApi* | [**getServiceRequestById**](docs/Api/PersonApi.md#getservicerequestbyid) | **GET** /persons/{personId}/servicerequests/{requestId} | Get a specific service request for a person
*PersonApi* | [**invitePerson**](docs/Api/PersonApi.md#inviteperson) | **POST** /persons/{personId}/invite | Invite Person to ChurchTools
*PersonApi* | [**patchPerson**](docs/Api/PersonApi.md#patchperson) | **PATCH** /persons/{personId} | Updates a person
*PersonApi* | [**patchPersonsPersonidMergeDuplicateid**](docs/Api/PersonApi.md#patchpersonspersonidmergeduplicateid) | **PATCH** /persons/{personId}/merge/{duplicateId} | Merge two person records
*PersonApi* | [**postPersonsPersonIdArchive**](docs/Api/PersonApi.md#postpersonspersonidarchive) | **POST** /persons/{personId}/archive | 
*PersonApi* | [**undoServiceRequestById**](docs/Api/PersonApi.md#undoservicerequestbyid) | **POST** /persons/{personId}/servicerequests/{requestId}/undo | Undo last service request action
*PersonApi* | [**updateDeviceForPerson**](docs/Api/PersonApi.md#updatedeviceforperson) | **PUT** /persons/{personId}/devices/{deviceId} | Create / Update new device for person
*PersonApi* | [**updatePersonSetting**](docs/Api/PersonApi.md#updatepersonsetting) | **PUT** /persons/{personId}/settings/{module}/{attribute} | Create/Update person setting
*PersonApi* | [**updateServiceRequestById**](docs/Api/PersonApi.md#updateservicerequestbyid) | **PUT** /persons/{personId}/servicerequests/{requestId} | Agree to a service request for a person
*QueueApi* | [**getQueueJobGroupsStatus**](docs/Api/QueueApi.md#getqueuejobgroupsstatus) | **GET** /queues/{queue}/jobgroups/status | Status Information About Job Groups in Queue
*QueueApi* | [**startQueueWorker**](docs/Api/QueueApi.md#startqueueworker) | **POST** /queues/{queue} | Start Worker For Queue
*ResourceApi* | [**getBookings**](docs/Api/ResourceApi.md#getbookings) | **GET** /bookings | Your GET endpoint
*ResourceApi* | [**getResourceMasterdata**](docs/Api/ResourceApi.md#getresourcemasterdata) | **GET** /resource/masterdata | Your GET endpoint
*ServiceServiceGroupsApi* | [**declineServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#declineservicerequestbyid) | **DELETE** /persons/{personId}/servicerequests/{requestId} | Decline a service request for a person
*ServiceServiceGroupsApi* | [**getOpenServiceRequestsForPerson**](docs/Api/ServiceServiceGroupsApi.md#getopenservicerequestsforperson) | **GET** /persons/{personId}/servicerequests | Get all service requests for a person
*ServiceServiceGroupsApi* | [**getService**](docs/Api/ServiceServiceGroupsApi.md#getservice) | **GET** /services/{serviceId} | 
*ServiceServiceGroupsApi* | [**getServiceGroup**](docs/Api/ServiceServiceGroupsApi.md#getservicegroup) | **GET** /servicegroups/{serviceGroupId} | 
*ServiceServiceGroupsApi* | [**getServiceGroups**](docs/Api/ServiceServiceGroupsApi.md#getservicegroups) | **GET** /servicegroups | 
*ServiceServiceGroupsApi* | [**getServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#getservicerequestbyid) | **GET** /persons/{personId}/servicerequests/{requestId} | Get a specific service request for a person
*ServiceServiceGroupsApi* | [**getServices**](docs/Api/ServiceServiceGroupsApi.md#getservices) | **GET** /services | 
*ServiceServiceGroupsApi* | [**undoServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#undoservicerequestbyid) | **POST** /persons/{personId}/servicerequests/{requestId}/undo | Undo last service request action
*ServiceServiceGroupsApi* | [**updateServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#updateservicerequestbyid) | **PUT** /persons/{personId}/servicerequests/{requestId} | Agree to a service request for a person
*SongApi* | [**getSong**](docs/Api/SongApi.md#getsong) | **GET** /songs/{songId} | Get Song
*SongApi* | [**getSongs**](docs/Api/SongApi.md#getsongs) | **GET** /songs | Get All Songs
*SongApi* | [**getSongsOfAgenda**](docs/Api/SongApi.md#getsongsofagenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda
*StatusApi* | [**createNewStatus**](docs/Api/StatusApi.md#createnewstatus) | **POST** /statuses | Save new status
*StatusApi* | [**deleteStatus**](docs/Api/StatusApi.md#deletestatus) | **DELETE** /statuses/{id} | Delete a status
*StatusApi* | [**getAllStatuses**](docs/Api/StatusApi.md#getallstatuses) | **GET** /statuses | Get all statuses
*StatusApi* | [**getStatus**](docs/Api/StatusApi.md#getstatus) | **GET** /statuses/{id} | Get a specific status
*StatusApi* | [**putStatus**](docs/Api/StatusApi.md#putstatus) | **PUT** /statuses/{id} | Update status
*SyncApi* | [**createSyncMapping**](docs/Api/SyncApi.md#createsyncmapping) | **POST** /sync/entitymappings | Create new mapping
*SyncApi* | [**deleteEntityMapping**](docs/Api/SyncApi.md#deleteentitymapping) | **DELETE** /sync/entitymappings/{id} | Delete Mapping from Database.
*SyncApi* | [**deleteSyncConflict**](docs/Api/SyncApi.md#deletesyncconflict) | **DELETE** /sync/conflicts/{id} | Delete Conflict
*SyncApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId**](docs/Api/SyncApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobid) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Delete job config
*SyncApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/SyncApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Delete all filter entities
*SyncApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/SyncApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Delete all Properties for This Job
*SyncApi* | [**deleteSyncExternalsystemsId**](docs/Api/SyncApi.md#deletesyncexternalsystemsid) | **DELETE** /sync/externalsystems/{id} | DELETE external system
*SyncApi* | [**deleteSyncFieldMappings**](docs/Api/SyncApi.md#deletesyncfieldmappings) | **DELETE** /sync/externalsystems/{externalSystemId}/fieldmappings/{domainType} | Delete Mapping for Domain Type
*SyncApi* | [**getEntityMapping**](docs/Api/SyncApi.md#getentitymapping) | **GET** /sync/entitymappings/{id} | Get One Entity Mapping
*SyncApi* | [**getSyncAdapters**](docs/Api/SyncApi.md#getsyncadapters) | **GET** /sync/adapters | GET Sync Adapters
*SyncApi* | [**getSyncConflict**](docs/Api/SyncApi.md#getsyncconflict) | **GET** /sync/conflicts/{id} | Fetch One Conflict
*SyncApi* | [**getSyncConflicts**](docs/Api/SyncApi.md#getsyncconflicts) | **GET** /sync/conflicts | Fetch all conflicts
*SyncApi* | [**getSyncExecutions**](docs/Api/SyncApi.md#getsyncexecutions) | **GET** /sync/executions | Statistical Information about Sync Executions
*SyncApi* | [**getSyncExternalsystems**](docs/Api/SyncApi.md#getsyncexternalsystems) | **GET** /sync/externalsystems | GET External Systems
*SyncApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobId**](docs/Api/SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobid) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Your Job Configuration
*SyncApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Fetch all entity filters for this job
*SyncApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Fetch all Properties for This Job
*SyncApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigurations**](docs/Api/SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigurations) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs | GET Job configurations
*SyncApi* | [**getSyncExternalsystemsId**](docs/Api/SyncApi.md#getsyncexternalsystemsid) | **GET** /sync/externalsystems/{id} | GET an external system by id
*SyncApi* | [**getSyncFieldMappings**](docs/Api/SyncApi.md#getsyncfieldmappings) | **GET** /sync/externalsystems/{externalSystemId}/fieldmappings/{domainType} | Get Mapping for Domain Type
*SyncApi* | [**getSyncJobconfigs**](docs/Api/SyncApi.md#getsyncjobconfigs) | **GET** /sync/jobconfigs | Your GET endpoint
*SyncApi* | [**getSyncLogs**](docs/Api/SyncApi.md#getsynclogs) | **GET** /sync/logs | Get Sync Logs
*SyncApi* | [**getSyncMappings**](docs/Api/SyncApi.md#getsyncmappings) | **GET** /sync/entitymappings | Fetch all registered mappings
*SyncApi* | [**postSyncExternalsystems**](docs/Api/SyncApi.md#postsyncexternalsystems) | **POST** /sync/externalsystems | Create external system
*SyncApi* | [**postSyncExternalsystemsExternalSystemIdJobconfigs**](docs/Api/SyncApi.md#postsyncexternalsystemsexternalsystemidjobconfigs) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs | Create job configuration
*SyncApi* | [**postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart**](docs/Api/SyncApi.md#postsyncexternalsystemsexternalsystemidjobconfigsjobidstart) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/start | Start Execution
*SyncApi* | [**postSyncExternalsystemsIdTest**](docs/Api/SyncApi.md#postsyncexternalsystemsidtest) | **POST** /sync/externalsystems/{externalSystemId}/test | Test the external system
*SyncApi* | [**postSyncLogs**](docs/Api/SyncApi.md#postsynclogs) | **POST** /sync/logs | Save Sync Logs
*SyncApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigs**](docs/Api/SyncApi.md#putsyncexternalsystemsexternalsystemidjobconfigs) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Update job configuration
*SyncApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/SyncApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Save entity filters
*SyncApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/SyncApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Save Properties, Which Should Be Synced
*SyncApi* | [**putSyncExternalsystemsId**](docs/Api/SyncApi.md#putsyncexternalsystemsid) | **PUT** /sync/externalsystems/{id} | Update external system
*SyncApi* | [**putSyncFieldMappings**](docs/Api/SyncApi.md#putsyncfieldmappings) | **PUT** /sync/externalsystems/{externalSystemId}/fieldmappings/{domainType} | Save Mapping for Domain Type
*SyncApi* | [**saveSyncConflict**](docs/Api/SyncApi.md#savesyncconflict) | **POST** /sync/conflicts | Save new detected conflict
*SyncApi* | [**updateEntityMapping**](docs/Api/SyncApi.md#updateentitymapping) | **PUT** /sync/entitymappings/{id} | Update or Create Mapping
*SyncApi* | [**updateSyncConflict**](docs/Api/SyncApi.md#updatesyncconflict) | **PUT** /sync/conflicts/{id} | Update Conflict
*TagApi* | [**getGroupsGroupIdTags**](docs/Api/TagApi.md#getgroupsgroupidtags) | **GET** /groups/{groupId}/tags | Fetch group tags
*TagApi* | [**getTags**](docs/Api/TagApi.md#gettags) | **GET** /tags | Get all tags of a type
*TagApi* | [**saveTag**](docs/Api/TagApi.md#savetag) | **POST** /tags | Create new tag
*TranslationApi* | [**getAllTranslations**](docs/Api/TranslationApi.md#getalltranslations) | **GET** /translations | Get all translations
*WidgetsApi* | [**getStartpage**](docs/Api/WidgetsApi.md#getstartpage) | **GET** /startpage | Widgets and data for startpage
*WidgetsApi* | [**getWidgetBlog**](docs/Api/WidgetsApi.md#getwidgetblog) | **GET** /widgets/blog | 
*WidgetsApi* | [**getWidgetRss**](docs/Api/WidgetsApi.md#getwidgetrss) | **GET** /widgets/rss | 
*WikiApi* | [**getWikiCategories**](docs/Api/WikiApi.md#getwikicategories) | **GET** /wiki/categories | Get all wiki categories.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPages**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpages) | **GET** /wiki/categories/{wikiCategoryId}/pages | Returns all Wiki Pages in the given Category.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPagesIdentifier**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpagesidentifier) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier} | Returns the latest version of the wiki page with the given identifier.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPagesIdentifierVersions**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpagesidentifierversions) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier}/versions | Returns all version of the wiki page for the given
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPagesVersionsVersion**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpagesversionsversion) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier}/versions/{version} | Returns the wiki page with the given identifier and version.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdSearch**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidsearch) | **GET** /wiki/search | Your GET endpoint

## Models

- [](docs/Model/.md)
- [1](docs/Model/1.md)
- [1Meta](docs/Model/1Meta.md)
- [200Response](docs/Model/200Response.md)
- [Absence](docs/Model/Absence.md)
- [Absence1](docs/Model/Absence1.md)
- [AbsenceReason](docs/Model/AbsenceReason.md)
- [Account](docs/Model/Account.md)
- [AccountClass](docs/Model/AccountClass.md)
- [AccountClassNew](docs/Model/AccountClassNew.md)
- [AccountGroup](docs/Model/AccountGroup.md)
- [AccountGroupNew](docs/Model/AccountGroupNew.md)
- [AccountNew](docs/Model/AccountNew.md)
- [AccountType](docs/Model/AccountType.md)
- [AccountTypeNew](docs/Model/AccountTypeNew.md)
- [AccountingPeriod](docs/Model/AccountingPeriod.md)
- [AccountingPeriodNew](docs/Model/AccountingPeriodNew.md)
- [Address](docs/Model/Address.md)
- [AgeGroup](docs/Model/AgeGroup.md)
- [Agenda](docs/Model/Agenda.md)
- [AgendaExport200Response](docs/Model/AgendaExport200Response.md)
- [AgendaExport200ResponseData](docs/Model/AgendaExport200ResponseData.md)
- [AgendaExportRequest](docs/Model/AgendaExportRequest.md)
- [AgendaItem](docs/Model/AgendaItem.md)
- [AgendaItemResponsible](docs/Model/AgendaItemResponsible.md)
- [AgendaItemResponsiblePersonsInner](docs/Model/AgendaItemResponsiblePersonsInner.md)
- [AgendaItemServiceGroupNotesInner](docs/Model/AgendaItemServiceGroupNotesInner.md)
- [AgendaItemSong](docs/Model/AgendaItemSong.md)
- [AgendaItemStartTimes](docs/Model/AgendaItemStartTimes.md)
- [Appointment](docs/Model/Appointment.md)
- [AppointmentTemplate](docs/Model/AppointmentTemplate.md)
- [Arrangement](docs/Model/Arrangement.md)
- [Arrangement1](docs/Model/Arrangement1.md)
- [AutomaticEmail](docs/Model/AutomaticEmail.md)
- [BatchTransaction200Response](docs/Model/BatchTransaction200Response.md)
- [BatchTransaction200ResponseData](docs/Model/BatchTransaction200ResponseData.md)
- [BatchTransactionRequest](docs/Model/BatchTransactionRequest.md)
- [BatchTransactionRequestChangeset](docs/Model/BatchTransactionRequestChangeset.md)
- [BatchTransactionRequestFilters](docs/Model/BatchTransactionRequestFilters.md)
- [BatchTransactionRequestFiltersAnyOf](docs/Model/BatchTransactionRequestFiltersAnyOf.md)
- [BatchTransactionRequestFiltersAnyOf1](docs/Model/BatchTransactionRequestFiltersAnyOf1.md)
- [BatchTransactionRequestFiltersAnyOf2](docs/Model/BatchTransactionRequestFiltersAnyOf2.md)
- [BlogItem](docs/Model/BlogItem.md)
- [Calendar](docs/Model/Calendar.md)
- [Campus](docs/Model/Campus.md)
- [CashDiscount](docs/Model/CashDiscount.md)
- [CashDiscountNew](docs/Model/CashDiscountNew.md)
- [Chat](docs/Model/Chat.md)
- [ChatNew](docs/Model/ChatNew.md)
- [ChatUpdate](docs/Model/ChatUpdate.md)
- [Checkin](docs/Model/Checkin.md)
- [Checkin200Response](docs/Model/Checkin200Response.md)
- [Checkin200ResponseData](docs/Model/Checkin200ResponseData.md)
- [Checkin403Response](docs/Model/Checkin403Response.md)
- [CheckinRequest](docs/Model/CheckinRequest.md)
- [Client](docs/Model/Client.md)
- [ClientNew](docs/Model/ClientNew.md)
- [Color](docs/Model/Color.md)
- [Color1](docs/Model/Color1.md)
- [ContactLabel](docs/Model/ContactLabel.md)
- [CostCenter](docs/Model/CostCenter.md)
- [Country](docs/Model/Country.md)
- [CreateCashDiscount200Response](docs/Model/CreateCashDiscount200Response.md)
- [CreateCashDiscountRequest](docs/Model/CreateCashDiscountRequest.md)
- [CreateCostCenter200Response](docs/Model/CreateCostCenter200Response.md)
- [CreateCostCenterRequest](docs/Model/CreateCostCenterRequest.md)
- [CreateMeeting200Response](docs/Model/CreateMeeting200Response.md)
- [CreateMeetingRequest](docs/Model/CreateMeetingRequest.md)
- [CreateNewAccountClassRequest](docs/Model/CreateNewAccountClassRequest.md)
- [CreateNewAccountGroupRequest](docs/Model/CreateNewAccountGroupRequest.md)
- [CreateNewAccountRequest](docs/Model/CreateNewAccountRequest.md)
- [CreateNewAccountTypeRequest](docs/Model/CreateNewAccountTypeRequest.md)
- [CreateNewAccountingPeriod201Response](docs/Model/CreateNewAccountingPeriod201Response.md)
- [CreateNewAccountingPeriodRequest](docs/Model/CreateNewAccountingPeriodRequest.md)
- [CreateNewCampus201Response](docs/Model/CreateNewCampus201Response.md)
- [CreateNewCampusRequest](docs/Model/CreateNewCampusRequest.md)
- [CreateNewChatRequest](docs/Model/CreateNewChatRequest.md)
- [CreateNewClientRequest](docs/Model/CreateNewClientRequest.md)
- [CreateNewStatus201Response](docs/Model/CreateNewStatus201Response.md)
- [CreateNewStatusRequest](docs/Model/CreateNewStatusRequest.md)
- [CreateNewTransaction200Response](docs/Model/CreateNewTransaction200Response.md)
- [CreateNewTransactionPurposeRequest](docs/Model/CreateNewTransactionPurposeRequest.md)
- [CreateNewTransactionRequest](docs/Model/CreateNewTransactionRequest.md)
- [CreateOrUpdateMember200Response](docs/Model/CreateOrUpdateMember200Response.md)
- [CreateOrUpdateMemberRequest](docs/Model/CreateOrUpdateMemberRequest.md)
- [CreatePerson400Response](docs/Model/CreatePerson400Response.md)
- [CreatePersonRequest](docs/Model/CreatePersonRequest.md)
- [CreatePersonRequestPrivacyPolicyAgreement](docs/Model/CreatePersonRequestPrivacyPolicyAgreement.md)
- [CreateSyncMappingRequest](docs/Model/CreateSyncMappingRequest.md)
- [CreateTaxRate200Response](docs/Model/CreateTaxRate200Response.md)
- [CreateTaxRateRequest](docs/Model/CreateTaxRateRequest.md)
- [CreateTaxType200Response](docs/Model/CreateTaxType200Response.md)
- [CreateTaxTypeRequest](docs/Model/CreateTaxTypeRequest.md)
- [CreateTemplateRequest](docs/Model/CreateTemplateRequest.md)
- [DeleteAccountClass409Response](docs/Model/DeleteAccountClass409Response.md)
- [DeleteAccountClass409ResponseData](docs/Model/DeleteAccountClass409ResponseData.md)
- [DeleteAccountClass409ResponseDataReferencesInner](docs/Model/DeleteAccountClass409ResponseDataReferencesInner.md)
- [DeleteAccountsForAccountingPeriod400Response](docs/Model/DeleteAccountsForAccountingPeriod400Response.md)
- [DeletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopyRequest](docs/Model/DeletePersonIdEventsEventIdServicesServiceIdExchangerequestsCopyRequest.md)
- [DeleteSimulate200Response](docs/Model/DeleteSimulate200Response.md)
- [DeleteSimulate200ResponseData](docs/Model/DeleteSimulate200ResponseData.md)
- [Department](docs/Model/Department.md)
- [Device](docs/Model/Device.md)
- [Device1](docs/Model/Device1.md)
- [DomainObjectAny](docs/Model/DomainObjectAny.md)
- [DomainObjectAnyAnyOf](docs/Model/DomainObjectAnyAnyOf.md)
- [DomainObjectAnyAnyOf1](docs/Model/DomainObjectAnyAnyOf1.md)
- [DomainObjectAnyAnyOf1DomainAttributes](docs/Model/DomainObjectAnyAnyOf1DomainAttributes.md)
- [DomainObjectAnyAnyOf2](docs/Model/DomainObjectAnyAnyOf2.md)
- [DomainObjectAnyAnyOf3](docs/Model/DomainObjectAnyAnyOf3.md)
- [DomainObjectAnyAnyOfDomainAttributes](docs/Model/DomainObjectAnyAnyOfDomainAttributes.md)
- [DomainObjectFile](docs/Model/DomainObjectFile.md)
- [DomainObjectGroup](docs/Model/DomainObjectGroup.md)
- [DomainObjectGrouphomepage](docs/Model/DomainObjectGrouphomepage.md)
- [DomainObjectPerson](docs/Model/DomainObjectPerson.md)
- [DomainObjectSong](docs/Model/DomainObjectSong.md)
- [DomainObjectWiki](docs/Model/DomainObjectWiki.md)
- [Donator](docs/Model/Donator.md)
- [Event](docs/Model/Event.md)
- [EventMasterData](docs/Model/EventMasterData.md)
- [EventMasterData1](docs/Model/EventMasterData1.md)
- [EventMasterData1Data](docs/Model/EventMasterData1Data.md)
- [EventMasterData1DataAbsenceReasonsInner](docs/Model/EventMasterData1DataAbsenceReasonsInner.md)
- [EventMasterData1DataServiceGroupsInner](docs/Model/EventMasterData1DataServiceGroupsInner.md)
- [EventMasterData1DataServicesInner](docs/Model/EventMasterData1DataServicesInner.md)
- [EventMasterData1DataServicesInnerData](docs/Model/EventMasterData1DataServicesInnerData.md)
- [EventMasterData1Meta](docs/Model/EventMasterData1Meta.md)
- [EventService](docs/Model/EventService.md)
- [ExternalSystem](docs/Model/ExternalSystem.md)
- [ExternalSystem1](docs/Model/ExternalSystem1.md)
- [ExternalSystem2](docs/Model/ExternalSystem2.md)
- [ExternalSystemReturn](docs/Model/ExternalSystemReturn.md)
- [Field](docs/Model/Field.md)
- [FieldMapping](docs/Model/FieldMapping.md)
- [FieldMappingEntries](docs/Model/FieldMappingEntries.md)
- [FieldMappingEntry](docs/Model/FieldMappingEntry.md)
- [FieldOption](docs/Model/FieldOption.md)
- [File](docs/Model/File.md)
- [FileOrLink](docs/Model/FileOrLink.md)
- [FinanceMasterData](docs/Model/FinanceMasterData.md)
- [FollowUp](docs/Model/FollowUp.md)
- [FollowUpInterval](docs/Model/FollowUpInterval.md)
- [GetAccountById200Response](docs/Model/GetAccountById200Response.md)
- [GetAccountClassById200Response](docs/Model/GetAccountClassById200Response.md)
- [GetAccountGroupById200Response](docs/Model/GetAccountGroupById200Response.md)
- [GetAccountTypeById200Response](docs/Model/GetAccountTypeById200Response.md)
- [GetAgendaForEvent200Response](docs/Model/GetAgendaForEvent200Response.md)
- [GetAgendaForEvent200ResponseData](docs/Model/GetAgendaForEvent200ResponseData.md)
- [GetAllAccountClasses200Response](docs/Model/GetAllAccountClasses200Response.md)
- [GetAllAccountClasses200ResponseDataInner](docs/Model/GetAllAccountClasses200ResponseDataInner.md)
- [GetAllAccountGroups200Response](docs/Model/GetAllAccountGroups200Response.md)
- [GetAllAccountGroups200ResponseDataInner](docs/Model/GetAllAccountGroups200ResponseDataInner.md)
- [GetAllAccountTypes200Response](docs/Model/GetAllAccountTypes200Response.md)
- [GetAllAccountTypes200ResponseDataInner](docs/Model/GetAllAccountTypes200ResponseDataInner.md)
- [GetAllAccountingPeriods200Response](docs/Model/GetAllAccountingPeriods200Response.md)
- [GetAllAccountingPeriods200ResponseDataInner](docs/Model/GetAllAccountingPeriods200ResponseDataInner.md)
- [GetAllAccountingPeriods200ResponseDataInnerPermissions](docs/Model/GetAllAccountingPeriods200ResponseDataInnerPermissions.md)
- [GetAllAccounts200Response](docs/Model/GetAllAccounts200Response.md)
- [GetAllAccounts200ResponseDataInner](docs/Model/GetAllAccounts200ResponseDataInner.md)
- [GetAllAccounts200ResponseDataInnerPermissions](docs/Model/GetAllAccounts200ResponseDataInnerPermissions.md)
- [GetAllCampuses200Response](docs/Model/GetAllCampuses200Response.md)
- [GetAllCampuses200ResponseDataInner](docs/Model/GetAllCampuses200ResponseDataInner.md)
- [GetAllCampuses200ResponseDataInnerAddress](docs/Model/GetAllCampuses200ResponseDataInnerAddress.md)
- [GetAllCampuses200ResponseDataInnerAddressCountry](docs/Model/GetAllCampuses200ResponseDataInnerAddressCountry.md)
- [GetAllCampuses200ResponseDataInnerBanner](docs/Model/GetAllCampuses200ResponseDataInnerBanner.md)
- [GetAllCampuses200ResponseDataInnerDenomination](docs/Model/GetAllCampuses200ResponseDataInnerDenomination.md)
- [GetAllCampuses200ResponseDataInnerGroupsInner](docs/Model/GetAllCampuses200ResponseDataInnerGroupsInner.md)
- [GetAllCampuses200ResponseDataInnerGroupsInnerGroup](docs/Model/GetAllCampuses200ResponseDataInnerGroupsInnerGroup.md)
- [GetAllCampuses200ResponseDataInnerGroupsInnerGroupDomainAttributes](docs/Model/GetAllCampuses200ResponseDataInnerGroupsInnerGroupDomainAttributes.md)
- [GetAllCampuses200ResponseDataInnerServicesInner](docs/Model/GetAllCampuses200ResponseDataInnerServicesInner.md)
- [GetAllCampuses200ResponseDataInnerSocialMedia](docs/Model/GetAllCampuses200ResponseDataInnerSocialMedia.md)
- [GetAllCampuses200ResponseDataInnerTagsInner](docs/Model/GetAllCampuses200ResponseDataInnerTagsInner.md)
- [GetAllCampuses200ResponseDataInnerTeamInner](docs/Model/GetAllCampuses200ResponseDataInnerTeamInner.md)
- [GetAllCampuses200ResponseDataInnerTeamInnerPerson](docs/Model/GetAllCampuses200ResponseDataInnerTeamInnerPerson.md)
- [GetAllCampuses200ResponseDataInnerTeamInnerPersonDomainAttributes](docs/Model/GetAllCampuses200ResponseDataInnerTeamInnerPersonDomainAttributes.md)
- [GetAllCashDiscounts200Response](docs/Model/GetAllCashDiscounts200Response.md)
- [GetAllCashDiscounts200ResponseDataInner](docs/Model/GetAllCashDiscounts200ResponseDataInner.md)
- [GetAllChats200Response](docs/Model/GetAllChats200Response.md)
- [GetAllChats200ResponseData](docs/Model/GetAllChats200ResponseData.md)
- [GetAllClients200Response](docs/Model/GetAllClients200Response.md)
- [GetAllClients200ResponseDataInner](docs/Model/GetAllClients200ResponseDataInner.md)
- [GetAllCostCenters200Response](docs/Model/GetAllCostCenters200Response.md)
- [GetAllData200Response](docs/Model/GetAllData200Response.md)
- [GetAllData200ResponseCount](docs/Model/GetAllData200ResponseCount.md)
- [GetAllData200ResponseData](docs/Model/GetAllData200ResponseData.md)
- [GetAllData200ResponseDataTaxRatesInner](docs/Model/GetAllData200ResponseDataTaxRatesInner.md)
- [GetAllData200ResponseDataTaxTypesInner](docs/Model/GetAllData200ResponseDataTaxTypesInner.md)
- [GetAllData200ResponseDataTransactionPurposesInner](docs/Model/GetAllData200ResponseDataTransactionPurposesInner.md)
- [GetAllDonators200Response](docs/Model/GetAllDonators200Response.md)
- [GetAllDonators200ResponseDataInner](docs/Model/GetAllDonators200ResponseDataInner.md)
- [GetAllDonators200ResponseMeta](docs/Model/GetAllDonators200ResponseMeta.md)
- [GetAllDonators200ResponseMetaPagination](docs/Model/GetAllDonators200ResponseMetaPagination.md)
- [GetAllEvents200Response](docs/Model/GetAllEvents200Response.md)
- [GetAllEvents200ResponseDataInner](docs/Model/GetAllEvents200ResponseDataInner.md)
- [GetAllEvents200ResponseDataInnerEventServicesInner](docs/Model/GetAllEvents200ResponseDataInnerEventServicesInner.md)
- [GetAllFields200Response](docs/Model/GetAllFields200Response.md)
- [GetAllFields200ResponseDataInner](docs/Model/GetAllFields200ResponseDataInner.md)
- [GetAllFields200ResponseDataInnerOptionsInner](docs/Model/GetAllFields200ResponseDataInnerOptionsInner.md)
- [GetAllFields200ResponseMeta](docs/Model/GetAllFields200ResponseMeta.md)
- [GetAllGroupMembers200Response](docs/Model/GetAllGroupMembers200Response.md)
- [GetAllGroupMembers200ResponseMeta](docs/Model/GetAllGroupMembers200ResponseMeta.md)
- [GetAllGroupTypeRoles200Response](docs/Model/GetAllGroupTypeRoles200Response.md)
- [GetAllGroupTypeRoles200ResponseDataInner](docs/Model/GetAllGroupTypeRoles200ResponseDataInner.md)
- [GetAllGroupsForPerson200Response](docs/Model/GetAllGroupsForPerson200Response.md)
- [GetAllGroupsForPerson200ResponseDataInner](docs/Model/GetAllGroupsForPerson200ResponseDataInner.md)
- [GetAllLogs200Response](docs/Model/GetAllLogs200Response.md)
- [GetAllMeetings200Response](docs/Model/GetAllMeetings200Response.md)
- [GetAllPersonSettings200Response](docs/Model/GetAllPersonSettings200Response.md)
- [GetAllPersonSettings200ResponseDataInner](docs/Model/GetAllPersonSettings200ResponseDataInner.md)
- [GetAllPersonSettings200ResponseDataInnerValue](docs/Model/GetAllPersonSettings200ResponseDataInnerValue.md)
- [GetAllPersons200Response](docs/Model/GetAllPersons200Response.md)
- [GetAllStatuses200Response](docs/Model/GetAllStatuses200Response.md)
- [GetAllTaxRates200Response](docs/Model/GetAllTaxRates200Response.md)
- [GetAllTaxTypes200Response](docs/Model/GetAllTaxTypes200Response.md)
- [GetAllTemplates200Response](docs/Model/GetAllTemplates200Response.md)
- [GetAllTemplates200ResponseDataInner](docs/Model/GetAllTemplates200ResponseDataInner.md)
- [GetAllTransactionPurposes200Response](docs/Model/GetAllTransactionPurposes200Response.md)
- [GetAllTransactions200Response](docs/Model/GetAllTransactions200Response.md)
- [GetAllTransactions200ResponseDataInner](docs/Model/GetAllTransactions200ResponseDataInner.md)
- [GetAllTransactions200ResponseDataInnerPermissions](docs/Model/GetAllTransactions200ResponseDataInnerPermissions.md)
- [GetAllTranslations200Response](docs/Model/GetAllTranslations200Response.md)
- [GetApiInfo200Response](docs/Model/GetApiInfo200Response.md)
- [GetApiProfiles200Response](docs/Model/GetApiProfiles200Response.md)
- [GetApiProfiles200ResponseMeta](docs/Model/GetApiProfiles200ResponseMeta.md)
- [GetAutomaticEmail200Response](docs/Model/GetAutomaticEmail200Response.md)
- [GetAutomaticEmails200Response](docs/Model/GetAutomaticEmails200Response.md)
- [GetBookings200Response](docs/Model/GetBookings200Response.md)
- [GetBookings200ResponseDataInner](docs/Model/GetBookings200ResponseDataInner.md)
- [GetBookings200ResponseDataInnerBase](docs/Model/GetBookings200ResponseDataInnerBase.md)
- [GetBookings200ResponseDataInnerBaseAdditionalsInner](docs/Model/GetBookings200ResponseDataInnerBaseAdditionalsInner.md)
- [GetBookings200ResponseDataInnerBaseAdditionalsInnerMeta](docs/Model/GetBookings200ResponseDataInnerBaseAdditionalsInnerMeta.md)
- [GetBookings200ResponseDataInnerBaseExceptionsInner](docs/Model/GetBookings200ResponseDataInnerBaseExceptionsInner.md)
- [GetBookings200ResponseDataInnerBaseMeta](docs/Model/GetBookings200ResponseDataInnerBaseMeta.md)
- [GetBookings200ResponseDataInnerBaseMetaCreatedPerson](docs/Model/GetBookings200ResponseDataInnerBaseMetaCreatedPerson.md)
- [GetBookings200ResponseDataInnerBaseResource](docs/Model/GetBookings200ResponseDataInnerBaseResource.md)
- [GetBookings200ResponseDataInnerCalculated](docs/Model/GetBookings200ResponseDataInnerCalculated.md)
- [GetBookings200ResponseMeta](docs/Model/GetBookings200ResponseMeta.md)
- [GetCalendars200Response](docs/Model/GetCalendars200Response.md)
- [GetCalendars200ResponseDataInner](docs/Model/GetCalendars200ResponseDataInner.md)
- [GetCalendarsAppointments200Response](docs/Model/GetCalendarsAppointments200Response.md)
- [GetCalendarsAppointments200ResponseDataInner](docs/Model/GetCalendarsAppointments200ResponseDataInner.md)
- [GetCalendarsAppointments200ResponseDataInnerBase](docs/Model/GetCalendarsAppointments200ResponseDataInnerBase.md)
- [GetCalendarsAppointments200ResponseDataInnerBaseAdditionsInner](docs/Model/GetCalendarsAppointments200ResponseDataInnerBaseAdditionsInner.md)
- [GetCalendarsAppointments200ResponseDataInnerBaseExceptionsInner](docs/Model/GetCalendarsAppointments200ResponseDataInnerBaseExceptionsInner.md)
- [GetCalendarsAppointments200ResponseDataInnerBaseSignup](docs/Model/GetCalendarsAppointments200ResponseDataInnerBaseSignup.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200Response](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200Response.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseData](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseData.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointment](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointment.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBase.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseCalendar](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseCalendar.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseSignup](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentBaseSignup.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentCalculated](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataAppointmentCalculated.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInner](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInner.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBase](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBase.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerBaseResource.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerCalculated](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataBookingsInnerCalculated.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataEvent](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataEvent.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataGroup](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataGroup.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataGroupDomainAttributes](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataGroupDomainAttributes.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInner.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInnerPerson](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInnerPerson.md)
- [GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInnerPersonDomainAttributes](docs/Model/GetCalendarsCalendarIdAppointmentsAppointmentIdStartDate200ResponseDataMeetingRequestsInnerPersonDomainAttributes.md)
- [GetCampus200Response](docs/Model/GetCampus200Response.md)
- [GetClientById200Response](docs/Model/GetClientById200Response.md)
- [GetContactlabel200Response](docs/Model/GetContactlabel200Response.md)
- [GetContactlabels200Response](docs/Model/GetContactlabels200Response.md)
- [GetContactlabels200ResponseDataInner](docs/Model/GetContactlabels200ResponseDataInner.md)
- [GetCsrftoken200Response](docs/Model/GetCsrftoken200Response.md)
- [GetDepartments200Response](docs/Model/GetDepartments200Response.md)
- [GetDepartments200ResponseDataInner](docs/Model/GetDepartments200ResponseDataInner.md)
- [GetDeviceForPerson200Response](docs/Model/GetDeviceForPerson200Response.md)
- [GetDonationReceipt200Response](docs/Model/GetDonationReceipt200Response.md)
- [GetDonationReceipt200ResponseData](docs/Model/GetDonationReceipt200ResponseData.md)
- [GetEvent200Response](docs/Model/GetEvent200Response.md)
- [GetEventIcal200Response](docs/Model/GetEventIcal200Response.md)
- [GetEventIcal200ResponseData](docs/Model/GetEventIcal200ResponseData.md)
- [GetEventIcal200ResponseMeta](docs/Model/GetEventIcal200ResponseMeta.md)
- [GetFileWithDomainType200Response](docs/Model/GetFileWithDomainType200Response.md)
- [GetFileWithDomainType200ResponseDataInner](docs/Model/GetFileWithDomainType200ResponseDataInner.md)
- [GetFileWithDomainType200ResponseDataInnerMeta](docs/Model/GetFileWithDomainType200ResponseDataInnerMeta.md)
- [GetFilesMetadata200Response](docs/Model/GetFilesMetadata200Response.md)
- [GetGlobalPermissions200Response](docs/Model/GetGlobalPermissions200Response.md)
- [GetGlobalPermissions200ResponseData](docs/Model/GetGlobalPermissions200ResponseData.md)
- [GetGlobalPermissions200ResponseDataChurchcal](docs/Model/GetGlobalPermissions200ResponseDataChurchcal.md)
- [GetGlobalPermissions200ResponseDataChurchcheckin](docs/Model/GetGlobalPermissions200ResponseDataChurchcheckin.md)
- [GetGlobalPermissions200ResponseDataChurchcore](docs/Model/GetGlobalPermissions200ResponseDataChurchcore.md)
- [GetGlobalPermissions200ResponseDataChurchdb](docs/Model/GetGlobalPermissions200ResponseDataChurchdb.md)
- [GetGlobalPermissions200ResponseDataChurchfinance](docs/Model/GetGlobalPermissions200ResponseDataChurchfinance.md)
- [GetGlobalPermissions200ResponseDataChurchreport](docs/Model/GetGlobalPermissions200ResponseDataChurchreport.md)
- [GetGlobalPermissions200ResponseDataChurchresource](docs/Model/GetGlobalPermissions200ResponseDataChurchresource.md)
- [GetGlobalPermissions200ResponseDataChurchservice](docs/Model/GetGlobalPermissions200ResponseDataChurchservice.md)
- [GetGlobalPermissions200ResponseDataChurchwiki](docs/Model/GetGlobalPermissions200ResponseDataChurchwiki.md)
- [GetGlobalPermissions200ResponseDataFinance](docs/Model/GetGlobalPermissions200ResponseDataFinance.md)
- [GetGroupHomepage200Response](docs/Model/GetGroupHomepage200Response.md)
- [GetGroupHomepages200Response](docs/Model/GetGroupHomepages200Response.md)
- [GetGroupHomepages200ResponseDataInner](docs/Model/GetGroupHomepages200ResponseDataInner.md)
- [GetGroupHomepages200ResponseDataInnerDomainAttributes](docs/Model/GetGroupHomepages200ResponseDataInnerDomainAttributes.md)
- [GetGroupRoles200Response](docs/Model/GetGroupRoles200Response.md)
- [GetGroupStatistics200Response](docs/Model/GetGroupStatistics200Response.md)
- [GetGroups200Response](docs/Model/GetGroups200Response.md)
- [GetGroups200ResponseDataInner](docs/Model/GetGroups200ResponseDataInner.md)
- [GetGroups200ResponseDataInnerFollowUp](docs/Model/GetGroups200ResponseDataInnerFollowUp.md)
- [GetGroups200ResponseDataInnerInformation](docs/Model/GetGroups200ResponseDataInnerInformation.md)
- [GetGroups200ResponseDataInnerPermissions](docs/Model/GetGroups200ResponseDataInnerPermissions.md)
- [GetGroups200ResponseDataInnerRolesInner](docs/Model/GetGroups200ResponseDataInnerRolesInner.md)
- [GetGroups200ResponseDataInnerSettings](docs/Model/GetGroups200ResponseDataInnerSettings.md)
- [GetGroups200ResponseDataInnerSettingsGroupMeeting](docs/Model/GetGroups200ResponseDataInnerSettingsGroupMeeting.md)
- [GetGroups200ResponseDataInnerSettingsGroupMeetingStatistics](docs/Model/GetGroups200ResponseDataInnerSettingsGroupMeetingStatistics.md)
- [GetGroups200ResponseDataInnerSettingsNewMember](docs/Model/GetGroups200ResponseDataInnerSettingsNewMember.md)
- [GetGroupsAbsences200Response](docs/Model/GetGroupsAbsences200Response.md)
- [GetGroupsGroupIdMeetingsMeetingIdMembers200Response](docs/Model/GetGroupsGroupIdMeetingsMeetingIdMembers200Response.md)
- [GetGroupsGroupIdMeetingsMeetingIdMembers200ResponseMeta](docs/Model/GetGroupsGroupIdMeetingsMeetingIdMembers200ResponseMeta.md)
- [GetGroupsGroupIdMemberfields200Response](docs/Model/GetGroupsGroupIdMemberfields200Response.md)
- [GetGroupsGroupIdMemberfields200ResponseData](docs/Model/GetGroupsGroupIdMemberfields200ResponseData.md)
- [GetGroupsGroupIdMemberfields200ResponseDataField](docs/Model/GetGroupsGroupIdMemberfields200ResponseDataField.md)
- [GetGroupsGroupIdMembersStatistics200Response](docs/Model/GetGroupsGroupIdMembersStatistics200Response.md)
- [GetGroupsGroupIdMembersStatistics200ResponseDataInner](docs/Model/GetGroupsGroupIdMembersStatistics200ResponseDataInner.md)
- [GetGroupsGroupIdMembersStatistics200ResponseDataInnerDataInner](docs/Model/GetGroupsGroupIdMembersStatistics200ResponseDataInnerDataInner.md)
- [GetGroupsGroupIdTags200Response](docs/Model/GetGroupsGroupIdTags200Response.md)
- [GetGroupsGroupIdTags200ResponseDataInner](docs/Model/GetGroupsGroupIdTags200ResponseDataInner.md)
- [GetGroupsHierarchies200Response](docs/Model/GetGroupsHierarchies200Response.md)
- [GetGroupsMembers200Response](docs/Model/GetGroupsMembers200Response.md)
- [GetGroupsMembers200ResponseDataInner](docs/Model/GetGroupsMembers200ResponseDataInner.md)
- [GetGrupsIdPlaces200Response](docs/Model/GetGrupsIdPlaces200Response.md)
- [GetGrupsIdPlaces200ResponseCreatedPerson](docs/Model/GetGrupsIdPlaces200ResponseCreatedPerson.md)
- [GetInternalPermissionsForPerson200Response](docs/Model/GetInternalPermissionsForPerson200Response.md)
- [GetInternalPermissionsForPerson200ResponseData](docs/Model/GetInternalPermissionsForPerson200ResponseData.md)
- [GetInternalPermissionsForPerson200ResponseDataChurchdb](docs/Model/GetInternalPermissionsForPerson200ResponseDataChurchdb.md)
- [GetJobs200Response](docs/Model/GetJobs200Response.md)
- [GetLabelsTotal200Response](docs/Model/GetLabelsTotal200Response.md)
- [GetLabelsTotal200ResponseData](docs/Model/GetLabelsTotal200ResponseData.md)
- [GetLabelsTotal200ResponseDataIgnoreAddress](docs/Model/GetLabelsTotal200ResponseDataIgnoreAddress.md)
- [GetLogById200Response](docs/Model/GetLogById200Response.md)
- [GetLoginStatistics200Response](docs/Model/GetLoginStatistics200Response.md)
- [GetOpenServiceRequestsForPerson200Response](docs/Model/GetOpenServiceRequestsForPerson200Response.md)
- [GetOpenServiceRequestsForPerson200ResponseDataInner](docs/Model/GetOpenServiceRequestsForPerson200ResponseDataInner.md)
- [GetPermissionsInternalGroupsGroupId200Response](docs/Model/GetPermissionsInternalGroupsGroupId200Response.md)
- [GetPermissionsInternalGroupsGroupId200ResponseData](docs/Model/GetPermissionsInternalGroupsGroupId200ResponseData.md)
- [GetPermissionsInternalGroupsGroupId200ResponseDataChurchdb](docs/Model/GetPermissionsInternalGroupsGroupId200ResponseDataChurchdb.md)
- [GetPersonById200Response](docs/Model/GetPersonById200Response.md)
- [GetPersonDevices200Response](docs/Model/GetPersonDevices200Response.md)
- [GetPersonInformation200Response](docs/Model/GetPersonInformation200Response.md)
- [GetPersonInformation200ResponseData](docs/Model/GetPersonInformation200ResponseData.md)
- [GetPersonMasterdata200Response](docs/Model/GetPersonMasterdata200Response.md)
- [GetPersonMasterdata200ResponseData](docs/Model/GetPersonMasterdata200ResponseData.md)
- [GetPersonMasterdata200ResponseDataAgeGroupsInner](docs/Model/GetPersonMasterdata200ResponseDataAgeGroupsInner.md)
- [GetPersonMasterdata200ResponseDataFollowUpIntervalsInner](docs/Model/GetPersonMasterdata200ResponseDataFollowUpIntervalsInner.md)
- [GetPersonMasterdata200ResponseDataFollowUpsInner](docs/Model/GetPersonMasterdata200ResponseDataFollowUpsInner.md)
- [GetPersonMasterdata200ResponseDataGroupCategoriesInner](docs/Model/GetPersonMasterdata200ResponseDataGroupCategoriesInner.md)
- [GetPersonMasterdata200ResponseDataGroupMeetingTemplatesInner](docs/Model/GetPersonMasterdata200ResponseDataGroupMeetingTemplatesInner.md)
- [GetPersonMasterdata200ResponseDataGroupStatusesInner](docs/Model/GetPersonMasterdata200ResponseDataGroupStatusesInner.md)
- [GetPersonMasterdata200ResponseDataGroupTypesInner](docs/Model/GetPersonMasterdata200ResponseDataGroupTypesInner.md)
- [GetPersonMasterdata200ResponseDataGrowPathsInner](docs/Model/GetPersonMasterdata200ResponseDataGrowPathsInner.md)
- [GetPersonMasterdata200ResponseDataStatusesInner](docs/Model/GetPersonMasterdata200ResponseDataStatusesInner.md)
- [GetPersonMasterdata200ResponseDataTargetGroupsInner](docs/Model/GetPersonMasterdata200ResponseDataTargetGroupsInner.md)
- [GetPersonMasterdata200ResponseMeta](docs/Model/GetPersonMasterdata200ResponseMeta.md)
- [GetPersonMasterdataRole200Response](docs/Model/GetPersonMasterdataRole200Response.md)
- [GetPersonProperties200Response](docs/Model/GetPersonProperties200Response.md)
- [GetPersonProperties200ResponseData](docs/Model/GetPersonProperties200ResponseData.md)
- [GetPersonProperties200ResponseData1](docs/Model/GetPersonProperties200ResponseData1.md)
- [GetPersonPropertiesRequest](docs/Model/GetPersonPropertiesRequest.md)
- [GetPersonRelationships200Response](docs/Model/GetPersonRelationships200Response.md)
- [GetPersonSetting200Response](docs/Model/GetPersonSetting200Response.md)
- [GetPersonTags200Response](docs/Model/GetPersonTags200Response.md)
- [GetPersonTags200ResponseDataInner](docs/Model/GetPersonTags200ResponseDataInner.md)
- [GetPersonsBirthdays200Response](docs/Model/GetPersonsBirthdays200Response.md)
- [GetPersonsBirthdays200ResponseDataInner](docs/Model/GetPersonsBirthdays200ResponseDataInner.md)
- [GetPersonsBirthdays200ResponseDataInnerPerson](docs/Model/GetPersonsBirthdays200ResponseDataInnerPerson.md)
- [GetPersonsDuplicates200Response](docs/Model/GetPersonsDuplicates200Response.md)
- [GetPersonsDuplicates200ResponseDataInner](docs/Model/GetPersonsDuplicates200ResponseDataInner.md)
- [GetPersonsDuplicates200ResponseDataInnerD](docs/Model/GetPersonsDuplicates200ResponseDataInnerD.md)
- [GetPersonsDuplicates200ResponseDataInnerP1](docs/Model/GetPersonsDuplicates200ResponseDataInnerP1.md)
- [GetPersonsIdLogintoken200Response](docs/Model/GetPersonsIdLogintoken200Response.md)
- [GetPublicGroupSignoutData200Response](docs/Model/GetPublicGroupSignoutData200Response.md)
- [GetPublicGroupSignoutData200ResponseData](docs/Model/GetPublicGroupSignoutData200ResponseData.md)
- [GetPublicgroup200Response](docs/Model/GetPublicgroup200Response.md)
- [GetPublicgroup200ResponseData](docs/Model/GetPublicgroup200ResponseData.md)
- [GetPublicgroup200ResponseDataInformation](docs/Model/GetPublicgroup200ResponseDataInformation.md)
- [GetPublicgroup200ResponseDataInformationGroupCategory](docs/Model/GetPublicgroup200ResponseDataInformationGroupCategory.md)
- [GetPublicgroup200ResponseDataSettings](docs/Model/GetPublicgroup200ResponseDataSettings.md)
- [GetPublicgroup200ResponseDataSignUpConditions](docs/Model/GetPublicgroup200ResponseDataSignUpConditions.md)
- [GetPublicgroup200ResponseDataSignUpPersonsInner](docs/Model/GetPublicgroup200ResponseDataSignUpPersonsInner.md)
- [GetPublicgroupsGroupIdForm200Response](docs/Model/GetPublicgroupsGroupIdForm200Response.md)
- [GetPublicgroupsGroupIdForm200ResponseFormInner](docs/Model/GetPublicgroupsGroupIdForm200ResponseFormInner.md)
- [GetPublicgroupsGroupIdForm200ResponseFormInnerOptionsInner](docs/Model/GetPublicgroupsGroupIdForm200ResponseFormInnerOptionsInner.md)
- [GetPublicgroupsGroupIdForm200ResponseSignUpPersonsInner](docs/Model/GetPublicgroupsGroupIdForm200ResponseSignUpPersonsInner.md)
- [GetPublicgroupsGroupIdPossiblerequesters200Response](docs/Model/GetPublicgroupsGroupIdPossiblerequesters200Response.md)
- [GetQRCodeCheckin200Response](docs/Model/GetQRCodeCheckin200Response.md)
- [GetQRCodeCheckin200ResponseData](docs/Model/GetQRCodeCheckin200ResponseData.md)
- [GetQueueJobGroupsStatus200Response](docs/Model/GetQueueJobGroupsStatus200Response.md)
- [GetQueueJobGroupsStatus200ResponseDataInner](docs/Model/GetQueueJobGroupsStatus200ResponseDataInner.md)
- [GetQueueJobGroupsStatus200ResponseDataInnerJobs](docs/Model/GetQueueJobGroupsStatus200ResponseDataInnerJobs.md)
- [GetResourceMasterdata200Response](docs/Model/GetResourceMasterdata200Response.md)
- [GetResourceMasterdata200ResponseData](docs/Model/GetResourceMasterdata200ResponseData.md)
- [GetResourceMasterdata200ResponseDataResourcesInner](docs/Model/GetResourceMasterdata200ResponseDataResourcesInner.md)
- [GetSearch200Response](docs/Model/GetSearch200Response.md)
- [GetSearch200ResponseDataInner](docs/Model/GetSearch200ResponseDataInner.md)
- [GetSearch200ResponseDataInnerAnyOf](docs/Model/GetSearch200ResponseDataInnerAnyOf.md)
- [GetSearch200ResponseDataInnerAnyOf1](docs/Model/GetSearch200ResponseDataInnerAnyOf1.md)
- [GetSecuritylevels200Response](docs/Model/GetSecuritylevels200Response.md)
- [GetSecuritylevels200ResponseDataInner](docs/Model/GetSecuritylevels200ResponseDataInner.md)
- [GetService200Response](docs/Model/GetService200Response.md)
- [GetServiceGroup200Response](docs/Model/GetServiceGroup200Response.md)
- [GetServiceGroups200Response](docs/Model/GetServiceGroups200Response.md)
- [GetServiceRequestById200Response](docs/Model/GetServiceRequestById200Response.md)
- [GetServices200Response](docs/Model/GetServices200Response.md)
- [GetSong200Response](docs/Model/GetSong200Response.md)
- [GetSongs200Response](docs/Model/GetSongs200Response.md)
- [GetSongsOfAgenda200Response](docs/Model/GetSongsOfAgenda200Response.md)
- [GetStartpage200Response](docs/Model/GetStartpage200Response.md)
- [GetStatus200Response](docs/Model/GetStatus200Response.md)
- [GetSyncAdapters200Response](docs/Model/GetSyncAdapters200Response.md)
- [GetSyncConflicts200Response](docs/Model/GetSyncConflicts200Response.md)
- [GetSyncExecutions200Response](docs/Model/GetSyncExecutions200Response.md)
- [GetSyncExecutions200ResponseDataInner](docs/Model/GetSyncExecutions200ResponseDataInner.md)
- [GetSyncExecutions200ResponseDataInnerBoth](docs/Model/GetSyncExecutions200ResponseDataInnerBoth.md)
- [GetSyncExecutions200ResponseDataInnerEs](docs/Model/GetSyncExecutions200ResponseDataInnerEs.md)
- [GetSyncExecutions200ResponseMeta](docs/Model/GetSyncExecutions200ResponseMeta.md)
- [GetSyncExecutions200ResponseMetaPagination](docs/Model/GetSyncExecutions200ResponseMetaPagination.md)
- [GetSyncExternalsystems200Response](docs/Model/GetSyncExternalsystems200Response.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200ResponseData](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200ResponseData.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200ResponseDataEsInner](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200ResponseDataEsInner.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200Response.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200ResponseData](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200ResponseData.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200ResponseDataProperties](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200ResponseDataProperties.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200ResponseDataPropertiesPropertyMappingsESToMasterInner](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties200ResponseDataPropertiesPropertyMappingsESToMasterInner.md)
- [GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response](docs/Model/GetSyncExternalsystemsExternalSystemIdJobconfigurations200Response.md)
- [GetSyncExternalsystemsId200Response](docs/Model/GetSyncExternalsystemsId200Response.md)
- [GetSyncFieldMappings200Response](docs/Model/GetSyncFieldMappings200Response.md)
- [GetSyncLogs200Response](docs/Model/GetSyncLogs200Response.md)
- [GetSyncMappings200Response](docs/Model/GetSyncMappings200Response.md)
- [GetTags200Response](docs/Model/GetTags200Response.md)
- [GetTemplateById200Response](docs/Model/GetTemplateById200Response.md)
- [GetTransactionPurposeById200Response](docs/Model/GetTransactionPurposeById200Response.md)
- [GetWidgetBlog200Response](docs/Model/GetWidgetBlog200Response.md)
- [GetWidgetBlog200ResponseData](docs/Model/GetWidgetBlog200ResponseData.md)
- [GetWidgetBlog200ResponseDataItemsInner](docs/Model/GetWidgetBlog200ResponseDataItemsInner.md)
- [GetWidgetRss200Response](docs/Model/GetWidgetRss200Response.md)
- [GetWikiCategories200Response](docs/Model/GetWikiCategories200Response.md)
- [GetWikiCategories200ResponsePermissions](docs/Model/GetWikiCategories200ResponsePermissions.md)
- [GetWikiCategoriesWikiCategoryIdPages200Response](docs/Model/GetWikiCategoriesWikiCategoryIdPages200Response.md)
- [GetWikiCategoriesWikiCategoryIdPagesIdentifier200Response](docs/Model/GetWikiCategoriesWikiCategoryIdPagesIdentifier200Response.md)
- [GetWikiCategoriesWikiCategoryIdPagesVersionsVersion200Response](docs/Model/GetWikiCategoriesWikiCategoryIdPagesVersionsVersion200Response.md)
- [GetWikiCategoriesWikiCategoryIdSearch200Response](docs/Model/GetWikiCategoriesWikiCategoryIdSearch200Response.md)
- [Group](docs/Model/Group.md)
- [GroupCategory](docs/Model/GroupCategory.md)
- [GroupHierarchy](docs/Model/GroupHierarchy.md)
- [GroupHierarchy1](docs/Model/GroupHierarchy1.md)
- [GroupMeeting](docs/Model/GroupMeeting.md)
- [GroupMeetingMember](docs/Model/GroupMeetingMember.md)
- [GroupMeetingTemplate](docs/Model/GroupMeetingTemplate.md)
- [GroupMember](docs/Model/GroupMember.md)
- [GroupMemberField](docs/Model/GroupMemberField.md)
- [GroupMemberField1](docs/Model/GroupMemberField1.md)
- [GroupMemberShort](docs/Model/GroupMemberShort.md)
- [GroupRole](docs/Model/GroupRole.md)
- [GroupStatistics](docs/Model/GroupStatistics.md)
- [GroupStatus](docs/Model/GroupStatus.md)
- [GroupType](docs/Model/GroupType.md)
- [GroupsForPerson](docs/Model/GroupsForPerson.md)
- [GrowPath](docs/Model/GrowPath.md)
- [IssueSignUpToken200Response](docs/Model/IssueSignUpToken200Response.md)
- [IssueSignUpToken200ResponseData](docs/Model/IssueSignUpToken200ResponseData.md)
- [IssueSignUpTokenRequest](docs/Model/IssueSignUpTokenRequest.md)
- [Job](docs/Model/Job.md)
- [Job1](docs/Model/Job1.md)
- [JobConfiguration](docs/Model/JobConfiguration.md)
- [JobConfiguration1](docs/Model/JobConfiguration1.md)
- [JobConfigurationReturn](docs/Model/JobConfigurationReturn.md)
- [JobConfigurationReturn1](docs/Model/JobConfigurationReturn1.md)
- [Log](docs/Model/Log.md)
- [Log1](docs/Model/Log1.md)
- [Member](docs/Model/Member.md)
- [MembershipNew](docs/Model/MembershipNew.md)
- [MetaCount](docs/Model/MetaCount.md)
- [MetaDataEntityId](docs/Model/MetaDataEntityId.md)
- [MetaDataEntityPerson](docs/Model/MetaDataEntityPerson.md)
- [MetaModified](docs/Model/MetaModified.md)
- [MetaPagination](docs/Model/MetaPagination.md)
- [OptIns200Response](docs/Model/OptIns200Response.md)
- [OptIns200ResponseData](docs/Model/OptIns200ResponseData.md)
- [PatchFilesId204Response](docs/Model/PatchFilesId204Response.md)
- [PatchGroupsGroupIdRolesRoleIdRequest](docs/Model/PatchGroupsGroupIdRolesRoleIdRequest.md)
- [PatchPerson400Response](docs/Model/PatchPerson400Response.md)
- [PatchPersonRequest](docs/Model/PatchPersonRequest.md)
- [PatchPersonsPersonidMergeDuplicateidRequest](docs/Model/PatchPersonsPersonidMergeDuplicateidRequest.md)
- [PatchSecuritylevelIdRequest](docs/Model/PatchSecuritylevelIdRequest.md)
- [Person](docs/Model/Person.md)
- [PersonEmail](docs/Model/PersonEmail.md)
- [PersonEmail1](docs/Model/PersonEmail1.md)
- [PersonRelationship](docs/Model/PersonRelationship.md)
- [PersonSetting](docs/Model/PersonSetting.md)
- [PersonUpdateable](docs/Model/PersonUpdateable.md)
- [Place](docs/Model/Place.md)
- [PostAutomaticEmail201Response](docs/Model/PostAutomaticEmail201Response.md)
- [PostAutomaticEmailRequest](docs/Model/PostAutomaticEmailRequest.md)
- [PostCalendarsCalendarIdAppointmentsRequest](docs/Model/PostCalendarsCalendarIdAppointmentsRequest.md)
- [PostCheckinPersonsRequest](docs/Model/PostCheckinPersonsRequest.md)
- [PostContactlabels201Response](docs/Model/PostContactlabels201Response.md)
- [PostContactlabelsRequest](docs/Model/PostContactlabelsRequest.md)
- [PostFinanceCostcentersBulkcreateRequest](docs/Model/PostFinanceCostcentersBulkcreateRequest.md)
- [PostFinanceCostcentersBulkcreateRequestCostCentersInner](docs/Model/PostFinanceCostcentersBulkcreateRequestCostCentersInner.md)
- [PostFinanceReports200Response](docs/Model/PostFinanceReports200Response.md)
- [PostFinanceReportsRequest](docs/Model/PostFinanceReportsRequest.md)
- [PostGroups201Response](docs/Model/PostGroups201Response.md)
- [PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest](docs/Model/PostGroupsGroupIdMeetingsMeetingIdMembersMissingRequest.md)
- [PostGroupsRequest](docs/Model/PostGroupsRequest.md)
- [PostLogin200Response](docs/Model/PostLogin200Response.md)
- [PostLogin200ResponseData](docs/Model/PostLogin200ResponseData.md)
- [PostLoginRequest](docs/Model/PostLoginRequest.md)
- [PostNps201Response](docs/Model/PostNps201Response.md)
- [PostNpsRequest](docs/Model/PostNpsRequest.md)
- [PostPersonsAbsences201Response](docs/Model/PostPersonsAbsences201Response.md)
- [PostPersonsAbsencesRequest](docs/Model/PostPersonsAbsencesRequest.md)
- [PostPersonsPersonIdArchiveRequest](docs/Model/PostPersonsPersonIdArchiveRequest.md)
- [PostPublicgroupsGroupIdMailToLeadersRequest](docs/Model/PostPublicgroupsGroupIdMailToLeadersRequest.md)
- [PostPublicgroupsGroupIdSignup200Response](docs/Model/PostPublicgroupsGroupIdSignup200Response.md)
- [PostPublicgroupsGroupIdSignupRequest](docs/Model/PostPublicgroupsGroupIdSignupRequest.md)
- [PostPublicgroupsGroupIdSignupRequestFormsInner](docs/Model/PostPublicgroupsGroupIdSignupRequestFormsInner.md)
- [PostPublicgroupsGroupIdSignupRequestFormsInnerFormInner](docs/Model/PostPublicgroupsGroupIdSignupRequestFormsInnerFormInner.md)
- [PostSecuritylevelId200Response](docs/Model/PostSecuritylevelId200Response.md)
- [PostSecuritylevelIdRequest](docs/Model/PostSecuritylevelIdRequest.md)
- [PostSimulateRequest](docs/Model/PostSimulateRequest.md)
- [PostSyncExternalsystemsExternalSystemIdJobconfigs201Response](docs/Model/PostSyncExternalsystemsExternalSystemIdJobconfigs201Response.md)
- [PostSyncExternalsystemsExternalSystemIdJobconfigsJobIdStartRequest](docs/Model/PostSyncExternalsystemsExternalSystemIdJobconfigsJobIdStartRequest.md)
- [PostSyncExternalsystemsIdTest400Response](docs/Model/PostSyncExternalsystemsIdTest400Response.md)
- [PostSyncLogs201Response](docs/Model/PostSyncLogs201Response.md)
- [PostSyncLogs201ResponseData](docs/Model/PostSyncLogs201ResponseData.md)
- [PostSyncLogsRequest](docs/Model/PostSyncLogsRequest.md)
- [PostSyncLogsRequestLogsInner](docs/Model/PostSyncLogsRequestLogsInner.md)
- [PostSyncLogsRequestLogsInnerChangesInner](docs/Model/PostSyncLogsRequestLogsInnerChangesInner.md)
- [ProfileUpdate](docs/Model/ProfileUpdate.md)
- [PublicGroup](docs/Model/PublicGroup.md)
- [PublicGroup1](docs/Model/PublicGroup1.md)
- [PublicGroup1Information](docs/Model/PublicGroup1Information.md)
- [PublicGroup1SignUpConditions](docs/Model/PublicGroup1SignUpConditions.md)
- [PublicGroup1SignUpPersonsInner](docs/Model/PublicGroup1SignUpPersonsInner.md)
- [PutAutomaticEmailRequest](docs/Model/PutAutomaticEmailRequest.md)
- [PutCheckinPersons200Response](docs/Model/PutCheckinPersons200Response.md)
- [PutCheckinPersons200ResponseData](docs/Model/PutCheckinPersons200ResponseData.md)
- [PutCheckinPersons200ResponseDataEmailsInner](docs/Model/PutCheckinPersons200ResponseDataEmailsInner.md)
- [PutCheckinPersons200ResponseDataPrivacyPolicyAgreement](docs/Model/PutCheckinPersons200ResponseDataPrivacyPolicyAgreement.md)
- [PutCheckinPersons409Response](docs/Model/PutCheckinPersons409Response.md)
- [PutCheckinPersons409ResponseData](docs/Model/PutCheckinPersons409ResponseData.md)
- [PutCheckinPersonsRequest](docs/Model/PutCheckinPersonsRequest.md)
- [PutCheckinPersonsRequestGroup](docs/Model/PutCheckinPersonsRequestGroup.md)
- [PutContactlabelRequest](docs/Model/PutContactlabelRequest.md)
- [PutGroupsGroupIdMeetingsMeetingIdRequest](docs/Model/PutGroupsGroupIdMeetingsMeetingIdRequest.md)
- [PutImageOptions200Response](docs/Model/PutImageOptions200Response.md)
- [PutImageOptions200ResponseData](docs/Model/PutImageOptions200ResponseData.md)
- [PutImageOptionsRequest](docs/Model/PutImageOptionsRequest.md)
- [PutPersonsAbsenceRequest](docs/Model/PutPersonsAbsenceRequest.md)
- [PutStatusRequest](docs/Model/PutStatusRequest.md)
- [PutSyncExternalsystemsExternalSystemIdJobconfigs200Response](docs/Model/PutSyncExternalsystemsExternalSystemIdJobconfigs200Response.md)
- [PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response](docs/Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter200Response.md)
- [PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequest](docs/Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequest.md)
- [PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequestEsInner](docs/Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilterRequestEsInner.md)
- [PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequest](docs/Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequest.md)
- [PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequestPropertyMappingsESToMasterInner](docs/Model/PutSyncExternalsystemsExternalSystemIdJobconfigsJobIdPropertiesRequestPropertyMappingsESToMasterInner.md)
- [PutSyncFieldMappings200Response](docs/Model/PutSyncFieldMappings200Response.md)
- [PutSyncFieldMappingsRequest](docs/Model/PutSyncFieldMappingsRequest.md)
- [PutSyncFieldMappingsRequestPropertyMappingsESToMasterInner](docs/Model/PutSyncFieldMappingsRequestPropertyMappingsESToMasterInner.md)
- [Resource](docs/Model/Resource.md)
- [Role](docs/Model/Role.md)
- [SaveSyncConflict201Response](docs/Model/SaveSyncConflict201Response.md)
- [SaveSyncConflictRequest](docs/Model/SaveSyncConflictRequest.md)
- [SaveTag200Response](docs/Model/SaveTag200Response.md)
- [SaveTagRequest](docs/Model/SaveTagRequest.md)
- [SearchResult](docs/Model/SearchResult.md)
- [SearchResult1](docs/Model/SearchResult1.md)
- [SearchResult1DomainAttributes](docs/Model/SearchResult1DomainAttributes.md)
- [SendAgendaEmail200Response](docs/Model/SendAgendaEmail200Response.md)
- [SendAgendaEmail200ResponseArgs](docs/Model/SendAgendaEmail200ResponseArgs.md)
- [SendAgendaEmailRequest](docs/Model/SendAgendaEmailRequest.md)
- [SendEventEmail200Response](docs/Model/SendEventEmail200Response.md)
- [SendEventEmailRequest](docs/Model/SendEventEmailRequest.md)
- [Service](docs/Model/Service.md)
- [ServiceExchangeRequest](docs/Model/ServiceExchangeRequest.md)
- [ServiceGroup](docs/Model/ServiceGroup.md)
- [ServiceRequest](docs/Model/ServiceRequest.md)
- [SimpleWikiPage](docs/Model/SimpleWikiPage.md)
- [Song](docs/Model/Song.md)
- [Song1](docs/Model/Song1.md)
- [SongCategory](docs/Model/SongCategory.md)
- [StartQueueWorker200Response](docs/Model/StartQueueWorker200Response.md)
- [StartQueueWorker200ResponseData](docs/Model/StartQueueWorker200ResponseData.md)
- [StartStopChat](docs/Model/StartStopChat.md)
- [StartStopEventChatRequest](docs/Model/StartStopEventChatRequest.md)
- [StatisticLogin](docs/Model/StatisticLogin.md)
- [Status](docs/Model/Status.md)
- [StatusNew](docs/Model/StatusNew.md)
- [StatusUpdate](docs/Model/StatusUpdate.md)
- [SyncAdapter](docs/Model/SyncAdapter.md)
- [SyncAdapter1](docs/Model/SyncAdapter1.md)
- [SyncConflicts](docs/Model/SyncConflicts.md)
- [SyncConflictsDataInner](docs/Model/SyncConflictsDataInner.md)
- [SyncEntityMapping](docs/Model/SyncEntityMapping.md)
- [SyncLog](docs/Model/SyncLog.md)
- [SyncLogEntry](docs/Model/SyncLogEntry.md)
- [SyncLogEntryJob](docs/Model/SyncLogEntryJob.md)
- [SyncLogEntryJobExternalSystem](docs/Model/SyncLogEntryJobExternalSystem.md)
- [Tag](docs/Model/Tag.md)
- [TagNew](docs/Model/TagNew.md)
- [TargetGroup](docs/Model/TargetGroup.md)
- [TaxRate](docs/Model/TaxRate.md)
- [TaxRateNew](docs/Model/TaxRateNew.md)
- [TaxType](docs/Model/TaxType.md)
- [TaxTypeNew](docs/Model/TaxTypeNew.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionNew](docs/Model/TransactionNew.md)
- [TransactionPurpose](docs/Model/TransactionPurpose.md)
- [TransactionPurposeNew](docs/Model/TransactionPurposeNew.md)
- [TransactionUpdate](docs/Model/TransactionUpdate.md)
- [Translation](docs/Model/Translation.md)
- [Translation1](docs/Model/Translation1.md)
- [TranslationKey](docs/Model/TranslationKey.md)
- [TranslationKeyTranslations](docs/Model/TranslationKeyTranslations.md)
- [UpdateAccountingPeriodRequest](docs/Model/UpdateAccountingPeriodRequest.md)
- [UpdateCampusRequest](docs/Model/UpdateCampusRequest.md)
- [UpdateCampusRequestAddress](docs/Model/UpdateCampusRequestAddress.md)
- [UpdateCampusRequestDenomination](docs/Model/UpdateCampusRequestDenomination.md)
- [UpdateCampusRequestGroupsInner](docs/Model/UpdateCampusRequestGroupsInner.md)
- [UpdateCampusRequestGroupsInnerGroup](docs/Model/UpdateCampusRequestGroupsInnerGroup.md)
- [UpdateCampusRequestServicesInner](docs/Model/UpdateCampusRequestServicesInner.md)
- [UpdateCampusRequestSignUpGroup](docs/Model/UpdateCampusRequestSignUpGroup.md)
- [UpdateCampusRequestSignUpGroupDomainAttributes](docs/Model/UpdateCampusRequestSignUpGroupDomainAttributes.md)
- [UpdateCampusRequestSocialMedia](docs/Model/UpdateCampusRequestSocialMedia.md)
- [UpdateCampusRequestTeamInner](docs/Model/UpdateCampusRequestTeamInner.md)
- [UpdateCampusRequestTeamInnerPerson](docs/Model/UpdateCampusRequestTeamInnerPerson.md)
- [UpdateChatRequest](docs/Model/UpdateChatRequest.md)
- [UpdateCostCenterRequest](docs/Model/UpdateCostCenterRequest.md)
- [UpdateDeviceForPerson200Response](docs/Model/UpdateDeviceForPerson200Response.md)
- [UpdateDeviceForPersonRequest](docs/Model/UpdateDeviceForPersonRequest.md)
- [UpdateEntityMappingRequest](docs/Model/UpdateEntityMappingRequest.md)
- [UpdateServiceRequestByIdRequest](docs/Model/UpdateServiceRequestByIdRequest.md)
- [UpdateSyncConflictRequest](docs/Model/UpdateSyncConflictRequest.md)
- [UpdateTransactionRequest](docs/Model/UpdateTransactionRequest.md)
- [UploadFiles200Response](docs/Model/UploadFiles200Response.md)
- [UploadFiles200ResponseDataInner](docs/Model/UploadFiles200ResponseDataInner.md)
- [Widget](docs/Model/Widget.md)
- [Widget1](docs/Model/Widget1.md)
- [Widget1Filter](docs/Model/Widget1Filter.md)
- [Widget1FilterOptions](docs/Model/Widget1FilterOptions.md)
- [Widget1WidgetSettings](docs/Model/Widget1WidgetSettings.md)
- [WidgetAction](docs/Model/WidgetAction.md)
- [WidgetAction1](docs/Model/WidgetAction1.md)
- [WidgetItem](docs/Model/WidgetItem.md)
- [WidgetItem1](docs/Model/WidgetItem1.md)
- [WidgetItem1Details](docs/Model/WidgetItem1Details.md)
- [WidgetItem1InfosInner](docs/Model/WidgetItem1InfosInner.md)
- [WikiCategory](docs/Model/WikiCategory.md)
- [WikiCategory1](docs/Model/WikiCategory1.md)
- [WikiPage](docs/Model/WikiPage.md)
- [WikiPage1](docs/Model/WikiPage1.md)
- [WikiPage1Permissions](docs/Model/WikiPage1Permissions.md)
- [WikiPage2](docs/Model/WikiPage2.md)

## Authorization

### Login-Token-Header

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### Login-Token-Query

- **Type**: API key
- **API key parameter name**: login_token
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
