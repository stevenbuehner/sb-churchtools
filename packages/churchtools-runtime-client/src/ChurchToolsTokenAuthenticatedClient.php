<?php

declare(strict_types=1);

namespace StevenBuehner\ChurchtoolsRuntimeClient;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJarInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;

class ChurchToolsTokenAuthenticatedClient extends Client implements ChurchToolsClientInterface
{
    private ClientConfigInterface $config;
    private CookieJarInterface $cookieJar;

    public function __construct(ClientConfigInterface $config, CookieJarInterface $cookieJar, array $nativeParams = [])
    {
        $params = array_merge(['cookies' => $cookieJar], $nativeParams);
        parent::__construct($params);
        $this->config = $config;
        $this->cookieJar = $cookieJar;
    }

    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface
    {
        if (isset($options['query']) && is_array($options['query'])) {
            $options['query']['login_token'] = $this->config->getAccessToken();
        }
        return parent::sendAsync($request, $options);
    }

    public function login(): bool
    {
        return true;
    }

    public function logout(): void
    {
        $this->cookieJar->clear();
    }
}

