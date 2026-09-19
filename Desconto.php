<?php

$quantidade = 8;

if ($quantidade >= 10) {
    echo "Desconto: 20%";
} elseif ($quantidade >= 5) {
    echo "Desconto: 10%";
} else {
    echo "Sem desconto";
}

?>
