<?php

namespace AlphaVantage\Tests\Api;

use AlphaVantage\Api\TimeSeries;

class TimeSeriesTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->option->setApiKey(getenv('APLHA_VANTAGE_API_KEY'));
    }

    /**
     * @group integration
     */
    public function testIntraday()
    {
        $actual = (new TimeSeries($this->option))
            ->intraday(
                $this->symbol,
                $this->exchange,
                TimeSeries::INTERVAL_1
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Time Series (1min)', $actual);
    }

    /**
     * @group integration
     */
    public function testDaily()
    {
        $actual = (new TimeSeries($this->option))
            ->daily(
                $this->symbol,
                $this->exchange,
                TimeSeries::OUTPUT_TYPE_COMPACT,
                TimeSeries::DATA_TYPE_JSON
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Time Series (Daily)', $actual);
    }

    /**
     * @group integration
     */
    public function testDailyAdjusted()
    {
        $actual = (new TimeSeries($this->option))
            ->dailyAdjusted(
                $this->symbol,
                $this->exchange,
                TimeSeries::OUTPUT_TYPE_COMPACT,
                TimeSeries::DATA_TYPE_JSON
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Time Series (Daily)', $actual);
    }

    /**
     * @group integration
     */
    public function testWeekly()
    {
        $actual = (new TimeSeries($this->option))->weekly(
            $this->symbol,
            $this->exchange,
            TimeSeries::DATA_TYPE_JSON
        );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Weekly Time Series', $actual);
    }

    /**
     * @group integration
     */
    public function testMonthly()
    {
        $actual = (new TimeSeries($this->option))
            ->monthly(
                $this->symbol,
                $this->exchange,
                TimeSeries::DATA_TYPE_JSON
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Monthly Time Series', $actual);
    }
}
