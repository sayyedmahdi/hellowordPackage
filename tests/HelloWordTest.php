<?php
require 'index.php';


use PHPUnit\Framework\TestCase;

final class HelloWordTest extends TestCase
{
    public function testSayHello(){
        $helloWord = new Vendor\HelloWorld\HelloWord();
        $this->assertEquals('Hello World!', $helloWord->sayHello());
    }
}