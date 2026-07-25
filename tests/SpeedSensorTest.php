<?php
require_once __DIR__ . '/../src/SpeedSensor.php';
use PHPUnit\Framework\TestCase;

class SpeedSensorTest extends TestCase{
    public function testSpeedIsVerySlow(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is very slow", $sensor->getSpeedLevel(15));
    }

    public function testSpeedLimit29IsVerySlow(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is very slow", $sensor->getSpeedLevel(29));
    }

    public function testSpeedLimit30IsGood(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is good", $sensor->getSpeedLevel(30));
    }


    public function testSpeedIsGood(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is good", $sensor->getSpeedLevel(50));
    }
    
    
    public function testSpeedLimit60IsGood(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is good", $sensor->getSpeedLevel(60));
    }

    public function testSpeedLimit61IsLittleFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is a little fast", $sensor->getSpeedLevel(61));
    }


    public function testSpeedIsLittleFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is a little fast", $sensor->getSpeedLevel(70));
    }

    public function testSpeedLimit80IsLittleFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is a little fast", $sensor->getSpeedLevel(80));
    }

    public function testSpeedLimit81IsVeryFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is very fast", $sensor->getSpeedLevel(81));
    }

    
    public function testSpeedIsVeryFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is very fast", $sensor->getSpeedLevel(90));
    }

    public function testSpeedLimit100IsVeryFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is very fast", $sensor->getSpeedLevel(100));
    }

    public function testSpeedLimit101IsExtremelyFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is extremely fast", $sensor->getSpeedLevel(101));
    }

    public function testSpeedIsExtremelyFast(){
        $sensor = new SpeedSensor();
        $this->assertEquals("The speed is extremely fast", $sensor->getSpeedLevel(150));
    }


    public function testSpeedIsZero(){
        $sensor = new SpeedSensor();
        $this->assertEquals("Invalid speed", $sensor->getSpeedLevel(0));
    }

    public function testSpeedIsNegative(){
        $sensor = new SpeedSensor();
        $this->assertEquals("Invalid speed", $sensor->getSpeedLevel(-30));
    }

}