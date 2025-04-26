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
        $this->assertEquals(0, $this->stringCalculator->sum(null));
    }

    /**
     * @test
     */
    public function returnNumberWhenString(): void
    {
        $this->assertEquals(1, $this->stringCalculator->sum('1'));
    }

    /**
     * @test
     */
    public function returnSumFromTwoNumbers(): void
    {
        $this->assertEquals(3, $this->stringCalculator->sum('2,1'));
    }

    /**
     * @test
     */
    public function returnSumFromSeveralNumbers(): void
    {
        $this->assertEquals(10, $this->stringCalculator->sum('5,2,3'));
    }

    /**
     * @test
     */
    public function returnSumFromSeveralNumbersWithSlashSeparator(): void
    {
        $this->assertEquals(6, $this->stringCalculator->sum('1,2\n3'));
    }
}
