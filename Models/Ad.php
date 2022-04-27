<?php

class Ad
{
    public const STATUS_PUBLISHED = 'published';
    public const STATUS_STOPPED = 'stopped';
    public const STATUS_PUBLISHING = 'publishing';

    private static array $statusValid = [self::STATUS_PUBLISHED, self::STATUS_STOPPED, self::STATUS_PUBLISHING];

    private int $id;
    private string $name;
    private string $category;
    private string $status;
    private array $components;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
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
     * @throws RuntimeException
     */
    public function setStatus(string $status): void
    {
        if (!in_array($status, self::$statusValid, true)) {
            throw new RuntimeException(sprintf(
                "The '%s' status is not valid, the status valid are ('%s')",
                $status,
                implode("', '", self::$statusValid)
            ));
        }

        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
     * @param array $components
     */
    public function setComponents(array $components): void
    {
        $this->components = $components;
    }
}