<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <style>
    .card  {
      transition: transform 0.3s;
    }

    .card:hover  {
      transform: scale(1.1);
	   z-index: 1000; /* Traz a imagem para uma camada superior */
    }


   footer.li {
            display: inline-block;
            margin-right: 10px; /* Espaçamento entre os itens */
        } 

         

  </style>


    </head>

    <body>
    <?php include_once "header.php" ?>

      <h1> Viajando na maionese </h1>




    <div class="row">
    <div class="col s12 m6 l3">
      <div class="card">
      <span class="card-title">Card Title</span>
        <div class="card-image">
          <img src="img/veneza.jpeg"> 
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>


    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-image">
          <img src="img/florenca.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-image">
          <img src="img/roma.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>


    <div class="col s12 m6 l3">
      <div class="card">
        <div class="card-image">
          <img src="img/florencax.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>

  </div>
















    
    <div class="row">
      <div class="col s1 blue ">1</div>
      <div class="col s1 red">2</div>
      <div class="col s1 blue">3</div>
      <div class="col s1 red">4</div>
      <div class="col s1 blue">5</div>
      <div class="col s1 red">6</div>
      <div class="col s1 blue ">7</div>
      <div class="col s1 red">8</div>
      <div class="col s1 blue">9</div>
      <div class="col s1 red">10</div>
      <div class="col s1 blue">11</div>
      <div class="col s1 red">12</div>
    </div>

    <div class="row">
      <div class="col s12 blue ">1</div>
      <div class="col s6 red">2</div>
      <div class="col s6 blue">3</div>   
    </div>

    <div class="row">
      <div class="col s6 offset-s2 blue">3</div>   
    </div>

    <div class="row">
      <div class="col s6 m9 red">Hello</div>
      <div class="col s6 m3 green">Hello</div> 
    </div>

    <div class="row">
      <div class="col  m9 red">Hello</div>
      <div class="col  m3 green">Hello</div> 
    </div>

    <div class="row">
      <div class="col s12 m6 l4 red">testando colunas </div>
      <div class="col s12 m3 l8 green"> testando colunas </div>
  </div>

   
  <footer class="page-footer brown  lighten-3">
          <div class="container">
            <div class="row">
              <div class="col l3 s12">
                <h5 class="white-text">Endereço</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>  

              <div class="col l3 s12">
                <h5 class="white-text">Institucional</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Fale conosco</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Quem somos</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contato</a></li>
              
                </ul>
              </div>

              <div class="col l3 offset-l3 s12">
                <h5 class="white-text">Redes Sociais</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/facebook.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/youtube.png"></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"><img src="img/instagram.png"></a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

document.addEventListener('DOMContentLoaded', function() {
            // Inicializa a sidenav
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {
                edge: 'left'});

            // Configura a largura da sidenav
            var sidenav = document.querySelector('.sidenav');
            sidenav.style.width = '250px'; // Ajuste a largura conforme necessário
        });



</script>

    
    </body>
  </html>