<?php
/**
 * FileApi
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
 * FileApi Class Doc Comment
 *
 * @category Class
 * @package  StevenBuehner\ChurchTools
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FileApi
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
     * Operation deleteFileById
     *
     * Delete file by id
     *
     * @param  int $id ID of file (required)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFileById($id)
    {
        $this->deleteFileByIdWithHttpInfo($id);
    }

    /**
     * Operation deleteFileByIdWithHttpInfo
     *
     * Delete file by id
     *
     * @param  int $id ID of file (required)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFileByIdWithHttpInfo($id)
    {
        $request = $this->deleteFileByIdRequest($id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteFileByIdAsync
     *
     * Delete file by id
     *
     * @param  int $id ID of file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileByIdAsync($id)
    {
        return $this->deleteFileByIdAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteFileByIdAsyncWithHttpInfo
     *
     * Delete file by id
     *
     * @param  int $id ID of file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFileByIdAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->deleteFileByIdRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteFileById'
     *
     * @param  int $id ID of file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteFileByIdRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteFileById'
            );
        }

        $resourcePath = '/files/{id}';
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
                ['text/plain']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain'],
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteFiles
     *
     * Delete files that are matching the domainType and domainIdentifier
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteFiles($domain_type, $domain_identifier)
    {
        $this->deleteFilesWithHttpInfo($domain_type, $domain_identifier);
    }

    /**
     * Operation deleteFilesWithHttpInfo
     *
     * Delete files that are matching the domainType and domainIdentifier
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteFilesWithHttpInfo($domain_type, $domain_identifier)
    {
        $request = $this->deleteFilesRequest($domain_type, $domain_identifier);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteFilesAsync
     *
     * Delete files that are matching the domainType and domainIdentifier
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFilesAsync($domain_type, $domain_identifier)
    {
        return $this->deleteFilesAsyncWithHttpInfo($domain_type, $domain_identifier)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteFilesAsyncWithHttpInfo
     *
     * Delete files that are matching the domainType and domainIdentifier
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteFilesAsyncWithHttpInfo($domain_type, $domain_identifier)
    {
        $returnType = '';
        $request = $this->deleteFilesRequest($domain_type, $domain_identifier);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'deleteFiles'
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteFilesRequest($domain_type, $domain_identifier)
    {
        // verify the required parameter 'domain_type' is set
        if ($domain_type === null || (is_array($domain_type) && count($domain_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_type when calling deleteFiles'
            );
        }
        // verify the required parameter 'domain_identifier' is set
        if ($domain_identifier === null || (is_array($domain_identifier) && count($domain_identifier) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_identifier when calling deleteFiles'
            );
        }

        $resourcePath = '/files/{domainType}/{domainIdentifier}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($domain_type !== null) {
            $resourcePath = str_replace(
                '{' . 'domainType' . '}',
                ObjectSerializer::toPathValue($domain_type),
                $resourcePath
            );
        }
        // path params
        if ($domain_identifier !== null) {
            $resourcePath = str_replace(
                '{' . 'domainIdentifier' . '}',
                ObjectSerializer::toPathValue($domain_identifier),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain'],
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation uploadFiles
     *
     * Upload files
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     * @param  \SplFileObject[] $files files (optional)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \StevenBuehner\ChurchTools\Model\InlineResponse20030|string
     */
    public function uploadFiles($domain_type, $domain_identifier, $files = null)
    {
        list($response) = $this->uploadFilesWithHttpInfo($domain_type, $domain_identifier, $files);
        return $response;
    }

    /**
     * Operation uploadFilesWithHttpInfo
     *
     * Upload files
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     * @param  \SplFileObject[] $files (optional)
     *
     * @throws \StevenBuehner\ChurchTools\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \StevenBuehner\ChurchTools\Model\InlineResponse20030|string, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadFilesWithHttpInfo($domain_type, $domain_identifier, $files = null)
    {
        $request = $this->uploadFilesRequest($domain_type, $domain_identifier, $files);

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
                    if ('\StevenBuehner\ChurchTools\Model\InlineResponse20030' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\StevenBuehner\ChurchTools\Model\InlineResponse20030', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('string' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20030';
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
                        '\StevenBuehner\ChurchTools\Model\InlineResponse20030',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadFilesAsync
     *
     * Upload files
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     * @param  \SplFileObject[] $files (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFilesAsync($domain_type, $domain_identifier, $files = null)
    {
        return $this->uploadFilesAsyncWithHttpInfo($domain_type, $domain_identifier, $files)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadFilesAsyncWithHttpInfo
     *
     * Upload files
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     * @param  \SplFileObject[] $files (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFilesAsyncWithHttpInfo($domain_type, $domain_identifier, $files = null)
    {
        $returnType = '\StevenBuehner\ChurchTools\Model\InlineResponse20030';
        $request = $this->uploadFilesRequest($domain_type, $domain_identifier, $files);

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
     * Create request for operation 'uploadFiles'
     *
     * @param  string $domain_type The domain type. Currently supported are &#39;avatar&#39;, &#39;groupimage&#39;, &#39;logo&#39;, &#39;attatchments&#39;, &#39;html_template&#39;, &#39;service&#39;, &#39;song_arrangement&#39;, &#39;importtable&#39;, &#39;person&#39;, &#39;familyavatar&#39;, &#39;wiki_.?&#39;. (required)
     * @param  string $domain_identifier the domain identifier (required)
     * @param  \SplFileObject[] $files (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function uploadFilesRequest($domain_type, $domain_identifier, $files = null)
    {
        // verify the required parameter 'domain_type' is set
        if ($domain_type === null || (is_array($domain_type) && count($domain_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_type when calling uploadFiles'
            );
        }
        // verify the required parameter 'domain_identifier' is set
        if ($domain_identifier === null || (is_array($domain_identifier) && count($domain_identifier) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $domain_identifier when calling uploadFiles'
            );
        }

        $resourcePath = '/files/{domainType}/{domainIdentifier}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($domain_type !== null) {
            $resourcePath = str_replace(
                '{' . 'domainType' . '}',
                ObjectSerializer::toPathValue($domain_type),
                $resourcePath
            );
        }
        // path params
        if ($domain_identifier !== null) {
            $resourcePath = str_replace(
                '{' . 'domainIdentifier' . '}',
                ObjectSerializer::toPathValue($domain_identifier),
                $resourcePath
            );
        }

        // form params
        if ($files !== null) {
            $multipart = true;
            $formParams['files'] = [];
            $paramFiles = is_array($files) ? $files : [$files];
            foreach ($paramFiles as $paramFile) {
                $formParams['files'][] = \GuzzleHttp\Psr7\try_fopen(
                    ObjectSerializer::toFormValue($paramFile),
                    'rb'
                );
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/plain']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/plain'],
                ['multipart/form-data']
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
            'POST',
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
