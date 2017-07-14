<?php
declare(strict_types = 1);

namespace WSW\TotalVoice\Entities;

use DateTime;
use ReflectionClass;

/**
 * Class AbstractEntity
 *
 * @package WSW\TotalVoice\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractEntity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return array
     */
    public function getFillable(): array
    {
        $merge = array_merge(
            (new ReflectionClass(self::class))->getDefaultProperties(),
            (new ReflectionClass(static::class))->getDefaultProperties()
        );

        return array_keys($merge);
    }
}
