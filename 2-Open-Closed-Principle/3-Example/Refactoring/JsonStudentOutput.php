<?php

namespace Refactoring;

/*
 * Case json from class Student is now a class.
 */
class JsonStudentOutput implements OutputInterface
{
  /**
   * @var Student
   */
  private Student $student;

  public function __construct(Student $student)
  {
    $this->student = $student;
  }

  /**
   * @return false|string
   */
  public function output()
  {
    return json_encode([
      'lastname' => $this->student->getLastname(),
      'firstname' => $this->student->getFirstname(),
      'gender' => $this->student->getGender()
    ]);
  }
}
