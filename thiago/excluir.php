<?php

require_once "conexao.php";
$conexao = conectar();

$id_usuario = $_GET['id_usuario'];

$sql = "DELETE FROM usuario WHERE id_usuario = $id_usuario";
$retorno = executarSql($conexao,$sql);
echo json_encode($retorno);
