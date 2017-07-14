<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Factories;

use DateTime;
use WSW\TotalVoice\Collections\SmsAnswersCollection;
use WSW\TotalVoice\Entities\Sms;
use WSW\TotalVoice\Support\DateTimeSupport;

/**
 * Class SmsFactory
 *
 * @package WSW\TotalVoice\Factories
 */
class SmsFactory extends AbstractFactory
{
    /**
     * @var array
     */
    protected static $dates = ['sendDate', 'createdAt'];

    /**
     * @param array $data
     *
     * @return \WSW\TotalVoice\Entities\Sms
     */
    public static function createFromArray(array $data): Sms
    {
        $entity = new Sms();

        self::transformerFiled($entity, $data);

        if (isset($data['data_envio']) && !is_null($data['data_envio'])) {
            $entity->setSendDate(DateTimeSupport::load($data['data_envio']));
        }

        if (isset($data['mensagem']) && !is_null($data['mensagem'])) {
            $entity->setMessage($data['mensagem']);
        }

        if (isset($data['numero_destino']) && !is_null($data['numero_destino'])) {
            $entity->setTo((int) $data['numero_destino']);
        }

        if (isset($data['preco']) && !is_null($data['preco'])) {
            $entity->setPrice((float) $data['preco']);
        }

        if (isset($data['status']) && !is_null($data['status'])) {
            $entity->setStatus($data['status']);
        }

        if (isset($data['resposta_usuario']) && !is_null($data['resposta_usuario'])) {
            $entity->setAllowResponse((bool) $data['resposta_usuario']);
        }

        if (isset($data['respostas']) && !is_null($data['respostas']) && is_array($data['respostas'])) {
            $entity->setAnswers(new SmsAnswersCollection($data['respostas']));
        }

        return $entity;
    }
}
