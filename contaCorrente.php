<?php
class ContaCorrente
{
    public $numero;
    public $nomeDoDono;
    public $saldo = 0;

    public function __construct($numero, $nomeDoDono)
    {
        $this->numero = $numero;
        $this->nomeDoDono = $nomeDoDono;
    }

    public function depositar($valorDeposito)
    {
        $this->saldo += $valorDeposito;
    }

    public function sacar($valorSaque)
    {
        if ($valorSaque <= 0) {
            return "Voce so pode sacar valores positivos";
        }
        
        if ($this->saldo < $valorSaque || $this->saldo <= 0) {
            return "Voce não possui saldo suficiente";
        }

        $this->saldo -= $valorSaque;
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public function consultarNomeDoDono()
    {
        return $this->nomeDoDono;
    }

    public function consultarNumero()
    {
        return $this->numero;
    }
}

$conta = new ContaCorrente(12345367, "Henrique");

$conta->depositar(2000);
$conta->depositar(5000);
$conta->sacar(5000);

$conta1 = new ContaCorrente(45654654, "Rafael");

$conta1->depositar(50);
$conta1->depositar(150);
$conta1->sacar(50);
