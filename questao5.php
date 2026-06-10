
<?php
$numeros = array(8, 3, 15, 1, 9, 2, 5, 7, 4, 10);
for($i = 0; $i < 10; $i++){    
    for($j = $i + 1; $j < 10; $j++){
        if($numeros[$i] > $numeros[$j]){
            $temp = $numeros[$i];
            $numeros[$i] = $numeros[$j];
            $numeros[$j] = $temp;
        }
    }
}
echo "vetor em ordem crescente: <br><br>";
foreach($numeros as $valor){
    echo $valor." ";
}