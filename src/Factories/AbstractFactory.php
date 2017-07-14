<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Factories;

use DateTime;
use WSW\TotalVoice\Entities\AbstractEntity;

/**
 * Class AbstractFactory
 *
 * @package WSW\TotalVoice\Factories
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractFactory
{

    /**
     * @param array $data
     */
    abstract public static function createFromArray(array $data);
}
