<?php

namespace Arcsym\SolidPhp\LiskovSubstitution\Refactoring;

/*
 * We are able to use Student class wherever we are using Person.
 * Liskov Substitution Principle is applying.
 */
class Student extends Person
{
  public function learning(): string
  {
    return 'learning';
  }
}
