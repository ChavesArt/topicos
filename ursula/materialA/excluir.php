<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
include "conect.php";
$id = $_POST['id'];
echo $id;

$sql = "DELETE FROM clientes WHERE id=$id";
$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);

if($resultado)
{
	header("Location:clientes.php");
}

?>
</body>
</html>