<?php


namespace StevenBuehner\ChurchToolsApi;

use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchTools\Configuration;

class ChurchToolsUserAuthenticatedClient extends \GuzzleHttp\Client implements ChurchToolsClientInterface {

	/**
	 * @var Configuration
	 */
	protected $config;
	protected $cookiJar;
	protected $isLoggedIn;

	/**
	 * ChurchToolsTokenAuthenticatedClient constructor.
	 * @param Configuration $config
	 * @param CookieJar $cookieJar
	 */
	public function __construct(Configuration $config, CookieJar $cookieJar) {

		parent::__construct([
			'cookies' => $cookieJar
		]);

		$this->cookiJar   = $cookieJar;
		$this->config     = $config;
		$this->isLoggedIn = FALSE;
	}

	/**
	 * @return bool
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function login() {

		if ($this->isLoggedIn === TRUE) {
			return TRUE;
		}

		$response = $this->request('POST',
			$this->config->getHost() . '/login',
			$options = [
				'query' => [
					'username' => $this->config->getUsername(),
					'password' => $this->config->getPassword()
				]
			]
		);

		$result = $response->getStatusCode() === 200;

		if ($result) {
			$this->isLoggedIn = TRUE;
		}

		return $result;

	}

	public function logout() {

		$this->cookiJar->clear();

	}


}