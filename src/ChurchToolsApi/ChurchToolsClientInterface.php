<?php


namespace StevenBuehner\ChurchToolsApi;

use GuzzleHttp\ClientInterface;

interface ChurchToolsClientInterface extends ClientInterface {

	/**
	 * @return bool
	 */
	public function login();

	public function logout();

}