<?php

namespace Graphic\Quadrilaterals;

class Square extends Quadrilateral
{
    public function resize(int $width, int $height): void
    {
        $this->width = $width;
        $this->height = $height;
    }
}
