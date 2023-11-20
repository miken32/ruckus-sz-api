<?php
/**
 * SystemIPsecApi
 * PHP version 7.4
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Virtual SmartZone - High Scale
 *
 * This reference guide describes the public APIs supported by the Virtual SmartZone - High Scale 6.1.1. Use the RESTful API commands described in this guide as an alternative way to manage the controller and its managed APs (in addition to the web and command line interfaces).
 *
 * The version of the OpenAPI document: v11_1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PofP\SmartzoneClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use PofP\SmartzoneClient\ApiException;
use PofP\SmartzoneClient\Configuration;
use PofP\SmartzoneClient\HeaderSelector;
use PofP\SmartzoneClient\ObjectSerializer;

/**
 * SystemIPsecApi Class Doc Comment
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SystemIPsecApi
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
        'findSystemIpsec' => [
            'application/json',
        ],
        'updateSystemIpsec' => [
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
     * Operation findSystemIpsec
     *
     * Use this API command to retrieve the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findSystemIpsec'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |object
     */
    public function findSystemIpsec($service_ticket, string $contentType = self::contentTypes['findSystemIpsec'][0])
    {
        list($response) = $this->findSystemIpsecWithHttpInfo($service_ticket, $contentType);
        return $response;
    }

    /**
     * Operation findSystemIpsecWithHttpInfo
     *
     * Use this API command to retrieve the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findSystemIpsec'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |object, HTTP status code, HTTP response headers (array of strings)
     */
    public function findSystemIpsecWithHttpInfo($service_ticket, string $contentType = self::contentTypes['findSystemIpsec'][0])
    {
        $request = $this->findSystemIpsecRequest($service_ticket, $contentType);

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
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                 );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
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
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation findSystemIpsecAsync
     *
     * Use this API command to retrieve the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findSystemIpsec'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findSystemIpsecAsync($service_ticket, string $contentType = self::contentTypes['findSystemIpsec'][0])
    {
        return $this->findSystemIpsecAsyncWithHttpInfo($service_ticket, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findSystemIpsecAsyncWithHttpInfo
     *
     * Use this API command to retrieve the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findSystemIpsec'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findSystemIpsecAsyncWithHttpInfo($service_ticket, string $contentType = self::contentTypes['findSystemIpsec'][0])
    {
        $returnType = 'object';
        $request = $this->findSystemIpsecRequest($service_ticket, $contentType);

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
     * Create request for operation 'findSystemIpsec'
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findSystemIpsec'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findSystemIpsecRequest($service_ticket, string $contentType = self::contentTypes['findSystemIpsec'][0])
    {

        // verify the required parameter 'service_ticket' is set
        if ($service_ticket === null || (is_array($service_ticket) && count($service_ticket) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_ticket when calling findSystemIpsec'
            );
        }


        $resourcePath = '/systemIpsec';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $service_ticket,
            'serviceTicket', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['*/*', ],
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
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
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
     * Operation updateSystemIpsec
     *
     * Use this API command to modify the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param   $UNKNOWN_PARAM_NAME UNKNOWN_PARAM_NAME (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateSystemIpsec'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateSystemIpsec($service_ticket, $UNKNOWN_PARAM_NAME, string $contentType = self::contentTypes['updateSystemIpsec'][0])
    {
        $this->updateSystemIpsecWithHttpInfo($service_ticket, $UNKNOWN_PARAM_NAME, $contentType);
    }

    /**
     * Operation updateSystemIpsecWithHttpInfo
     *
     * Use this API command to modify the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param   $UNKNOWN_PARAM_NAME (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateSystemIpsec'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateSystemIpsecWithHttpInfo($service_ticket, $UNKNOWN_PARAM_NAME, string $contentType = self::contentTypes['updateSystemIpsec'][0])
    {
        $request = $this->updateSystemIpsecRequest($service_ticket, $UNKNOWN_PARAM_NAME, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation updateSystemIpsecAsync
     *
     * Use this API command to modify the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param   $UNKNOWN_PARAM_NAME (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateSystemIpsec'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateSystemIpsecAsync($service_ticket, $UNKNOWN_PARAM_NAME, string $contentType = self::contentTypes['updateSystemIpsec'][0])
    {
        return $this->updateSystemIpsecAsyncWithHttpInfo($service_ticket, $UNKNOWN_PARAM_NAME, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateSystemIpsecAsyncWithHttpInfo
     *
     * Use this API command to modify the System IPSec.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param   $UNKNOWN_PARAM_NAME (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateSystemIpsec'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateSystemIpsecAsyncWithHttpInfo($service_ticket, $UNKNOWN_PARAM_NAME, string $contentType = self::contentTypes['updateSystemIpsec'][0])
    {
        $returnType = '';
        $request = $this->updateSystemIpsecRequest($service_ticket, $UNKNOWN_PARAM_NAME, $contentType);

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
     * Create request for operation 'updateSystemIpsec'
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param   $UNKNOWN_PARAM_NAME (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateSystemIpsec'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateSystemIpsecRequest($service_ticket, $UNKNOWN_PARAM_NAME, string $contentType = self::contentTypes['updateSystemIpsec'][0])
    {

        // verify the required parameter 'service_ticket' is set
        if ($service_ticket === null || (is_array($service_ticket) && count($service_ticket) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_ticket when calling updateSystemIpsec'
            );
        }

        // verify the required parameter 'UNKNOWN_PARAM_NAME' is set
        if ($UNKNOWN_PARAM_NAME === null || (is_array($UNKNOWN_PARAM_NAME) && count($UNKNOWN_PARAM_NAME) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $UNKNOWN_PARAM_NAME when calling updateSystemIpsec'
            );
        }


        $resourcePath = '/systemIpsec';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $service_ticket,
            'serviceTicket', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($UNKNOWN_PARAM_NAME)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($UNKNOWN_PARAM_NAME));
            } else {
                $httpBody = $UNKNOWN_PARAM_NAME;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
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
            'PUT',
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
