<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Factories;

use WSW\TotalVoice\Entities\SmsAnswers;

/**
 * Class SmsAnswersFactory
 * @package WSW\TotalVoice\Factories
 */
class SmsAnswersFactory extends AbstractFactory implements FactoryContract
{
    /**
     * @var array
     */
    protected static $dates = ['createdAt'];

    /**
     * @param array $data
     *
     * @return \WSW\TotalVoice\Entities\SmsAnswers
     */
    public static function createFromArray(array $data): SmsAnswers
    {
        $entity = new SmsAnswers();
        parent::mountEntity($data, $entity);

        return $entity;
    }
}
