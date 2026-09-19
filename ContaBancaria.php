<?php

class ContaBancaria
{
    private $titular;
    private $saldo = 0;

    // Construtor: executa quando criamos o objeto
    public function __construct($nome)
    {
        $this->titular = $nome;
    }

    public function setTitular($nome)
    {
        $this->titular = $nome;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado.<br>";
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }

    public function sacar($valor)
    {
        if ($valor <= 0) {
            echo "Valor inválido para saque.<br>";
            return;
        }

        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado.<br>";
        } else {
            echo "Saldo insuficiente.<br>";
        }
    }
}

?>

