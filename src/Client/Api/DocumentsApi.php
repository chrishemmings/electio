<?php
/**
 * DocumentsApi
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Electio API
 *
 * A minimal Electio client
 *
 * OpenAPI spec version: 1.0.9
 * Contact: chris@hemmin.gs
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\Electio\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChrisHemmings\Electio\ApiException;
use ChrisHemmings\Electio\Configuration;
use ChrisHemmings\Electio\HeaderSelector;
use ChrisHemmings\Electio\ObjectSerializer;

/**
 * DocumentsApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getConsignmentDocuments
     *
     * Fetch customs documents
     *
     * @param  string $consignment_reference Consignment to create (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChrisHemmings\Electio\Client\Model\ConsignmentDocumentsResponse
     */
    public function getConsignmentDocuments($consignment_reference, $electio_api_version)
    {
        list($response) = $this->getConsignmentDocumentsWithHttpInfo($consignment_reference, $electio_api_version);
        return $response;
    }

    /**
     * Operation getConsignmentDocumentsWithHttpInfo
     *
     * Fetch customs documents
     *
     * @param  string $consignment_reference Consignment to create (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChrisHemmings\Electio\Client\Model\ConsignmentDocumentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConsignmentDocumentsWithHttpInfo($consignment_reference, $electio_api_version)
    {
        $returnType = '\ChrisHemmings\Electio\Client\Model\ConsignmentDocumentsResponse';
        $request = $this->getConsignmentDocumentsRequest($consignment_reference, $electio_api_version);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\ChrisHemmings\Electio\Client\Model\ConsignmentDocumentsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getConsignmentDocumentsAsync
     *
     * Fetch customs documents
     *
     * @param  string $consignment_reference Consignment to create (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsignmentDocumentsAsync($consignment_reference, $electio_api_version)
    {
        return $this->getConsignmentDocumentsAsyncWithHttpInfo($consignment_reference, $electio_api_version)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getConsignmentDocumentsAsyncWithHttpInfo
     *
     * Fetch customs documents
     *
     * @param  string $consignment_reference Consignment to create (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsignmentDocumentsAsyncWithHttpInfo($consignment_reference, $electio_api_version)
    {
        $returnType = '\ChrisHemmings\Electio\Client\Model\ConsignmentDocumentsResponse';
        $request = $this->getConsignmentDocumentsRequest($consignment_reference, $electio_api_version);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getConsignmentDocuments'
     *
     * @param  string $consignment_reference Consignment to create (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getConsignmentDocumentsRequest($consignment_reference, $electio_api_version)
    {
        // verify the required parameter 'consignment_reference' is set
        if ($consignment_reference === null || (is_array($consignment_reference) && count($consignment_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $consignment_reference when calling getConsignmentDocuments'
            );
        }
        // verify the required parameter 'electio_api_version' is set
        if ($electio_api_version === null || (is_array($electio_api_version) && count($electio_api_version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $electio_api_version when calling getConsignmentDocuments'
            );
        }

        $resourcePath = '/consignments/docs/{consignmentReference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($electio_api_version !== null) {
            $headerParams['electio-api-version'] = ObjectSerializer::toHeaderValue($electio_api_version);
        }

        // path params
        if ($consignment_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'consignmentReference' . '}',
                ObjectSerializer::toPathValue($consignment_reference),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
        $apiKey = $this->config->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Ocp-Apim-Subscription-Key'] = $apiKey;
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
     * Operation getConsignmentLabels
     *
     * Fetch labels for a specified consignment
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChrisHemmings\Electio\Client\Model\LabelResponse
     */
    public function getConsignmentLabels($consignment_reference, $electio_api_version)
    {
        list($response) = $this->getConsignmentLabelsWithHttpInfo($consignment_reference, $electio_api_version);
        return $response;
    }

    /**
     * Operation getConsignmentLabelsWithHttpInfo
     *
     * Fetch labels for a specified consignment
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChrisHemmings\Electio\Client\Model\LabelResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConsignmentLabelsWithHttpInfo($consignment_reference, $electio_api_version)
    {
        $returnType = '\ChrisHemmings\Electio\Client\Model\LabelResponse';
        $request = $this->getConsignmentLabelsRequest($consignment_reference, $electio_api_version);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\ChrisHemmings\Electio\Client\Model\LabelResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getConsignmentLabelsAsync
     *
     * Fetch labels for a specified consignment
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsignmentLabelsAsync($consignment_reference, $electio_api_version)
    {
        return $this->getConsignmentLabelsAsyncWithHttpInfo($consignment_reference, $electio_api_version)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getConsignmentLabelsAsyncWithHttpInfo
     *
     * Fetch labels for a specified consignment
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsignmentLabelsAsyncWithHttpInfo($consignment_reference, $electio_api_version)
    {
        $returnType = '\ChrisHemmings\Electio\Client\Model\LabelResponse';
        $request = $this->getConsignmentLabelsRequest($consignment_reference, $electio_api_version);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getConsignmentLabels'
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getConsignmentLabelsRequest($consignment_reference, $electio_api_version)
    {
        // verify the required parameter 'consignment_reference' is set
        if ($consignment_reference === null || (is_array($consignment_reference) && count($consignment_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $consignment_reference when calling getConsignmentLabels'
            );
        }
        // verify the required parameter 'electio_api_version' is set
        if ($electio_api_version === null || (is_array($electio_api_version) && count($electio_api_version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $electio_api_version when calling getConsignmentLabels'
            );
        }

        $resourcePath = '/documents/labels/{consignmentReference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($electio_api_version !== null) {
            $headerParams['electio-api-version'] = ObjectSerializer::toHeaderValue($electio_api_version);
        }

        // path params
        if ($consignment_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'consignmentReference' . '}',
                ObjectSerializer::toPathValue($consignment_reference),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
        $apiKey = $this->config->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Ocp-Apim-Subscription-Key'] = $apiKey;
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
     * Operation getPackageDocument
     *
     * Fetch specific document type for given Parcel and Package
     *
     * @param  string $customs_document_type Type of document required (required)
     * @param  string $consignment_reference Consignment reference (required)
     * @param  string $package_reference Package reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function getPackageDocument($customs_document_type, $consignment_reference, $package_reference, $electio_api_version)
    {
        list($response) = $this->getPackageDocumentWithHttpInfo($customs_document_type, $consignment_reference, $package_reference, $electio_api_version);
        return $response;
    }

    /**
     * Operation getPackageDocumentWithHttpInfo
     *
     * Fetch specific document type for given Parcel and Package
     *
     * @param  string $customs_document_type Type of document required (required)
     * @param  string $consignment_reference Consignment reference (required)
     * @param  string $package_reference Package reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPackageDocumentWithHttpInfo($customs_document_type, $consignment_reference, $package_reference, $electio_api_version)
    {
        $returnType = 'string';
        $request = $this->getPackageDocumentRequest($customs_document_type, $consignment_reference, $package_reference, $electio_api_version);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
     * Operation getPackageDocumentAsync
     *
     * Fetch specific document type for given Parcel and Package
     *
     * @param  string $customs_document_type Type of document required (required)
     * @param  string $consignment_reference Consignment reference (required)
     * @param  string $package_reference Package reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackageDocumentAsync($customs_document_type, $consignment_reference, $package_reference, $electio_api_version)
    {
        return $this->getPackageDocumentAsyncWithHttpInfo($customs_document_type, $consignment_reference, $package_reference, $electio_api_version)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPackageDocumentAsyncWithHttpInfo
     *
     * Fetch specific document type for given Parcel and Package
     *
     * @param  string $customs_document_type Type of document required (required)
     * @param  string $consignment_reference Consignment reference (required)
     * @param  string $package_reference Package reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackageDocumentAsyncWithHttpInfo($customs_document_type, $consignment_reference, $package_reference, $electio_api_version)
    {
        $returnType = 'string';
        $request = $this->getPackageDocumentRequest($customs_document_type, $consignment_reference, $package_reference, $electio_api_version);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getPackageDocument'
     *
     * @param  string $customs_document_type Type of document required (required)
     * @param  string $consignment_reference Consignment reference (required)
     * @param  string $package_reference Package reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPackageDocumentRequest($customs_document_type, $consignment_reference, $package_reference, $electio_api_version)
    {
        // verify the required parameter 'customs_document_type' is set
        if ($customs_document_type === null || (is_array($customs_document_type) && count($customs_document_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customs_document_type when calling getPackageDocument'
            );
        }
        // verify the required parameter 'consignment_reference' is set
        if ($consignment_reference === null || (is_array($consignment_reference) && count($consignment_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $consignment_reference when calling getPackageDocument'
            );
        }
        // verify the required parameter 'package_reference' is set
        if ($package_reference === null || (is_array($package_reference) && count($package_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $package_reference when calling getPackageDocument'
            );
        }
        // verify the required parameter 'electio_api_version' is set
        if ($electio_api_version === null || (is_array($electio_api_version) && count($electio_api_version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $electio_api_version when calling getPackageDocument'
            );
        }

        $resourcePath = '/consignments/docs/{customsDocumentType}/{consignmentReference}/{packageReference}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($electio_api_version !== null) {
            $headerParams['electio-api-version'] = ObjectSerializer::toHeaderValue($electio_api_version);
        }

        // path params
        if ($customs_document_type !== null) {
            $resourcePath = str_replace(
                '{' . 'customsDocumentType' . '}',
                ObjectSerializer::toPathValue($customs_document_type),
                $resourcePath
            );
        }
        // path params
        if ($consignment_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'consignmentReference' . '}',
                ObjectSerializer::toPathValue($consignment_reference),
                $resourcePath
            );
        }
        // path params
        if ($package_reference !== null) {
            $resourcePath = str_replace(
                '{' . 'packageReference' . '}',
                ObjectSerializer::toPathValue($package_reference),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
        $apiKey = $this->config->getApiKeyWithPrefix('Ocp-Apim-Subscription-Key');
        if ($apiKey !== null) {
            $headers['Ocp-Apim-Subscription-Key'] = $apiKey;
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
