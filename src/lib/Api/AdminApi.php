<?php
/**
 * AdminApi
 * PHP version 7.3
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChurchTools REST API
 *
 * The ChurchTools REST API is the best entry point for developers to access ChurchTools. <br><br> **Authentication:** You need to be authorized to use some endpoints. Those endpoints are marked by a gray lock symbol. If you view the documentation, while you are logged into ChurchTools, all requests are already authorized. If you want to authorized a request, you need to provide a `Login Token` as `Authorization` header in the format `Authorization: Login<token>` or send a valid cookie. You can use the green \"Authorize\" dialog to enter those details and see how a request would look like in detail. <br><br> **Missing Endpoints:** Not all features are yet available by our new REST API. This documentation will grow in the future. We are working hard to add new endpoints with every ChurchTools version. The documentation will always show only those endpoints you can use with your ChurchTools installation.
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use StevenBuehner\ChurchTools\ApiException;
use StevenBuehner\ChurchTools\Configuration;
use StevenBuehner\ChurchTools\HeaderSelector;
use StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * AdminApi Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdminApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAllLogs
     *
     * Get all log messages
     *
     * @param  string $message Filter by text (optional)
     * @param  int[] $levels Filter by log level (optional)
     * @param  \DateTime $before Filter log messages before that date. (Use ISO-Format) (optional)
     * @param  \DateTime $after Filter log messages after that date. (Use ISO-Format) (optional)
     * @param  int $person_id Filter by person (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20031
     */
    public function getAllLogs($message = null, $levels = null, $before = null, $after = null, $person_id = null, $page = 1, $limit = 10)
    {
        list($response) = $this->getAllLogsWithHttpInfo($message, $levels, $before, $after, $person_id, $page, $limit);
        return $response;
    }

    /**
     * Operation getAllLogsWithHttpInfo
     *
     * Get all log messages
     *
     * @param  string $message Filter by text (optional)
     * @param  int[] $levels Filter by log level (optional)
     * @param  \DateTime $before Filter log messages before that date. (Use ISO-Format) (optional)
     * @param  \DateTime $after Filter log messages after that date. (Use ISO-Format) (optional)
     * @param  int $person_id Filter by person (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StevenBuehner\ChurchTools\Model\InlineResponse20031, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllLogsWithHttpInfo($message = null, $levels = null, $before = null, $after = null, $person_id = null, $page = 1, $limit = 10)
    {
        $request = $this->getAllLogsRequest($message, $levels, $before, $after, $person_id, $page, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\StevenBuehner\ChurchTools\Model\InlineResponse20031' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StevenBuehner\ChurchTools\Model\InlineResponse20031', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20031';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\StevenBuehner\ChurchTools\Model\InlineResponse20031',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAllLogsAsync
     *
     * Get all log messages
     *
     * @param  string $message Filter by text (optional)
     * @param  int[] $levels Filter by log level (optional)
     * @param  \DateTime $before Filter log messages before that date. (Use ISO-Format) (optional)
     * @param  \DateTime $after Filter log messages after that date. (Use ISO-Format) (optional)
     * @param  int $person_id Filter by person (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllLogsAsync($message = null, $levels = null, $before = null, $after = null, $person_id = null, $page = 1, $limit = 10)
    {
        return $this->getAllLogsAsyncWithHttpInfo($message, $levels, $before, $after, $person_id, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAllLogsAsyncWithHttpInfo
     *
     * Get all log messages
     *
     * @param  string $message Filter by text (optional)
     * @param  int[] $levels Filter by log level (optional)
     * @param  \DateTime $before Filter log messages before that date. (Use ISO-Format) (optional)
     * @param  \DateTime $after Filter log messages after that date. (Use ISO-Format) (optional)
     * @param  int $person_id Filter by person (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllLogsAsyncWithHttpInfo($message = null, $levels = null, $before = null, $after = null, $person_id = null, $page = 1, $limit = 10)
    {
        $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20031';
        $request = $this->getAllLogsRequest($message, $levels, $before, $after, $person_id, $page, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAllLogs'
     *
     * @param  string $message Filter by text (optional)
     * @param  int[] $levels Filter by log level (optional)
     * @param  \DateTime $before Filter log messages before that date. (Use ISO-Format) (optional)
     * @param  \DateTime $after Filter log messages after that date. (Use ISO-Format) (optional)
     * @param  int $person_id Filter by person (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllLogsRequest($message = null, $levels = null, $before = null, $after = null, $person_id = null, $page = 1, $limit = 10)
    {

        $resourcePath = '/logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($message !== null) {
            if('form' === 'form' && is_array($message)) {
                foreach($message as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($message)){
            	$queryParams['message'] = $message ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['message'] = $message;
            }
        }
        // query params
        if (is_array($levels)) {
            $levels = ObjectSerializer::serializeCollection($levels, 'deepObject', true);
        }
        if ($levels !== null) {
            $queryParams['levels'] = $levels;
        }
        // query params
        if ($before !== null) {
            if('form' === 'form' && is_array($before)) {
                foreach($before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($before)){
            	$queryParams['before'] = $before ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['before'] = $before;
            }
        }
        // query params
        if ($after !== null) {
            if('form' === 'form' && is_array($after)) {
                foreach($after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($after)){
            	$queryParams['after'] = $after ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['after'] = $after;
            }
        }
        // query params
        if ($person_id !== null) {
            if('form' === 'form' && is_array($person_id)) {
                foreach($person_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($person_id)){
            	$queryParams['person_id'] = $person_id ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['person_id'] = $person_id;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($page)){
            	$queryParams['page'] = $page ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($limit)){
            	$queryParams['limit'] = $limit ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getLogById
     *
     * Get a log message
     *
     * @param  int $id ID of log (required)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20032
     */
    public function getLogById($id)
    {
        list($response) = $this->getLogByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getLogByIdWithHttpInfo
     *
     * Get a log message
     *
     * @param  int $id ID of log (required)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StevenBuehner\ChurchTools\Model\InlineResponse20032, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLogByIdWithHttpInfo($id)
    {
        $request = $this->getLogByIdRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\StevenBuehner\ChurchTools\Model\InlineResponse20032' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StevenBuehner\ChurchTools\Model\InlineResponse20032', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20032';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\StevenBuehner\ChurchTools\Model\InlineResponse20032',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLogByIdAsync
     *
     * Get a log message
     *
     * @param  int $id ID of log (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogByIdAsync($id)
    {
        return $this->getLogByIdAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLogByIdAsyncWithHttpInfo
     *
     * Get a log message
     *
     * @param  int $id ID of log (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLogByIdAsyncWithHttpInfo($id)
    {
        $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20032';
        $request = $this->getLogByIdRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getLogById'
     *
     * @param  int $id ID of log (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLogByIdRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getLogById'
            );
        }

        $resourcePath = '/logs/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getLoginStatistics
     *
     * @param  string $order_by Order the pagination result. Allowed values: &#x60;frequent&#x60; and &#x60;last&#x60; (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20033
     */
    public function getLoginStatistics($order_by = null, $page = 1, $limit = 10)
    {
        list($response) = $this->getLoginStatisticsWithHttpInfo($order_by, $page, $limit);
        return $response;
    }

    /**
     * Operation getLoginStatisticsWithHttpInfo
     *
     * @param  string $order_by Order the pagination result. Allowed values: &#x60;frequent&#x60; and &#x60;last&#x60; (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StevenBuehner\ChurchTools\Model\InlineResponse20033, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLoginStatisticsWithHttpInfo($order_by = null, $page = 1, $limit = 10)
    {
        $request = $this->getLoginStatisticsRequest($order_by, $page, $limit);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\StevenBuehner\ChurchTools\Model\InlineResponse20033' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StevenBuehner\ChurchTools\Model\InlineResponse20033', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20033';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\StevenBuehner\ChurchTools\Model\InlineResponse20033',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLoginStatisticsAsync
     *
     * @param  string $order_by Order the pagination result. Allowed values: &#x60;frequent&#x60; and &#x60;last&#x60; (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLoginStatisticsAsync($order_by = null, $page = 1, $limit = 10)
    {
        return $this->getLoginStatisticsAsyncWithHttpInfo($order_by, $page, $limit)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLoginStatisticsAsyncWithHttpInfo
     *
     * @param  string $order_by Order the pagination result. Allowed values: &#x60;frequent&#x60; and &#x60;last&#x60; (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLoginStatisticsAsyncWithHttpInfo($order_by = null, $page = 1, $limit = 10)
    {
        $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20033';
        $request = $this->getLoginStatisticsRequest($order_by, $page, $limit);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getLoginStatistics'
     *
     * @param  string $order_by Order the pagination result. Allowed values: &#x60;frequent&#x60; and &#x60;last&#x60; (optional)
     * @param  int $page Page number to show page in pagenation. If empty, start at first page. (optional, default to 1)
     * @param  int $limit Number of results per page. (optional, default to 10)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLoginStatisticsRequest($order_by = null, $page = 1, $limit = 10)
    {

        $resourcePath = '/logs/statistics/login';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($order_by !== null) {
            if('form' === 'form' && is_array($order_by)) {
                foreach($order_by as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($order_by)){
            	$queryParams['order_by'] = $order_by ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['order_by'] = $order_by;
            }
        }
        // query params
        if ($page !== null) {
            if('form' === 'form' && is_array($page)) {
                foreach($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($page)){
            	$queryParams['page'] = $page ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($limit !== null) {
            if('form' === 'form' && is_array($limit)) {
                foreach($limit as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else if (is_bool($limit)){
            	$queryParams['limit'] = $limit ? 'TRUE' : 'FALSE';
            }
            else {
                $queryParams['limit'] = $limit;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
