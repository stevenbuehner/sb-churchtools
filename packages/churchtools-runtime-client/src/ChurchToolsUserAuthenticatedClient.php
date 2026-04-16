<?php

declare(strict_types=1);

namespace StevenBuehner\ChurchtoolsRuntimeClient;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJarInterface;

class ChurchToolsUserAuthenticatedClient extends Client implements ChurchToolsClientInterface
{
    private ClientConfigInterface $config;
    private CookieJarInterface $cookieJar;
    private bool $isLoggedIn = false;

    public function __construct(ClientConfigInterface $config, CookieJarInterface $cookieJar, array $nativeParams = [])
    {
        $params = array_merge(['cookies' => $cookieJar], $nativeParams);
        parent::__construct($params);
        $this->config = $config;
        $this->cookieJar = $cookieJar;
    }

    public function login(): bool
    {
        if ($this->isLoggedIn) {
            return true;
        }

        $response = $this->request('POST', rtrim($this->config->getHost(), '/') . '/login', [
            'query' => [
                'username' => $this->config->getUsername(),
                'password' => $this->config->getPassword(),
            ],
        ]);

        $this->isLoggedIn = $response->getStatusCode() === 200;
        return $this->isLoggedIn;
    }

    public function logout(): void
    {
        $this->cookieJar->clear();
        $this->isLoggedIn = false;
    }
}

