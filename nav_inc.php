<?php $mainFileName = basename($_SERVER['PHP_SELF'], '.php'); ?>

<!-- NAVBAR
      ============== -->
<div class="navbar-fixed">
    <nav class="navbar-material" id="navbar">
        <div class="nav-wrapper container">
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <a href="index.php" class="brand-logo">
                <img class="responsive-img" style="margin-top: 10px;" src="img/DGS_logo.png" width="125px" height="125px">
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down link">
                <li><a href="sobre.php" class="valign-wrapper <?php if ($mainFileName == 'sobre') {
                                echo 'li-active';
                            } ?>"><b>Sobre</b></a></li>
                <li><a href="portifolio.php" class="valign-wrapper <?php if ($mainFileName == 'portifolio') {
                                echo 'li-active';
                            } ?>"><b>Portfólio</b></a></li>
                <li><a href="clientes.php" class="valign-wrapper <?php if ($mainFileName == 'clientes') {
                                echo 'li-active';
                            } ?>"><b>Clientes</b></a></li>
                <li><a href="contatos.php" class="valign-wrapper <?php if ($mainFileName == 'contatos') {
                                echo 'li-active';
                            } ?>"><b>Contatos</b></a></li>
            </ul>
        </div>
    </nav>
</div>

<!-- SIDENAV
      ======================== -->
<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="img/back.jpg">
            </div>
            <a href="#user"><img class="" src="img/DGS_logo.png" width="100px" height="45px"></a>
            <div class="side-text">
                <a href="#name"><span class="white-text name">DGS projetos</span></a>
                <a href="#email"><span class="white-text email">dgs.projetos23@gmail.com</span></a>
            </div>
        </div>
    </li>
    <li><a href="index.php" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">home</i>Início</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="sobre.php" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">account_circle</i>Sobre</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="portifolio.php" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">build</i>Portfólio</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="clientes.php" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">assignment_ind</i>Clientes</a></li>
    <li>
        <div class="divider"></div>
    </li>
    <li><a href="contatos.php" class="waves-effect waves-light white-text"><i id="icon" class="material-icons">message</i>Contato</a></li>
    <li>
        <div class="divider"></div>
    </li>
</ul>