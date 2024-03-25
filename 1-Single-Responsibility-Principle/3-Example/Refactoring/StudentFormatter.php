<?php

namespace Refactoring;

/*
 * jsonFormat() and arrayFormat() tasks from class Student, are now in this class.
 * This class has one responsibility: Student formatting.
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
