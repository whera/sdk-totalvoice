<?php
declare(strict_types = 1);

namespace WSW\TotalVoice\Collections;

use WSW\TotalVoice\Factories\SmsFactory;

/**
 * Class SmsCollection
 *
 * @package WSW\TotalVoice\Collections
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class SmsCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $factory = SmsFactory::class;
}
