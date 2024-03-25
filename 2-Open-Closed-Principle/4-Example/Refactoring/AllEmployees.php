<?php

namespace Arcsym\SolidPhp\OpenClosed\SecondExample\Refactoring;

/*
 * Now, this class is closed to modification.
 * Open Closed Principle is applying.
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
   * A new type of employee is not forcing us to do modification here.
   */
  public function process(): void
  {
    foreach ($this->employees as $employee) {
      echo $employee->working() . PHP_EOL;
    }
  }
}
