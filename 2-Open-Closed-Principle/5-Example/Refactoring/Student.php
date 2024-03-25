<?php

namespace Arcsym\SolidPhp\OpenClosed\ThirdExample\Refactoring;

/*
 * Now, this class is closed to modification.
 * Open Closed Principle is applying.
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
}
