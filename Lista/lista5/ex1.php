<?php
    $produtos = array('mouse', 'teclado', 'mousepad', 'monitor', 'webcam', 'headset', 'fone', 'caixinha de som', 'microfone');
    $pesquisa = $_GET['txtPesquisa'];
    $pesquisa = strtolower($pesquisa);

    $indice = array_search($pesquisa, $produtos);
    $indice++;
    if($indice) {
        echo "Produto encontrado!<br>C�digo do produto: ".($indice-1);
    } else {
        echo "Produto n�o encontrado!";
    }
?>