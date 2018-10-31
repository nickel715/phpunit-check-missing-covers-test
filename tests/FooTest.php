<?php

class FooTest extends \PHPUnit\Framework\TestCase
{
    public function testHelloWorld()
    {
        $foo = new Foo();
        $this->assertSame('Hello World', $foo->hello());
    }
}
