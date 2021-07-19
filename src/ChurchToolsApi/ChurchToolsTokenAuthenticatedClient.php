<?php


namespace StevenBuehner\ChurchToolsApi;

use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;

class ChurchToolsTokenAuthenticatedClient extends \GuzzleHttp\Client {

	protected $loginToken;
	protected $cookiJar;

	/**
	 * ChurchToolsTokenAuthenticatedClient constructor.
	 * @param string $churchToolsLoginToken
	 * @param CookieJar $cookieJar
	 */
	public function __construct(string $churchToolsLoginToken, CookieJar $cookieJar) {

		$this->loginToken = $churchToolsLoginToken;
		$this->cookiJar   = $cookieJar;

		parent::__construct([
			'cookies' => $cookieJar
		]);

	}

	protected function addLoginData($options) {
		if (isset($options['query']) && is_array($options['query'])) {
			$options['query'] = $options['query'] + ['login_token' => $this->loginToken];
		}

		return $options;

	}

	public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface {

		$options = $this->addLoginData($options);

		return parent::sendAsync($request, $options);

	}


	public function logout() {

		$this->cookiJar->clear();

	}

}