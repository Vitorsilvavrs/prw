<?php
    include('conexao.php');
    $sql = "SELECT * FROM fluxo_caixa"; //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql); //retorna a primeira linha,
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listar Fluxo de caixa</title>
</head> 

<style>
    td {
        padding: 5px;
    }
    #titulo {
        font-size: 1.5em;
        padding-bottom: 15px;
    }
</style>

<body>
<table align="center" border="1">
        <tr>
            <th colspan="13" id="titulo">Listagem de fluxo de caixa</th>
        </tr>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>
                    <td>$row[id]</td>  
                    <td>$row[data]</td>
                    <td>$row[tipo]</td>
                    <td><a href='altera_fluxo_caixa.php?id=$row[id]'>$row[valor]</a></td>
                    <td>$row[historico]</td>
                    <td>$row[cheque]</td>
                    <td><a href='excluir_fluxo_caixa.php?id=$row[id]'>Excluir</a>";
            }
        ?>
    </table>
</body>
</html>