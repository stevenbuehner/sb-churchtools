# churchtools-runtime-client

Runtime-Client-Helfer fuer die generierten ChurchTools-OpenAPI-Pakete.

Dieses Paket enthaelt die Client-Vorlagen, die zuvor unter `src/ChurchToolsApi` lagen:

- `ChurchToolsUserAuthenticatedClient`
- `ChurchToolsTokenAuthenticatedClient`
- `FileCookieJar`
- `ChurchToolsClientInterface`

## Zweck

Die generierten Paket-Bibliotheken enthalten Endpunkte/Modelle, aber keine komfortable Login- bzw. Session-Logik.
`churchtools-runtime-client` kapselt genau diese wiederverwendbare Laufzeitlogik.

## Installation

```bash
composer require stevenbuehner/churchtools-runtime-client
```

Und z. B. ein API-Paket:

```bash
composer require stevenbuehner/churchtools-people
```

## Konfigurations-Adapter

Die Runtime arbeitet gegen `ClientConfigInterface`:

```php
<?php

use StevenBuehner\ChurchtoolsRuntimeClient\ClientConfigInterface;

final class RuntimeConfigAdapter implements ClientConfigInterface
{
    public function __construct(private \StevenBuehner\ChurchtoolsPeople\Configuration $config) {}

    public function getHost(): string { return $this->config->getHost(); }
    public function getUsername(): string { return (string) $this->config->getUsername(); }
    public function getPassword(): string { return (string) $this->config->getPassword(); }
    public function getAccessToken(): string { return (string) $this->config->getAccessToken(); }
}
```

## Beispiel: Username/Password

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchtoolsPeople\Api\PersonApi;
use StevenBuehner\ChurchtoolsPeople\Configuration;
use StevenBuehner\ChurchtoolsRuntimeClient\ChurchToolsUserAuthenticatedClient;

$config = Configuration::getDefaultConfiguration();
$config->setHost('https://slug.church.tools/api');
$config->setUsername('username');
$config->setPassword('password');

$runtimeConfig = new RuntimeConfigAdapter($config);
$cookieJar = new CookieJar();
$client = new ChurchToolsUserAuthenticatedClient($runtimeConfig, $cookieJar);
$client->login();

$personApi = new PersonApi($client, $config);
$response = $personApi->getAllPersons();
```

## Beispiel: Access-Token

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchtoolsGroups\Api\GroupApi;
use StevenBuehner\ChurchtoolsGroups\Configuration;
use StevenBuehner\ChurchtoolsRuntimeClient\ChurchToolsTokenAuthenticatedClient;

$config = Configuration::getDefaultConfiguration();
$config->setHost('https://slug.church.tools/api');
$config->setAccessToken('token');

$runtimeConfig = new RuntimeConfigAdapter($config);
$cookieJar = new CookieJar();
$client = new ChurchToolsTokenAuthenticatedClient($runtimeConfig, $cookieJar);

$groupApi = new GroupApi($client, $config);
$response = $groupApi->getGroups();
```

## Hinweise

- Die Runtime-Klassen sind absichtlich schlank und transportieren nur Auth-/Cookie-/Client-Basics.
- Fachliche Endpunkte liegen weiterhin in den generierten Paket-Bibliotheken.
