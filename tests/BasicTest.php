<?php

use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    public function testMain()
	{
        $this->assertEqual(getenv('testVariable'),101);
        $this->assertEqual(getenv('testVariable'),102);
    }
}

?>