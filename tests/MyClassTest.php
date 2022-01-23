<?php

namespace Tests;

use App\MyClass;
use PHPUnit\Framework\TestCase;

/** @covers App\MyClass */
class MyClassTest extends TestCase
{
    function testA()
    {
        $instance = new MyClass();
        self::assertEquals("a", $instance->a());
    }
}
