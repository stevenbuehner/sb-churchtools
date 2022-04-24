<?php
/**
 * ResourceApi
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
 * OpenAPI Generator version: 5.2.1
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
 * ResourceApi Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResourceApi
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
     * Operation getBookings
     *
     * Your GET endpoint
     *
     * @param  array $resource_ids resource_ids (optional)
     * @param  \DateTime $from from (optional)
     * @param  \DateTime $to to (optional)
     * @param  array $status_ids 1 Wartet auf Bestätigung 2 Bestätigt 3 Abgelehnt 99 Gelöscht (optional)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200124
     */
    public function getBookings($resource_ids = null, $from = null, $to = null, $status_ids = null)
    {
        list($response) = $this->getBookingsWithHttpInfo($resource_ids, $from, $to, $status_ids);
        return $response;
    }

    /**
     * Operation getBookingsWithHttpInfo
     *
     * Your GET endpoint
     *
     * @param  array $resource_ids (optional)
     * @param  \DateTime $from (optional)
     * @param  \DateTime $to (optional)
     * @param  array $status_ids 1 Wartet auf Bestätigung 2 Bestätigt 3 Abgelehnt 99 Gelöscht (optional)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StevenBuehner\ChurchTools\Model\InlineResponse200124, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBookingsWithHttpInfo($resource_ids = null, $from = null, $to = null, $status_ids = null)
    {
        $request = $this->getBookingsRequest($resource_ids, $from, $to, $status_ids);

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
                    if ('\StevenBuehner\ChurchTools\Model\InlineResponse200124' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StevenBuehner\ChurchTools\Model\InlineResponse200124', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse200124';
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
                        '\StevenBuehner\ChurchTools\Model\InlineResponse200124',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getBookingsAsync
     *
     * Your GET endpoint
     *
     * @param  array $resource_ids (optional)
     * @param  \DateTime $from (optional)
     * @param  \DateTime $to (optional)
     * @param  array $status_ids 1 Wartet auf Bestätigung 2 Bestätigt 3 Abgelehnt 99 Gelöscht (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBookingsAsync($resource_ids = null, $from = null, $to = null, $status_ids = null)
    {
        return $this->getBookingsAsyncWithHttpInfo($resource_ids, $from, $to, $status_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getBookingsAsyncWithHttpInfo
     *
     * Your GET endpoint
     *
     * @param  array $resource_ids (optional)
     * @param  \DateTime $from (optional)
     * @param  \DateTime $to (optional)
     * @param  array $status_ids 1 Wartet auf Bestätigung 2 Bestätigt 3 Abgelehnt 99 Gelöscht (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getBookingsAsyncWithHttpInfo($resource_ids = null, $from = null, $to = null, $status_ids = null)
    {
        $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse200124';
        $request = $this->getBookingsRequest($resource_ids, $from, $to, $status_ids);

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
     * Create request for operation 'getBookings'
     *
     * @param  array $resource_ids (optional)
     * @param  \DateTime $from (optional)
     * @param  \DateTime $to (optional)
     * @param  array $status_ids 1 Wartet auf Bestätigung 2 Bestätigt 3 Abgelehnt 99 Gelöscht (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getBookingsRequest($resource_ids = null, $from = null, $to = null, $status_ids = null)
    {

        $resourcePath = '/bookings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($resource_ids !== null) {
            if('form' === 'form' && is_array($resource_ids)) {
                foreach($resource_ids as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['resource_ids[]'] = $resource_ids;
            }
        }
        // query params
        if ($from !== null) {
            if('form' === 'form' && is_array($from)) {
                foreach($from as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['from'] = $from;
            }
        }
        // query params
        if ($to !== null) {
            if('form' === 'form' && is_array($to)) {
                foreach($to as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['to'] = $to;
            }
        }
        // query params
        if ($status_ids !== null) {
            if('form' === 'form' && is_array($status_ids)) {
                foreach($status_ids as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['status_ids[]'] = $status_ids;
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
     * Operation getResourceMasterdata
     *
     * Your GET endpoint
     *
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse200123
     */
    public function getResourceMasterdata()
    {
        list($response) = $this->getResourceMasterdataWithHttpInfo();
        return $response;
    }

    /**
     * Operation getResourceMasterdataWithHttpInfo
     *
     * Your GET endpoint
     *
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StevenBuehner\ChurchTools\Model\InlineResponse200123, HTTP status code, HTTP response headers (array of strings)
     */
    public function getResourceMasterdataWithHttpInfo()
    {
        $request = $this->getResourceMasterdataRequest();

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
                    if ('\StevenBuehner\ChurchTools\Model\InlineResponse200123' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StevenBuehner\ChurchTools\Model\InlineResponse200123', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse200123';
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
                        '\StevenBuehner\ChurchTools\Model\InlineResponse200123',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getResourceMasterdataAsync
     *
     * Your GET endpoint
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceMasterdataAsync()
    {
        return $this->getResourceMasterdataAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getResourceMasterdataAsyncWithHttpInfo
     *
     * Your GET endpoint
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getResourceMasterdataAsyncWithHttpInfo()
    {
        $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse200123';
        $request = $this->getResourceMasterdataRequest();

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
     * Create request for operation 'getResourceMasterdata'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getResourceMasterdataRequest()
    {

        $resourcePath = '/resource/masterdata';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





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
