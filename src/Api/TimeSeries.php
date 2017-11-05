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

    const INTERVAL_1 = '1min';
    const INTERVAL_5 = '5min';
    const INTERVAL_15 = '15min';
    const INTERVAL_30 = '30min';
    const INTERVAL_60 = '60min';

    /**
     * @param string $symbolName
     * @param string $interval
     * @param string $outputType
     * @param string $dataType
     * @return array
     */
    public function intraday(
        $symbolName,
        $interval,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_INTRADAY',
            $symbolName,
            [
                'interval' => $interval,
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $outputType
     * @param string $dataType
     *
     * @return array
     */
    public function daily(
        $symbolName,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_DAILY',
            $symbolName,
            [
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $outputType
     * @param string $dataType
     *
     * @return array
     */
    public function dailyAdjusted(
        $symbolName,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_DAILY_ADJUSTED',
            $symbolName,
            [
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $dataType
     *
     * @return array
     */
    public function weekly(
        $symbolName,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_WEEKLY',
            $symbolName,
            [
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $outputType
     * @param string $dataType
     *
     * @return array
     */
    public function weeklyAdjusted(
        $symbolName,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_WEEKLY_ADJUSTED',
            $symbolName,
            [
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $dataType
     *
     * @return array
     */
    public function monthly(
        $symbolName,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_MONTHLY',
            $symbolName,
            [
                'datatype' => $dataType,
            ]
        );
    }

    /**
     * @param string $symbolName
     * @param string $outputType
     * @param string $dataType
     * @return array
     */
    public function monthlyAdjusted(
        $symbolName,
        $outputType = self::OUTPUT_TYPE_COMPACT,
        $dataType = self::DATA_TYPE_JSON
    ) {
        return $this->get(
            'TIME_SERIES_MONTHLY_ADJUSTED',
            $symbolName,
            [
                'outputsize' => $outputType,
                'datatype' => $dataType,
            ]
        );
    }
}
