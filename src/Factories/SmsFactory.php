<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Factories;

use WSW\TotalVoice\Entities\Sms;

/**
 * Class SmsFactory
 *
 * @package WSW\TotalVoice\Factories
 */
class SmsFactory extends AbstractFactory implements FactoryContract
{
    /**
     * @var array
     */
    protected static $dates = ['sendDate', 'createdAt'];

    /**
     * @param array $data
     *
     * @return \WSW\TotalVoice\Entities\AbstractEntity
     */
    public static function createFromArray(array $data)
    {
        $entity = new Sms();
        parent::mountEntity($data, $entity);

        return $entity;
    }
}
