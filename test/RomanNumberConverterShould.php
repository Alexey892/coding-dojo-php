<?php

use Ru\TechnicalExcellence\CodingDojo\RomanNumberConverter;
use PHPUnit\Framework\TestCase;

class RomanNumberConverterShould extends TestCase
{
    private RomanNumberConverter $romanNumberConverter;

    protected function setUp(): void
    {
        parent::setUp();
        $this->romanNumberConverter = new RomanNumberConverter();
    }

    /**
     * @test
     */
    public function returnSingleRomanNumber(): void
    {
        $numbers = [1 => 'I', 5 => 'V', 10 => 'X', 50 => 'L', 100 => 'C', 500 => 'D', 1000 => 'M'];
        foreach ($numbers as $arabic => $romanNumber) {
            $this->assertEquals($romanNumber, $this->romanNumberConverter->convert($arabic));
        }
    }

    /**
     * @test
     */
    public function returnTwoRomanNumbers(): void
    {
        $numbers = [4 => 'IV', 9 => 'IX', 90 => 'XC'];
        foreach ($numbers as $arabic => $romanNumber) {
            $this->assertEquals($romanNumber, $this->romanNumberConverter->convert($arabic));
        }
    }
}