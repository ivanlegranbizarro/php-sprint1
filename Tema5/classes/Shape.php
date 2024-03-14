<?php
abstract class Shape
{
  public function __construct(protected int|float $ample, protected int|float $alt)
  {
  }

  abstract public function calculArea(): int|float;
}
