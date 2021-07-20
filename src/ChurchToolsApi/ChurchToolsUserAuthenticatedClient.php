<?php


namespace StevenBuehner\ChurchToolsApi;

use GuzzleHttp\Cookie\CookieJar;
use StevenBuehner\ChurchTools\Configuration;

class ChurchToolsUserAuthenticatedClient extends \GuzzleHttp\Client implements ChurchToolsClientInterface {

	/**
	 * @var Configuration
	 */
	private   $config;
	protected $cookiJar;

	/**
	 * ChurchToolsTokenAuthenticatedClient constructor.
	 * @param Configuration $config
	 * @param CookieJar $cookieJar
	 */
	public function __construct(Configuration $config, CookieJar $cookieJar) {

		parent::__construct([
			'cookies' => $cookieJar
		]);

		$this->cookiJar = $cookieJar;
		$this->config   = $config;
	}

	/**
	 * @return bool
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function login() {

		$response = $this->request('POST',
			$this->config->getHost() . '/login',
			$options = [
				'query' => [
					'username' => $this->config->getUsername(),
					'password' => $this->config->getPassword()
				]
			]
		);

		return $response->getStatusCode() === 200;

	}

	public function logout() {

		$this->cookiJar->clear();

	}


}