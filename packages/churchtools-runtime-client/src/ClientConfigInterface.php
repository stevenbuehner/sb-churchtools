<?php

declare(strict_types=1);

namespace StevenBuehner\ChurchtoolsRuntimeClient;

interface ClientConfigInterface
{
    public function getHost(): string;

    public function getUsername(): string;

    public function getPassword(): string;

    public function getAccessToken(): string;
}

