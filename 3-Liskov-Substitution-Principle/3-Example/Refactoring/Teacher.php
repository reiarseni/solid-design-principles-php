<?php

namespace Arcsym\SolidPhp\LiskovSubstitution\Refactoring;

/*
 * We are able to use Teacher class wherever we are using Person.
 * Liskov Substitution Principle is applying.
 */
class Teacher extends Person
{
  public function teaching(): string
  {
    return 'teaching';
  }
}
