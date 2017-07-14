<?php

namespace WSW\TotalVoice\Factories;

use DateTime;
use PHPUnit\Framework\TestCase;
use WSW\TotalVoice\Collections\SmsAnswersCollection;
use WSW\TotalVoice\Entities\Sms;
use WSW\TotalVoice\Entities\SmsAnswers;

/**
 * Class SmsFactoryTest
 *
 * @package WSW\TotalVoice\Factories
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class SmsFactoryTest extends TestCase
{
    public function testNewFactory()
    {
        $arr = [
            "id" => 204,
            "numero_destino" => "4899999999",
            'data_criacao' => "2016-03-31T22:39:36-03:00",
            'data_envio' => "2016-03-31T22:40:42-03:00",
            'mensagem' => "Oi, tudo bem?",
            'preco' => 0.05,
            'status' => "enviada",
            'resposta_usuario' => true,
            'respostas' => [
                [
                    'id' => 2,
                    'resposta' => "tudo bem, e voce?",
                    'data_resposta' => "2016-03-31T22:46:42-03:00"
                ]
            ]
        ];

        $entity = SmsFactory::createFromArray($arr);

        $this->assertInstanceOf(Sms::class, $entity);
        $this->assertEquals(4899999999, $entity->getTo());
        $this->assertEquals("Oi, tudo bem?", $entity->getMessage());
        $this->assertEquals("enviada", $entity->getStatus());
        $this->assertEquals(0.05, $entity->getPrice());
        $this->assertInstanceOf(DateTime::class, $entity->getCreatedAt());
        $this->assertInstanceOf(DateTime::class, $entity->getSendDate());
        $this->assertTrue($entity->isAllowResponse());
        $this->assertInstanceOf(SmsAnswersCollection::class, $entity->getAnswers());
    }
}
