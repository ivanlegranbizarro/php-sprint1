<?php

declare(strict_types=1);

class Shape
{
  public function __construct(protected int|float $ample, protected int|float $alt)
  {
  }

  public function calculArea(): int|float
  {
    return 0;
  }
}
