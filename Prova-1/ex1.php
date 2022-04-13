<?php

$sal=301;
$salnovo=0;
if($sal<=300){
    $salnovo=$sal+($sal*0.5);
    echo "Novo salário(reajuste de 50%): R$". $salnovo;
}
else{
    $salnovo=$sal+($sal*0.3);
    echo "Novo salário(reajuste de 30%): R$". $salnovo;
}
?>