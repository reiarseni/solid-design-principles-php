<?php

/**
 * Interface Segregation Principle.
 */

require_once 'Worker/Jobs/JobInterface.php';
require_once 'Worker/Jobs/Developer/CodeInterface.php';
require_once 'Worker/Jobs/Developer/Developer.php';
require_once 'Worker/Jobs/Webdesigner/DesignInterface.php';
require_once 'Worker/Jobs/Webdesigner/Webdesigner.php';
require_once 'Worker/Employee.php';

use Worker\Jobs\Developer\Developer;
use Worker\Jobs\Webdesigner\Webdesigner;
use Worker\Employee;

/**
 * In this example, the Jobs "\Worker\Jobs\Developer\Developer" and "\Worker\Jobs\Webdesigner\Webdesigner"
 * implement an interface specific to their business.
 * And this interface itself inherits the "\Worker\Jobs\JobInterface" interface which is a more generic interface.
 *
 *
 * The "action" method of the "\Worker\Employee" class expects a class that implements the "\Worker\Jobs\JobInterface" interface.
 *
 * In this example, we can therefore see that each class has a specific interface which they themselves can extend from a more generic interface.
 */

$employee = new Employee();

$developer = new Developer();

// return string - Action (job + action of this job).
echo '<pre>';
var_dump($employee->action($developer));

$webdesigner = new Webdesigner();

// return string - Action (job + action of this job).
echo '<pre>';
var_dump($employee->action($webdesigner));
