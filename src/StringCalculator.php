<?php

namespace Ru\TechnicalExcellence\CodingDojo;

use Exception;

class StringCalculator
{
    /**
     * @throws Exception
     */
    public function add(string $num): int
    {
        preg_match_all('/-?[0-2]+/', $num, $matches);

        $matchesNegative = [];
        $sum = 0;
        foreach ($matches[0] as $number) {
            if($number < 0){
                $matchesNegative[] = $number;
            }
            if($number < 1000){
                $sum += (int)$number;
            }
        }

        if($matchesNegative !== []){
            throw new Exception('Negative numbers not allowed: ' . implode(', ', $matchesNegative));
        }

        return $sum;
    }
}