<?php

namespace Arcsym\SolidPhp\OpenClosed\ThirdExample\Refactoring;

/*
 * A new output type (xml) added for Student and a json modification.
 */
class StudentXmlFormatter extends StudentFormatter
{
  /**
   * @param Student $student
   * @return false|string
   */
  public function json(Student $student)
  {
    return json_encode([
      'lastname' => $student->getLastname(),
      'firstname' => $student->getFirstname()
    ]);
  }

  /**
   * A new output type.
   * Returns Student like XML.
   *
   * @param Student $student
   * @return string
   */
  public function xml(Student $student): string
  {
    return
      "<?xml version='1.0' encoding='UTF-8'?>
      <student>
        <lastname>" . $student->getLastname() . " </lastname>
        <firstname>" .$student->getFirstname() . "</firstname>
        <gender>" . $student->getGender() . "</gender>
      </student>";
  }
}
