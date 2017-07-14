<?php

declare(strict_types = 1);

namespace WSW\TotalVoice\Support;

use DateTime;
use InvalidArgumentException;

/**
 * Class DateTimeSupport
 *
 * @package WSW\TotalVoice\Support
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class DateTimeSupport
{
    /**
     * @param string $date
     * @param string $format
     * @throws \InvalidArgumentException
     *
     * @return \DateTime
     */
    public static function load(string $date, string $format = DateTime::RFC3339): DateTime
    {
        $date = DateTime::createFromFormat($format, $date);

        if ($date === false) {
            throw new InvalidArgumentException('Date in unknown format.', 422);
        }

        return $date;
    }
}
