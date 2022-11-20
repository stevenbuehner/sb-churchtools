<?php
/**
 * JobApi
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace StevenBuehner\ChurchTools\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use StevenBuehner\ChurchTools\ApiException;
use StevenBuehner\ChurchTools\Configuration;
use StevenBuehner\ChurchTools\HeaderSelector;
use StevenBuehner\ChurchTools\ObjectSerializer;

/**
 * JobApi Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JobApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getJobs' => [
            'application/json',
        ],
    ];

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
     * Operation getJobs
     *
     * Your GET endpoint
     *
     * @param  string[] $status status (optional)
     * @param  string $identifier identifier (optional)
     * @param  string $name name (optional)
     * @param  int[] $domain_ids domain_ids (optional)
     * @param  string $created_start_date created_start_date (optional)
     * @param  string $created_end_date created_end_date (optional)
     * @param  string $modified_start_date modified_start_date (optional)
     * @param  string $modified_end_date modified_end_date (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getJobs'] to see the possible values for this operation
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StevenBuehner\ChurchTools\Model\GetJobs200Response
     */
    public function getJobs($status = null, $identifier = null, $name = null, $domain_ids = null, $created_start_date = null, $created_end_date = null, $modified_start_date = null, $modified_end_date = null, string $contentType = self::contentTypes['getJobs'][0])
    {
        list($response) = $this->getJobsWithHttpInfo($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date, $contentType);
        return $response;
    }

    /**
     * Operation getJobsWithHttpInfo
     *
     * Your GET endpoint
     *
     * @param  string[] $status (optional)
     * @param  string $identifier (optional)
     * @param  string $name (optional)
     * @param  int[] $domain_ids (optional)
     * @param  string $created_start_date (optional)
     * @param  string $created_end_date (optional)
     * @param  string $modified_start_date (optional)
     * @param  string $modified_end_date (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getJobs'] to see the possible values for this operation
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StevenBuehner\ChurchTools\Model\GetJobs200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function getJobsWithHttpInfo($status = null, $identifier = null, $name = null, $domain_ids = null, $created_start_date = null, $created_end_date = null, $modified_start_date = null, $modified_end_date = null, string $contentType = self::contentTypes['getJobs'][0])
    {
        $request = $this->getJobsRequest($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date, $contentType);

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
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
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
                    if ('\StevenBuehner\ChurchTools\Model\GetJobs200Response' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\StevenBuehner\ChurchTools\Model\GetJobs200Response' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StevenBuehner\ChurchTools\Model\GetJobs200Response', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StevenBuehner\ChurchTools\Model\GetJobs200Response';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\StevenBuehner\ChurchTools\Model\GetJobs200Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getJobsAsync
     *
     * Your GET endpoint
     *
     * @param  string[] $status (optional)
     * @param  string $identifier (optional)
     * @param  string $name (optional)
     * @param  int[] $domain_ids (optional)
     * @param  string $created_start_date (optional)
     * @param  string $created_end_date (optional)
     * @param  string $modified_start_date (optional)
     * @param  string $modified_end_date (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getJobs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobsAsync($status = null, $identifier = null, $name = null, $domain_ids = null, $created_start_date = null, $created_end_date = null, $modified_start_date = null, $modified_end_date = null, string $contentType = self::contentTypes['getJobs'][0])
    {
        return $this->getJobsAsyncWithHttpInfo($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getJobsAsyncWithHttpInfo
     *
     * Your GET endpoint
     *
     * @param  string[] $status (optional)
     * @param  string $identifier (optional)
     * @param  string $name (optional)
     * @param  int[] $domain_ids (optional)
     * @param  string $created_start_date (optional)
     * @param  string $created_end_date (optional)
     * @param  string $modified_start_date (optional)
     * @param  string $modified_end_date (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getJobs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getJobsAsyncWithHttpInfo($status = null, $identifier = null, $name = null, $domain_ids = null, $created_start_date = null, $created_end_date = null, $modified_start_date = null, $modified_end_date = null, string $contentType = self::contentTypes['getJobs'][0])
    {
        $returnType = '\StevenBuehner\ChurchTools\Model\GetJobs200Response';
        $request = $this->getJobsRequest($status, $identifier, $name, $domain_ids, $created_start_date, $created_end_date, $modified_start_date, $modified_end_date, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'getJobs'
     *
     * @param  string[] $status (optional)
     * @param  string $identifier (optional)
     * @param  string $name (optional)
     * @param  int[] $domain_ids (optional)
     * @param  string $created_start_date (optional)
     * @param  string $created_end_date (optional)
     * @param  string $modified_start_date (optional)
     * @param  string $modified_end_date (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getJobs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getJobsRequest($status = null, $identifier = null, $name = null, $domain_ids = null, $created_start_date = null, $created_end_date = null, $modified_start_date = null, $modified_end_date = null, string $contentType = self::contentTypes['getJobs'][0])
    {










        $resourcePath = '/jobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $status,
            'status', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $identifier,
            'identifier', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $name,
            'name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $domain_ids,
            'domain_ids[]', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_start_date,
            'created_start_date', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $created_end_date,
            'created_end_date', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $modified_start_date,
            'modified_start_date', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $modified_end_date,
            'modified_end_date', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
