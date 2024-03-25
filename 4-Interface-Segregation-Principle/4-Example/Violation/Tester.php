<?php

namespace Violation;

class Tester implements WorkerInterface
{
  /**
   * @return string
   */
  public function testing(): string
  {
    return 'testing';
  }

  /**
   * @return string
   */
  public function developing(): string
  {
    return 'developing';
  }
}
