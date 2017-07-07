<?php
declare(strict_types=1);

namespace WSW\TotalVoice;

use WSW\TotalVoice\Environments\AbstractEnvironment;
use WSW\TotalVoice\Environments\Production;

/**
 * Class Credentials
 *
 * @package WSW\TotalVoice
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Credentials
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var \WSW\TotalVoice\Environments\AbstractEnvironment
     */
    private $environment;

    /**
     * @param string $accessToken
     * @param \WSW\TotalVoice\Environments\AbstractEnvironment $environment
     */
    public function __construct(string $accessToken, AbstractEnvironment $environment = null)
    {
        $this->accessToken = substr($accessToken, 0, 32);
        $this->environment = $environment ?? new Production();
    }

    /**
     * @param string $resource
     * @param array $params
     *
     * @return string
     */
    public function getWsUrl(string $resource, array $params = []): string
    {
        if (empty($params)) {
            return $this->environment->getWsUrl($resource);
        }

        return sprintf('%s?%s', $this->environment->getWsUrl($resource), http_build_query($params));
    }
}
