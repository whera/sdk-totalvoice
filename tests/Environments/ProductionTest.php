<?php
declare(strict_types=1);

namespace WSW\TotalVoice\Environments;

use PHPUnit\Framework\TestCase;

/**
 * Class ProductionTest
 *
 * @package WSW\TotalVoice\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class ProductionTest extends TestCase
{
    public function testGetWsHostShouldReturnTheConstantValue()
    {
        $env = new Production();
        $this->assertEquals(Production::WS_HOST, $env->getWsHost());
    }
}
