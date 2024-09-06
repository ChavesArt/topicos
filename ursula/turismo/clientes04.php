<?php
include "conect.php";

$sql = "SELECT * FROM usuario ORDER BY nomeCliente DESC";

$resultado = mysqli_query($conexao, $sql);
?>


<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <?php
  include_once "header.php";
  include "conect.php";

  ?>

  <main class="container">
    <h1> Clientes </h1>

    <table class="striped">
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
        ?>
          <tr>

            <td> <?php echo $cliente['id_cliente']; ?> </td>
            <td> <?php echo $cliente['cpf']; ?> </td>
            <td> <?php echo $cliente['nomeCliente'] ?> </td>
            <td> <?php echo date_format($date, "d/m/Y"); ?>
            <td> <a href='#modal<?php echo $cliente['id_cliente']; ?>' class='btn-floating btn-medium waves-effect waves-light red modal-trigger'><i class='material-icons'>delete</i></a> </td>

            <!-- // modal estrutura -->
            <div id='modal<?php echo $cliente['id_cliente']; ?>' class='modal'>
              <div class='modal-content'>
                <h4>Atenção!</h4>
                <p>Você confirma a exclusão do cliente?<?php echo  $cliente['nomeCliente']; ?></p>
              </div>
              <div class='modal-footer'>
                <form action="excluir.php" method="post">
                  <button type="submit" name="btn-deletar" class="modal-action modal-close waves-red btn green darken-1">
                    Excluir </button>

                  <button type="button" name="btn-cancelar" class="modal-action modal-close  btn waves-light red">
                    Cancelar </button>
                </form>
              </div>
            </div>

          </tr>

        <?php
        }
        ?>
      </tbody>
    </table>

  </main>

  <script src="js/materialize.min.js"></script>

  <script>
    // M.AutoInit();
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems,{
        opacity: 0.7, //opacidade do background(0.0.1.0)
        inDuration: 1000, //duração da animação de abertura em milisegundos
        outDuration: 1200, //duração da animação de fechamento em milisegundos
        dismissible: false, //Permite o fechar ao clicar fora do modal
        startingTop:'10%', //Posição inicial do modal em relação ao topo
        endingTop:'15%', //Posição final do modal em relação ao topo
      });
    });
  </script>
</body>

</html>