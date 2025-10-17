<?php

namespace Ru\TechnicalExcellence\CodingDojo;

use Exception;

class StringCalculator
{
    public function add(string $num): int
    {
        preg_match_all('/-\d/', $num, $matchesNegative);
        preg_match_all('/[0-2]/', $num, $matches);
        print_r($matchesNegative[0]);
        if($matchesNegative[0] !== []){
            throw new Exception('Negative numbers not allowed: ' . implode(', ', $matchesNegative[0]));
        }
        return array_sum($matches[0]);
    }
}