<?php

namespace Arcsym\SolidPhp\OpenClosed\SecondExample\Refactoring;

/*
 * We use dynamic polymorphism (method overriding) with interface.
 */
interface WorkerInterface
{
  /**
   * This method will be implemented by each employee type.
   */
  public function working();
}
