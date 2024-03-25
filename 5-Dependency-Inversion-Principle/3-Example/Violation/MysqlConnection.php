<?php

namespace Violation;

use PDO;

class MysqlConnection
{
  /*
   * Necessary data for connection.
   */
  private const DATABASE_HOST = 'localhost';
  private const DATABASE_NAME = 'solid_php';
  private const DATABASE_USER = 'username';
  private const DATABASE_PASSWORD = 'password';

  /**
   * @var PDO
   */
  private PDO $connection;


  /**
   * @throws \Exception
   */
  public function open(): void
  {
    try {
      $this->connection = new PDO(
        'mysql:host=' . self::DATABASE_HOST . ';dbname=' . self::DATABASE_NAME,
        self::DATABASE_USER,
        self::DATABASE_PASSWORD
      );
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(\PDOException $e) {
      throw new \Exception($e->getMessage());
    }
  }
}
