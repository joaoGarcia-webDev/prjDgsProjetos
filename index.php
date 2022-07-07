<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/custom_index.css" />
  <link rel="stylesheet" href="css/animations.css">
  <!-- ICON -->
  <link rel="shortcut icon" href="img/DGS_logo.png" type="image/x-png" />
  <title>DGS Projetos</title>
  <!-- Awesome Font -->
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" />
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" />
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!-- NAVBAR
      ============== -->
  <div class="navbar-fixed">
    <nav class="nav-class navbar-material" id="navbar">
      <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger valign-wrapper"><i class="material-icons">menu</i></a>
        <div class="container">
          <a href="index.php" class="brand-logo">
            <img class="responsive-img" style="margin-top: 10px" src="img/DGS_logo.png" width="125px" height="125px" />
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down link">
            <li>
              <a href="sobre.php" class="valign-wrapper"><b>Sobre</b></a>
            </li>
            <li>
              <a href="portifolio.php" class="valign-wrapper"><b>Portfólio</b></a>
            </li>
            <li>
              <a href="clientes.php" class="valign-wrapper"><b>Clientes</b></a>
            </li>
            <li>
              <a href="contatos.php" class="valign-wrapper"><b>Contatos</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- SIDENAV
      ======================== -->
  <ul id="slide-out" class="sidenav">
    <li>
      <div class="user-view">
        <div class="background">
          <img src="img/back.jpg" />
        </div>
        <a href="#user"><img class="" src="img/DGS_logo.png" width="100px" height="45px" /></a>
        <div class="side-text">
          <a href="#name"><span class="white-text name">DGS projetos</span></a>
          <a href="#email"><span class="white-text email">dgs.projetos23@gmail.com</span></a>
        </div>
      </div>
    </li>
    <li>
      <a href="index.html" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">home</i>Início</a>
    </li>
    <li>
      <div class="divider"></div>
    </li>
    <li>
      <a href="sobre.html" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">account_circle</i>Sobre</a>
    </li>
    <li>
      <div class="divider"></div>
    </li>
    <li>
      <a href="portifolio.html" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">build</i>Portfólio</a>
    </li>
    <li>
      <div class="divider"></div>
    </li>
    <li>
      <a href="clientes.html" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">assignment_ind</i>Clientes</a>
    </li>
    <li>
      <div class="divider"></div>
    </li>
    <li>
      <a href="contatos.php" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">message</i>Contato</a>
    </li>
    <li>
      <div class="divider"></div>
    </li>
  </ul>

  <!-- FIXED BUTTON 
      ============================ -->
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large icon-fixed-color">
      <i class="fas fa-user"></i>
    </a>
    <ul>
      <li><a href="https://api.whatsapp.com/send?l=pt_BR&phone=5515998415244" target="_blank" class="btn-floating green">
          <i class="fab fa-whatsapp"></i>
        </a></li>
      <li><a href="https://www.linkedin.com/company/dgs-projetos-industrias-ltda" target="_blank" class="btn-floating blue ">
          <i class="fab fa-linkedin-in"></i>
        </a></li>
    </ul>
  </div>

  <!-- CARROUSSELL FULL WIDTH 
      ============================ -->
  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!">
      <img src="img/slider/slider1_alter.jpg" class="responsive-img">
    </a>
    <a class="carousel-item" href="#two!">
      <img src="img/slider/slider2_alter.jpg" class="responsive-img">
    </a>
    <a class="carousel-item" href="#three!">
      <img src="img/slider/slider3_alter.jpg" class="responsive-img">
    </a>
  </div>

  <!-- OUR SERVICES
      =========================== -->
  <div class="our-services">
    <div id="our-services" class="container row">
      <div id="" class="service-title">
        <h1>Nossos serviços</h1>
      </div>

      <div id="animationRight" class="hidden-animation service-box col s12 m6">
        <div class="row">
          <div class="col s4 m3 service-icon">
            <i class="fas fa-pencil-ruler"></i>
          </div>
          <div class="col s8 m8 service-text">
            <h3 class="title">Projetos 2D/3D:</h3>
            <p class="text">Desenvolvemos dispositivos e projetos mecânicos para mais diversas áreas, conforme a necessidade dos nossos clientes.
            </p>
          </div>
        </div>
      </div>
      <div id="animationLeft" class="hidden-animation service-box col s12 m6">
        <div class="row">
          <div class="col s4 m3 service-icon">
            <i class="fas fa-cogs"></i>
          </div>
          <div class="col s8 m8 service-text">
            <h3 class="title">Engenharia Reversa:</h3>
            <p class="text">Elaboramos o modelo matemático (3D) a partir de um item ou sistema mecânico já existente, podendo assim ser realizado as futuras análises estruturais, funcionais e operacionais.
            </p>
          </div>
        </div>
      </div>
      <div id="animationRight" class="hidden-animation service-box col s12 m6">
        <div class="row">
          <div class="col s4 m3 service-icon">
            <i class="fas fa-wrench"></i>
          </div>
          <div class="col s8 m8 service-text">
            <h3 class="title">Adequação NR-12:</h3>
            <p class="text">Adequamos máquinas, equipamentos e layouts com o objetivo de atendimento a Norma Regulamentadora NR-12.
            </p>
          </div>
        </div>
      </div>
      <div id="animationLeft" class="hidden-animation service-box col s12 m6">
        <div class="row">
          <div class="col s4 m3 service-icon">
            <i class="fas fa-cubes"></i>
          </div>
          <div class="col s8 m8 service-text">
            <h3 class="title">Animação 3D e Renderização:</h3>
            <p class="text">Realizamos a animação 3D do seu projeto ou até mesmo renderizamos imagens do seu projeto mecânico.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- OUR HISTORY
      ========================= -->
  <div id="animationUp" class="hidden-animation history container">
    <div class="card-panel">
      <hr class="hr-history">
      <div class="row">
        <div id="hist" class="history-content col s12 m6">
          <div class="history-title">
            <h4>Nossa história</h4>
          </div>
          <div class="history-text">
            <p>A DGS Desenhos & Projetos é uma empresa que traz soluções inovadoras para seguimentos de desenhos e projetos mecânicos, desenvolvendo soluções e oferecendo benefícios econômicos para sua empresa, prontos para atender e satisfazer a vontade dos nossos clientes.</p>
          </div>
        </div>
        <div id="hist" class="history-img col s12 m6">
          <img src="img/our_history.jpg" alt="" class="responsive-img">
          <div class="line-topright"></div>
          <div class="line-bottonleft"></div>
        </div>
      </div>
      <a href="sobre.html" class="history-btn center-align waves-effect waves-light btn">Leia mais</a>
      <hr class="hr-history">
    </div>
  </div>

  <!-- PORTIFOLIO
      ========================= -->
  <div class="portifolio center">
    <h3><b>Portifólio</b></h3>
    <div class="carousel">
      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/MESA DE SOLDA.png" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/BOMBA DE ENGRENAGEM.png" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/VALVULA ROTATIVA.jpg" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/CARRETEL TRANSMISSÃO.jpg" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/DISPOSITIVO DE DOBRA.jpg" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/4º EIXO_ENGRENAGEM.jpg" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/TORNO AUTOMATICO.jpg" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/dispositivo_tomba_saco.jpeg" /></a>

      <a class="carousel-item" href="portifolio.html"><img src="img/portifolio/Router CNC.png" /></a>
    </div>
  </div>
  <div class="center">
    <a href="portifolio.html" class="port-btn waves-effect waves-light btn">Nossos Projetos</a>
  </div>

  <!-- FOOTER
      ========================= -->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">
            <img src="img/DGS_logo.png" alt="" class="responsive-img imagem-logo" />
          </h5>
        </div>
        <div class="col l4 offset-l2 s12">
          <br />
          <ul class="footer_list">
            <li>Engenharia Reversa</li>
            <li>Desenho Técnico 2D</li>
            <li>Modelagem 3D</li>
            <li>Projetos de Sistemas Mecânicos</li>
            <li>Gestão de Acervo Técnico</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © DGS Desenhos e Projetos
        <a class="grey-text text-lighten-4 right" href="#!">CNPJ 37.027.076/0001-10</a>
      </div>
    </div>
  </footer>

  <!-- Awesome Icons -->
  <script src="https://use.fontawesome.com/f424cc6e27.js"></script>
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <!-- SCRIPT ANIMATION -->
  <script src="js/animation.js"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".parallax").parallax();
    });
    $('.carousel.carousel-slider').carousel({
      fullWidth: true
    });
    $(document).ready(function() {
      $(".sidenav").sidenav();
      $(".carousel").carousel();
      $('.fixed-action-btn').floatingActionButton();
    });
  </script>
  <!-- SIDE-NAV -->
  <script>
    setInterval(() => {
      $('.carousel.carousel-slider').carousel('next');
    }, 3000);

    const ourService = document.getElementById('our-services')
    if (screen.width <= 1440) {
      ourService.classList.remove('container')
    }

    const hist = document.querySelectorAll('#hist')
    if (screen.width <= 1024) {
      hist[0].classList.remove('m6')
      hist[1].classList.remove('m6')
      hist[0].classList.add('m12')
      hist[1].classList.add('m12')
    }

    window.addEventListener('scroll', function() {
      var posicaoy = window.pageYOffset;
      var screenX = screen.width;
      const navHover = document.querySelectorAll(".navbar-material");

      if (screenX >= 1000) {
        if (posicaoy >= 200) {
          navHover[0].classList.remove("nav-class");
          navbar.style.opacity = "1";
        } else if (posicaoy < 200) {
          navHover[0].classList.add("nav-class");
        }
      } else {
        navHover[0].classList.remove("nav-class");
        navbar.style.opacity = "1";
      }
    });
  </script>
</body>

</html>