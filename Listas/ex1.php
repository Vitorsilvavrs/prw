<?php
$n1=0;
$n2=0;
for($n1=0; $n1<=100; $n1++){
if($n1%2==0){
$n2=$n2+ $n1;
}
}
echo "Valor da soma de numeros pares menores que 100: ".$n2;
?>