<?php

namespace Arcsym\SolidPhp\OpenClosed\SecondExample\Refactoring;

class Developer implements WorkerInterface
{
  /**
   * @return string
   */
  public function working(): string
  {
    return 'developing';
  }
}
