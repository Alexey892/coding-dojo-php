<?php

use PHPUnit\Framework\TestCase;
use Ru\TechnicalExcellence\CodingDojo\StringCalculator;

class StringCalculatorShould extends TestCase
{
    private StringCalculator $stringCalculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->stringCalculator = new StringCalculator();
    }

    /**
     * @test
     */
    public function returnEmptyStringWhenNull(): void
    {
        $this->assertEquals('', $this->stringCalculator->add(null));
    }

    /**
     * @test
     */
    public function returnNumberWhenString(): void
    {
        $this->assertEquals(1, $this->stringCalculator->add('1'));
    }
}
