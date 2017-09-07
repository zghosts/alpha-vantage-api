<?php

namespace AlphaVantage\Tests\Api;

use AlphaVantage\Api\Performance;

class PerformanceTest extends TestCase
{
    public function testGetGlobalQuote()
    {
        $actual = (new Performance($this->option))->section();

        $this->assertNotEmpty($actual);
        $this->assertInternalType('array', $actual);
    }
}
