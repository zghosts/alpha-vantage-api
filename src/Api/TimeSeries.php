<?php

namespace AlphaVantage\Api;

/**
 * Class TimeSeries
 * @package AlphaVantage\Api
 */
class TimeSeries extends AbstractApi
{
    const OUTPUT_TYPE_COMPACT = 'compact';
    const OUTPUT_TYPE_FULL = 'full';

    const DATA_TYPE_JSON = 'json';
    const DATA_TYPE_CSV = 'csv';

    const INTERVAL_1 = '1min';
    const INTERVAL_5 = '5min';
    const INTERVAL_15 = '15min';
    const INTERVAL_30 = '30min';
    const INTERVAL_60 = '60min';

    /**
     * @param string $symbolName
     * @param string $exchangeName
     * @param string $interval
     * @param string $outputType
     * @param string $dataType
     * @return array
     */
    public function intraday(
        $symbolName,
        $exchangeName,
        $interval,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_INTRADAY',
            $symbolName,
            $exchangeName,
            [
                'interval' => $interval,
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $exchangeName
     * @param string $outputType
     * @param string $dataType
     *
     * @return array
     */
    public function daily(
        $symbolName,
        $exchangeName,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_DAILY',
            $symbolName,
            $exchangeName,
            [
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $exchangeName
     * @param string $outputType
     * @param string $dataType
     *
     * @return array
     */
    public function dailyAdjusted(
        $symbolName,
        $exchangeName,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_DAILY_ADJUSTED',
            $symbolName,
            $exchangeName,
            [
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $exchangeName
     * @param string $dataType
     *
     * @return array
     */
    public function weekly(
        $symbolName,
        $exchangeName,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_WEEKLY',
            $symbolName,
            $exchangeName,
            [
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $exchangeName
     * @param string $dataType
     *
     * @return array
     */
    public function monthly(
        $symbolName,
        $exchangeName,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_MONTHLY',
            $symbolName,
            $exchangeName,
            [
                'datatype' => $dataType,
            ]
        );
    }
}