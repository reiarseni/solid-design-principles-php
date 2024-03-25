<?php

namespace Refactoring;

/*
 * Now, this interface is client specific.
 * Interface Segregation Principle is applying.
 */
interface TeacherInterface
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
}
