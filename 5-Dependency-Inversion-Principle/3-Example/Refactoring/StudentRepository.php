<?php

namespace Refactoring;

/*
 * Now, this class depends by abstraction.
 * Dependency Inversion Principle is applying.
 */
class StudentRepository
{
  /**
   * @var ConnectionInterface
   */
  private ConnectionInterface $connection;


  /*
   * DIP is violated because this class depends by concretion (class) and not by abstraction (abstract class, interface).
   * What if we want another database type, another than MySQL (e.g. PostgreSQL)?
   */
  public function __construct(ConnectionInterface $connection)
  {
    $this->connection = $connection;
  }
}
