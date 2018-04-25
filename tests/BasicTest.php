<?php

use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    public function testMain()
	{
        $this->assertEquals(getenv('testVariable'),101);
        $this->assertEquals(getenv('testVariable'),102);
    }
}

?>