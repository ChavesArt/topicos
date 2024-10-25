<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
include "conect.php";
$id = $_POST['id'];

$sql = "DELETE FROM cliente WHERE id_cliente=$id";
$resultado = mysqli_query($conexao,$sql);
mysqli_close($conexao);

if($resultado)
{
	header("Location:clientes1.php?deletado=1");
}

?>
</body>
</html>