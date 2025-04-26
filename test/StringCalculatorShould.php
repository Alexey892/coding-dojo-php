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
}
