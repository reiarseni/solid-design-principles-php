<?php

namespace Arcsym\SolidPhp\OpenClosed\SecondExample\Refactoring;

class Tester implements WorkerInterface
{
  /**
   * @return string
   */
  public function working(): string
  {
    return 'testing';
  }
}
