<?php

namespace AlphaVantage\Api;

use AlphaVantage\Exception\RuntimeException;
use AlphaVantage\Options;
use GuzzleHttp\Client;

/**
 * Class AbstractApi
 *
 * @package AlphaVantage\Api
 */
class AbstractApi
{
    /**
     * @var Options
     */
    protected $options;

    /**
     * AbstractApi constructor.
     *
     * @param Options $options
     */
    public function __construct(Options $options)
    {
        $this->options = $options;
    }

    /**
     * @param string $functionName
     * @param null|string $symbolName
     * @param null|string $exchangeName
     * @param array $params
     *
     * @return array
     */
    protected function get(
        string $functionName,
        string $symbolName = null,
        string $exchangeName = null,
        array $params = []
    ) {
        unset($params['functions'], $params['functions'], $params['apikey']);

        $basicData = [
            'function' => $functionName,
            'apikey'   => $this->options->getApiKey(),
        ];

        if (null !== $symbolName) {
            $basicData['symbol'] = sprintf('%s:%s', $exchangeName ?: 'NASDAQ', $symbolName);
        }

        $httpQuery = http_build_query(array_merge(
            $basicData,
            $params
        ));

        $httpClient = new Client();
        $response   = $httpClient->get($this->getApiUri() . $httpQuery);

        $result = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);

        if (isset($result['Error Message'])) {
            throw new RuntimeException($result['Error Message']);
        }

        return $result;
    }

    /**
     * @return string
     */
    protected function getApiUri(): string
    {
        return rtrim($this->options->getApiUrl(), '/') . '/query?';
    }

}