<?php
     include('conexao.php');
     $id_usuario=$_GET['id_usuario'];
     $sql='SELECT * FROM usuario where id_usuario ='. $id_usuario;
     $result=mysqli_query($con, $sql);
     $row= mysqli_fetch_array($result);



?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de usuário</title>
<?php echo "<img src='data:image/jpeg;base64,".base64_encode( $row["foto_blob"])."' width='150' height='150'/>";

?>
    <h1>Alteração de usuário</h1>
        <form method="post" action="altera_usuario_exe.php" enctype='multipart/form-data'>

        <table>
            <tr>
                <th colspan="2">Cadastro de Clientes - IFSP</th>
            </tr>
            <tr>
                <td><p>Nome: </p></td>
                <td><input type="text" class="inpTxt" name="nome_usuario" maxlength="50" value="<?php echo $row['nome_usuario'] ?>"></td>
            </tr>
            <tr>
                <td><p>E-mail: </p></td>
                <td><input type="text" class="inpTxt" name="email_usuario" maxlength="50" value="<?php echo $row['email_usuario'] ?>"> </td>

            </tr>
            <tr>
                <td><p>Telefone: </p></td>
                <td><input type= "text" class="inpTxt inpTel" name="telefone_usuario" maxlength="30"value="<?php echo $row['telefone_usuario'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><br><input type="submit" class="btnEnviar" value="Enviar"></td>
            </tr>
        </table>
        <input name="id_usuario" type="hidden" value="<?php echo $row['id_usuario']?>">   
        <input type="file" id="foto" name="foto" accept="image/*" />

    </form>
</head>
<body>
    
</body>
</html>