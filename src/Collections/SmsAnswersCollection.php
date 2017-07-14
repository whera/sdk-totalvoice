<?php
declare(strict_types = 1);

namespace WSW\TotalVoice\Collections;

use WSW\TotalVoice\Factories\SmsAnswersFactory;

/**
 * Class SmsAnswersCollection
 *
 * @package WSW\TotalVoice\Collections
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class SmsAnswersCollection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $factory = SmsAnswersFactory::class;
}
