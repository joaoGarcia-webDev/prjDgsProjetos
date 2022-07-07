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
  <style>
    .img_zoom img {
      object-fit: contain;
    }
  </style>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <?php include 'nav_inc.php'; ?>

  <!-- CLIENTES
      ==================== -->
  <div class="container">
    <div class="row">
      <div class="clientes">
        <?php

        $path = 'img/clientes';
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file) {
          echo "
              <div class='col s12 m6 l3 img_zoom'>
                <img src='img/clientes/$file' class='responsive-img card cliente' alt='Logo do cliente que já teve contato com nosso trabalho'>
              </div>
              ";
        }

        ?>
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
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('.sidenav').sidenav();
      $('.tooltipped').tooltip();
    });
  </script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>