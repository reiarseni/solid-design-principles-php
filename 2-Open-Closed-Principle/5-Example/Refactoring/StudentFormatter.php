<?php

namespace Arcsym\SolidPhp\OpenClosed\ThirdExample\Refactoring;

/*
 * Is OCP valid here?! It is, but not the best choice.
 *
 * But... what if we want another output type (xml)?
 * Or... what if we need changes on json?
 * Well... we will use inheritance and polymorphism.
 */
class StudentFormatter
{
  /**
   * Returns Student like JSON.
   *
   * @param Student $student
   * @return false|string
   */
  public function json(Student $student)
  {
    return json_encode([
      'lastname' => $student->getLastname(),
      'firstname' => $student->getFirstname(),
      'gender' => $student->getGender()
    ]);
  }

  /**
   * Returns Student like associative array.
   *
   * @param Student $student
   * @return array
   */
  public function array(Student $student): array
  {
    return [
      'lastname' => $student->getLastname(),
      'firstname' => $student->getFirstname(),
      'gender' => $student->getGender()
    ];
  }
}
