<?php

namespace Violation;

/*
 * Dependency Inversion Principle - some definitions:
 *
 * "One should depend upon abstractions, not concretions."
 *
 * "Depend on abstractions, not on concretions."
 *
 * "Entities must depend on abstractions not on concretions. It states that the high
 * level module must not depend on the low level module, but they should depend on abstractions."
 *
 *
 * According definition, this class is violating Dependency Inversion Principle (DIP) because
 * it depends by concretion and not abstraction.
 */
class StudentRepository
{
  /**
   * @var MysqlConnection
   */
  private MysqlConnection $connection;


  /*
   * DIP is violated because this class depends by concretion (class) and not by abstraction (abstract class, interface).
   * What if we want another database type, another than MySQL (e.g. PostgreSQL)?
   * We need to rewrite this class and violate the OCP.
   * So... it's time for DIP.
   */
  public function __construct(MysqlConnection $connection)
  {
    $this->connection = $connection;
  }
}
