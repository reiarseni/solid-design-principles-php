<?php

namespace Arcsym\SolidPhp\OpenClosed\ThirdExample\Violation;

/*
 * Open Closed Principle - some definitions:
 *
 * "Software entities... should be open for extension, but closed for modification."
 *
 * "You should be able to extend a classes behavior, without modifying it."
 *
 * "...software entities such as modules, classes, functions, etc. should be open for extension,
 * but closed for modification."
 *
 * "Objects or entities should be open for extension, but closed for modification."
 *
 *
 * According definition, this class is violating Open Closed Principle (OCP)
 * because it is open for modification. If we need another output type, we need
 * to modify this class.
 */
class Student
{
  /**
   * @var string
   */
  private string $lastname;

  /**
   * @var string
   */
  private string $firstname;

  /**
   * @var string
   */
  private string $gender;


  /**
   * @param string $lastname
   * @return $this
   */
  public function setLastname(string $lastname): self
  {
    $this->lastname = $lastname;

    return $this;
  }

  /**
   * @return string
   */
  public function getLastname(): string
  {
    return $this->lastname;
  }

  /**
   * @param string $firstname
   * @return $this
   */
  public function setFirstname(string $firstname): self
  {
    $this->firstname = $firstname;

    return $this;
  }

  /**
   * @return string
   */
  public function getFirstname(): string
  {
    return $this->firstname;
  }

  /**
   * @param string $gender
   * @return $this
   */
  public function setGender(string $gender): self
  {
    $this->gender = $gender;

    return $this;
  }

  /**
   * @return string
   */
  public function getGender(): string
  {
    return $this->gender;
  }

  /**
   * @return string
   */
  public function prefixName(): string
  {
    return strtolower($this->gender) == 'masculine' ? 'Mr.' : 'Mrs.';
  }

  /**
   * If we need another type, we need to modify this method.
   * OCP is violated.
   *
   * @param $type
   * @return false|string
   */
  public function output($type)
  {
    $output = null;

    switch ($type) {
      case 'json':
        $output = json_encode([
          'lastname' => $this->lastname,
          'firstname' => $this->firstname,
          'gender' => $this->gender
        ]);
        break;
      case 'array':
        $output = [
          'lastname' => $this->lastname,
          'firstname' => $this->firstname,
          'gender' => $this->gender
        ];
        break;
    }

    return $output;
  }
}
