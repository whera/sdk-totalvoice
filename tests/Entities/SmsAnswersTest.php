<?php
declare(strict_types=1);

namespace WSW\TotalVoice\Entities;

use PHPUnit\Framework\TestCase;

/**
 * Class SmsAnswersTest
 * @package WSW\TotalVoice\Entities
 */
class SmsAnswersTest extends TestCase
{
    public function testMethodsSets()
    {
        $entity = new SmsAnswers();
        $entity->setMessage('Test Message');
        $this->assertAttributeEquals('Test Message', 'message', $entity);

        return $entity;
    }

    public function testFluentMethods()
    {
        $entity = new SmsAnswers();
        $this->assertInstanceOf(SmsAnswers::class, $entity->setMessage('Test Message'));
    }

    /**
     * @depends testMethodsSets
     * @param \WSW\TotalVoice\Entities\SmsAnswers $entity
     */
    public function testMethodsGets(SmsAnswers $entity)
    {
        $this->assertEquals('Test Message', $entity->getMessage());
    }
}
