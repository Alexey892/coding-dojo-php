<?php

use PHPUnit\Framework\TestCase;
use Ru\TechnicalExcellence\CodingDojo\HelloWorld;

class HelloWorldShould extends TestCase
{

    private HelloWorld $helloWorld;

    protected function setUp(): void
    {
        parent::setUp();
        $this->helloWorld = new HelloWorld();
    }


    /**
     * @test
     */
    public function returnHelloWorld(): void
    {

        $this->assertEquals("Hello World!", $this->helloWorld->helloWorld());
    }


}
