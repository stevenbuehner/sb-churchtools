Setup Example:

```php
use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchTools\Api\GeneralApi;
use StevenBuehner\ChurchTools\Configuration;


$config = Configuration::getDefaultConfiguration();
$config->setHost('https://domain.church.tools/api');
$config->setUsername('username');
$config->setPassword('secret');

$cookieJar = new CookieJar();

$client = new ChurchToolsUserAuthenticatedClient($config, $cookieJar);

$result = $client->login();
$api = new GeneralApi($client, $config);
```