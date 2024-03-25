<?php

/**
 * Open Closed Principle.
 */

require_once 'Sport/Sports/SportInterface.php';
require_once 'Sport/Sports/Football.php';
require_once 'Sport/Sports/Basketball.php';
require_once 'Sport/Sport.php';

use Sport\Sport;
use Sport\Sports\Football;
use Sport\Sports\Basketball;

/**
 * In this example, the Sports "\Sport\Sports\Football" and "\Sport\Sports\Basketball" implement the "\Sport\Sports\SportInterface" interface.
 * This is useful to ensure that the "name" and "rules" methods are present in all Sports.
 *
 * The "rules" method of the "\Sport\Sport" class expects as a parameter a class that implements the "\Sport\Sports\SportInterface" interface
 * to return the rules of a Sport in response.
 *
 * In this example, we can see that the "\Sport\Sports\Football" and "\Sport\Sports\Basketball" classes are indeed open to extensions (that behaviors can be added...)
 * and closed to modification .
 */

$sport = new Sport();

$football = new Football();

// return string - Rules of soccer.
echo '<pre>';
var_dump($sport->rules($football));

$basketball = new Basketball();

// return string - Rules of basketball.
echo '<pre>';
var_dump($sport->rules($basketball));
