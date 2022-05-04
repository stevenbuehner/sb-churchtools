<?php

require "bootstrap.php";

use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchTools\Api\GroupApi;
use StevenBuehner\ChurchTools\Api\PersonApi;
use StevenBuehner\ChurchTools\ApiException;
use StevenBuehner\ChurchTools\Configuration;
use StevenBuehner\ChurchToolsApi\ChurchToolsUserAuthenticatedClient;


// Create Config
$config = Configuration::getDefaultConfiguration();
$config->setHost('https://slug.church.tools/api');
$config->setUsername('username');
$config->setPassword('password');


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

foreach ($allGroups as $group) {
	$t = $group->getGroupTypeRoleId();
	$g = $group->getGroup();
	echo $g->getTitle() . ' ';
	echo '(ID: ' . $g->getDomainIdentifier() . " - " . ")\n";
}


$done = '';



