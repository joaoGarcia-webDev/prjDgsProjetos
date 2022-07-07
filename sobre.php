<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/custom_sobre.css" />
  <!-- ICON -->
  <link rel="shortcut icon" href="img/DGS_logo.png" type="image/x-png" />
  <!-- Awesome Font -->
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" />
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" />
  <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php include 'nav_inc.php'; ?>

  <!-- SOBRE
      ================ -->
  <div class="all-content container">
    <div class="titulo">
      <div class="row">
        <div class="col l5 center">
          <h3>Quem somos</h3>
        </div>
      </div>
    </div>
    <div class="texto">
      <span class="flow-text">
        A DGS Desenhos & Projetos é uma empresa que traz soluções inovadoras
        para seguimentos de desenhos e projetos mecânicos, desenvolvendo
        soluções e oferecendo benefícios econômicos para sua empresa, estando
        prontos para atender e satisfazer a vontade dos nossos clientes.
      </span>
      <span class="flow-text">
        E com isso, a DGS surgiu com o intuito de se tornar referência na área
        de desenhos e projetos mecânicos, formando uma equipe de profissionais
        qualificados prontos para realizar, na melhor forma possível, a
        necessidade da sua empresa oferecendo:
      </span>
      <hr>
      <h3 class="about-work">Nossos serviços</h3>
      <ul class="collapsible popout">

        <li class="active">
          <div class="collapsible-header">
            <i class="fas fa-pencil-ruler"></i>Modelagem 2D e 3D:
          </div>
          <div class="collapsible-body">
            <span>
              Para futuras fabricações ou montagens,
              desenvolvendo os desenhos técnicos nas vistas necessárias segundo as
              normas ABNT para que a sua empresa possa produzir nas especificações
              necessárias, sendo que a montagem gráfica do seu produto, você poderá
              visualizar possíveis falhas ou realizar melhorias antes mesmo da
              fabricação e com isso, eliminar desperdícios ou custos indesejáveis.
            </span>
          </div>
        </li>

        <li>
          <div class="collapsible-header">
            <i class="fas fa-cogs"></i>Engenharia Reversa:
          </div>
          <div class="collapsible-body">
            <span>
              Que consiste em desmontar um conjunto e analisar
              seu funcionamento, podendo verificar a montagem virtual para futuras
              análise estruturais, funcionais e operacionais.
            </span>
          </div>
        </li>

        <li>
          <div class="collapsible-header">
            <i class="fas fa-drafting-compass"></i>Projetos Industriais:
          </div>
          <div class="collapsible-body">
            <span>
              Desenvolvimento de dispositivos e projetos
              mecânicos para mais diversos setores industriais, conforme solicitado
              pelos nossos clientes, pois sempre que pensamos em alguma inovação
              tecnológica ou melhoria de um produto ou processo industrial,
              necessitamos de projetos mecânicos elaborados por profissionais
              qualificados que em muitos casos não estão disponíveis na empresa por
              diversos motivos.
            </span>
          </div>
        </li>

        <li>
          <div class="collapsible-header">
            <i class="fas fa-cubes"></i>Animação 3D e Renderização:
          </div>
          <div class="collapsible-body">
            <span>
              Com o contínuo avanço da tecnologia fica
              mais evidente a necessidade do uso de modelagem digital para produtos
              na indústria. Com a animação 3D ou a Renderização de um produto, sua
              empresa pode reduzir o tempo e o custo que antes eram desprendidos na
              produção dos modelos de peças físicas de cera, madeira, tecidos, papel
              entre outros; além de ter a sua disposição um material moderno, de
              fácil manuseio e que deixará seus clientes entusiasmados com sua
              apresentação.
            </span>
          </div>
        </li>

        <li>
          <div class="collapsible-header">
            <i class="fas fa-wrench"></i>Projeto de Adequação conforme NR-12:
          </div>
          <div class="collapsible-body">
            <span>
              Desenvolvido para quem busca assegurar a proteção de máquinas e
              equipamentos, com a intenção de atender às exigências da Norma
              Regulamentadora de Segurança n° 12, o projeto de adequação a
              NR12 oferece segurança no ambiente de trabalho para os
              colaboradores e todas as pessoas que transitam no ambiente
              fabril. Para isso, atende com qualidade os requisitos da
              legislação brasileira..
            </span>
          </div>
        </li>
      </ul>
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
      $(".sidenav").sidenav();
      $(".tooltipped").tooltip();
      $(".collapsible").collapsible();
    });
    var elem = document.querySelector(".collapsible.expandable");
    var instance = M.Collapsible.init(elem, {
      accordion: false,
    });
  </script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>