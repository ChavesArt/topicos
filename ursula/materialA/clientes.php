<!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="wid_clienteth=device-wid_clienteth, initial-scale=1.0"/>
    </head>
<body>
<?php 
    include_once "header.php" ;
    require_once "conect.php";
?>
<main class="container">
    <h1> Clientes </h1>
    <a class="brown lighten-3 waves-effect waves-light btn" href="forminsere.php"><i class="material-icons right">add</i>Inserir</a>
<table class="striped">
        <thead>
          <tr>
              <th>id_cliente</th>
              <th>CPF</th>
              <th>Nome</th>
              <th>Data nascimento</th>
              <th>Operação </th>
          </tr>
        </thead>

        <tbody>
        <?php
        $sql = "SELECT id_cliente,CPF,nomeCliente,dataNasc FROM cliente"; 
        $resultado = mysqli_query($conexao,$sql);
        while($linha = mysqli_fetch_array($resultado))
        {
        ?>
          <tr>
            <td><?php echo $linha['id_cliente'];?></td>
            <td><?php echo $linha['CPF'];?></td>
            <td><?php echo $linha['nomeCliente'];?></td>
            <td><?php  $dataNasc = date('d/m/Y',strtotime($linha['dataNasc'])); echo $dataNasc;?> </td>
            <td> <a href="#modal<?php echo $linha['id_cliente'];?>" class="btn-floating btn-small waves-effect waves-light red modal-trigger"><i class="material-icons">delete</i></a></td>
         
  <!-- Modal Structure -->
  <div id_cliente="modal<?php echo $linha['id_cliente'];?>" class="modal">
    <div class="modal-content">
      <h4>Atenção!</h4>
      <p> Você confirma a exclusão do cliente? <?php echo $linha['nomeCliente'];?> </p>
    </div>
    <div class="modal-footer">
    <form action="excluir.php" method="POST">
    <input type = "hid_clienteden" name="id_cliente" value="<?php echo $linha['id_cliente'];?>">
   
      <button type="submit" name="btn-deletar" class="modal-action modal-close waves-red btn red darken-1"> 
      Excluir </button>

      <button type="button" name="btn-cancelar" class="modal-action modal-close  btn waves-light green"> 
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
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems,{
        opacity: 0.7,        // Opacid_clienteade do background (0.0 a 1.0)
        inDuration: 2000,    // Duração da animação de abertura em milissegundos
        outDuration: 1200,    // Duração da animação de fechamento em milissegundos
        dismissible: false,   // Permite fechar ao clicar fora do modal
        startingTop: '10%',  // Posição inicial do modal em relação ao topo
        endingTop: '15%'     // Posição final do modal em relação ao topo
      });
    });
</script>
</body>
</html>