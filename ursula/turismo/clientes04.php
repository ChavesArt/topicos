<?php
include "conect.php";

$sql = "SELECT * FROM cliente ORDER BY nomeCliente DESC";

$resultado = mysqli_query($conexao,$sql);
?>


<!DOCTYPE html>
  <html>
  <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
   
    <?php 
    include_once "header.php";
    include "conect.php";
  
    ?>

   <main class="container">  
  <h1> Clientes </h1>

  <table class = "striped">
        <thead>
          <tr>
              <th>ID</th>
              <th>CPF</th>
              <th>Nome</th>
              <th>Data de nascimento</th>
              <th>Operação</th>
          </tr>
        </thead>

        <tbody>
        <?php

while ($cliente = mysqli_fetch_assoc($resultado)) {
  $date = date_create($cliente['dataNasc']);
    echo '<tr>';

    echo '<td>' . $cliente['id_cliente'] . '</td>';
    echo "<td>" . $cliente['cpf'] . "</td>";
    echo '<td>' . $cliente['nomeCliente'] . '</td>';
    echo "<td>" . date_format($date, "d/m/Y");
    // echo "<td>" . $cliente['dataNasc'] . "</td>";
    echo"<td>" . "<a class='btn-floating btn-medium waves-effect waves-light red'><i class='material-icons'>delete</i></a>"."</td>"; 

    echo '</tr>';
}

?>
        </tbody>
      </table>

</main>

<script src="js/materialize.min.js"></script>
</body>
</html>