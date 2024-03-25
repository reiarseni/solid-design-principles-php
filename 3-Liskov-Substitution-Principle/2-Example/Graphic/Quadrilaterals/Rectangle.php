<?php

namespace Graphic\Quadrilaterals;

class Rectangle extends Quadrilateral
{
    public function resize(int $width, int $height): void
    {
        $this->width = $width;
        $this->height = $height;
    }
}
