<?php

session_start();

?>
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

  <style>
    .whats,
    .linked {
      font-size: 20px;
      color: black;
      text-decoration: none;
    }

    .whats i,
    .linked i {
      font-size: 50px;
      transition: .2s ease;
    }

    .whats:hover i {
      color: green;
    }

    .linked:hover i {
      color: #0E76A8;
    }
  </style>
</head>

<body>

  <?php include 'nav_inc.php'; ?>

  <!-- CONTATOS
      ======================== -->
  <div class="container">
    <div class="center">
      <h4>Entre em contato conosco</h4>
      <h5>Preencha o formulario, tire suas dúvidas ou nos mande uma mensagem.</h5>

      <?php
      if (isset($_SESSION['estado_var'])) {
        echo $_SESSION['estado_var'];
        unset($_SESSION['estado_var']);
      } ?>
    </div>

    <div class="row container">
      <form class="col s12" action="email.php" method="POST">
        <div class="row">
          <div class="input-field col s12 m5 l5">
            <input id="nome" type="text" class="validate" name="nome">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s12 m5 l5 offset-l2 offset-m2" id="elemento">
            <input id="telefone" type="text" class="validate" name="telefone" data-mask="(00) 0000-0000" data-mask-selectonfocus="true">
            <label for="telefone">Telefone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m5 l5">
            <input id="email" type="text" class="validate" name="email">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12 m5 l5 offset-l2 offset-m2" id="elem">
            <input id="assunto" type="text" class="validate" name="assunto">
            <label for="assunto">Assunto</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea" placeholder="Digite aqui sua mensagem" class="materialize-textarea" name="textarea"></textarea>
            <label for="textarea">Escreva sua Mensagem</label>
          </div>
        </div>
        <div class="center">
          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar<i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="col s12 m6 center">
        <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5515998415244" target="_blank" class="whats">
          <i class="fab fa-whatsapp"></i>
          <h4>(15)99841-5244</h4>
        </a>
      </div>
      <div class="col s12 m6 center">
        <a href="https://www.linkedin.com/company/dgs-projetos-industrias-ltda" target="_blank" class="linked">
          <i class="fab fa-linkedin-in"></i>
          <h4>DGS Projetos Industrias Ltda.</h4>
        </a>
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
    const tel = document.getElementById('telefone') // Seletor do campo de telefone

    tel.addEventListener('keypress', (e) => mascaraTelefone(e.target.value)) // Dispara quando digitado no campo
    tel.addEventListener('change', (e) => mascaraTelefone(e.target.value)) // Dispara quando autocompletado o campo

    const mascaraTelefone = (valor) => {
      valor = valor.replace(/\D/g, "")
      valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2")
      valor = valor.replace(/(\d)(\d{4})$/, "$1-$2")
      tel.value = valor // Insere o(s) valor(es) no campo
    }
  </script>
  <script>
    $(document).ready(function() {
      $('input#id, #observacoes, #estado').characterCounter();
      $('.sidenav').sidenav();
      $('.tooltipped').tooltip();
      $('select').formSelect();
    });
    $('#textarea').val('');
    M.textareaAutoResize($('#textarea'));
  </script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>