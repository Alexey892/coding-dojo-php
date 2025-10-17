<?php

use PHPUnit\Framework\TestCase;
use Ru\TechnicalExcellence\CodingDojo\HelloWorld;
use Ru\TechnicalExcellence\CodingDojo\StringCalculator;

class HelloWorldShould extends TestCase
{

    private HelloWorld $helloWorld;
    private StringCalculator $stringCalculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->helloWorld = new HelloWorld();
        $this->stringCalculator = new StringCalculator();
    }


    /**
     * @test
     */
    public function returnHelloWorld(): void
    {

        $this->assertEquals("Hello World!", $this->helloWorld->helloWorld());
    }

    public function testSimpleNumber(): void
    {
        $this->assertEquals(0,$this->stringCalculator->add(''));
        $this->assertEquals(1,$this->stringCalculator->add('1'));
        $this->assertEquals(3,$this->stringCalculator->add('1,2'));
    }


}
