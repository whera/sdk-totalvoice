<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Factories;

use DateTime;
use WSW\TotalVoice\Entities\SmsAnswers;

/**
 * Class SmsAnswersFactory
 * @package WSW\TotalVoice\Factories
 */
class SmsAnswersFactory extends AbstractFactory
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

        self::transformerFiled($entity, $data);

        if (isset($data['resposta']) && !is_null($data['resposta'])) {
            $entity->setMessage($data['resposta']);
        }

        return $entity;
    }
}
