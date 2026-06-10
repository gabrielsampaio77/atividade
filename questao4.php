<?php
$quantidade = 15;
$a = 0;
$b =1;
echo "Sequencia de Fibonacci: <br> <br>";
for($i = 0; $i <= $quantidade; $i++){
    echo $a." ";
    $proximo = $a + $b;
    $a = $b;
    $b = $proximo;
}