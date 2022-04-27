<?php

class Component
{
    private int $id;
    private string $name;
    private string $type;
    private string $position;
    private float $width;
    private float $height;
    private array $attributes;

    public function __construct(
        int $id,
        string $name,
        string $type,
        string $position,
        float $width,
        float $height,
        array $attributes = []
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->position = $position;
        $this->width = $width;
        $this->height = $height;
        $this->attributes = $attributes;
    }

    public function setUrlAttribute(string $url): self
    {
        $this->attributes['url'] = $url;

        return $this;
    }

    public function setFormatAttribute(string $format): self
    {
        $this->attributes['format'] = $format;

        return $this;
    }

    public function setWeightAttribute(float $weight, string $type): self
    {
        $this->attributes['weight'] = "{$weight}{$type}";

        return $this;
    }

    public function setTextAttribute(string $text): self
    {
        $this->attributes['text'] = $text;

        return $this;
    }
}