<?php
declare(strict_types=1);

namespace WSW\TotalVoice\Environments;

use PHPUnit\Framework\TestCase;

/**
 * Class AbstractEnvironmentTest
 *
 * @package WSW\TotalVoice\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AbstractEnvironmentTest extends TestCase
{
    /**
     * @var \WSW\TotalVoice\Environments\AbstractEnvironment
     */
    private $environment;

    protected function setUp()
    {
        $this->environment = $this->getMockForAbstractClass(AbstractEnvironment::class);
        $this->environment->expects($this->any())->method('getWsHost')->willReturn('ws.test.com');
    }

    public function testIsValidShouldReturnTrueWhenHostIsProduction()
    {
        $this->assertTrue(AbstractEnvironment::isValid(Production::WS_HOST));
    }

    public function testIsValidShouldReturnFalseWhenHostNotProductionOrSandbox()
    {
        $this->assertFalse(AbstractEnvironment::isValid('example.org'));
    }

    public function testGetWsUrlShouldAppendProtocolAndWsHostToResource()
    {
        $this->assertEquals('https://ws.test.com/test', $this->environment->getWsUrl('/test'));
    }
}
