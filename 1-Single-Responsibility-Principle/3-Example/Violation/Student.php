<?php

namespace Violation;

/*
 * Single Responsibility Principle
 *
 * "A class should have one, and only one, reason to change."
 *
 * According definition, this class is violating Single Responsibility Principle (SRP)
 * because it has more than one responsibility / job / task.
 */
class Student
{
  /**
   * @var int
   */
  private int $id;

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
   * @return int
   */
  public function getId() {
    return $this->id;
  }

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
   * This task is not specific for this class.
   *
   * @return false|string
   */
  public function jsonFormat()
  {
    return json_encode([
      'lastname' => $this->lastname,
      'firstname' => $this->firstname,
      'gender' => $this->gender
    ]);
  }

  /**
   * This task is not specific for this class.
   *
   * @return array
   */
  public function arrayFormat()
  {
    return [
      'lastname' => $this->lastname,
      'firstname' => $this->firstname,
      'gender' => $this->gender
    ];
  }

  /**
   * This task is not specific for this class.
   *
   * @throws \Exception
   */
  public function save()
  {
    $conn = (new DatabaseConnection())->getConnection();

    $sql = "
      INSERT INTO student (
        lastname,
        firstname,
        gender
      )
      VALUES (
        :lastname,
        :firstname,
        :gender
      );
    ";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':lastname', $this->lastname);
    $stmt->bindParam(':firstname', $this->firstname);
    $stmt->bindParam(':gender', $this->gender);
    $stmt->execute();
  }

  /**
   * This task is not specific for this class.
   *
   * @throws \Exception
   */
  public function delete() {
    $conn = (new DatabaseConnection())->getConnection();

    $sql = "
      DELETE
      FROM
        student
      WHERE
        id= :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $this->id);
    $stmt->execute();
  }
}
