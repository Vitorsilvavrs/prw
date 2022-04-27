<?php
$n1=6;
$n2=10;
$n3=3;
if($n1>$n2 && $n1>$n3){
    if($n2>$n3){
        echo "ordem decrescente: ".$n1.", ".$n2.", ".$n3;
    }
    else
        echo "ordem decrescente: ".$n1.", ".$n3.", ".$n2;

}
    else if ($n2>$n1 && $n2>$n3){
         if($n1>$n3){
        echo "ordem decrescente: ".$n2.", ".$n1.", ".$n3;
         }
         else
         echo "ordem decrescente: ".$n2.", ".$n3.", ".$n1;
    }
    else if ($n3>$n1 && $n3>$n2){
        if($n2>$n1){
       echo "ordem decrescente: ".$n3.", ".$n2.", ".$n1;
        }
        else
        echo "ordem decrescente: ".$n3.", ".$n1.", ".$n2;
}

?>