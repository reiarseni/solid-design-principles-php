<?php

namespace Violation;

/*
 * Interface Segregation Principle - some definitions:
 *
 * "Many client-specific interfaces are better than one general-purpose interface."
 *
 * "Make fine grained interfaces that are client specific."
 *
 * "Clients should not be forced to depend upon interfaces that they do not use."
 *
 * "A client should never be forced to implement an interface that it doesn’t
 * use or clients shouldn’t be forced to depend on methods they do not use."
 *
 * "Many client-specific interfaces are better than one general-purpose interface."
 *
 *
 * According definition, this interface is violating Interface Segregation Principle (ISP)
 * because it will force the client to implement useless methods.
 */
interface PersonInterface
{
  /**
   * A teacher teaches on student.
   *
   * @return string
   */
  public function teaching(): string;

  /*
   * A teacher gives grades to student.
   */
  public function givesGrades(): void;

  /**
   * A student learns from a teacher.
   *
   * @return string
   */
  public function learning(): string;
}
