<?php

namespace Base\classes;

class Funcionario
{
    private $nome;
    private $salarioBase;
    private $cargo;

    public function __construct($nome, $salarioBase, $cargo)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}