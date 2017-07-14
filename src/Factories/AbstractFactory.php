<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Factories;

use DateTime;
use WSW\TotalVoice\Entities\AbstractEntity;
use WSW\TotalVoice\Support\DateTimeSupport;

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

    /**
     * @param \WSW\TotalVoice\Entities\AbstractEntity $entity
     * @param array $data
     */
    protected static function transformerFiled(AbstractEntity $entity, array $data)
    {
        if (isset($data['id']) && !is_null($data['id'])) {
            $entity->setId((int) $data['id']);
        }

        if (isset($data['data_criacao']) && !is_null($data['data_criacao'])) {
            $entity->setCreatedAt(DateTimeSupport::load($data['data_criacao']));
        }

        if (isset($data['data_resposta']) && !is_null($data['data_resposta'])) {
            $entity->setCreatedAt(DateTimeSupport::load($data['data_resposta']));
        }
    }
}
