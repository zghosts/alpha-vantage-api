<?php

namespace AlphaVantage\Tests\Api;

use AlphaVantage\Api\Indicators;

class IndicatorsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->option->setApiKey(getenv('APLHA_VANTAGE_API_KEY'));
    }

    /**
     * @group integration
     */
    public function testSma()
    {
        $actual = (new Indicators($this->option))
            ->sma(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: SMA', $actual);
    }

    /**
     * @group integration
     */
    public function testEma()
    {
        $actual = (new Indicators($this->option))
            ->ema(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: EMA', $actual);
    }

    /**
     * @group integration
     */
    public function testWma()
    {
        $actual = (new Indicators($this->option))
            ->wma(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: WMA', $actual);
    }

    /**
     * @group integration
     */
    public function testDema()
    {
        $actual = (new Indicators($this->option))
            ->dema(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: DEMA', $actual);
    }

    /**
     * @group integration
     */
    public function testTema()
    {
        $actual = (new Indicators($this->option))
            ->tema(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: TEMA', $actual);
    }

    /**
     * @group integration
     */
    public function testTrima()
    {
        $actual = (new Indicators($this->option))
            ->trima(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: TRIMA', $actual);
    }

    /**
     * @group integration
     */
    public function testKama()
    {
        $actual = (new Indicators($this->option))
            ->kama(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: KAMA', $actual);
    }

    /**
     * @group integration
     */
    public function testT3()
    {
        $actual = (new Indicators($this->option))
            ->t3(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: T3', $actual);
    }

    /**
     * @group integration
     */
    public function testRsi()
    {
        $actual = (new Indicators($this->option))
            ->rsi(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: RSI', $actual);
    }

    /**
     * @group integration
     */
    public function testMom()
    {
        $actual = (new Indicators($this->option))
            ->mom(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: MOM', $actual);
    }

    /**
     * @group integration
     */
    public function testCmo()
    {
        $actual = (new Indicators($this->option))
            ->cmo(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: CMO', $actual);
    }

    /**
     * @group integration
     */
    public function testRoc()
    {
        $actual = (new Indicators($this->option))
            ->roc(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: ROC', $actual);
    }

    /**
     * @group integration
     */
    public function testRocr()
    {
        $actual = (new Indicators($this->option))
            ->rocr(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: ROCR', $actual);
    }

    /**
     * @group integration
     */
    public function testTrix()
    {
        $actual = (new Indicators($this->option))
            ->trix(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: TRIX', $actual);
    }

    /**
     * @group integration
     */
    public function testMidpoint()
    {
        $actual = (new Indicators($this->option))
            ->midpoint(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: MIDPOINT', $actual);
    }

    /**
     * @group integration
     */
    public function testWillr()
    {
        $actual = (new Indicators($this->option))
            ->willr(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: WILLR', $actual);
    }

    /**
     * @group integration
     */
    public function testAdx()
    {
        $actual = (new Indicators($this->option))
            ->adx(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: ADX', $actual);
    }

    /**
     * @group integration
     */
    public function testAdxr()
    {
        $actual = (new Indicators($this->option))
            ->adxr(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: ADXR', $actual);
    }

    /**
     * @group integration
     */
    public function testCci()
    {
        $actual = (new Indicators($this->option))
            ->cci(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: CCI', $actual);
    }

    /**
     * @group integration
     */
    public function testAroon()
    {
        $actual = (new Indicators($this->option))
            ->aroon(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: AROON', $actual);
    }

    /**
     * @group integration
     */
    public function testAroonosc()
    {
        $actual = (new Indicators($this->option))
            ->aroonosc(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: AROONOSC', $actual);
    }

    /**
     * @group integration
     */
    public function testMfi()
    {
        $actual = (new Indicators($this->option))
            ->mfi(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: MFI', $actual);
    }

    /**
     * @group integration
     */
    public function testDx()
    {
        $actual = (new Indicators($this->option))
            ->dx(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: DX', $actual);
    }

    /**
     * @group integration
     */
    public function testMidprice()
    {
        $actual = (new Indicators($this->option))
            ->midprice(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: MIDPRICE', $actual);
    }

    /**
     * @group integration
     */
    public function testAtr()
    {
        $actual = (new Indicators($this->option))
            ->atr(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: ATR', $actual);
    }

    /**
     * @group integration
     */
    public function testNatr()
    {
        $actual = (new Indicators($this->option))
            ->natr(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: NATR', $actual);
    }

    /**
     * @group integration
     */
    public function testMinusDi()
    {
        $actual = (new Indicators($this->option))
            ->minusDi(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: MINUS_DI', $actual);
    }

    /**
     * @group integration
     */
    public function testPlusDi()
    {
        $actual = (new Indicators($this->option))
            ->plusDi(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: PLUS_DI', $actual);
    }

    /**
     * @group integration
     */
    public function testMinusDm()
    {
        $actual = (new Indicators($this->option))
            ->minusDm(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: MINUS_DM', $actual);
    }

    /**
     * @group integration
     */
    public function testPlusDm()
    {
        $actual = (new Indicators($this->option))
            ->plusDm(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                10
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: PLUS_DM', $actual);
    }

    /**
     * @group integration
     */
    public function testBop()
    {
        $actual = (new Indicators($this->option))
            ->bop(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: BOP', $actual);
    }

    /**
     * @group integration
     */
    public function testTrange()
    {
        $actual = (new Indicators($this->option))
            ->trange(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: TRANGE', $actual);
    }

    /**
     * @group integration
     */
    public function testAd()
    {
        $actual = (new Indicators($this->option))
            ->ad(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: Chaikin A/D', $actual);
    }

    /**
     * @group integration
     */
    public function testObv()
    {
        $actual = (new Indicators($this->option))
            ->obv(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: OBV', $actual);
    }

    /**
     * @group integration
     */
    public function testHtTrendline()
    {
        $actual = (new Indicators($this->option))
            ->htTrendline(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: HT_TRENDLINE', $actual);
    }

    /**
     * @group integration
     */
    public function testHtSine()
    {
        $actual = (new Indicators($this->option))
            ->htSine(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: HT_SINE', $actual);
    }

    /**
     * @group integration
     */
    public function testHtTrendmode()
    {
        $actual = (new Indicators($this->option))
            ->htTrendmode(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: HT_TRENDMODE', $actual);
    }

    /**
     * @group integration
     */
    public function testHtDcPeriod()
    {
        $actual = (new Indicators($this->option))
            ->htDcPeriod(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: HT_DCPERIOD', $actual);
    }

    /**
     * @group integration
     */
    public function testHtPhasor()
    {
        $actual = (new Indicators($this->option))
            ->htPhasor(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: HT_PHASOR', $actual);
    }

    /**
     * @group integration
     */
    public function testHtDcPhase()
    {
        $actual = (new Indicators($this->option))
            ->htDcPhase(
                $this->symbol,
                $this->exchange,
                Indicators::INTERVAL_15,
                Indicators::INTERVAL_DAILY
            );
        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
        $this->assertArrayHasKey('Meta Data', $actual);
        $this->assertArrayHasKey('Technical Analysis: HT_DCPHASE', $actual);
    }
}
