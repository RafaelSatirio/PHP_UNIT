<?php 
namespace app;

class calculoIMC{
    private float $peso;
    private float $altura;

    public function __construct(string $peso, float $altura){
        $this->peso = $peso;
        $this->altura = $altura;
    } 
    
    public function calcularImc(){
        $imc = 0;

        $imc = $this->peso / $this->altura;

        return $imc;    
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getPeso(){
        return $this->peso;
    }
    
    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function getAltura(){
        return $this->altura;   
    }
    
}



?>