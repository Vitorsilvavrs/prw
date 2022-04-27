<?php
include('conexao.php');
$nome=$_GET["txtNome"];
$email=$_GET["txtEmail"];
$fone=$_GET["txtFone"];

echo "Nome: ". $nome;
echo "<br>";
echo "E-mail: ". $email;
echo "<br>";
echo "Telefone: ". $fone;
?>
