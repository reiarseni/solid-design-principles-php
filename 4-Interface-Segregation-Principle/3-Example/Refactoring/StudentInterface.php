<?php

namespace Refactoring;

/*
 * Now, this interface is client specific.
 * Interface Segregation Principle is applying.
 */
interface StudentInterface
{
  /**
   * A student learns from a teacher.
   *
   * @return string
   */
  public function learning(): string;
}
