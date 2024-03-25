<?php

namespace Refactoring;

/*
 * We use dynamic polymorphism (method overriding) with interface.
 */
interface OutputInterface
{
  /**
   * This method will be implemented by each output type.
   */
  public function output();
}
