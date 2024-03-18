<?php

declare(strict_types=1);

namespace Src;

class FizzBuzz
{
  public function generateOutPut(int $number): string
  {
    return match (true) {
      $number % 3 === 0 and $number % 5 === 0 => 'FizzBuzz',
      $number % 3 === 0 => 'Fizz',
      $number % 5 === 0 => 'Buzz',
      default => (string) $number
    };
  }
}
