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
     * @var array
     */
    protected static $dates = [];

    /**
     * @param array $data
     * @param \WSW\TotalVoice\Entities\AbstractEntity $entity
     */
    protected static function mountEntity(array $data, AbstractEntity $entity)
    {
        array_walk($data, function ($value, $key) use ($entity) {
            $method = 'set'.ucfirst($key);
            $value = self::mountDates($key, $value);
            $entity->{$method}($value);
        });
    }

    /**
     * @param $key
     * @param $value
     *
     * @return string|\DateTime|bool|int
     */
    private static function mountDates(&$key, &$value)
    {
        if (in_array($key, static::$dates)) {
            $value = DateTime::createFromFormat(DateTime::W3C, $value);
        }

        return $value;
    }
}
