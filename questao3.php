<?php
function piramideNumeros($n) {
for ($i = 1; $i <= $n; $i++) {


for ($j = $n - $i; $j > 0; $j--) {
echo "  ";
}


for ($j = 1; $j <= (2 * $i - 1); $j++) {
echo $i . " ";
}

echo "
";
}
}

piramideNumeros(5);
?>