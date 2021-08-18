

# Hinweise zum Repository
1. ChurchTools verwendet die Datei openapi.json um ihre API v2 zu spezifizieren. Aus dieser lassen sich dann in verschiedenen Programmierspachen APIs generieren. Dieses Repository enthält eine generierte API-Version für PHP, die ich für meine Projekte einsetze.
   
2. Da die openapi.json von Churchtools immer wieder Abweichungen zur tatsächlichen API aufweist und der Support im Forum meist sehr langsam oder gar nicht reagiert, war ich gezwungen eine Kopie der openapi.json Datei anzulegen und daraus diese API zu generieren. Änderungen im Original pulle ich immer wieder mal rein und generiere eine aktualisierte Version der API.

3. Wenn dir Fehler in der Openapi.json auffallen, darfst du diese gerne korrigieren und mit einem Push-Request einreichen.  


# Install
```bash
composer require stevenbuehner/sb-churchtools-api dev-master
```


# Examples:
## Create Client with Username and Password
```php
require_once __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Cookie\CookieJar;
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

$personApi = new PersonApi($client, $config);
try {
	$test = $personApi->getAllPersons()->getData();
} catch (ApiException $e) {
}
```

## Create Client with Access-Token
```php
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
$config->setAccessToken('token');

// Create Client with Token
$cookieJar = new CookieJar();
$client  = new ChurchToolsTokenAuthenticatedClient($config, $cookieJar);
$success = $client->login(); // Not neccessary with token
// $client->logout(); // For cleanup


// Create an api
$groupApi  = new GroupApi($client, $config);
$personApi = new PersonApi($client, $config);
// ...
```

## Iteration Example
```php
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
```


Considerring to use:
- https://github.com/liborm85/composer-vendor-cleaner