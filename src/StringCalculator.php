<?php

namespace Ru\TechnicalExcellence\CodingDojo;

class StringCalculator
{
    public function add(string $num): int
    {
        preg_match_all('/[0-2]/', $num, $matches);

        return array_sum($matches[0]);
    }
}