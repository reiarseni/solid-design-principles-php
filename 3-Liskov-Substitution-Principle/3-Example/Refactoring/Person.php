<?php

namespace Arcsym\SolidPhp\LiskovSubstitution\Refactoring;

class Person
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
   * @return string
   */
  public function getFullname(): string
  {
    return $this->firstname . ' ' . $this->lastname;
  }
}
