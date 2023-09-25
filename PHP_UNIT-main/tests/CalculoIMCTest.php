<?php
namespace tests;


use PHPUnit\Framework\TestCase;
use app\CalculoIMC;

class CalculoIMCTest extends TestCase {

    public function testCalcularIMC() {
        $pessoa = new calculoIMC(100, 1.70);

        $this->assertEquals(58.82352941176471, $pessoa->calcularImc());  
    }

    public function testPeso() {
        $pessoa = new calculoIMC(100, 1.70);

        $this->assertEquals(100, $pessoa->getPeso());  
    }

    public function testAltura() {
        $pessoa = new calculoIMC(100, 1.70);

        $this->assertEquals(1.70, $pessoa->getAltura());
    }
  
    public function testVerificarTrue(){
        $this->assertTrue(true);
    }

    
    public function testVerificarFalse(){
        $this->assertFalse(false);
    }

    public function testSetPeso(){
        $pessoa = new calculoIMC(100, 1.70);
        $pessoa->setPeso(90);
        $this->assertEquals(90, $pessoa->getPeso());
    }

    public function testSetAltura(){
        $pessoa = new calculoIMC(100, 1.70);
        $pessoa->setAltura(1.75);
        $this->assertEquals(1.75, $pessoa->getAltura());
    }

}

?>