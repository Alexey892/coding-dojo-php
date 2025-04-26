<?php


namespace Ru\TechnicalExcellence\CodingDojo;


class StringCalculator
{
    /**
     * HelloWorld constructor.
     */
    public function __construct()
    {
    }

    public function add(?string $value): int
    {
        $sum = 0;
        $values = explode(',', $value);
        foreach ($values as $value) {
            $sum += (int)$value;
        }

        return $sum;
    }
}