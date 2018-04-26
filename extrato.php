<?php
include 'contaCorrente.php';

class Extrato
{
    public $conta;

    public function __construct($conta)
    {
        $this->conta = $conta;
    }

    public function geraExtrato()
    {
        $saldo = $this->conta->consultarSaldo();
        $nomeDoDono = $this->conta->consultarNomeDoDono();
        $numero = $this->conta->consultarNumero();
        $resultado = sprintf('Saldo = %u, Numero = %u, Nome = %s', $saldo, $numero, $nomeDoDono);
        return $resultado;
    }
}

$extrato1 = new Extrato($conta);
$extrato2 = new Extrato($conta1);

var_dump(
    $extrato1->geraExtrato(),
    $extrato2->geraExtrato()
);
