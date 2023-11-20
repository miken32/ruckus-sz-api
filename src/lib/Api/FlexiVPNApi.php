<?php
/**
 * FlexiVPNApi
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
 * FlexiVPNApi Class Doc Comment
 *
 * @category Class
 * @package  PofP\SmartzoneClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FlexiVPNApi
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
        'deleteRkszonesWlansFlexiVpnProfileById' => [
            'application/json',
        ],
        'findServicesFlexiVpnProfileByQueryCriteria' => [
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
     * Operation deleteRkszonesWlansFlexiVpnProfileById
     *
     * Use this API command to delete Flexi-VPN on WLAN
     *
     * @param  string $zone_id zone_id (required)
     * @param  string $id id (required)
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteRkszonesWlansFlexiVpnProfileById($zone_id, $id, $service_ticket, string $contentType = self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'][0])
    {
        $this->deleteRkszonesWlansFlexiVpnProfileByIdWithHttpInfo($zone_id, $id, $service_ticket, $contentType);
    }

    /**
     * Operation deleteRkszonesWlansFlexiVpnProfileByIdWithHttpInfo
     *
     * Use this API command to delete Flexi-VPN on WLAN
     *
     * @param  string $zone_id (required)
     * @param  string $id (required)
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRkszonesWlansFlexiVpnProfileByIdWithHttpInfo($zone_id, $id, $service_ticket, string $contentType = self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'][0])
    {
        $request = $this->deleteRkszonesWlansFlexiVpnProfileByIdRequest($zone_id, $id, $service_ticket, $contentType);

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
     * Operation deleteRkszonesWlansFlexiVpnProfileByIdAsync
     *
     * Use this API command to delete Flexi-VPN on WLAN
     *
     * @param  string $zone_id (required)
     * @param  string $id (required)
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRkszonesWlansFlexiVpnProfileByIdAsync($zone_id, $id, $service_ticket, string $contentType = self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'][0])
    {
        return $this->deleteRkszonesWlansFlexiVpnProfileByIdAsyncWithHttpInfo($zone_id, $id, $service_ticket, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteRkszonesWlansFlexiVpnProfileByIdAsyncWithHttpInfo
     *
     * Use this API command to delete Flexi-VPN on WLAN
     *
     * @param  string $zone_id (required)
     * @param  string $id (required)
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteRkszonesWlansFlexiVpnProfileByIdAsyncWithHttpInfo($zone_id, $id, $service_ticket, string $contentType = self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'][0])
    {
        $returnType = '';
        $request = $this->deleteRkszonesWlansFlexiVpnProfileByIdRequest($zone_id, $id, $service_ticket, $contentType);

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
     * Create request for operation 'deleteRkszonesWlansFlexiVpnProfileById'
     *
     * @param  string $zone_id (required)
     * @param  string $id (required)
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteRkszonesWlansFlexiVpnProfileByIdRequest($zone_id, $id, $service_ticket, string $contentType = self::contentTypes['deleteRkszonesWlansFlexiVpnProfileById'][0])
    {

        // verify the required parameter 'zone_id' is set
        if ($zone_id === null || (is_array($zone_id) && count($zone_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $zone_id when calling deleteRkszonesWlansFlexiVpnProfileById'
            );
        }

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteRkszonesWlansFlexiVpnProfileById'
            );
        }

        // verify the required parameter 'service_ticket' is set
        if ($service_ticket === null || (is_array($service_ticket) && count($service_ticket) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_ticket when calling deleteRkszonesWlansFlexiVpnProfileById'
            );
        }


        $resourcePath = '/rkszones/{zoneId}/wlans/{id}/flexiVpnProfile';
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


        // path params
        if ($zone_id !== null) {
            $resourcePath = str_replace(
                '{' . 'zoneId' . '}',
                ObjectSerializer::toPathValue($zone_id),
                $resourcePath
            );
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
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
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation findServicesFlexiVpnProfileByQueryCriteria
     *
     * Use this API command to query Flexi-VPN profiles.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet $body body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return |object
     */
    public function findServicesFlexiVpnProfileByQueryCriteria($service_ticket, $body, string $contentType = self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'][0])
    {
        list($response) = $this->findServicesFlexiVpnProfileByQueryCriteriaWithHttpInfo($service_ticket, $body, $contentType);
        return $response;
    }

    /**
     * Operation findServicesFlexiVpnProfileByQueryCriteriaWithHttpInfo
     *
     * Use this API command to query Flexi-VPN profiles.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'] to see the possible values for this operation
     *
     * @throws \PofP\SmartzoneClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of |object, HTTP status code, HTTP response headers (array of strings)
     */
    public function findServicesFlexiVpnProfileByQueryCriteriaWithHttpInfo($service_ticket, $body, string $contentType = self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'][0])
    {
        $request = $this->findServicesFlexiVpnProfileByQueryCriteriaRequest($service_ticket, $body, $contentType);

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
     * Operation findServicesFlexiVpnProfileByQueryCriteriaAsync
     *
     * Use this API command to query Flexi-VPN profiles.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findServicesFlexiVpnProfileByQueryCriteriaAsync($service_ticket, $body, string $contentType = self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'][0])
    {
        return $this->findServicesFlexiVpnProfileByQueryCriteriaAsyncWithHttpInfo($service_ticket, $body, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findServicesFlexiVpnProfileByQueryCriteriaAsyncWithHttpInfo
     *
     * Use this API command to query Flexi-VPN profiles.
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findServicesFlexiVpnProfileByQueryCriteriaAsyncWithHttpInfo($service_ticket, $body, string $contentType = self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'][0])
    {
        $returnType = 'object';
        $request = $this->findServicesFlexiVpnProfileByQueryCriteriaRequest($service_ticket, $body, $contentType);

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
     * Create request for operation 'findServicesFlexiVpnProfileByQueryCriteria'
     *
     * @param  string $service_ticket Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). (required)
     * @param  \PofP\SmartzoneClient\Model\CommonQueryCriteriaSuperSet $body (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findServicesFlexiVpnProfileByQueryCriteriaRequest($service_ticket, $body, string $contentType = self::contentTypes['findServicesFlexiVpnProfileByQueryCriteria'][0])
    {

        // verify the required parameter 'service_ticket' is set
        if ($service_ticket === null || (is_array($service_ticket) && count($service_ticket) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $service_ticket when calling findServicesFlexiVpnProfileByQueryCriteria'
            );
        }

        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling findServicesFlexiVpnProfileByQueryCriteria'
            );
        }


        $resourcePath = '/query/services/flexiVpnProfile';
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
        if (isset($body)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
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
            'POST',
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