<?php


use EmersonLeite\classes\CalculadoraSalario;
use EmersonLeite\classes\Funcionario;

it('desenvolvedor com salário maior que 3000 deve ter desconto de 20%', function () {
    $funcionario = new Funcionario("João", 3500, "DESENVOLVEDOR");
    $this->assertEquals(2800, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});

it('desenvolvedor com salário menor que 3000 deve ter desconto de 10%', function () {
    $funcionario = new Funcionario("Maria da Silva", 2500, "DESENVOLVEDOR");
    $this->assertEquals(2250, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});

it('DBA com salário maior que 2000 deve ter desconto de 25%', function () {
    $funcionario = new Funcionario("Maria da Silva", 2500, "DBA");
    $this->assertEquals(1875, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});

it('DBA com salário menor que 2000 deve ter desconto de 15%', function () {
    $funcionario = new Funcionario("Maria da Silva", 1500, "DBA");
    $this->assertEquals(1275, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});

it('testador com salário maior que 2000 deve ter desconto de 25%', function () {
    $funcionario = new Funcionario("Maria da Silva", 2500, "TESTADOR");
    $this->assertEquals(1875, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});

it('testador com salário menor que 2000 deve ter desconto de 15%', function () {
    $funcionario = new Funcionario("Maria da Silva", 1500, "TESTADOR");
    $this->assertEquals(1275, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});


it('gerente com salário maior que 5000 deve ter desconto de 30%', function () {
    $funcionario = new Funcionario("Maria da Silva", 6000, "GERENTE");
    $this->assertEquals(4200, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});

it('gerente com salário menor que 5000 deve ter desconto de 20%', function () {
    $funcionario = new Funcionario("Maria da Silva", 4500, "GERENTE");
    $this->assertEquals(3600, CalculadoraSalario::calcularSalarioLiquido($funcionario));
});




