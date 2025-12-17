<?php

require_once __DIR__ . '/../src/NumberChecker.php';
use PHPUnit\Framework\TestCase;
//use vendor\phpunit\phpunit\src\Framework\TestCase;

class NumberCheckerTest extends TestCase {

    /**
     * @covers NumberChecker::isEven
     */
    public function testIsEven() {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven());

        $numberChecker = new NumberChecker(5);
        $this->assertFalse($numberChecker->isEven());
    }
    /**
     * @covers NumberChecker::isPositive
     */
    public function testIsPositive() {
        $numberChecker = new NumberChecker(3);
        $this->assertTrue($numberChecker->isPositive());

        $numberChecker = new NumberChecker(-2);
        $this->assertFalse($numberChecker->isPositive());

        $numberChecker = new NumberChecker(0);
        $this->assertFalse($numberChecker->isPositive());
    }
}

?>
