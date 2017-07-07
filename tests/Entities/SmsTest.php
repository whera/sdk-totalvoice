<?php

declare(strict_types=1);

namespace WSW\TotalVoice\Entities;

use DateTime;
use PHPUnit\Framework\TestCase;
use WSW\TotalVoice\Collections\SmsAnswersCollection;

/**
 * Class SmsTest
 * @package WSW\TotalVoice\Entities
 */
class SmsTest extends TestCase
{
    public function testMethodsSets()
    {
        $entity = new Sms();
        $entity->setMessage('Message Test');
        $entity->setTo(4898754168);
        $entity->setAllowResponse(true);
        $entity->setStatus('show');
        $entity->setPrice(0.99);
        $entity->setAnswers(new SmsAnswersCollection([]));
        $entity->setSendDate(new DateTime());

        $this->assertAttributeEquals('Message Test', 'message', $entity);
        $this->assertAttributeEquals('show', 'status', $entity);
        $this->assertAttributeEquals(0.99, 'price', $entity);
        $this->assertAttributeEquals(4898754168, 'to', $entity);
        $this->assertAttributeEquals(true, 'allowResponse', $entity);
        $this->assertAttributeInstanceOf(SmsAnswersCollection::class, 'answers', $entity);
        $this->assertAttributeInstanceOf(DateTime::class, 'sendDate', $entity);

        return $entity;
    }

    public function testFluentMethods()
    {
        $entity = new Sms();
        $this->assertInstanceOf(Sms::class, $entity->setMessage('Message Test'));
        $this->assertInstanceOf(Sms::class, $entity->setTo(4898754168));
        $this->assertInstanceOf(Sms::class, $entity->setAllowResponse(true));
        $this->assertInstanceOf(Sms::class, $entity->setStatus('show'));
        $this->assertInstanceOf(Sms::class, $entity->setPrice(0.99));
        $this->assertInstanceOf(Sms::class, $entity->setAnswers(new SmsAnswersCollection([])));
        $this->assertInstanceOf(Sms::class, $entity->setSendDate(new DateTime()));
    }

    /**
     * @depends testMethodsSets
     * @param \WSW\TotalVoice\Entities\Sms $entity
     */
    public function testMethodsGets(Sms $entity)
    {
        $this->assertEquals('Message Test', $entity->getMessage());
        $this->assertEquals(4898754168, $entity->getTo());
        $this->assertTrue($entity->isAllowResponse());
        $this->assertEquals('show', $entity->getStatus());
        $this->assertEquals(0.99, $entity->getPrice());
        $this->assertInstanceOf(SmsAnswersCollection::class, $entity->getAnswers());
        $this->assertInstanceOf(DateTime::class, $entity->getSendDate());
    }
}
