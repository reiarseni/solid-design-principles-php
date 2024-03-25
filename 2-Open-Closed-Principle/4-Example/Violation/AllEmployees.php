<?php

namespace Arcsym\SolidPhp\OpenClosed\SecondExample\Violation;

/*
 * Open Closed Principle - some definitions:
 *
 * "Software entities... should be open for extension, but closed for modification."
 *
 * "You should be able to extend a classes behavior, without modifying it."
 *
 * "...software entities such as modules, classes, functions, etc. should be open for extension,
 * but closed for modification."
 *
 * "Objects or entities should be open for extension, but closed for modification."
 *
 *
 * According definition, this class is violating Open Closed Principle (OCP) because we do
 * modification each time when a new type of employee is added.
 */
class AllEmployees
{
  /**
   * @var array
   */
  private array $employees;


  public function __construct(array $employees)
  {
    $this->employees = $employees;
  }

  /*
   * We need to modify this method when a new type of employee is added.
   * OCP is violated.
   */
  public function process(): void
  {
    foreach ($this->employees as $employee) {
      switch (true) {
        case $employee instanceof Developer:
          echo $employee->developing() . PHP_EOL;
          break;
        case  $employee instanceof Tester:
          echo $employee->testing() . PHP_EOL;
          break;
      }
    }
  }
}
