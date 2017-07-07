<?php
declare(strict_types=1);

namespace WSW\TotalVoice;

use PHPUnit\Framework\TestCase;
use WSW\TotalVoice\Environments\AbstractEnvironment;
use WSW\TotalVoice\Environments\Production;

/**
 * Class CredentialsTest
 * @package WSW\TotalVoice
 */
class CredentialsTest extends TestCase
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

    public function testConstructShouldConfigureTheAttributes()
    {
        $credentials = new Credentials('ronaldo@whera.com.br', $this->environment);
        $this->assertAttributeEquals('ronaldo@whera.com.br', 'accessToken', $credentials);
        $this->assertAttributeSame($this->environment, 'environment', $credentials);
    }

    public function testConstructShouldTruncateAccessToken()
    {
        $credentials = new Credentials(str_repeat('a', 80), $this->environment);
        $this->assertAttributeEquals(str_repeat('a', 32), 'accessToken', $credentials);
    }

    public function testConstructShouldUseProductionAsDefaultEnvironment()
    {
        $credentials = new Credentials('ronaldo@whera.com.br');
        $this->assertAttributeInstanceOf(Production::class, 'environment', $credentials);
    }
    public function testGetUrlShouldGetTheUrlFromTheEnvironment()
    {
        $credentials = new Credentials('ronaldo@whera.com.br', $this->environment);
        $this->assertEquals('https://ws.test.com/test', $credentials->getWsUrl('/test'));
    }

    public function testGetUrlShouldGetTheUrlFromTheEnvironmentAsGetParams()
    {
        $credentials = new Credentials('ronaldo@whera.com.br', $this->environment);
        $this->assertEquals(
            'https://ws.test.com/test?first_name=Ronaldo&last_name=Rodrigues',
            $credentials->getWsUrl('/test', ['first_name' => 'Ronaldo', 'last_name' => 'Rodrigues'])
        );
    }
}
