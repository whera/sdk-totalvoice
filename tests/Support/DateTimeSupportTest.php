<?php

declare(strict_types=1);

namespace WSW\TotalVoice\Support;

use PHPUnit\Framework\TestCase;

/**
 * Class DateTimeSupportTest
 * @package WSW\TotalVoice\Support
 */
class DateTimeSupportTest extends TestCase
{
    public function testInstance()
    {
        $date = DateTimeSupport::load('2017-02-01T22:39:36-03:00');
        $this->assertInstanceOf(\DateTime::class, $date);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionCode 422
     */
    public function testException()
    {
        DateTimeSupport::load('1485907200');
    }
}
