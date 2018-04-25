<?php

use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    public function testMain()
	{
        $this->assertEquals(getenv('testVariable'),101);
        $this->assertNotEquals(getenv('testVariable'),102);
    }
}

?>