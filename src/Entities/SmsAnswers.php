<?php
declare(strict_types=1);

namespace WSW\TotalVoice\Entities;

/**
 * Class SmsAnswers
 *
 * @package WSW\TotalVoice\Entities
 * @author Ronaldo Matos Rodrigues
 */
class SmsAnswers extends AbstractEntity
{
    /**
     * @var string
     */
    private $message;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
