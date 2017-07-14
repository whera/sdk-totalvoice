<?php
declare(strict_types = 1);

namespace WSW\TotalVoice\Entities;

use DateTime;
use WSW\TotalVoice\Collections\SmsAnswersCollection;

/**
 * Class Sms
 *
 * @package WSW\TotalVoice\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class Sms extends AbstractEntity
{
    /**
     * @var int
     */
    private $to;

    /**
     * @var \DateTime
     */
    private $sendDate;

    /**
     * @var string
     */
    private $message;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $status;

    /**
     * @var bool
     */
    private $allowResponse;

    /**
     * @var \WSW\TotalVoice\Collections\SmsAnswersCollection
     */
    private $answers;

    /**
     * @return int
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * @param int $to
     *
     * @return self
     */
    public function setTo(int $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSendDate()
    {
        return $this->sendDate;
    }

    /**
     * @param \DateTime $sendDate
     *
     * @return self
     */
    public function setSendDate(DateTime $sendDate): self
    {
        $this->sendDate = $sendDate;

        return $this;
    }

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

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowResponse(): bool
    {
        return $this->allowResponse;
    }

    /**
     * @param bool $allowResponse
     *
     * @return self
     */
    public function setAllowResponse(bool $allowResponse): self
    {
        $this->allowResponse = $allowResponse;

        return $this;
    }

    /**
     * @return \WSW\TotalVoice\Collections\SmsAnswersCollection
     */
    public function getAnswers(): SmsAnswersCollection
    {
        return $this->answers;
    }

    /**
     * @param \WSW\TotalVoice\Collections\SmsAnswersCollection $answers
     *
     * @return self
     */
    public function setAnswers(SmsAnswersCollection $answers): self
    {
        $this->answers = $answers;

        return $this;
    }
}
