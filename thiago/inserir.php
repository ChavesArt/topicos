<?php
include "conexao.php";
$conexao = conectar();

$usuario = json_decode(file_get_contents("php://input"));
$sql = "INSERT INTO usuario(id_usuario,nome,email,senha) values($id_usuario, '$nome', '$email','$senha')";

?>