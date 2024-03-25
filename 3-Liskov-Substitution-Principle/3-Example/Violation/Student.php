<?php

namespace Arcsym\SolidPhp\LiskovSubstitution\Violation;

use Exception;

/*
 * Liskov Substitution Principle - some definitions:
 *
 * "Objects in a program should be replaceable with instances of their
 * subtypes without altering the correctness of that program."
 *
 * "Derived classes must be substitutable for their base classes."
 *
 * "Every subclass/derived class should be substitutable for their base/parent class."
 *
 * "Software should not alter the desirable results when we replace a
 * parent type with any of the subtypes."
 *
 * "Objects in a program should be replaceable with instances of their subtypes
 * without altering the correctness of that program."
 *
 * "Objects should be replaceable by their subtypes without altering how the program works"
 *
 *
 * According definition, this class is violating Liskov Substitution Principle (LSP)
 * because we are not able to use Student class wherever we are using Teacher.
 */
class Student extends Teacher
{
  /**
   * @return string
   */
  public function learning(): string
  {
    return 'learning';
  }

  /**
   * We are not able to use Student class wherever we are using Teacher because
   * this is not an action specific to student.
   * When we call this method we will get an exception and not a processing like in Teacher class.
   *
   * @return string
   * @throws Exception
   */
  public function teaching(): string
  {
    throw new Exception('A student is not teaching, is learning.');
  }
}
