<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/custom_portifolio.css">
  <!-- ICON -->
  <link rel="shortcut icon" href="img/DGS_logo.png" type="image/x-png">
  <!-- Awesome Font -->
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!-- JQUERY -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

  <?php include 'nav_inc.php'; ?>

  <!-- GALERIA
      ===================== -->
  <div class="galeria">
    <div class="center container" id="elemento">

      <div class="card card-back">
        <div class="row">

          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/MESA DE SOLDA.png" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Mesa De Solda</span>
            </div>
          </div>
          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/BOMBA DE ENGRENAGEM.png" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Bomba De Injeção Plástica</span>
            </div>
          </div>
          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/VALVULA ROTATIVA.jpg" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Valvula Rotativa</span>
            </div>
          </div>

          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/CARRETEL TRANSMISSÃO.jpg" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Carretel Transmissão</span>
            </div>
          </div>
          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/DISPOSITIVO DE DOBRA.jpg" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Dispositivo de Dobra</span>
            </div>
          </div>
          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/4º EIXO_ENGRENAGEM.jpg" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Eixo Engrenagem</span>
            </div>
          </div>

          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/TORNO AUTOMATICO.jpg" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Torno Automatico</span>
            </div>
          </div>
          <div class="col s12 m6 l4 img_zoom center">
            <div class="card-image">
              <img src="img/portifolio/Router CNC.png" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Serviço de Caldeiraria</span>
            </div>
          </div>
          <div class="col s12 m6 l4 img_zoom last center">
            <div class="card-image">
              <img src="img/portifolio/dispositivo_tomba_saco.jpeg" class="responsive-img card materialboxed">
              <span class="card-title valign-wrapper">Dispositivo Tomba Saco</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- FOOTER
      =========================== -->
    <footer>
      <div class="footer-copyright">
        <div class="container">
          © DGS Desenhos e Projetos
          <a class="dev-contato tooltipped grey-text" data-position="top" data-tooltip="contato: garcia.joaonight@gmail.com">Desenvolvido por: WebDev Garcia</a>
          <a class="grey-text text-lighten-4 right" href="#!">CNPJ 37.027.076/0001-10</a>
        </div>
      </div>
    </footer>


    <!-- Awesome Icons -->
    <script src="https://use.fontawesome.com/f424cc6e27.js"></script>
    <script>
      $(document).ready(function() {
        $('.materialboxed').materialbox();
        $('.sidenav').sidenav();
        $('.tooltipped').tooltip();
      });

      if (screen.width < 1000) {
        document.getElementById('elemento').classList.remove('left');
        document.getElementById('elem').classList.remove('right');
      } else {}
    </script>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>