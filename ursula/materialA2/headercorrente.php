<?php
 $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
 //echo $pagina_corrente;
 ?>



<div class="navbar-fixed">    
    <nav class="brown  lighten-3">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo"><img src="mala02.png" height="55" width="60"></a>
    
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li <?php if($paginaCorrente == 'index02.php') {echo 'class="active"';}?>> <a class="black-text" <?php if($paginaCorrente == 'index02.php'){echo 'style="text-decoration: underline;"';} ?> href="index02.php">Home</a></li>    
        <li <?php if($paginaCorrente == 'clientes.php') {echo 'class="active"'; } ?>><a class="black-text" href="clientes.php">Clientes</a></li> 
        <li <?php if($paginaCorrente == 'quem.php') {echo 'class="active"'; } ?>><a class="black-text"  href="quem.php">Nós!</a></li>
        <li <?php if($paginaCorrente == 'login.php') {echo 'class="active"'; } ?>><a class="black-text" href="login.php">Login</a></li>
        <li <?php if($paginaCorrente == 'destinos.php') {echo 'class="active"'; } ?>><a class="black-text" href="destinos.php">Destinos</a></li>
    </div>
  </nav>
</div> 