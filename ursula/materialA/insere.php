
<?php
include_once "conect.php";
$CPF = $_GET['CPF'];
$nomeCliente = $_GET['nomeCliente'];
$dataNasc = $_GET['dataNasc'];
// echo "$dataNasc";
$dataNasc = implode("-",array_reverse(explode("/",$dataNasc)));
// echo "$dataNasc";

$sql = "INSERT INTO cliente(cpf,nomeCliente,dataNasc) 
VALUES ('$CPF','$nomeCliente','$dataNasc')";

$resultado = mysqli_query($conexao,$sql);
// var_dump($resultado);
mysqli_close($conexao);

if ($resultado)
{
	header("Location:clientes.php");
} 
?>
