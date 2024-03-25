<?php

/**
 * Liskov Substitution Principle.
 */

require_once 'Graphic/Quadrilaterals/Quadrilateral.php';
require_once 'Graphic/Quadrilaterals/Rectangle.php';
require_once 'Graphic/Quadrilaterals/Square.php';
require_once 'Graphic/Graphic.php';

use Graphic\Quadrilaterals\Rectangle;
use Graphic\Quadrilaterals\Square;
use Graphic\Graphic;

/**
 * In this example, the Quadrilaterals "\Graphic\Quadrilaterals\Rectangle" and "\Graphic\Quadrilaterals\Square"
 * are children of class "\Graphic\Quadrilaterals\Quadrilateral".
 *
 * The "resizeByPercentage" method of the "\Graphic\Graphic" class expects a child of the "\Graphic\Quadrilaterals\Quadrilateral" class as its 1st parameter.
 *
 * In this example we can therefore see that in "resizeByPercentage" we can therefore replace "\Graphic\Quadrilaterals\Rectangle" by "\Graphic\Quadrilaterals\Square"
 * and vice versa without changing the consistency of the program.
 */

$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(6);

$square = new Square();
$square->setWidth(4);
$square->setHeight(4);

// return int - Rectangle width.
echo '<pre>';
var_dump($rectangle->getWidth());
// return int - Rectangle height.
echo '<pre>';
var_dump($rectangle->getHeight());

// return int - Square width.
echo '<pre>';
var_dump($square->getWidth());
// return int - Square height.
echo '<pre>';
var_dump($square->getHeight());

echo '<hr>';

$graphic = new Graphic();
$graphic->resizeByPercentage($rectangle, 25);
$graphic->resizeByPercentage($square, 25);

// return int - Rectangle width changed with "resizeByPercentage".
echo '<pre>';
var_dump($rectangle->getWidth());
// return int - Rectangle height changed with "resizeByPercentage".
echo '<pre>';
var_dump($rectangle->getHeight());

// return int - Square width changed with "resizeByPercentage".
echo '<pre>';
var_dump($square->getWidth());
// return int - Square height changed with "resizeByPercentage".
echo '<pre>';
var_dump($square->getHeight());
