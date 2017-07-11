<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Factories;

/**
 * Interface FactoryContract
 *
 * @package WSW\TotalVoice\Factories
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
interface FactoryContract
{
    /**
     * @param array $data
     *
     * @return \WSW\TotalVoice\Entities\AbstractEntity
     */
    public static function createFromArray(array $data);
}
