<?php

require_once __DIR__ . '/../src/NumberChecker.php';
use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{
    public function testEvenNumber(){
        $checker = new NumberChecker (6);
        $result = $checker->isEven();
        $this->assertTrue($result);
        }
    
    public function testOddNumber(){
        $checker = new NumberChecker (3);
        $result = $checker->isEven();
        $this->assertFalse($result);
        }

    public function testPositiveNumber(){
        $checker = new NumberChecker (8);
        $result = $checker->isPositive();
        $this->assertTrue($result);
        }

    public function testNegativeNumber(){
        $checker = new NumberChecker (-2);
        $result = $checker->isPositive();
        $this->assertFalse($result);
        }
    
    public function testZeroNotPositive(){
        $checker = new NumberChecker (0);
        $result = $checker->isPositive();
        $this->assertFalse($result);
        }


}