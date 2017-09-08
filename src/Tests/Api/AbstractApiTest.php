<?php

namespace AlphaVantage\Tests\Api;

use AlphaVantage\Api\AbstractApi;
use AlphaVantage\Exception\RuntimeException;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class AbstractApiTest extends TestCase
{
    /** @var  \PHPUnit_Framework_MockObject_MockObject */
    protected $class;

    protected function setUp()
    {
        parent::setUp();
        $this->class = $this->getMockForAbstractClass(
            AbstractApi::class,
            [],
            '',
            false,
            true,
            true,
            null
        );
    }

    public function testConstructor()
    {
        $this->class->__construct($this->option);
        $this->addToAssertionCount(1);
    }

    public function testGetApiUrl()
    {
        $this->class->__construct($this->option);
        $result = $this->getMethod('getApiUri', $this->class)
            ->invokeArgs($this->class, []);

        $this->assertInternalType('string', $result);
        $this->assertSame('https://www.alphavantage.co/query?', $result);
    }

    public function testGetException()
    {
        $this->class->__construct($this->option);
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage(
            'The **demo** API key is for demo purposes only. Please claim your free API key at (https://www.alphavantage.co/support/#api-key) to explore our full API offerings. It takes fewer than 20 seconds, and we are committed to making it free forever.'
        );

        $this->getMethod('get', $this->class)
            ->invokeArgs(
                $this->class,
                [
                    '',
                ]
            );
    }

    public function testGetExceptionMessage()
    {
        $httpClient = $this->getMockBuilder(Client::class)
            ->setMethods(['get'])
            ->getMock();
        $response = $this->getMockForAbstractClass(
            ResponseInterface::class,
            [],
            '',
            true,
            true,
            true,
            ['getBody']
        );
        $stream = $this->getMockForAbstractClass(
            StreamInterface::class,
            [],
            '',
            true,
            true,
            true,
            ['getContents']
        );
        $response->expects($this->exactly(1))
            ->method('getBody')
            ->willReturn($stream);
        $stream->expects($this->exactly(1))
            ->method('getContents')
            ->willReturn('{"Error Message": "the parameter apikey is missing. Please claim your free API key on (https://www.alphavantage.co/support/#api-key). It should take less than 20 seconds, and is free permanently."}');

        $this->class->__construct($this->option);
        $this->setProperty('client', $httpClient, $this->class);

        $httpClient->expects($this->exactly(1))
            ->method('get')
            ->willReturn($response);

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage(
            'the parameter apikey is missing. Please claim your free API key on (https://www.alphavantage.co/support/#api-key). It should take less than 20 seconds, and is free permanently.'
        );

        $this->getMethod('get', $this->class)
            ->invokeArgs(
                $this->class,
                [
                    '',
                ]
            );
    }


    public function testGetInformationMessage()
    {
        $httpClient = $this->getMockBuilder(Client::class)
            ->setMethods(['get'])
            ->getMock();
        $response = $this->getMockForAbstractClass(
            ResponseInterface::class,
            [],
            '',
            true,
            true,
            true,
            ['getBody']
        );
        $stream = $this->getMockForAbstractClass(
            StreamInterface::class,
            [],
            '',
            true,
            true,
            true,
            ['getContents']
        );
        $response->expects($this->exactly(1))
            ->method('getBody')
            ->willReturn($stream);
        $stream->expects($this->exactly(1))
            ->method('getContents')
            ->willReturn('{"Information": "Please consider optimizing your API call frequency"}');

        $this->class->__construct($this->option);
        $this->setProperty('client', $httpClient, $this->class);

        $httpClient->expects($this->exactly(1))
            ->method('get')
            ->willReturn($response);

        $result = $this->getMethod('get', $this->class)
            ->invokeArgs(
                $this->class,
                [
                    '',
                ]
            );

        $this->assertInternalType('array', $result);
        $this->assertSame(
            [
                'Information' => 'Please consider optimizing your API call frequency'
            ],
            $result
        );
    }
}
