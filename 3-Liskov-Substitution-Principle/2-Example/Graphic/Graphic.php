<?php

namespace Graphic;

use Graphic\Quadrilaterals\Quadrilateral;

class Graphic
{
    /**
     * @param Quadrilateral $quadrilateral
     * @param int $percentage
     */
    public function resizeByPercentage(Quadrilateral $quadrilateral, int $percentage)
    {
        if ($percentage === 0) {
            $quadrilateral->resize(0, 0);
        } else {
            $quadrilateral->resize(
                $quadrilateral->getWidth() + ($quadrilateral->getWidth() * $percentage / 100),
                $quadrilateral->getHeight() + ($quadrilateral->getHeight() * $percentage / 100)
            );
        }
    }
}
