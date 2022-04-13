<?php
//ler peso e altura

$peso=$_GET["txtPeso"];
$altura=$_GET["txtAltura"];
$imc=0;
//calculo
$imc=$peso/($altura*$altura);
//condicional
if($imc<17){
    echo "Situação: Muito abaixo do peso\nIMC: ". $imc;
}
else if($imc>=17 && $imc<=18.49){
    echo "Situação: Abaixo do peso\nIMC: ". $imc;
}
else if($imc>=18.5 && $imc<=24.99){
    echo "Situação: Peso normal\nIMC: ". $imc;
}
else if($imc>=25 && $imc<=29.99){
    echo "Situação: Acima do peso\nIMC: ". $imc;
}
else if($imc>=30 && $imc<=34.99){ 
    echo "Situação: Obesidade I\nIMC: ". $imc;
}
else if($imc>=35 && $imc<=39.99){
    echo "Situação: Obesidade II (severa)\nIMC: ". $imc;
}
else{
    echo "Situação: Obesidade III (mórbida)\nIMC: ". $imc;
}
?>
