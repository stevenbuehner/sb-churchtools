<?php

require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchTools\Api\GroupApi;
use StevenBuehner\ChurchTools\Api\PersonApi;
use StevenBuehner\ChurchTools\ApiException;
use StevenBuehner\ChurchTools\Configuration;
use StevenBuehner\ChurchToolsApi\ChurchToolsTokenAuthenticatedClient;
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

$groupApi  = new GroupApi($client, $config);
$personApi = new PersonApi($client, $config);
try {
	$test = $personApi->getAllPersons()->getData();
} catch (ApiException $e) {
}


// Create Client with Token
$cookieJar = new CookieJar();
$config->setAccessToken('token');
$client  = new ChurchToolsTokenAuthenticatedClient($config, $cookieJar);
$success = $client->login(); // Not neccessary with token
// $client->logout(); // For cleanup


// Create an api
$groupApi  = new GroupApi($client, $config);
$personApi = new PersonApi($client, $config);
// ...


// Iteration Example
$hasMore = TRUE;
$page    = 1;
$limit   = 100;

while ($hasMore === TRUE) {
	try {
		$response = $personApi
			->getAllPersons(NULL, NULL, NULL, NULL, NULL, FALSE, $page, $limit);
	} catch (ApiException $e) {
	}

	// do Something with persons ...

	// get next batch of persons
	$hasMore = $response->getMeta()->getPagination()->getLastPage() > $page;
	$page++;
}