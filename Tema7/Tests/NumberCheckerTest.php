<?php

require_once 'NumberChecker.php';

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase
{
    public function testIsEven()
    {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isEven());

        $checker = new NumberChecker(5);
        $this->assertFalse($checker->isEven());
    }

    public function testIsPositive()
    {
        $checker = new NumberChecker(4);
        $this->assertTrue($checker->isPositive());

        $checker = new NumberChecker(-5);
        $this->assertFalse($checker->isPositive());
    }
}
?>
