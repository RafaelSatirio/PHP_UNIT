<?php 
namespace app;

class PessoaImpostoRenda{
    private string $nome;
    private float $rendaAnual;

    public function __construct(string $nome, float $rendaAnual){
        $this->nome = $nome;
        $this->rendaAnual = $rendaAnual;
    } 
    
    public function calcularImpostoRenda(){
        $imposto = 0;

        if($this->rendaAnual > 15000){
            $imposto = $this->rendaAnual * 0.10;
        }

        return $imposto;    
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setRendaAnual($rendaAnual){
        $this->rendaAnual = $rendaAnual;
    }

    public function getRendaAnual(){
        return $this->rendaAnual;   
    }
    
}



?>