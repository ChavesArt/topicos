<?php
require_once "conexao.php";

$conexao = conectar();

$sql = "SELECT * FROM usuario";
$resultado = executarSql($conexao,$sql);
$usuarios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
echo json_encode($usuarios);
?>