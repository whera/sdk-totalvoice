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

        if (isset($data['id']) && !is_null($data['id'])) {
            $entity->setId((int) $data['id']);
        }

        if (isset($data['resposta']) && !is_null($data['resposta'])) {
            $entity->setMessage($data['resposta']);
        }

        if (isset($data['data_resposta']) && !is_null($data['data_resposta'])) {
            $entity->setCreatedAt(DateTime::createFromFormat(DateTime::W3C, $data['data_resposta']));
        }

        return $entity;
    }
}
