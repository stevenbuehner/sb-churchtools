<?php

declare(strict_types=1);

namespace StevenBuehner\ChurchtoolsRuntimeClient;

use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SetCookie;

class FileCookieJar extends CookieJar
{
    private string $filename;
    private bool $storeSessionCookies;

    public function __construct(string $cookieFile, bool $storeSessionCookies = true)
    {
        parent::__construct();
        $this->filename = $cookieFile;
        $this->storeSessionCookies = $storeSessionCookies;

        if (is_file($cookieFile)) {
            $this->load($cookieFile);
        }
    }

    public function __destruct()
    {
        $this->save($this->filename);
    }

    public function save($filename): void
    {
        $data = [];
        foreach ($this as $cookie) {
            if (CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) {
                $data[] = $cookie->toArray();
            }
        }
        $json = json_encode($data, JSON_THROW_ON_ERROR);
        if (file_put_contents((string) $filename, $json) === false) {
            throw new \RuntimeException("Unable to save file {$filename}");
        }
    }

    public function load($filename): void
    {
        $json = @file_get_contents((string) $filename);
        if ($json === false) {
            throw new \RuntimeException("Unable to load file {$filename}");
        }
        if ($json === '') {
            return;
        }
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        if (!is_array($data)) {
            throw new \RuntimeException("Invalid cookie file: {$filename}");
        }
        foreach ($data as $cookie) {
            $this->setCookie(new SetCookie($cookie));
        }
    }
}

