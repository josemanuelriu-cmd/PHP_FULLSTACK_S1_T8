<?php
require 'NumberChecker.php';
class NumberCheckerTest extends .\.\PHPUnit\Framework\TestCase {
//class NumberCheckerTest extends \PHPUnit_Framework_TestCase {
    /*private $numberChecker;
 
    protected function setUp()
    {
        $this->numberChecker = new NumberChecker();
    }
 
    protected function tearDown()
    {
        $this->numberChecker = NULL;
    }*/

    public function testIsEven() {
        $numberChecker = new NumberChecker(4);
        $this->assertTrue($numberChecker->isEven());

        $numberChecker = new NumberChecker(5);
        $this->assertFalse($numberChecker->isEven());
    }

    public function testIsPositive() {
        $numberChecker = new NumberChecker(3);
        $this->assertTrue($numberChecker->isPositive());

        $numberChecker = new NumberChecker(-2);
        $this->assertFalse($numberChecker->isPositive());
    }
}

?>
