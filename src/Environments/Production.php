<?php
declare(strict_types=1);

namespace WSW\TotalVoice\Environments;

/**
 * Class Production
 *
 * @package WSW\TotalVoice\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Production extends AbstractEnvironment
{
    const WS_HOST = 'api.totalvoice.com.br';

    /**
     * @return string
     */
    public function getWsHost(): string
    {
        return static::WS_HOST;
    }
}
