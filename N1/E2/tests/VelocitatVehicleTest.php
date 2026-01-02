<?php

require_once __DIR__ . '/../src/VelocitatVehicle.php';
use PHPUnit\Framework\TestCase;

class VelocitatVehicleTest extends TestCase {

    public $Speed;

    public function setUp(): void
    {
        $this->Speed = new VelocitatVehicle(20);
    }
    /**
     * @covers VelocitatVehicle::CurrentSpeed
     */
    public function CurrentSpeed() {
        $this->assertEquals("Molt lent", $this->Speed->CurrentSpeed(20));
        $this->assertEquals("Velocitat adequada", $this->Speed->CurrentSpeed(50));
        $this->assertEquals("Excés lleu", $this->Speed->CurrentSpeed(70));
        $this->assertEquals("Excés moderat", $this->Speed->CurrentSpeed(90));
        $this->assertEquals("Excés greu", $this->Speed->CurrentSpeed(120));    
    }    
}
?>