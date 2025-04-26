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
    public function returnRomanNumberForInt(): void
    {
        $this->assertEquals('I', $this->romanNumberConverter->convert(1));
    }
}