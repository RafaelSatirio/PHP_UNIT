<?php
namespace tests;


use PHPUnit\Framework\TestCase;
use app\PessoaImpostoRenda;

class PessoaImpostoRendaTest extends TestCase {

    public function testCalcularImpostoRenda() {
        $pessoa = new PessoaImpostoRenda("Gabriel", 30000);

        $this->assertEquals("3000" , $pessoa->calcularImpostoRenda());  
    }

    public function testNome() {
        $pessoa = new PessoaImpostoRenda("Gabriel", 30000);

        $this->assertEquals("Gabriel" , $pessoa->getNome());  
    }

    public function testRendaAnual() {
        $pessoa = new PessoaImpostoRenda("Gabriel", 30000);

        $this->assertEquals("3000" , $pessoa->calcularImpostoRenda());  
    }
  
    public function testVerificarTrue(){
        $this->assertTrue(true);
    }

    
    public function testVerificarFalse(){
        $this->assertFalse(false);
    }

    public function testSetNome(){
        $pessoa = new PessoaImpostoRenda("Gabriel", 30000);
        $pessoa->setName("Rafael");
        $this->assertEquals("Rafael", $pessoa->getNome());
    }

}

?>