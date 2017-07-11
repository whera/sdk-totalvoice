<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Collections;

use DateTime;
use PHPUnit\Framework\TestCase;
use WSW\TotalVoice\Entities\SmsAnswers;

/**
 * Class SmsAnswersCollectionTest
 * @package WSW\TotalVoice\Collections
 */
class SmsAnswersCollectionTest extends TestCase
{
    public function testCollection()
    {
        
        $arr = [
            [
                "id" => 1,
                "message" => 'xpto ' . microtime(),
                'createdAt' => (new DateTime())->format(DateTime::W3C)
            ],
            [
                "id" => 2,
                "message" => 'xpto ' . microtime(),
                'createdAt' => (new DateTime())->format(DateTime::W3C)
            ]
        ];

        $collection = new SmsAnswersCollection($arr);
        $this->assertInstanceOf(SmsAnswersCollection::class, $collection);
        $this->assertEquals(2, $collection->count());
    }
}
