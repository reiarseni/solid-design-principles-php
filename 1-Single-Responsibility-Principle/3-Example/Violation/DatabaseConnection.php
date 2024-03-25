<?php

namespace Violation;

/*
 * Used to establish a connection with database.
 */
class DatabaseConnection
{
  /*
   * Necessary data for PDO connection.
   */
  private const DATABASE_HOST = 'localhost';
  private const DATABASE_NAME = 'solid_php';
  private const DATABASE_USER = 'username';
  private const DATABASE_PASSWORD = 'password';

  /**
   * @var \PDO
   */
  private \PDO $connection;


  /**
   * Establishes a connection with database.
   *
   * @throws \Exception
   */
  public function __construct()
  {
    try {
      $this->connection = new \PDO('mysql:host=' . self::DATABASE_HOST . ';dbname=' . self::DATABASE_NAME,
        self::DATABASE_USER, self::DATABASE_PASSWORD);
      $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch(\PDOException $e) {
      throw new \Exception($e->getMessage());
    }
  }

  /**
   * Gets PDO connection.
   *
   * @return \PDO
   */
  public function getConnection(): \PDO
  {
    return $this->connection;
  }
}
