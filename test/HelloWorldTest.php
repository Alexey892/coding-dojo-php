<?php

namespace Ru\TechnicalExcellence\CodingDojo;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{

    /**
     * @var HelloWorld
     */
    private $helloWorld;

    protected function setUp(): void
    {
        parent::setUp();
        $this->helloWorld = new HelloWorld();
    }


    public function testHelloWorld()
    {

        $this->assertEquals("Hello World!", $this->helloWorld->helloWorld());
    }


}
