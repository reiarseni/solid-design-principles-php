<?php

namespace Refactoring;

/*
 * save() and delete() tasks from class Student, are now in this class.
 * This class has one responsibility: some SQL statements for Student.
 */
class StudentRepository
{
  /**
   * Saves Student in database.
   *
   * @param Student $student
   * @throws \Exception
   */
  public function save(Student $student)
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
    $stmt->bindParam(':lastname', $student->getLastname());
    $stmt->bindParam(':firstname', $student->getFirstname());
    $stmt->bindParam(':gender', $student->getGender());
    $stmt->execute();
  }

  /**
   * Deletes Student from database.
   *
   * @param Student $student
   * @throws \Exception
   */
  public function delete(Student $student) {
    $conn = (new DatabaseConnection())->getConnection();

    $sql = "
      DELETE
      FROM
        student
      WHERE
        id= :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $student->getId());
    $stmt->execute();
  }
}
