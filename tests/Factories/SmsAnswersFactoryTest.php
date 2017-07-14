<?php

namespace WSW\TotalVoice\Factories;

use DateTime;
use PHPUnit\Framework\TestCase;
use WSW\TotalVoice\Entities\SmsAnswers;

/**
 * Class SmsAnswersFactoryTest
 *
 * @package WSW\TotalVoice\Factories
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class SmsAnswersFactoryTest extends TestCase
{
    public function testNewFactory()
    {
        $arr = [
            "id" => 1,
            "resposta" => 'xpto',
            'data_resposta' => (new DateTime())->format(DateTime::W3C)
        ];

        $entity = SmsAnswersFactory::createFromArray($arr);

        $this->assertInstanceOf(SmsAnswers::class, $entity);
        $this->assertEquals(1, $entity->getId());
        $this->assertEquals('xpto', $entity->getMessage());
        $this->assertInstanceOf(DateTime::class, $entity->getCreatedAt());
    }
}
