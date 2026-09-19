Model

<?php

class ContaBancaria
{
    private $titular;
    private $saldo = 0;

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
            $this->saldo = $this->saldo + $valor;
        } else {
            echo "Valor inválido para depósito.<br>";
        }
    }

    public function consultarSaldo()
    {
        return $this->saldo;
    }
}





//*Contas.html//*
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Contas Bancárias</title>
</head>
<body>
    <h1>Contas Bancárias</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Titular</th>
            <th>Saldo</th>
        </tr>

        <tr>
            <td>João</td>
            <td>R$ 1.500,00</td>
        </tr>

        <tr>
            <td>Maria</td>
            <td>R$ 2.500,00</td>
        </tr>

        <tr>
            <td>Carlos</td>
            <td>R$ 800,00</td>
        </tr>
    </table>
</body>
</html>




  
  #Controller#

  <?php

require_once  "/ContaModel.php";

$conta1 = new ContaBancaria();
$conta1->setTitular("João");
$conta1->depositar(1500);

$conta2 = new ContaBancaria();
$conta2->setTitular("Maria");
$conta2->depositar(2500);

$conta3 = new ContaBancaria();
$conta3->setTitular("Carlos");
$conta3->depositar(800);

$contas = [$conta1, $conta2, $conta3];

require_once   "/contas.php";
