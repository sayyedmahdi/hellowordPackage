<?php

require 'vendor/autoload.php';
require 'src/HelloWord.php';

use PHPUnit\Framework\TestCase;

final class HelloWordTest extends TestCase
{
    public function testSayHello(){
        $helloWord = new \Jaanagha\HelloWord();
        $this->assertEquals('Hello World!', $helloWord->sayHello());
    }
}