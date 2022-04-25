<?php


namespace StevenBuehner\ChurchToolsApi;

use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use StevenBuehner\ChurchTools\Configuration;

class ChurchToolsTokenAuthenticatedClient extends \GuzzleHttp\Client implements ChurchToolsClientInterface {

	protected $config;
	protected $cookiJar;

	/**
	 * ChurchToolsTokenAuthenticatedClient constructor.
	 * @param string $churchToolsLoginToken
	 * @param CookieJar $cookieJar
	 */
	public function __construct(Configuration $config, CookieJar $cookieJar, array $nativeParams = []) {

		$params = array_merge([
			'cookies' => $cookieJar
		], $nativeParams);

		parent::__construct($params);

		$this->config   = $config;
		$this->cookiJar = $cookieJar;

	}

	protected function addLoginData($options) {
		if (isset($options['query']) && is_array($options['query'])) {
			$options['query'] = $options['query'] + ['login_token' => $this->config->getAccessToken()];
		}

		return $options;

	}


	public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface {

		$options = $this->addLoginData($options);

		return parent::sendAsync($request, $options);

	}


	public function login() {
		// Do nothing
		return TRUE;
	}

	public function logout() {

		$this->cookiJar->clear();

	}

}