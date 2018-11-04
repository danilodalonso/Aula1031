<?php

class Conta{

    private $numero;
    private $cliente;
    private $endereco;

    public function setNumero($valor){
        $this->numero = $valor;
    
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setCliente($valor){
        $this->cliente = $valor;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function setEndereco($valor){
        $this->endereco = $valor;
    }

    public function getEndereco(){
        return $this->endereco;
    }
}



$cliente1 = new Conta();
$cliente1->setCliente("Danilo");
$cliente1->setNumero("999999");
$cliente1->setEndereco("Sao Paulo");

echo $cliente1->getCliente()."<br/>";
echo $cliente1->getNumero()."<br/>";
echo $cliente1->getEndereco();