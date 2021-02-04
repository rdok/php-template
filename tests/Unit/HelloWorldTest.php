<?php

namespace Tests\Unit;

use Acme\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /** @test */
    public function returns_hello_world_message()
    {
        $helloWorld = new HelloWorld();

        $this->assertEquals('Hello World', $helloWorld->message());
    }
}
