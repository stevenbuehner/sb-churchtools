<?php

require "bootstrap.php";

use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchTools\Api\CalendarApi;
use StevenBuehner\ChurchTools\Api\CampusApi;
use StevenBuehner\ChurchTools\Api\GroupApi;
use StevenBuehner\ChurchTools\Api\MasterDataApi;
use StevenBuehner\ChurchTools\Api\PersonApi;
use StevenBuehner\ChurchTools\Configuration;
use StevenBuehner\ChurchToolsApi\ChurchToolsUserAuthenticatedClient;


// Create Config
$config = Configuration::getDefaultConfiguration();
list ($host, $username, $password) = require 'credentials.php';
$config->setHost($host);
$config->setUsername($username);
$config->setPassword($password);


// Create Client with Autthentication
$cookieJar = new CookieJar();
$client    = new ChurchToolsUserAuthenticatedClient($config, $cookieJar);
$success   = $client->login();
// $client->logout();

$groupApi   = new GroupApi($client, $config);
$personApi  = new PersonApi($client, $config);
$allPersons = $personApi->getAllPersons(NULL, NULL, NULL, NULL, NULL, NULL, 1, 1)->getData();

$firstPerson = $allPersons[0];
$allGroups   = $groupApi->getAllGroupsForPerson($firstPerson->getId())->getData();

echo "Alle sichtbaren Gruppen des Nutzers '" . $firstPerson->getFirstName() . ' ' . $firstPerson->getLastName() . "\n";
foreach ($allGroups as $group) {
	$t = $group->getGroupTypeRoleId();
	$g = $group->getGroup();
	echo $g->getTitle() . ' ';
	echo '(ID: ' . $g->getDomainIdentifier() . ")\n";
}
echo "\n";

$calApi = new CalendarApi($client, $config);
echo "Alle sichtbaren Kalender: ";
$cals = [];
foreach ($calApi->getCalendars()->getData() as $cal) {
	$cals[] = $cal->getName() . '(' . $cal->getId() . ')';
}
echo join(', ', $cals) . "\n\n";

$campusApi = new CampusApi($client, $config);
echo "Alle sichtbaren Campuses: ";
$camps = [];
foreach ($campusApi->getAllCampuses()->getData() as $c) {
	$camps[] = $c->getName() . '(' . $c->getId() . ')';
}
echo join(', ', $camps) . "\n\n";


$masterDataApi = new MasterDataApi($client, $config);
$master = $masterDataApi->getMasterDataPerson()->getData();


$done = '';



