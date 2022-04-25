# OpenAPIClient-php

The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.

For more information, please visit [https://forum.church.tools/category/22/churchtools-schnittstellen](https://forum.church.tools/category/22/churchtools-schnittstellen).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

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



// Configure API key authorization: Login Token (Header)
$config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = StevenBuehner\ChurchTools\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new StevenBuehner\ChurchTools\Api\AbsenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 'person_id_example'; // string
$id = 'id_example'; // string

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
*AdminApi* | [**getAllLogs**](docs/Api/AdminApi.md#getalllogs) | **GET** /logs | Get all log messages
*AdminApi* | [**getLogById**](docs/Api/AdminApi.md#getlogbyid) | **GET** /logs/{id} | Get a log message
*AdminApi* | [**getLoginStatistics**](docs/Api/AdminApi.md#getloginstatistics) | **GET** /logs/statistics/login | 
*CalendarApi* | [**createTemplate**](docs/Api/CalendarApi.md#createtemplate) | **POST** /calendars/appointments/templates | Create new appointment template
*CalendarApi* | [**deleteTemplate**](docs/Api/CalendarApi.md#deletetemplate) | **DELETE** /calendars/appointments/templates/{templateId} | Delete a appointment template identified by id
*CalendarApi* | [**getAllTemplates**](docs/Api/CalendarApi.md#getalltemplates) | **GET** /calendars/appointments/templates | get all appointment templates
*CalendarApi* | [**getCalendars**](docs/Api/CalendarApi.md#getcalendars) | **GET** /calendars | Your GET endpoint
*CalendarApi* | [**getCalendarsAppointments**](docs/Api/CalendarApi.md#getcalendarsappointments) | **GET** /calendars/appointments | Your GET endpoint
*CalendarApi* | [**getTemplateById**](docs/Api/CalendarApi.md#gettemplatebyid) | **GET** /calendars/appointments/templates/{templateId} | get a appointment template
*CalendarApi* | [**updateTemplate**](docs/Api/CalendarApi.md#updatetemplate) | **PUT** /calendars/appointments/templates/{templateId} | update a appointment template identified by id
*CampusApi* | [**createNewCampus**](docs/Api/CampusApi.md#createnewcampus) | **POST** /campuses | 
*CampusApi* | [**deleteCampus**](docs/Api/CampusApi.md#deletecampus) | **DELETE** /campuses/{id} | 
*CampusApi* | [**getAllCampuses**](docs/Api/CampusApi.md#getallcampuses) | **GET** /campuses | Get all campuses
*CampusApi* | [**getCampus**](docs/Api/CampusApi.md#getcampus) | **GET** /campuses/{id} | 
*CampusApi* | [**updateCampus**](docs/Api/CampusApi.md#updatecampus) | **PUT** /campuses/{id} | 
*ChatApi* | [**chatGuidDelete**](docs/Api/ChatApi.md#chatguiddelete) | **DELETE** /chat/{guid} | Delete a chat
*ChatApi* | [**createNewChat**](docs/Api/ChatApi.md#createnewchat) | **POST** /chat | Start new chat
*ChatApi* | [**getAllChats**](docs/Api/ChatApi.md#getallchats) | **GET** /chat | Get all chats
*ChatApi* | [**updateChat**](docs/Api/ChatApi.md#updatechat) | **PATCH** /chat/{guid} | Update a chat
*CheckinApi* | [**checkin**](docs/Api/CheckinApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group
*CheckinApi* | [**getQRCodeCheckin**](docs/Api/CheckinApi.md#getqrcodecheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
*CheckinApi* | [**postCheckinPersons**](docs/Api/CheckinApi.md#postcheckinpersons) | **POST** /checkin/persons | Create new person and add to group
*CheckinApi* | [**putCheckinPersons**](docs/Api/CheckinApi.md#putcheckinpersons) | **PUT** /checkin/persons | Put existing person into group
*ContactLabelApi* | [**deleteContactlabel**](docs/Api/ContactLabelApi.md#deletecontactlabel) | **DELETE** /contactlabels/{id} | Delete Contact Label
*ContactLabelApi* | [**getContactlabel**](docs/Api/ContactLabelApi.md#getcontactlabel) | **GET** /contactlabels/{id} | Get Contact Label
*ContactLabelApi* | [**getContactlabels**](docs/Api/ContactLabelApi.md#getcontactlabels) | **GET** /contactlabels | Get All Contact Labels
*ContactLabelApi* | [**postContactlabels**](docs/Api/ContactLabelApi.md#postcontactlabels) | **POST** /contactlabels | Create new Contact Label
*ContactLabelApi* | [**putContactlabel**](docs/Api/ContactLabelApi.md#putcontactlabel) | **PUT** /contactlabels/{id} | Update Contact Label
*DefaultApi* | [**deleteFilesId**](docs/Api/DefaultApi.md#deletefilesid) | **DELETE** /files/{id} | 
*DefaultApi* | [**getGroupsGroupIdRolesRoleId**](docs/Api/DefaultApi.md#getgroupsgroupidrolesroleid) | **GET** /groups/{groupId}/roles/{roleId} | Your GET endpoint
*DefaultApi* | [**getGroupsGroupIdTags**](docs/Api/DefaultApi.md#getgroupsgroupidtags) | **GET** /groups/{groupId}/tags | Fetch group tags
*DefaultApi* | [**getPublicgroupsGroupIdPossiblerequesters**](docs/Api/DefaultApi.md#getpublicgroupsgroupidpossiblerequesters) | **GET** /publicgroups/{groupId}/possiblerequesters | Your GET endpoint
*DefaultApi* | [**patchFilesId**](docs/Api/DefaultApi.md#patchfilesid) | **PATCH** /files/{id} | 
*DefaultApi* | [**patchGroupsGroupIdRolesRoleId**](docs/Api/DefaultApi.md#patchgroupsgroupidrolesroleid) | **PATCH** /groups/{groupId}/roles/{roleId} | 
*DepartmentApi* | [**getAllDepartments**](docs/Api/DepartmentApi.md#getalldepartments) | **GET** /departments | Get all departments
*EventApi* | [**getAgendaForEvent**](docs/Api/EventApi.md#getagendaforevent) | **GET** /events/{eventId}/agenda | Get agenda for event
*EventApi* | [**getAllEvents**](docs/Api/EventApi.md#getallevents) | **GET** /events | Get all events
*EventApi* | [**getEvent**](docs/Api/EventApi.md#getevent) | **GET** /events/{eventId} | Get a single event
*EventApi* | [**getEventMasterdata**](docs/Api/EventApi.md#geteventmasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot;
*EventApi* | [**getPersonEvents**](docs/Api/EventApi.md#getpersonevents) | **GET** /persons/{id}/events | Get events that person is involved with
*EventApi* | [**getSongsOfAgenda**](docs/Api/EventApi.md#getsongsofagenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda
*EventApi* | [**sendAgendaEmail**](docs/Api/EventApi.md#sendagendaemail) | **POST** /agendas/send | Send agenda email to recipients
*EventApi* | [**sendEventEmail**](docs/Api/EventApi.md#sendeventemail) | **POST** /events/send | Send Mail to Event Participants
*EventApi* | [**startStopChat**](docs/Api/EventApi.md#startstopchat) | **POST** /events/{eventId}/chat | Start or stop an event chat
*FieldApi* | [**getAllFields**](docs/Api/FieldApi.md#getallfields) | **GET** /fields | Get all fields
*FileApi* | [**deleteFiles**](docs/Api/FileApi.md#deletefiles) | **DELETE** /files/{domainType}/{domainIdentifier} | Delete files that are matching the domainType and domainIdentifier
*FileApi* | [**uploadFiles**](docs/Api/FileApi.md#uploadfiles) | **POST** /files/{domainType}/{domainIdentifier} | Upload files
*FinanceApi* | [**applyFinanceTemplate**](docs/Api/FinanceApi.md#applyfinancetemplate) | **POST** /finance/templates/{id} | Apply finance template
*FinanceApi* | [**batchTransaction**](docs/Api/FinanceApi.md#batchtransaction) | **PATCH** /finance/transactions | Transaction Batch Processing
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
*GeneralApi* | [**getApiInfo**](docs/Api/GeneralApi.md#getapiinfo) | **GET** /info | Information about API
*GeneralApi* | [**getCurrentUser**](docs/Api/GeneralApi.md#getcurrentuser) | **GET** /whoami | Currently logged in user.
*GroupApi* | [**checkin**](docs/Api/GroupApi.md#checkin) | **POST** /groups/{groupId}/checkin/{personId} | Checkin a person to a group
*GroupApi* | [**createMeeting**](docs/Api/GroupApi.md#createmeeting) | **POST** /groups/{id}/meetings | Create a group meeting
*GroupApi* | [**createOrUpdateMember**](docs/Api/GroupApi.md#createorupdatemember) | **PUT** /groups/{id}/members/{personId} | Create/Update a group member
*GroupApi* | [**deleteAutomaticEmail**](docs/Api/GroupApi.md#deleteautomaticemail) | **DELETE** /groups/{groupId}/emails/{emailId} | Delete automatic email
*GroupApi* | [**deleteGroup**](docs/Api/GroupApi.md#deletegroup) | **DELETE** /groups/{id} | 
*GroupApi* | [**deleteGroupsGroupIdMeetingsMeetingId**](docs/Api/GroupApi.md#deletegroupsgroupidmeetingsmeetingid) | **DELETE** /groups/{groupId}/meetings/{meetingId} | 
*GroupApi* | [**deleteGroupsGroupIdMeetingsMeetingIdMembersMemberId**](docs/Api/GroupApi.md#deletegroupsgroupidmeetingsmeetingidmembersmemberid) | **DELETE** /groups/{groupId}/meetings/{meetingId}/members/{memberId} | Revoke checkin
*GroupApi* | [**deleteMember**](docs/Api/GroupApi.md#deletemember) | **DELETE** /groups/{id}/members/{personId} | Delete a group member
*GroupApi* | [**getAllGroupMembers**](docs/Api/GroupApi.md#getallgroupmembers) | **GET** /groups/{id}/members | Get all group members
*GroupApi* | [**getAllGroupsForPerson**](docs/Api/GroupApi.md#getallgroupsforperson) | **GET** /persons/{id}/groups | Get all groups a member is in
*GroupApi* | [**getAllMeetings**](docs/Api/GroupApi.md#getallmeetings) | **GET** /groups/{id}/meetings | Get all group meetings for a specific group
*GroupApi* | [**getAutomaticEmail**](docs/Api/GroupApi.md#getautomaticemail) | **GET** /groups/{groupId}/emails/{emailId} | Get one automatic email
*GroupApi* | [**getAutomaticEmails**](docs/Api/GroupApi.md#getautomaticemails) | **GET** /groups/{groupId}/emails | Get all automatic emails of a group
*GroupApi* | [**getGroupForHomepage**](docs/Api/GroupApi.md#getgroupforhomepage) | **GET** /publicgroups/{id}/{hash} | Public information of group
*GroupApi* | [**getGroupHomepage**](docs/Api/GroupApi.md#getgrouphomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
*GroupApi* | [**getGroupStatistics**](docs/Api/GroupApi.md#getgroupstatistics) | **GET** /groups/{groupId}/statistics | Fetch calculated facts about group
*GroupApi* | [**getGroups**](docs/Api/GroupApi.md#getgroups) | **GET** /groups | Get all groups
*GroupApi* | [**getGroupsGroupIdMemberfields**](docs/Api/GroupApi.md#getgroupsgroupidmemberfields) | **GET** /groups/{groupId}/memberfields | Get Group member fields
*GroupApi* | [**getGroupsGroupIdMembersStatistics**](docs/Api/GroupApi.md#getgroupsgroupidmembersstatistics) | **GET** /groups/{groupId}/members/statistics | Get statistics for group members
*GroupApi* | [**getGroupsHierarchies**](docs/Api/GroupApi.md#getgroupshierarchies) | **GET** /groups/hierarchies | Get all group hierarchies
*GroupApi* | [**getGroupsMembers**](docs/Api/GroupApi.md#getgroupsmembers) | **GET** /groups/members | Get all group members
*GroupApi* | [**getPublicgroupsGroupIdForm**](docs/Api/GroupApi.md#getpublicgroupsgroupidform) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
*GroupApi* | [**getQRCodeCheckin**](docs/Api/GroupApi.md#getqrcodecheckin) | **GET** /groups/{groupId}/qrcodecheckin/{personId}/pdf | Get link to QR-Code for CheckIn PDF
*GroupApi* | [**groupsIdGet**](docs/Api/GroupApi.md#groupsidget) | **GET** /groups/{id} | Get a group
*GroupApi* | [**issueSignUpToken**](docs/Api/GroupApi.md#issuesignuptoken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
*GroupApi* | [**optIns**](docs/Api/GroupApi.md#optins) | **GET** /groups/{id}/optins | Get Opt In status of group members
*GroupApi* | [**postAutomaticEmail**](docs/Api/GroupApi.md#postautomaticemail) | **POST** /groups/{groupId}/emails | Save new automatic email for a group role
*GroupApi* | [**postGroups**](docs/Api/GroupApi.md#postgroups) | **POST** /groups | Create Group
*GroupApi* | [**postGroupsGroupIdMeetingsMeetingIdMembersMissing**](docs/Api/GroupApi.md#postgroupsgroupidmeetingsmeetingidmembersmissing) | **POST** /groups/{groupId}/meetings/{meetingId}/members/missing | 
*GroupApi* | [**postPublicgroupsGroupIdMailToLeaders**](docs/Api/GroupApi.md#postpublicgroupsgroupidmailtoleaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
*GroupApi* | [**postPublicgroupsGroupIdSignup**](docs/Api/GroupApi.md#postpublicgroupsgroupidsignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group
*GroupApi* | [**putAutomaticEmail**](docs/Api/GroupApi.md#putautomaticemail) | **PUT** /groups/{groupId}/emails/{emailId} | Update automatic email
*GroupApi* | [**putGroupsGroupIdMeetingsMeetingId**](docs/Api/GroupApi.md#putgroupsgroupidmeetingsmeetingid) | **PUT** /groups/{groupId}/meetings/{meetingId} | 
*GroupApi* | [**startStopChat**](docs/Api/GroupApi.md#startstopchat) | **POST** /groups/{id}/chat | Start or stop an event chat
*GroupHomepageApi* | [**getGroupForHomepage**](docs/Api/GroupHomepageApi.md#getgroupforhomepage) | **GET** /publicgroups/{id}/{hash} | Public information of group
*GroupHomepageApi* | [**getGroupHomepage**](docs/Api/GroupHomepageApi.md#getgrouphomepage) | **GET** /grouphomepages/{hash} | Get information about public groups with settings
*GroupHomepageApi* | [**getPublicgroupsGroupIdForm**](docs/Api/GroupHomepageApi.md#getpublicgroupsgroupidform) | **GET** /publicgroups/{groupId}/form | Get a Group Sign Up Form
*GroupHomepageApi* | [**issueSignUpToken**](docs/Api/GroupHomepageApi.md#issuesignuptoken) | **POST** /publicgroups/{groupId}/token | Issue new sign up token.
*GroupHomepageApi* | [**postPublicgroupsGroupIdMailToLeaders**](docs/Api/GroupHomepageApi.md#postpublicgroupsgroupidmailtoleaders) | **POST** /publicgroups/{groupId}/mailToLeaders | Send a Mail to Public Group Leaders
*GroupHomepageApi* | [**postPublicgroupsGroupIdSignup**](docs/Api/GroupHomepageApi.md#postpublicgroupsgroupidsignup) | **POST** /publicgroups/{groupId}/signup | Send a Sign Up Form to Get Signed Up into a Public Group
*HiddenApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobId**](docs/Api/HiddenApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobid) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Delete job config
*HiddenApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/HiddenApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Delete all filter entities
*HiddenApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/HiddenApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Delete all Properties for This Job
*HiddenApi* | [**deleteSyncExternalsystemsId**](docs/Api/HiddenApi.md#deletesyncexternalsystemsid) | **DELETE** /sync/externalsystems/{id} | DELETE external system
*HiddenApi* | [**deleteSyncFieldMappings**](docs/Api/HiddenApi.md#deletesyncfieldmappings) | **DELETE** /sync/externalsystems/{id}/fieldmappings/{domainType} | Delete Mapping for Domain Type
*HiddenApi* | [**getApiProfiles**](docs/Api/HiddenApi.md#getapiprofiles) | **GET** /profiles | Get all profiles
*HiddenApi* | [**getGroupsGroupIdMeetingsMeetingIdMembers**](docs/Api/HiddenApi.md#getgroupsgroupidmeetingsmeetingidmembers) | **GET** /groups/{groupId}/meetings/{meetingId}/members | Get Group Meeting Members
*HiddenApi* | [**getProfilesChurch**](docs/Api/HiddenApi.md#getprofileschurch) | **GET** /profiles/church | Get a profile
*HiddenApi* | [**getSlugcheck**](docs/Api/HiddenApi.md#getslugcheck) | **GET** /profiles/slugcheck/{slug} | Check if a finder slug is free
*HiddenApi* | [**getSyncAdapters**](docs/Api/HiddenApi.md#getsyncadapters) | **GET** /sync/adapters | GET Sync Adapters
*HiddenApi* | [**getSyncExecutions**](docs/Api/HiddenApi.md#getsyncexecutions) | **GET** /sync/executions | Statistical Information about Sync Executions
*HiddenApi* | [**getSyncExternalsystems**](docs/Api/HiddenApi.md#getsyncexternalsystems) | **GET** /sync/externalsystems | GET External Systems
*HiddenApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobId**](docs/Api/HiddenApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobid) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Your Job Configuration
*HiddenApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/HiddenApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Fetch all entity filters for this job
*HiddenApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/HiddenApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Fetch all Properties for This Job
*HiddenApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigurations**](docs/Api/HiddenApi.md#getsyncexternalsystemsexternalsystemidjobconfigurations) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs | GET Job configurations
*HiddenApi* | [**getSyncExternalsystemsId**](docs/Api/HiddenApi.md#getsyncexternalsystemsid) | **GET** /sync/externalsystems/{id} | GET an external system by id
*HiddenApi* | [**getSyncExternalsystemsIdTest**](docs/Api/HiddenApi.md#getsyncexternalsystemsidtest) | **GET** /sync/externalsystems/{id}/test | Your GET endpoint
*HiddenApi* | [**getSyncJobconfigs**](docs/Api/HiddenApi.md#getsyncjobconfigs) | **GET** /sync/jobconfigs | Your GET endpoint
*HiddenApi* | [**getSyncLogs**](docs/Api/HiddenApi.md#getsynclogs) | **GET** /sync/logs | Get Sync Logs
*HiddenApi* | [**postNps**](docs/Api/HiddenApi.md#postnps) | **POST** /nps | Save NPS score
*HiddenApi* | [**postSyncExternalsystemsExternalSystemIdJobconfigs**](docs/Api/HiddenApi.md#postsyncexternalsystemsexternalsystemidjobconfigs) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs | Create job configuration
*HiddenApi* | [**postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart**](docs/Api/HiddenApi.md#postsyncexternalsystemsexternalsystemidjobconfigsjobidstart) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/start | Start Execution
*HiddenApi* | [**postSyncExternalsystemsIdTest**](docs/Api/HiddenApi.md#postsyncexternalsystemsidtest) | **POST** /sync/externalsystems/{id}/test | Test the external system
*HiddenApi* | [**postSyncLogs**](docs/Api/HiddenApi.md#postsynclogs) | **POST** /sync/logs | Save Sync Logs
*HiddenApi* | [**putProfilesChurch**](docs/Api/HiddenApi.md#putprofileschurch) | **PUT** /profiles/church | 
*HiddenApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigs**](docs/Api/HiddenApi.md#putsyncexternalsystemsexternalsystemidjobconfigs) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId} | Update job configuration
*HiddenApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/HiddenApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Save entity filters
*HiddenApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/HiddenApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Save Properties, Which Should Be Synced
*HiddenApi* | [**putSyncExternalsystemsId**](docs/Api/HiddenApi.md#putsyncexternalsystemsid) | **PUT** /sync/externalsystems/{id} | Update external system
*JobApi* | [**getJobs**](docs/Api/JobApi.md#getjobs) | **GET** /jobs | Your GET endpoint
*MasterDataApi* | [**fetchMasterDataPerson**](docs/Api/MasterDataApi.md#fetchmasterdataperson) | **GET** /masterdata/person | Fetch all master data for the module \&quot;People &amp; Groups\&quot;
*MasterDataApi* | [**getAllData**](docs/Api/MasterDataApi.md#getalldata) | **GET** /finance/masterdata | Get a master data for finance module
*MasterDataApi* | [**getAllGroupTypeRoles**](docs/Api/MasterDataApi.md#getallgrouptyperoles) | **GET** /masterdata/person/roles | Get all group type roles
*MasterDataApi* | [**getEventMasterdata**](docs/Api/MasterDataApi.md#geteventmasterdata) | **GET** /event/masterdata | Fetch MasterData for Module \&quot;Event\&quot;
*MasterDataApi* | [**getMasterDataPerson**](docs/Api/MasterDataApi.md#getmasterdataperson) | **GET** /person/masterdata | Fetch all master data for the module \&quot;People &amp; Groups\&quot;
*MasterDataApi* | [**masterdataPersonRolesRoleIdGet**](docs/Api/MasterDataApi.md#masterdatapersonrolesroleidget) | **GET** /masterdata/person/roles/{roleId} | Get a group type role
*PermissionApi* | [**getGlobalPermissions**](docs/Api/PermissionApi.md#getglobalpermissions) | **GET** /permissions/global | All Permissions for the Current User
*PermissionApi* | [**getInternalPermissionsForPerson**](docs/Api/PermissionApi.md#getinternalpermissionsforperson) | **GET** /permissions/internal/persons/{personId} | Lookup Person-Related Group Internal Permissions
*PermissionApi* | [**getPermissionsInternalGroupsGroupId**](docs/Api/PermissionApi.md#getpermissionsinternalgroupsgroupid) | **GET** /permissions/internal/groups/{groupId} | Lookup Group-Related Group Internal Permissions
*PersonApi* | [**createPerson**](docs/Api/PersonApi.md#createperson) | **POST** /persons | Create new person
*PersonApi* | [**declineServiceRequestById**](docs/Api/PersonApi.md#declineservicerequestbyid) | **DELETE** /persons/{id}/servicerequests/{requestId} | Decline a service request for a person
*PersonApi* | [**deleteDeviceForPerson**](docs/Api/PersonApi.md#deletedeviceforperson) | **DELETE** /persons/{personId}/devices/{deviceId} | Remove device for person
*PersonApi* | [**deletePerson**](docs/Api/PersonApi.md#deleteperson) | **DELETE** /persons/{id} | Delete person
*PersonApi* | [**deletePersonSetting**](docs/Api/PersonApi.md#deletepersonsetting) | **DELETE** /persons/{id}/settings/{module}/{attribute} | Delete a person setting
*PersonApi* | [**getAllGroupsForPerson**](docs/Api/PersonApi.md#getallgroupsforperson) | **GET** /persons/{id}/groups | Get all groups a member is in
*PersonApi* | [**getAllPersonSettings**](docs/Api/PersonApi.md#getallpersonsettings) | **GET** /persons/{id}/settings | Get all person settings
*PersonApi* | [**getAllPersons**](docs/Api/PersonApi.md#getallpersons) | **GET** /persons | Get all persons
*PersonApi* | [**getDeviceForPerson**](docs/Api/PersonApi.md#getdeviceforperson) | **GET** /persons/{personId}/devices/{deviceId} | Fetch one device
*PersonApi* | [**getOpenServiceRequestsForPerson**](docs/Api/PersonApi.md#getopenservicerequestsforperson) | **GET** /persons/{id}/servicerequests | Get all service requests for a person
*PersonApi* | [**getPersonById**](docs/Api/PersonApi.md#getpersonbyid) | **GET** /persons/{id} | Get a person by ID or GUID
*PersonApi* | [**getPersonDevices**](docs/Api/PersonApi.md#getpersondevices) | **GET** /persons/{personId}/devices | Fetch all registered devices for person
*PersonApi* | [**getPersonEvents**](docs/Api/PersonApi.md#getpersonevents) | **GET** /persons/{id}/events | Get events that person is involved with
*PersonApi* | [**getPersonModuleSettings**](docs/Api/PersonApi.md#getpersonmodulesettings) | **GET** /persons/{id}/settings/{module} | Get all person settings of a module
*PersonApi* | [**getPersonProperties**](docs/Api/PersonApi.md#getpersonproperties) | **POST** /persons/properties | Retrieve people&#39;s properties, whether they own an email adress
*PersonApi* | [**getPersonRelationships**](docs/Api/PersonApi.md#getpersonrelationships) | **GET** /persons/{id}/relationships | Get all relationships linked to this person
*PersonApi* | [**getPersonSetting**](docs/Api/PersonApi.md#getpersonsetting) | **GET** /persons/{id}/settings/{module}/{attribute} | Get person setting
*PersonApi* | [**getPersonTags**](docs/Api/PersonApi.md#getpersontags) | **GET** /persons/{id}/tags | Get all tags attached to a person
*PersonApi* | [**getPersonsBirthdays**](docs/Api/PersonApi.md#getpersonsbirthdays) | **GET** /persons/birthdays | Fetch Birthdays
*PersonApi* | [**getPersonsIdLogintoken**](docs/Api/PersonApi.md#getpersonsidlogintoken) | **GET** /persons/{id}/logintoken | Fetch Login Token
*PersonApi* | [**getServiceRequestById**](docs/Api/PersonApi.md#getservicerequestbyid) | **GET** /persons/{id}/servicerequests/{requestId} | Get a specific service request for a person
*PersonApi* | [**invitePerson**](docs/Api/PersonApi.md#inviteperson) | **POST** /persons/{personId}/invite | Invite Person to ChurchTools
*PersonApi* | [**patchPerson**](docs/Api/PersonApi.md#patchperson) | **PATCH** /persons/{id} | Updates a person
*PersonApi* | [**postPersonsPersonIdArchive**](docs/Api/PersonApi.md#postpersonspersonidarchive) | **POST** /persons/{personId}/archive | 
*PersonApi* | [**undoServiceRequestById**](docs/Api/PersonApi.md#undoservicerequestbyid) | **POST** /persons/{id}/servicerequests/{requestId}/undo | Undo last service request action
*PersonApi* | [**updateDeviceForPerson**](docs/Api/PersonApi.md#updatedeviceforperson) | **PUT** /persons/{personId}/devices/{deviceId} | Create / Update new device for person
*PersonApi* | [**updatePersonSetting**](docs/Api/PersonApi.md#updatepersonsetting) | **PUT** /persons/{id}/settings/{module}/{attribute} | Create/Update person setting
*PersonApi* | [**updateServiceRequestById**](docs/Api/PersonApi.md#updateservicerequestbyid) | **PUT** /persons/{id}/servicerequests/{requestId} | Agree to a service request for a person
*QueueApi* | [**getQueueJobGroupsStatus**](docs/Api/QueueApi.md#getqueuejobgroupsstatus) | **GET** /queues/{queue}/jobgroups/status | Status Information About Job Groups in Queue
*QueueApi* | [**startQueueWorker**](docs/Api/QueueApi.md#startqueueworker) | **POST** /queues/{queue} | Start Worker For Queue
*ResourceApi* | [**getBookings**](docs/Api/ResourceApi.md#getbookings) | **GET** /bookings | Your GET endpoint
*ResourceApi* | [**getResourceMasterdata**](docs/Api/ResourceApi.md#getresourcemasterdata) | **GET** /resource/masterdata | Your GET endpoint
*ServiceServiceGroupsApi* | [**declineServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#declineservicerequestbyid) | **DELETE** /persons/{id}/servicerequests/{requestId} | Decline a service request for a person
*ServiceServiceGroupsApi* | [**getAllServiceGroups**](docs/Api/ServiceServiceGroupsApi.md#getallservicegroups) | **GET** /servicegroups | Get all service groups
*ServiceServiceGroupsApi* | [**getAllServices**](docs/Api/ServiceServiceGroupsApi.md#getallservices) | **GET** /services | Get all services
*ServiceServiceGroupsApi* | [**getOpenServiceRequestsForPerson**](docs/Api/ServiceServiceGroupsApi.md#getopenservicerequestsforperson) | **GET** /persons/{id}/servicerequests | Get all service requests for a person
*ServiceServiceGroupsApi* | [**getServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#getservicerequestbyid) | **GET** /persons/{id}/servicerequests/{requestId} | Get a specific service request for a person
*ServiceServiceGroupsApi* | [**undoServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#undoservicerequestbyid) | **POST** /persons/{id}/servicerequests/{requestId}/undo | Undo last service request action
*ServiceServiceGroupsApi* | [**updateServiceRequestById**](docs/Api/ServiceServiceGroupsApi.md#updateservicerequestbyid) | **PUT** /persons/{id}/servicerequests/{requestId} | Agree to a service request for a person
*SongApi* | [**getSong**](docs/Api/SongApi.md#getsong) | **GET** /songs/{songId} | Get Song
*SongApi* | [**getSongs**](docs/Api/SongApi.md#getsongs) | **GET** /songs | Get All Songs
*SongApi* | [**getSongsOfAgenda**](docs/Api/SongApi.md#getsongsofagenda) | **GET** /events/{eventId}/agenda/songs | Get All Songs of Agenda
*StatusApi* | [**createNewStatus**](docs/Api/StatusApi.md#createnewstatus) | **POST** /statuses | Save new status
*StatusApi* | [**getAllStatuses**](docs/Api/StatusApi.md#getallstatuses) | **GET** /statuses | Get all statuses
*StatusApi* | [**statusesIdDelete**](docs/Api/StatusApi.md#statusesiddelete) | **DELETE** /statuses/{id} | Delete a status
*StatusApi* | [**statusesIdGet**](docs/Api/StatusApi.md#statusesidget) | **GET** /statuses/{id} | Get a specific status
*StatusApi* | [**statusesIdPut**](docs/Api/StatusApi.md#statusesidput) | **PUT** /statuses/{id} | Update status
*SyncApi* | [**createSyncMapping**](docs/Api/SyncApi.md#createsyncmapping) | **POST** /sync/entitymappings | Create new mapping
*SyncApi* | [**deleteEntityMapping**](docs/Api/SyncApi.md#deleteentitymapping) | **DELETE** /sync/entitymappings/{id} | Delete Mapping from Database.
*SyncApi* | [**deleteSyncConflict**](docs/Api/SyncApi.md#deletesyncconflict) | **DELETE** /sync/conflicts/{id} | Delete Conflict
*SyncApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/SyncApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Delete all filter entities
*SyncApi* | [**deleteSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/SyncApi.md#deletesyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **DELETE** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Delete all Properties for This Job
*SyncApi* | [**getEntityMapping**](docs/Api/SyncApi.md#getentitymapping) | **GET** /sync/entitymappings/{id} | Get One Entity Mapping
*SyncApi* | [**getSyncConflict**](docs/Api/SyncApi.md#getsyncconflict) | **GET** /sync/conflicts/{id} | Fetch One Conflict
*SyncApi* | [**getSyncConflicts**](docs/Api/SyncApi.md#getsyncconflicts) | **GET** /sync/conflicts | Fetch all conflicts
*SyncApi* | [**getSyncExecutions**](docs/Api/SyncApi.md#getsyncexecutions) | **GET** /sync/executions | Statistical Information about Sync Executions
*SyncApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Fetch all entity filters for this job
*SyncApi* | [**getSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/SyncApi.md#getsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **GET** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Fetch all Properties for This Job
*SyncApi* | [**getSyncFieldMappings**](docs/Api/SyncApi.md#getsyncfieldmappings) | **GET** /sync/externalsystems/{id}/fieldmappings/{domainType} | Get Mapping for Domain Type
*SyncApi* | [**getSyncLogs**](docs/Api/SyncApi.md#getsynclogs) | **GET** /sync/logs | Get Sync Logs
*SyncApi* | [**getSyncMappings**](docs/Api/SyncApi.md#getsyncmappings) | **GET** /sync/entitymappings | Fetch all registered mappings
*SyncApi* | [**postSyncExternalsystems**](docs/Api/SyncApi.md#postsyncexternalsystems) | **POST** /sync/externalsystems | Create external system
*SyncApi* | [**postSyncExternalsystemsExternalSystemIdJobconfigsJobIdStart**](docs/Api/SyncApi.md#postsyncexternalsystemsexternalsystemidjobconfigsjobidstart) | **POST** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/start | Start Execution
*SyncApi* | [**postSyncLogs**](docs/Api/SyncApi.md#postsynclogs) | **POST** /sync/logs | Save Sync Logs
*SyncApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdFilter**](docs/Api/SyncApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidfilter) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/filter | Save entity filters
*SyncApi* | [**putSyncExternalsystemsExternalSystemIdJobconfigsJobIdProperties**](docs/Api/SyncApi.md#putsyncexternalsystemsexternalsystemidjobconfigsjobidproperties) | **PUT** /sync/externalsystems/{externalSystemId}/jobconfigs/{jobId}/properties | Save Properties, Which Should Be Synced
*SyncApi* | [**putSyncFieldMappings**](docs/Api/SyncApi.md#putsyncfieldmappings) | **PUT** /sync/externalsystems/{id}/fieldmappings/{domainType} | Save Mapping for Domain Type
*SyncApi* | [**saveSyncConflict**](docs/Api/SyncApi.md#savesyncconflict) | **POST** /sync/conflicts | Save new detected conflict
*SyncApi* | [**updateEntityMapping**](docs/Api/SyncApi.md#updateentitymapping) | **PUT** /sync/entitymappings/{id} | Update or Create Mapping
*SyncApi* | [**updateSyncConflict**](docs/Api/SyncApi.md#updatesyncconflict) | **PUT** /sync/conflicts/{id} | Update Conflict
*TagApi* | [**getTags**](docs/Api/TagApi.md#gettags) | **GET** /tags | Get all tags of a type
*TagApi* | [**saveTag**](docs/Api/TagApi.md#savetag) | **POST** /tags | Create new tag
*TranslationApi* | [**getAllTranslations**](docs/Api/TranslationApi.md#getalltranslations) | **GET** /translations | Get all translations
*WikiApi* | [**getWikiCategories**](docs/Api/WikiApi.md#getwikicategories) | **GET** /wiki/categories | Get all wiki categories.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPages**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpages) | **GET** /wiki/categories/{wikiCategoryId}/pages | Returns all Wiki Pages in the given Category.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPagesIdentifier**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpagesidentifier) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier} | Returns the latest version of the wiki page with the given identifier.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPagesIdentifierVersions**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpagesidentifierversions) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier}/versions | Returns all version of the wiki page for the given
*WikiApi* | [**getWikiCategoriesWikiCategoryIdPagesVersionsVersion**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidpagesversionsversion) | **GET** /wiki/categories/{wikiCategoryId}/pages/{identifier}/versions/{version} | Returns the wiki page with the given identifier and version.
*WikiApi* | [**getWikiCategoriesWikiCategoryIdSearch**](docs/Api/WikiApi.md#getwikicategorieswikicategoryidsearch) | **GET** /wiki/search | Your GET endpoint

## Models

- [Absence](docs/Model/Absence.md)
- [Absence1](docs/Model/Absence1.md)
- [AbsenceReason](docs/Model/AbsenceReason.md)
- [Account](docs/Model/Account.md)
- [AccountClass](docs/Model/AccountClass.md)
- [AccountGroup](docs/Model/AccountGroup.md)
- [AccountType](docs/Model/AccountType.md)
- [AccountingPeriod](docs/Model/AccountingPeriod.md)
- [Agenda](docs/Model/Agenda.md)
- [Agenda1](docs/Model/Agenda1.md)
- [Agenda1Meta](docs/Model/Agenda1Meta.md)
- [Agenda1Meta1](docs/Model/Agenda1Meta1.md)
- [Agenda1Meta1ModifiedPerson](docs/Model/Agenda1Meta1ModifiedPerson.md)
- [Agenda1MetaModifiedPid](docs/Model/Agenda1MetaModifiedPid.md)
- [Agenda1Responsible](docs/Model/Agenda1Responsible.md)
- [Agenda1ResponsiblePersons](docs/Model/Agenda1ResponsiblePersons.md)
- [Agenda1ServiceGroupNotes](docs/Model/Agenda1ServiceGroupNotes.md)
- [Agenda1Song](docs/Model/Agenda1Song.md)
- [Agenda1StartTimes](docs/Model/Agenda1StartTimes.md)
- [AgendaItem](docs/Model/AgendaItem.md)
- [AppointmentTemplate](docs/Model/AppointmentTemplate.md)
- [AppointmentTemplate1](docs/Model/AppointmentTemplate1.md)
- [Arrangement](docs/Model/Arrangement.md)
- [Arrangement1](docs/Model/Arrangement1.md)
- [AutomaticEmail](docs/Model/AutomaticEmail.md)
- [CalendarDomainObject](docs/Model/CalendarDomainObject.md)
- [CalendarDomainObjectDomainAttributes](docs/Model/CalendarDomainObjectDomainAttributes.md)
- [Campus](docs/Model/Campus.md)
- [CampusesIdAddress](docs/Model/CampusesIdAddress.md)
- [CampusesIdPerson](docs/Model/CampusesIdPerson.md)
- [CampusesIdServices](docs/Model/CampusesIdServices.md)
- [CampusesIdSocialMedia](docs/Model/CampusesIdSocialMedia.md)
- [CampusesIdTeam](docs/Model/CampusesIdTeam.md)
- [CashDiscount](docs/Model/CashDiscount.md)
- [Checkin](docs/Model/Checkin.md)
- [CheckinPersonsGroup](docs/Model/CheckinPersonsGroup.md)
- [Client](docs/Model/Client.md)
- [ContactLabel](docs/Model/ContactLabel.md)
- [CostCenter](docs/Model/CostCenter.md)
- [DbField](docs/Model/DbField.md)
- [DbField1](docs/Model/DbField1.md)
- [Department](docs/Model/Department.md)
- [Device](docs/Model/Device.md)
- [DomainObject](docs/Model/DomainObject.md)
- [EntityMetaData](docs/Model/EntityMetaData.md)
- [EntityMetaDataCreatedPerson](docs/Model/EntityMetaDataCreatedPerson.md)
- [EntityMetaDataModifiedPerson](docs/Model/EntityMetaDataModifiedPerson.md)
- [Event](docs/Model/Event.md)
- [Event1](docs/Model/Event1.md)
- [EventMasterData](docs/Model/EventMasterData.md)
- [EventMasterData1](docs/Model/EventMasterData1.md)
- [EventMasterData1Data](docs/Model/EventMasterData1Data.md)
- [EventMasterData1Meta](docs/Model/EventMasterData1Meta.md)
- [ExternalSystem](docs/Model/ExternalSystem.md)
- [ExternalSystem1](docs/Model/ExternalSystem1.md)
- [ExternalSystem2](docs/Model/ExternalSystem2.md)
- [ExternalSystem3](docs/Model/ExternalSystem3.md)
- [ExternalSystemReturn](docs/Model/ExternalSystemReturn.md)
- [FieldMapping](docs/Model/FieldMapping.md)
- [FieldMappingEntries](docs/Model/FieldMappingEntries.md)
- [FieldMappingEntry](docs/Model/FieldMappingEntry.md)
- [File](docs/Model/File.md)
- [FileOrLink](docs/Model/FileOrLink.md)
- [FinanceCostcentersBulkcreateCostCenters](docs/Model/FinanceCostcentersBulkcreateCostCenters.md)
- [FinanceMasterData](docs/Model/FinanceMasterData.md)
- [FinanceTransactionsChangeset](docs/Model/FinanceTransactionsChangeset.md)
- [FollowUp](docs/Model/FollowUp.md)
- [FollowUpInterval](docs/Model/FollowUpInterval.md)
- [Group](docs/Model/Group.md)
- [GroupDomainObject](docs/Model/GroupDomainObject.md)
- [GroupDomainObject1](docs/Model/GroupDomainObject1.md)
- [GroupDomainObject1DomainAttributes](docs/Model/GroupDomainObject1DomainAttributes.md)
- [GroupHierarchy](docs/Model/GroupHierarchy.md)
- [GroupHierarchy1](docs/Model/GroupHierarchy1.md)
- [GroupMeeting](docs/Model/GroupMeeting.md)
- [GroupMeetingMember](docs/Model/GroupMeetingMember.md)
- [GroupMember](docs/Model/GroupMember.md)
- [GroupMemberField](docs/Model/GroupMemberField.md)
- [GroupMemberPersonField](docs/Model/GroupMemberPersonField.md)
- [GroupMemberShort](docs/Model/GroupMemberShort.md)
- [GroupStatistics](docs/Model/GroupStatistics.md)
- [GroupsForPerson](docs/Model/GroupsForPerson.md)
- [GroupsForPersonGroup](docs/Model/GroupsForPersonGroup.md)
- [GrowPath](docs/Model/GrowPath.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject14](docs/Model/InlineObject14.md)
- [InlineObject15](docs/Model/InlineObject15.md)
- [InlineObject16](docs/Model/InlineObject16.md)
- [InlineObject17](docs/Model/InlineObject17.md)
- [InlineObject18](docs/Model/InlineObject18.md)
- [InlineObject19](docs/Model/InlineObject19.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject20](docs/Model/InlineObject20.md)
- [InlineObject21](docs/Model/InlineObject21.md)
- [InlineObject22](docs/Model/InlineObject22.md)
- [InlineObject23](docs/Model/InlineObject23.md)
- [InlineObject24](docs/Model/InlineObject24.md)
- [InlineObject25](docs/Model/InlineObject25.md)
- [InlineObject26](docs/Model/InlineObject26.md)
- [InlineObject27](docs/Model/InlineObject27.md)
- [InlineObject28](docs/Model/InlineObject28.md)
- [InlineObject29](docs/Model/InlineObject29.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject30](docs/Model/InlineObject30.md)
- [InlineObject31](docs/Model/InlineObject31.md)
- [InlineObject32](docs/Model/InlineObject32.md)
- [InlineObject33](docs/Model/InlineObject33.md)
- [InlineObject34](docs/Model/InlineObject34.md)
- [InlineObject35](docs/Model/InlineObject35.md)
- [InlineObject36](docs/Model/InlineObject36.md)
- [InlineObject37](docs/Model/InlineObject37.md)
- [InlineObject38](docs/Model/InlineObject38.md)
- [InlineObject39](docs/Model/InlineObject39.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject40](docs/Model/InlineObject40.md)
- [InlineObject41](docs/Model/InlineObject41.md)
- [InlineObject42](docs/Model/InlineObject42.md)
- [InlineObject43](docs/Model/InlineObject43.md)
- [InlineObject44](docs/Model/InlineObject44.md)
- [InlineObject45](docs/Model/InlineObject45.md)
- [InlineObject46](docs/Model/InlineObject46.md)
- [InlineObject47](docs/Model/InlineObject47.md)
- [InlineObject48](docs/Model/InlineObject48.md)
- [InlineObject49](docs/Model/InlineObject49.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject50](docs/Model/InlineObject50.md)
- [InlineObject51](docs/Model/InlineObject51.md)
- [InlineObject52](docs/Model/InlineObject52.md)
- [InlineObject53](docs/Model/InlineObject53.md)
- [InlineObject54](docs/Model/InlineObject54.md)
- [InlineObject55](docs/Model/InlineObject55.md)
- [InlineObject56](docs/Model/InlineObject56.md)
- [InlineObject57](docs/Model/InlineObject57.md)
- [InlineObject58](docs/Model/InlineObject58.md)
- [InlineObject59](docs/Model/InlineObject59.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject60](docs/Model/InlineObject60.md)
- [InlineObject61](docs/Model/InlineObject61.md)
- [InlineObject62](docs/Model/InlineObject62.md)
- [InlineObject63](docs/Model/InlineObject63.md)
- [InlineObject64](docs/Model/InlineObject64.md)
- [InlineObject65](docs/Model/InlineObject65.md)
- [InlineObject66](docs/Model/InlineObject66.md)
- [InlineObject67](docs/Model/InlineObject67.md)
- [InlineObject68](docs/Model/InlineObject68.md)
- [InlineObject69](docs/Model/InlineObject69.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject70](docs/Model/InlineObject70.md)
- [InlineObject71](docs/Model/InlineObject71.md)
- [InlineObject72](docs/Model/InlineObject72.md)
- [InlineObject73](docs/Model/InlineObject73.md)
- [InlineObject74](docs/Model/InlineObject74.md)
- [InlineObject75](docs/Model/InlineObject75.md)
- [InlineObject76](docs/Model/InlineObject76.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject9](docs/Model/InlineObject9.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse200100](docs/Model/InlineResponse200100.md)
- [InlineResponse200100Data](docs/Model/InlineResponse200100Data.md)
- [InlineResponse200100DataMaster](docs/Model/InlineResponse200100DataMaster.md)
- [InlineResponse200101](docs/Model/InlineResponse200101.md)
- [InlineResponse200102](docs/Model/InlineResponse200102.md)
- [InlineResponse200103](docs/Model/InlineResponse200103.md)
- [InlineResponse200104](docs/Model/InlineResponse200104.md)
- [InlineResponse200105](docs/Model/InlineResponse200105.md)
- [InlineResponse200106](docs/Model/InlineResponse200106.md)
- [InlineResponse200106Data](docs/Model/InlineResponse200106Data.md)
- [InlineResponse200106Meta](docs/Model/InlineResponse200106Meta.md)
- [InlineResponse200107](docs/Model/InlineResponse200107.md)
- [InlineResponse200108](docs/Model/InlineResponse200108.md)
- [InlineResponse200108Meta](docs/Model/InlineResponse200108Meta.md)
- [InlineResponse200108MetaModifiedPerson](docs/Model/InlineResponse200108MetaModifiedPerson.md)
- [InlineResponse200109](docs/Model/InlineResponse200109.md)
- [InlineResponse20011](docs/Model/InlineResponse20011.md)
- [InlineResponse200110](docs/Model/InlineResponse200110.md)
- [InlineResponse200111](docs/Model/InlineResponse200111.md)
- [InlineResponse200111Job](docs/Model/InlineResponse200111Job.md)
- [InlineResponse200111JobExternalSystem](docs/Model/InlineResponse200111JobExternalSystem.md)
- [InlineResponse200112](docs/Model/InlineResponse200112.md)
- [InlineResponse200113](docs/Model/InlineResponse200113.md)
- [InlineResponse200113Both](docs/Model/InlineResponse200113Both.md)
- [InlineResponse200113Data](docs/Model/InlineResponse200113Data.md)
- [InlineResponse200113Es](docs/Model/InlineResponse200113Es.md)
- [InlineResponse200113Meta](docs/Model/InlineResponse200113Meta.md)
- [InlineResponse200113MetaPagination](docs/Model/InlineResponse200113MetaPagination.md)
- [InlineResponse200114](docs/Model/InlineResponse200114.md)
- [InlineResponse200114Data](docs/Model/InlineResponse200114Data.md)
- [InlineResponse200114Meta](docs/Model/InlineResponse200114Meta.md)
- [InlineResponse200114Person](docs/Model/InlineResponse200114Person.md)
- [InlineResponse200114PersonDomainAttributes](docs/Model/InlineResponse200114PersonDomainAttributes.md)
- [InlineResponse200115](docs/Model/InlineResponse200115.md)
- [InlineResponse200116](docs/Model/InlineResponse200116.md)
- [InlineResponse200117](docs/Model/InlineResponse200117.md)
- [InlineResponse200118](docs/Model/InlineResponse200118.md)
- [InlineResponse200118Data](docs/Model/InlineResponse200118Data.md)
- [InlineResponse200119](docs/Model/InlineResponse200119.md)
- [InlineResponse20011Data](docs/Model/InlineResponse20011Data.md)
- [InlineResponse20012](docs/Model/InlineResponse20012.md)
- [InlineResponse200120](docs/Model/InlineResponse200120.md)
- [InlineResponse200121](docs/Model/InlineResponse200121.md)
- [InlineResponse200121Data](docs/Model/InlineResponse200121Data.md)
- [InlineResponse200122](docs/Model/InlineResponse200122.md)
- [InlineResponse200122Meta](docs/Model/InlineResponse200122Meta.md)
- [InlineResponse200123](docs/Model/InlineResponse200123.md)
- [InlineResponse200123Data](docs/Model/InlineResponse200123Data.md)
- [InlineResponse200123DataResourceTypes](docs/Model/InlineResponse200123DataResourceTypes.md)
- [InlineResponse200123DataResources](docs/Model/InlineResponse200123DataResources.md)
- [InlineResponse200124](docs/Model/InlineResponse200124.md)
- [InlineResponse200124Base](docs/Model/InlineResponse200124Base.md)
- [InlineResponse200124BaseAdditionals](docs/Model/InlineResponse200124BaseAdditionals.md)
- [InlineResponse200124BaseExceptions](docs/Model/InlineResponse200124BaseExceptions.md)
- [InlineResponse200124BaseMeta](docs/Model/InlineResponse200124BaseMeta.md)
- [InlineResponse200124BaseMeta1](docs/Model/InlineResponse200124BaseMeta1.md)
- [InlineResponse200124BaseMeta1CreatedPerson](docs/Model/InlineResponse200124BaseMeta1CreatedPerson.md)
- [InlineResponse200124Calculated](docs/Model/InlineResponse200124Calculated.md)
- [InlineResponse200124Data](docs/Model/InlineResponse200124Data.md)
- [InlineResponse200125](docs/Model/InlineResponse200125.md)
- [InlineResponse200125Base](docs/Model/InlineResponse200125Base.md)
- [InlineResponse200125BaseAdditions](docs/Model/InlineResponse200125BaseAdditions.md)
- [InlineResponse200125BaseExceptions](docs/Model/InlineResponse200125BaseExceptions.md)
- [InlineResponse200125BaseMeta](docs/Model/InlineResponse200125BaseMeta.md)
- [InlineResponse200125BaseMeta1](docs/Model/InlineResponse200125BaseMeta1.md)
- [InlineResponse200125BaseMeta2](docs/Model/InlineResponse200125BaseMeta2.md)
- [InlineResponse200125Calculated](docs/Model/InlineResponse200125Calculated.md)
- [InlineResponse200125Data](docs/Model/InlineResponse200125Data.md)
- [InlineResponse200126](docs/Model/InlineResponse200126.md)
- [InlineResponse200126Data](docs/Model/InlineResponse200126Data.md)
- [InlineResponse20013](docs/Model/InlineResponse20013.md)
- [InlineResponse20013Data](docs/Model/InlineResponse20013Data.md)
- [InlineResponse20013DataEventServices](docs/Model/InlineResponse20013DataEventServices.md)
- [InlineResponse20013DataPerson](docs/Model/InlineResponse20013DataPerson.md)
- [InlineResponse20013DataPersonDomainAttributes](docs/Model/InlineResponse20013DataPersonDomainAttributes.md)
- [InlineResponse20014](docs/Model/InlineResponse20014.md)
- [InlineResponse20014Data](docs/Model/InlineResponse20014Data.md)
- [InlineResponse20015](docs/Model/InlineResponse20015.md)
- [InlineResponse20016](docs/Model/InlineResponse20016.md)
- [InlineResponse20016Data](docs/Model/InlineResponse20016Data.md)
- [InlineResponse20016Group](docs/Model/InlineResponse20016Group.md)
- [InlineResponse20017](docs/Model/InlineResponse20017.md)
- [InlineResponse20017Data](docs/Model/InlineResponse20017Data.md)
- [InlineResponse20017DataFollowUp](docs/Model/InlineResponse20017DataFollowUp.md)
- [InlineResponse20017DataInformation](docs/Model/InlineResponse20017DataInformation.md)
- [InlineResponse20017DataPermissions](docs/Model/InlineResponse20017DataPermissions.md)
- [InlineResponse20017DataRoles](docs/Model/InlineResponse20017DataRoles.md)
- [InlineResponse20017DataSettings](docs/Model/InlineResponse20017DataSettings.md)
- [InlineResponse20017DataSettingsGroupMeeting](docs/Model/InlineResponse20017DataSettingsGroupMeeting.md)
- [InlineResponse20017DataSettingsNewMember](docs/Model/InlineResponse20017DataSettingsNewMember.md)
- [InlineResponse20018](docs/Model/InlineResponse20018.md)
- [InlineResponse20018Data](docs/Model/InlineResponse20018Data.md)
- [InlineResponse20018Meta](docs/Model/InlineResponse20018Meta.md)
- [InlineResponse20018Person](docs/Model/InlineResponse20018Person.md)
- [InlineResponse20019](docs/Model/InlineResponse20019.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse20020](docs/Model/InlineResponse20020.md)
- [InlineResponse20020Data](docs/Model/InlineResponse20020Data.md)
- [InlineResponse20021](docs/Model/InlineResponse20021.md)
- [InlineResponse20021Data](docs/Model/InlineResponse20021Data.md)
- [InlineResponse20021Statistics](docs/Model/InlineResponse20021Statistics.md)
- [InlineResponse20022](docs/Model/InlineResponse20022.md)
- [InlineResponse20023](docs/Model/InlineResponse20023.md)
- [InlineResponse20023Data](docs/Model/InlineResponse20023Data.md)
- [InlineResponse20024](docs/Model/InlineResponse20024.md)
- [InlineResponse20024Data](docs/Model/InlineResponse20024Data.md)
- [InlineResponse20025](docs/Model/InlineResponse20025.md)
- [InlineResponse20025Information](docs/Model/InlineResponse20025Information.md)
- [InlineResponse20025SignUpConditions](docs/Model/InlineResponse20025SignUpConditions.md)
- [InlineResponse20025SignUpPersons](docs/Model/InlineResponse20025SignUpPersons.md)
- [InlineResponse20026](docs/Model/InlineResponse20026.md)
- [InlineResponse20026Data](docs/Model/InlineResponse20026Data.md)
- [InlineResponse20027](docs/Model/InlineResponse20027.md)
- [InlineResponse20027Data](docs/Model/InlineResponse20027Data.md)
- [InlineResponse20028](docs/Model/InlineResponse20028.md)
- [InlineResponse20029](docs/Model/InlineResponse20029.md)
- [InlineResponse20029Data](docs/Model/InlineResponse20029Data.md)
- [InlineResponse2002Address](docs/Model/InlineResponse2002Address.md)
- [InlineResponse2002Data](docs/Model/InlineResponse2002Data.md)
- [InlineResponse2002Denomination](docs/Model/InlineResponse2002Denomination.md)
- [InlineResponse2002Groups](docs/Model/InlineResponse2002Groups.md)
- [InlineResponse2002Logo](docs/Model/InlineResponse2002Logo.md)
- [InlineResponse2002Meta](docs/Model/InlineResponse2002Meta.md)
- [InlineResponse2002Services](docs/Model/InlineResponse2002Services.md)
- [InlineResponse2002SocialMedia](docs/Model/InlineResponse2002SocialMedia.md)
- [InlineResponse2002Team](docs/Model/InlineResponse2002Team.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse20030](docs/Model/InlineResponse20030.md)
- [InlineResponse20030Data](docs/Model/InlineResponse20030Data.md)
- [InlineResponse20031](docs/Model/InlineResponse20031.md)
- [InlineResponse20032](docs/Model/InlineResponse20032.md)
- [InlineResponse20033](docs/Model/InlineResponse20033.md)
- [InlineResponse20034](docs/Model/InlineResponse20034.md)
- [InlineResponse20035](docs/Model/InlineResponse20035.md)
- [InlineResponse20036](docs/Model/InlineResponse20036.md)
- [InlineResponse20036Meta](docs/Model/InlineResponse20036Meta.md)
- [InlineResponse20037](docs/Model/InlineResponse20037.md)
- [InlineResponse20038](docs/Model/InlineResponse20038.md)
- [InlineResponse20038Args](docs/Model/InlineResponse20038Args.md)
- [InlineResponse20039](docs/Model/InlineResponse20039.md)
- [InlineResponse20039Translations](docs/Model/InlineResponse20039Translations.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse20040](docs/Model/InlineResponse20040.md)
- [InlineResponse20040Data](docs/Model/InlineResponse20040Data.md)
- [InlineResponse20041](docs/Model/InlineResponse20041.md)
- [InlineResponse20041Data](docs/Model/InlineResponse20041Data.md)
- [InlineResponse20042](docs/Model/InlineResponse20042.md)
- [InlineResponse20043](docs/Model/InlineResponse20043.md)
- [InlineResponse20043Data](docs/Model/InlineResponse20043Data.md)
- [InlineResponse20043DataAgeGroups](docs/Model/InlineResponse20043DataAgeGroups.md)
- [InlineResponse20043DataFollowUpIntervals](docs/Model/InlineResponse20043DataFollowUpIntervals.md)
- [InlineResponse20043DataFollowUps](docs/Model/InlineResponse20043DataFollowUps.md)
- [InlineResponse20043DataGroupCategories](docs/Model/InlineResponse20043DataGroupCategories.md)
- [InlineResponse20043DataGroupStatuses](docs/Model/InlineResponse20043DataGroupStatuses.md)
- [InlineResponse20043DataGroupTypes](docs/Model/InlineResponse20043DataGroupTypes.md)
- [InlineResponse20043DataTargetGroups](docs/Model/InlineResponse20043DataTargetGroups.md)
- [InlineResponse20044](docs/Model/InlineResponse20044.md)
- [InlineResponse20044Count](docs/Model/InlineResponse20044Count.md)
- [InlineResponse20044Data](docs/Model/InlineResponse20044Data.md)
- [InlineResponse20044DataAccountClasses](docs/Model/InlineResponse20044DataAccountClasses.md)
- [InlineResponse20044DataAccountGroups](docs/Model/InlineResponse20044DataAccountGroups.md)
- [InlineResponse20044DataAccountTypes](docs/Model/InlineResponse20044DataAccountTypes.md)
- [InlineResponse20044DataAccountingPeriods](docs/Model/InlineResponse20044DataAccountingPeriods.md)
- [InlineResponse20044DataAccounts](docs/Model/InlineResponse20044DataAccounts.md)
- [InlineResponse20044DataCashDiscounts](docs/Model/InlineResponse20044DataCashDiscounts.md)
- [InlineResponse20044DataClients](docs/Model/InlineResponse20044DataClients.md)
- [InlineResponse20044DataPermissions](docs/Model/InlineResponse20044DataPermissions.md)
- [InlineResponse20044DataPermissions1](docs/Model/InlineResponse20044DataPermissions1.md)
- [InlineResponse20044DataTaxRates](docs/Model/InlineResponse20044DataTaxRates.md)
- [InlineResponse20044DataTaxTypes](docs/Model/InlineResponse20044DataTaxTypes.md)
- [InlineResponse20044DataTransactionPurposes](docs/Model/InlineResponse20044DataTransactionPurposes.md)
- [InlineResponse20045](docs/Model/InlineResponse20045.md)
- [InlineResponse20046](docs/Model/InlineResponse20046.md)
- [InlineResponse20047](docs/Model/InlineResponse20047.md)
- [InlineResponse20048](docs/Model/InlineResponse20048.md)
- [InlineResponse20049](docs/Model/InlineResponse20049.md)
- [InlineResponse2004Data](docs/Model/InlineResponse2004Data.md)
- [InlineResponse2004Options](docs/Model/InlineResponse2004Options.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse20050](docs/Model/InlineResponse20050.md)
- [InlineResponse20051](docs/Model/InlineResponse20051.md)
- [InlineResponse20052](docs/Model/InlineResponse20052.md)
- [InlineResponse20053](docs/Model/InlineResponse20053.md)
- [InlineResponse20054](docs/Model/InlineResponse20054.md)
- [InlineResponse20055](docs/Model/InlineResponse20055.md)
- [InlineResponse20056](docs/Model/InlineResponse20056.md)
- [InlineResponse20057](docs/Model/InlineResponse20057.md)
- [InlineResponse20058](docs/Model/InlineResponse20058.md)
- [InlineResponse20059](docs/Model/InlineResponse20059.md)
- [InlineResponse2005Data](docs/Model/InlineResponse2005Data.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse20060](docs/Model/InlineResponse20060.md)
- [InlineResponse20060Data](docs/Model/InlineResponse20060Data.md)
- [InlineResponse20060Meta](docs/Model/InlineResponse20060Meta.md)
- [InlineResponse20061](docs/Model/InlineResponse20061.md)
- [InlineResponse20061Data](docs/Model/InlineResponse20061Data.md)
- [InlineResponse20062](docs/Model/InlineResponse20062.md)
- [InlineResponse20063](docs/Model/InlineResponse20063.md)
- [InlineResponse20064](docs/Model/InlineResponse20064.md)
- [InlineResponse20065](docs/Model/InlineResponse20065.md)
- [InlineResponse20066](docs/Model/InlineResponse20066.md)
- [InlineResponse20066Data](docs/Model/InlineResponse20066Data.md)
- [InlineResponse20066Meta](docs/Model/InlineResponse20066Meta.md)
- [InlineResponse20066Permissions](docs/Model/InlineResponse20066Permissions.md)
- [InlineResponse20067](docs/Model/InlineResponse20067.md)
- [InlineResponse20068](docs/Model/InlineResponse20068.md)
- [InlineResponse20068Data](docs/Model/InlineResponse20068Data.md)
- [InlineResponse20069](docs/Model/InlineResponse20069.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse20070](docs/Model/InlineResponse20070.md)
- [InlineResponse20071](docs/Model/InlineResponse20071.md)
- [InlineResponse20071Data](docs/Model/InlineResponse20071Data.md)
- [InlineResponse20072](docs/Model/InlineResponse20072.md)
- [InlineResponse20072Form](docs/Model/InlineResponse20072Form.md)
- [InlineResponse20072Options](docs/Model/InlineResponse20072Options.md)
- [InlineResponse20072SignUpPersons](docs/Model/InlineResponse20072SignUpPersons.md)
- [InlineResponse20073](docs/Model/InlineResponse20073.md)
- [InlineResponse20074](docs/Model/InlineResponse20074.md)
- [InlineResponse20074Meta](docs/Model/InlineResponse20074Meta.md)
- [InlineResponse20074MetaCreatedPerson](docs/Model/InlineResponse20074MetaCreatedPerson.md)
- [InlineResponse20075](docs/Model/InlineResponse20075.md)
- [InlineResponse20076](docs/Model/InlineResponse20076.md)
- [InlineResponse20076Meta](docs/Model/InlineResponse20076Meta.md)
- [InlineResponse20077](docs/Model/InlineResponse20077.md)
- [InlineResponse20078](docs/Model/InlineResponse20078.md)
- [InlineResponse20078Data](docs/Model/InlineResponse20078Data.md)
- [InlineResponse20079](docs/Model/InlineResponse20079.md)
- [InlineResponse20079Data](docs/Model/InlineResponse20079Data.md)
- [InlineResponse20079Jobs](docs/Model/InlineResponse20079Jobs.md)
- [InlineResponse20079Meta](docs/Model/InlineResponse20079Meta.md)
- [InlineResponse2007Meta](docs/Model/InlineResponse2007Meta.md)
- [InlineResponse2007MetaPagination](docs/Model/InlineResponse2007MetaPagination.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse20080](docs/Model/InlineResponse20080.md)
- [InlineResponse20080Data](docs/Model/InlineResponse20080Data.md)
- [InlineResponse20081](docs/Model/InlineResponse20081.md)
- [InlineResponse20081Data](docs/Model/InlineResponse20081Data.md)
- [InlineResponse20081DataChurchcal](docs/Model/InlineResponse20081DataChurchcal.md)
- [InlineResponse20081DataChurchcheckin](docs/Model/InlineResponse20081DataChurchcheckin.md)
- [InlineResponse20081DataChurchcore](docs/Model/InlineResponse20081DataChurchcore.md)
- [InlineResponse20081DataChurchdb](docs/Model/InlineResponse20081DataChurchdb.md)
- [InlineResponse20081DataChurchfinance](docs/Model/InlineResponse20081DataChurchfinance.md)
- [InlineResponse20081DataChurchreport](docs/Model/InlineResponse20081DataChurchreport.md)
- [InlineResponse20081DataChurchresource](docs/Model/InlineResponse20081DataChurchresource.md)
- [InlineResponse20081DataChurchservice](docs/Model/InlineResponse20081DataChurchservice.md)
- [InlineResponse20081DataChurchwiki](docs/Model/InlineResponse20081DataChurchwiki.md)
- [InlineResponse20081DataFinance](docs/Model/InlineResponse20081DataFinance.md)
- [InlineResponse20082](docs/Model/InlineResponse20082.md)
- [InlineResponse20082Data](docs/Model/InlineResponse20082Data.md)
- [InlineResponse20082DataChurchdb](docs/Model/InlineResponse20082DataChurchdb.md)
- [InlineResponse20083](docs/Model/InlineResponse20083.md)
- [InlineResponse20083Permissions](docs/Model/InlineResponse20083Permissions.md)
- [InlineResponse20084](docs/Model/InlineResponse20084.md)
- [InlineResponse20084Permissions](docs/Model/InlineResponse20084Permissions.md)
- [InlineResponse20085](docs/Model/InlineResponse20085.md)
- [InlineResponse20086](docs/Model/InlineResponse20086.md)
- [InlineResponse20087](docs/Model/InlineResponse20087.md)
- [InlineResponse20088](docs/Model/InlineResponse20088.md)
- [InlineResponse20088Data](docs/Model/InlineResponse20088Data.md)
- [InlineResponse20089](docs/Model/InlineResponse20089.md)
- [InlineResponse20089Data](docs/Model/InlineResponse20089Data.md)
- [InlineResponse20089DataChurchdb](docs/Model/InlineResponse20089DataChurchdb.md)
- [InlineResponse2008Data](docs/Model/InlineResponse2008Data.md)
- [InlineResponse2008Data1](docs/Model/InlineResponse2008Data1.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [InlineResponse20090](docs/Model/InlineResponse20090.md)
- [InlineResponse20091](docs/Model/InlineResponse20091.md)
- [InlineResponse20092](docs/Model/InlineResponse20092.md)
- [InlineResponse20092Data](docs/Model/InlineResponse20092Data.md)
- [InlineResponse20093](docs/Model/InlineResponse20093.md)
- [InlineResponse20094](docs/Model/InlineResponse20094.md)
- [InlineResponse20095](docs/Model/InlineResponse20095.md)
- [InlineResponse20096](docs/Model/InlineResponse20096.md)
- [InlineResponse20097](docs/Model/InlineResponse20097.md)
- [InlineResponse20098](docs/Model/InlineResponse20098.md)
- [InlineResponse20099](docs/Model/InlineResponse20099.md)
- [InlineResponse20099Data](docs/Model/InlineResponse20099Data.md)
- [InlineResponse20099DataProperties](docs/Model/InlineResponse20099DataProperties.md)
- [InlineResponse20099DataPropertiesPropertyMappingsMasterToES](docs/Model/InlineResponse20099DataPropertiesPropertyMappingsMasterToES.md)
- [InlineResponse2009Data](docs/Model/InlineResponse2009Data.md)
- [InlineResponse201](docs/Model/InlineResponse201.md)
- [InlineResponse2011](docs/Model/InlineResponse2011.md)
- [InlineResponse2012](docs/Model/InlineResponse2012.md)
- [InlineResponse2013](docs/Model/InlineResponse2013.md)
- [InlineResponse2014](docs/Model/InlineResponse2014.md)
- [InlineResponse2015](docs/Model/InlineResponse2015.md)
- [InlineResponse2016](docs/Model/InlineResponse2016.md)
- [InlineResponse2017](docs/Model/InlineResponse2017.md)
- [InlineResponse2017Data](docs/Model/InlineResponse2017Data.md)
- [InlineResponse2018](docs/Model/InlineResponse2018.md)
- [InlineResponse2019](docs/Model/InlineResponse2019.md)
- [InlineResponse204](docs/Model/InlineResponse204.md)
- [InlineResponse400](docs/Model/InlineResponse400.md)
- [InlineResponse4001](docs/Model/InlineResponse4001.md)
- [InlineResponse4002](docs/Model/InlineResponse4002.md)
- [InlineResponse4003](docs/Model/InlineResponse4003.md)
- [InlineResponse403](docs/Model/InlineResponse403.md)
- [InlineResponse409](docs/Model/InlineResponse409.md)
- [InlineResponse4091](docs/Model/InlineResponse4091.md)
- [InlineResponse4091Data](docs/Model/InlineResponse4091Data.md)
- [InlineResponse409Data](docs/Model/InlineResponse409Data.md)
- [InlineResponse409DataReferences](docs/Model/InlineResponse409DataReferences.md)
- [Job](docs/Model/Job.md)
- [Job1](docs/Model/Job1.md)
- [JobConfiguration](docs/Model/JobConfiguration.md)
- [JobConfiguration1](docs/Model/JobConfiguration1.md)
- [JobConfiguration2](docs/Model/JobConfiguration2.md)
- [JobConfigurationReturn](docs/Model/JobConfigurationReturn.md)
- [JobConfigurationReturn1](docs/Model/JobConfigurationReturn1.md)
- [Log](docs/Model/Log.md)
- [Log1](docs/Model/Log1.md)
- [Meta](docs/Model/Meta.md)
- [MetaPagination](docs/Model/MetaPagination.md)
- [MetaPaginationPagination](docs/Model/MetaPaginationPagination.md)
- [PaymentRequiredV1](docs/Model/PaymentRequiredV1.md)
- [Person](docs/Model/Person.md)
- [Person1](docs/Model/Person1.md)
- [Person1PrivacyPolicyAgreement](docs/Model/Person1PrivacyPolicyAgreement.md)
- [PersonDomainObject](docs/Model/PersonDomainObject.md)
- [PersonDomainObjectDomainAttributes](docs/Model/PersonDomainObjectDomainAttributes.md)
- [PersonEmail](docs/Model/PersonEmail.md)
- [PersonEmail1](docs/Model/PersonEmail1.md)
- [PersonMasterData](docs/Model/PersonMasterData.md)
- [PersonRelationship](docs/Model/PersonRelationship.md)
- [PersonSetting](docs/Model/PersonSetting.md)
- [PersonsPrivacyPolicyAgreement](docs/Model/PersonsPrivacyPolicyAgreement.md)
- [PublicGroup](docs/Model/PublicGroup.md)
- [PublicgroupsGroupIdSignupForm](docs/Model/PublicgroupsGroupIdSignupForm.md)
- [PublicgroupsGroupIdSignupForms](docs/Model/PublicgroupsGroupIdSignupForms.md)
- [Role](docs/Model/Role.md)
- [SearchResult](docs/Model/SearchResult.md)
- [SearchResult1](docs/Model/SearchResult1.md)
- [Service](docs/Model/Service.md)
- [ServiceGroup](docs/Model/ServiceGroup.md)
- [ServiceRequest](docs/Model/ServiceRequest.md)
- [SimpleWikiPage](docs/Model/SimpleWikiPage.md)
- [Song](docs/Model/Song.md)
- [Song1](docs/Model/Song1.md)
- [SongCategory](docs/Model/SongCategory.md)
- [StatisticLogin](docs/Model/StatisticLogin.md)
- [Status](docs/Model/Status.md)
- [SyncAdapter](docs/Model/SyncAdapter.md)
- [SyncAdapter1](docs/Model/SyncAdapter1.md)
- [SyncConflicts](docs/Model/SyncConflicts.md)
- [SyncConflictsData](docs/Model/SyncConflictsData.md)
- [SyncEntityMapping](docs/Model/SyncEntityMapping.md)
- [SyncExternalsystemsIdFieldmappingsDomainTypePropertyMappingsMasterToES](docs/Model/SyncExternalsystemsIdFieldmappingsDomainTypePropertyMappingsMasterToES.md)
- [SyncLog](docs/Model/SyncLog.md)
- [SyncLogEntry](docs/Model/SyncLogEntry.md)
- [SyncLogsChanges](docs/Model/SyncLogsChanges.md)
- [SyncLogsLogs](docs/Model/SyncLogsLogs.md)
- [Tag](docs/Model/Tag.md)
- [TaxRate](docs/Model/TaxRate.md)
- [TaxType](docs/Model/TaxType.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionPurpose](docs/Model/TransactionPurpose.md)
- [Translation](docs/Model/Translation.md)
- [Translation1](docs/Model/Translation1.md)
- [TranslationKey](docs/Model/TranslationKey.md)
- [WikiCategory](docs/Model/WikiCategory.md)
- [WikiCategory1](docs/Model/WikiCategory1.md)
- [WikiPage](docs/Model/WikiPage.md)
- [WikiPage1](docs/Model/WikiPage1.md)
- [WikiPage2](docs/Model/WikiPage2.md)

## Authorization

### Login Token (Header)

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### Login Token (Query)

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
