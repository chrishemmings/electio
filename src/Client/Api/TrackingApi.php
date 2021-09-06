<?php
/**
 * TrackingApi
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
 * OpenAPI spec version: 1.0.8
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
 * TrackingApi Class Doc Comment
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackingApi
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
     * Operation getConsignmentTracking
     *
     * Fetch tracking information for given reference
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChrisHemmings\Electio\Client\Model\TrackingResponse
     */
    public function getConsignmentTracking($consignment_reference, $electio_api_version)
    {
        list($response) = $this->getConsignmentTrackingWithHttpInfo($consignment_reference, $electio_api_version);
        return $response;
    }

    /**
     * Operation getConsignmentTrackingWithHttpInfo
     *
     * Fetch tracking information for given reference
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \ChrisHemmings\Electio\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChrisHemmings\Electio\Client\Model\TrackingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConsignmentTrackingWithHttpInfo($consignment_reference, $electio_api_version)
    {
        $returnType = '\ChrisHemmings\Electio\Client\Model\TrackingResponse';
        $request = $this->getConsignmentTrackingRequest($consignment_reference, $electio_api_version);

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
                        '\ChrisHemmings\Electio\Client\Model\TrackingResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getConsignmentTrackingAsync
     *
     * Fetch tracking information for given reference
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsignmentTrackingAsync($consignment_reference, $electio_api_version)
    {
        return $this->getConsignmentTrackingAsyncWithHttpInfo($consignment_reference, $electio_api_version)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getConsignmentTrackingAsyncWithHttpInfo
     *
     * Fetch tracking information for given reference
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsignmentTrackingAsyncWithHttpInfo($consignment_reference, $electio_api_version)
    {
        $returnType = '\ChrisHemmings\Electio\Client\Model\TrackingResponse';
        $request = $this->getConsignmentTrackingRequest($consignment_reference, $electio_api_version);

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
     * Create request for operation 'getConsignmentTracking'
     *
     * @param  string $consignment_reference Consignment Reference (required)
     * @param  string $electio_api_version Electio API Version (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getConsignmentTrackingRequest($consignment_reference, $electio_api_version)
    {
        // verify the required parameter 'consignment_reference' is set
        if ($consignment_reference === null || (is_array($consignment_reference) && count($consignment_reference) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $consignment_reference when calling getConsignmentTracking'
            );
        }
        // verify the required parameter 'electio_api_version' is set
        if ($electio_api_version === null || (is_array($electio_api_version) && count($electio_api_version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $electio_api_version when calling getConsignmentTracking'
            );
        }

        $resourcePath = '/tracking/{consignmentReference}';
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
