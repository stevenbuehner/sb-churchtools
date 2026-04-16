<?php

declare(strict_types=1);

namespace StevenBuehner\ChurchtoolsRuntimeClient;

use GuzzleHttp\ClientInterface;

interface ChurchToolsClientInterface extends ClientInterface
{
    public function login(): bool;

    public function logout(): void;
}

