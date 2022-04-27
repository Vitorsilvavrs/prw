<?php

include('conexao.php');
$sql='SELECT * FROM usuario';
$result= mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de usuários</title>
</head>
<body>
    <h1>Listagem de Usuários</h1>
    <table align="center" border="1" width=500>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
        <?php
            while($row= mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>". $row['id_usuario']. "</td>";
                echo "<td>". $row['nome_usuario']. "</td>";
                echo "<td>". $row['email_usuario']. "</td>";
                echo "<td>". $row['telefone_usuario']. "</td>";
                echo "</tr>";
            }



        ?>
    </table>

</body>
</html>