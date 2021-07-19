<?php


namespace StevenBuehner\ChurchToolsApi;

use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Support\Facades\Storage;

// For Laravel usage only
class FileCookieJar extends \GuzzleHttp\Cookie\CookieJar {

	/** @var string filename */
	private $filename;

	/** @var bool Control whether to persist session cookies or not. */
	private $storeSessionCookies;

	/**
	 * Create a new FileCookieJar object
	 *
	 * @param string $cookieFile File to store the cookie data
	 * @param bool $storeSessionCookies Set to true to store session cookies
	 *                                  in the cookie jar.
	 *
	 * @throws \RuntimeException if the file cannot be found or created
	 */
	public function __construct($cookieFile, $storeSessionCookies = TRUE) {
		parent::__construct();
		$this->filename            = $cookieFile;
		$this->storeSessionCookies = $storeSessionCookies;

		if (Storage::exists($cookieFile)) {
			$this->load($cookieFile);
		}
	}

	/**
	 * Saves the file when shutting down
	 */
	public function __destruct() {
		$this->save($this->filename);
	}

	/**
	 * Saves the cookies to a file.
	 *
	 * @param string $filename File to save
	 * @throws \RuntimeException if the file cannot be found or created
	 */
	public function save($filename) {
		$json = [];
		foreach ($this as $cookie) {
			/** @var SetCookie $cookie */
			if (CookieJar::shouldPersist($cookie, $this->storeSessionCookies)) {
				$json[] = $cookie->toArray();
			}
		}

		$jsonStr = \GuzzleHttp\json_encode($json);
		if (FALSE === Storage::put($filename, $jsonStr)) {
			throw new \RuntimeException("Unable to save file {$filename}");
		}
	}

	/**
	 * Load cookies from a JSON formatted file.
	 *
	 * Old cookies are kept unless overwritten by newly loaded ones.
	 *
	 * @param string $filename Cookie file to load.
	 * @throws \RuntimeException if the file cannot be loaded.
	 */
	public function load($filename) {
		$json = Storage::get($filename);

		if (FALSE === $json) {
			throw new \RuntimeException("Unable to load file {$filename}");
		} else if ($json === '') {
			return;
		}

		$data = \GuzzleHttp\json_decode($json, TRUE);
		if (is_array($data)) {
			foreach (json_decode($json, TRUE) as $cookie) {
				$this->setCookie(new SetCookie($cookie));
			}
		} else if (strlen($data)) {
			throw new \RuntimeException("Invalid cookie file: {$filename}");
		}
	}

}