<?php

namespace Refactoring;

/*
 * Case array from class Student is now a class.
 */
class ArrayStudentOutput implements OutputInterface
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
   * @return array
   */
  public function output()
  {
    return [
      'lastname' => $this->student->getLastname(),
      'firstname' => $this->student->getFirstname(),
      'gender' => $this->student->getGender()
    ];
  }
}
