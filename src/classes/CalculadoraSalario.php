<?php

namespace EmersonLeite\classes;

class CalculadoraSalario
{
    public static function calcularSalarioLiquido(Funcionario $funcionario): float
    {
        switch ($funcionario->getCargo()) {
            case 'DESENVOLVEDOR':
                return self::calcularDesenvolvedor($funcionario);
            case 'DBA':
                return self::calcularDBA($funcionario);
            case 'TESTADOR':
                return self::calcularTestador($funcionario);
            case 'GERENTE':
                return self::calcularGerente($funcionario);
            default:
                return $funcionario->getSalarioBase();
        }
    }

    private static function calcularDesenvolvedor(Funcionario $funcionario): float
    {
        if ($funcionario->getSalarioBase() >= 3000) {
            return $funcionario->getSalarioBase() * 0.8;
        }
        return $funcionario->getSalarioBase() * 0.9;
    }

    private static function calcularDBA(Funcionario $funcionario): float
    {
        if ($funcionario->getSalarioBase() >= 2000) {
            return $funcionario->getSalarioBase() * 0.75;
        }
        return $funcionario->getSalarioBase() * 0.85;

    }

    private static function calcularTestador(Funcionario $funcionario): float
    {
        if ($funcionario->getSalarioBase() >= 2000) {
            return $funcionario->getSalarioBase() * 0.75;
        }
        return $funcionario->getSalarioBase() * 0.85;

    }

    private static function calcularGerente(Funcionario $funcionario): float
    {
        if ($funcionario->getSalarioBase() >= 5000) {
            return $funcionario->getSalarioBase() * 0.7;
        }
        return $funcionario->getSalarioBase() * 0.8;

    }
}
