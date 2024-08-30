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
    </style>  

    </head>

    <body>
    <?php include_once "header.php" ?>
    <main>
    <h1> Home </h1>
    <div class="row">

    <div class="col s12 m3">
      <div class="card">
      <span class="card-title">Card Title</span>
        <div class="card-image">
          <img src="img/roma.jpg">    
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

    <div class="col s12 m3">
      <div class="card">
      <span class="card-title">Card Title</span>
        <div class="card-image">
          <img src="img/roma.jpg">
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

    <div class="col s12 m3">
      <div class="card">
      <span class="card-title">Card Title</span>
        <div class="card-image">
          <img src="img/roma.jpg">
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

    <div class="col s12 m3">
      <div class="card">
      <span class="card-title">Card Title</span>
        <div class="card-image">
          <img src="img/florencax.jpg">
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


    

</main>    
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>