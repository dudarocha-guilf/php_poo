<?php

class Pessoa
{
    public $nome;
    public $peso;
    public $altura;
    public $imc;

    function __construct($nome, $peso, $altura)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $this -> calcularImc();
    }

    function calcularImc()
    {
        return number_format($this->peso/($this->altura * $this->altura), 2, ',', '.');
    }
}

$duda = new Pessoa('Maria Eduarda', 60, 1.65);

echo "Querido(a) $duda->nome o seu IMC é de $duda->imc. <br>";
