<?php


namespace Ru\TechnicalExcellence\CodingDojo;


class RomanNumberConverter
{
    private array $numbers = [1 => 'I', 5 => 'V', 10 => 'X', 50 => 'L', 100 => 'C', 500 => 'D', 1000 => 'M'];
    /**
     * HelloWorld constructor.
     */
    public function __construct()
    {
    }

    public function convert(int $value): string
    {
        return $this->numbers[$value];
    }
}