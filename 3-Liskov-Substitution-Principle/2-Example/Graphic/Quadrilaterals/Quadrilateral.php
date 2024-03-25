<?php

namespace Graphic\Quadrilaterals;

abstract class Quadrilateral
{
    protected int $height;

    protected int $width;

    abstract public function resize(int $width, int $height): void;

    public function setWidth(int $value): void
    {
        $this->width = $value;
    }

    public function setHeight(int $value): void
    {
        $this->height = $value;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
