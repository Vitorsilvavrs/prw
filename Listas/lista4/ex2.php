<?php
    if(empty($_POST['chkBox'])){
        $_POST['chkBox'] = "Voc� n�o gosta do n�mero um!";
    }
    if(empty($_POST['chkBox2'])){
        $_POST['chkBox2'] = "Voc� n�o gosta do n�mero dois!";
    }
    if(empty($_POST['optBox'])){
        $_POST['optBox'] = "Nenhuma op��o selecionada!";;
    }

    $text = $_POST['linha'];
    $textArea = $_POST['rolagem'];
    $optChk = $_POST['chkBOX1'];
    $optChk2 = $_POST['chkBOX2'];
    $optOpt = $_POST['optBox'];
    $selLegal = $_POST['selLegal'];

    if(empty($text)){
        $text = "Nada foi colocado aqui!";
    }
    if(empty($textArea)){
        $textArea = "Nada foi colocado aqui!";
    }
    if($selLegal == "Selecionar..."){
        $selLegal = "Voc� n�o selecionou nenhuma op��o";
    }

    echo "Texto de uma linha que voc� colocou: ". $text. "<br>";
    echo "Texto que voc� colocou na caixa de texto: ". $textArea. "<br>";
    echo "N�mero: ". $optChk. "<br>";
    echo "N�mero: ". $optChk2. "<br>";  
    echo "Op��o que voc� selecionou (homem, mulher ou sigma): ". $optOpt. "<br>"; 
    echo "�ltima paradinha de selecionar: ". $selLegal. "<br>"; 
?>