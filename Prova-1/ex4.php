<?php
$nomeCliente=$_GET["txtNomeCliente"];
$estado=$_GET["selEstado"];
$cpf=$_GET["txtCpf"]; 
$rg=$_GET["txtRg"];
$sexo=$_GET["optSexo"];
$saldoCartao=$_GET["txtSaldoCart"];
$totalCompra=$_GET["txtTotalCompra"];
$novoSaldo=0;
echo "Nome do cliente: ". $nomeCliente;
echo "<br>";
echo "Nome do estado: ". $estado;
echo "<br>";
echo "CPF: ". $cpf;
echo "<br>";
echo "RG: ". $rg;
echo "<br>";
echo "Sexo: ". $sexo;
echo "<br>";
echo "Saldo do cartao: R$". $saldoCartao;
echo "<br>";
echo "Total da compra: R$". $totalCompra;

if(empty($nomeCliente)){
    echo "<br>";
    echo "<br>";
    echo "Digite a cidade!";
}
if(empty($cpf)){
    echo "<br>";
    echo "Digite o CPF!";
}
if(empty($rg)){
    echo "<br>";
    echo "Digite o RG!";
}
if ($saldoCartao<$totalCompra){
    echo "<p style='color: red;'>Saldo insuficiente para concluir a compra!</p>";
}
else {
    $novoSaldo=$saldoCartao-$totalCompra;
    echo "<br>";
    echo "Novo saldo: R$". $novoSaldo;
}
?>

