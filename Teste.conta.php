<?php

require_once "/Classe_Conta_Bancaria.php";

// Cria o objeto com o titular
$conta = new ContaBancaria("Jonatas");

echo "Titular: " . $conta->getTitular() . "<br>";

// Deposita dinheiro
$conta->depositar(1000);
echo "Saldo após depósito: R$ " . number_format($conta->consultarSaldo(), 2, ',', '.') . "<br>";

// Saca dinheiro
$conta->sacar(300);
echo "Saldo após saque: R$ " . number_format($conta->consultarSaldo(), 2, ',', '.') . "<br>";
