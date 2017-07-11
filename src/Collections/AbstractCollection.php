<?php
declare(strict_types = 1);

namespace WSW\TotalVoice\Collections;

use ArrayObject;
use WSW\TotalVoice\Entities\AbstractEntity;

/**
 * Class AbstractCollection
 *
 * @package WSW\TotalVoice\Collections
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractCollection extends ArrayObject
{
    const FACTORY = '';

    /**
     * @param array $input
     */
    public function __construct(array $input = [])
    {
        $data = array_map(function ($row) {
            return $this->arrayToEntity($row);
        }, $input);

        unset($input);

        parent::__construct($data);
    }

    /**
     * @param array $data
     *
     * @return \WSW\TotalVoice\Entities\AbstractEntity
     */
    private function arrayToEntity(array $data): AbstractEntity
    {
        return forward_static_call_array([static::FACTORY, 'createFromArray'], [$data]);
    }
}
