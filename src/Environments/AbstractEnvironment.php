<?php
declare(strict_types = 1);

namespace WSW\TotalVoice\Environments;

/**
 * Class AbstractEnvironment
 *
 * @package WSW\TotalVoice\Environments
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractEnvironment
{
    /**
     * @param string $host
     *
     * @return bool
     */
    public static function isValid(string $host): bool
    {
        return in_array($host, [Production::WS_HOST]);
    }

    /**
     * @param string $resource
     *
     * @return string
     */
    public function getWsUrl(string $resource): string
    {
        return 'https://'.$this->getWsHost().$resource;
    }

    /**
     * @return string
     */
    abstract public function getWsHost(): string;
}
