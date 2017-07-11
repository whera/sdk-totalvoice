<?php

declare(strict_types=1);

namespace WSW\TotalVoice\Entities;

use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractEntityTest
 *
 * @package WSW\TotalVoice\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class AbstractEntityTest extends TestCase
{
    /**
     * @var \WSW\TotalVoice\Entities\AbstractEntity
     */
    private $entity;

    protected function setUp()
    {
        $this->entity = $this->getMockForAbstractClass(AbstractEntity::class);
    }

    public function testMethodSet()
    {
        $this->entity->setId(123);
        $this->entity->setCreatedAt(new DateTime());
        $this->assertAttributeEquals(123, 'id', $this->entity);
        $this->assertAttributeInstanceOf(DateTime::class, 'createdAt', $this->entity);
    }

    public function testFluentMethods()
    {
        $this->assertInstanceOf(AbstractEntity::class, $this->entity->setId(123));
        $this->assertInstanceOf(AbstractEntity::class, $this->entity->setCreatedAt(new DateTime()));
    }

    public function testMethodGet()
    {
        $this->entity->setId(123);
        $this->entity->setCreatedAt(new DateTime());
        $this->assertEquals(123, $this->entity->getId());
        $this->assertInstanceOf(DateTime::class, $this->entity->getCreatedAt());
    }

    public function testMethodFillable()
    {
        $sms = new SmsAnswers();
        $this->assertInternalType('array', $sms->getFillable());
        $this->assertTrue(in_array('id', $sms->getFillable()));
        $this->assertTrue(in_array('createdAt', $sms->getFillable()));
        $this->assertTrue(in_array('message', $sms->getFillable()));
    }
}
