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

    public function sum(?string $value): int
    {
        $sum = 0;
        preg_match('/\/\/(.)/', $value, $matches);
        $value = str_replace('\n', ',', $value);
        $values = explode(',', $value);
        foreach ($values as $value) {
            $sum += (int)$value;
        }

        return $sum;
    }
}