<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Collections;

use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * Class SmsCollectionTest
 * @package WSW\TotalVoice\Collections
 */
class SmsCollectionTest extends TestCase
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

        $collection = new SmsCollection($arr);
        $this->assertInstanceOf(SmsCollection::class, $collection);
        $this->assertEquals(2, $collection->count());
    }
}
