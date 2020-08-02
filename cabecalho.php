<?php @session_start(); ?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-br">
  <head>
    <title>Store WEB</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/shop.jpg" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">


    
  </head>
  <body>
    
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap rd-navbar-modern-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="50px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a title="Ir para Página Inicial" class="brand" href="index.php"><img src="images/shop.png" alt="" width="196" height="47"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Basket-->
                    <div class="rd-navbar-basket-wrap">
                     
                    <!-- RD Navbar Search-->
                    <div class="rd-navbar-search">
                      <button class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                      <form class="rd-search" action="#">
                        <div class="form-wrap"> -->
                          <label class="form-label" for="rd-navbar-search-form-input">Procurar...</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="search">
                          <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                        </div>
                      </form>
                    </div>
                  </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Inicio</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="sobre.php">Sobre</a>
                      </li>
                     
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contatos.php">Contatos</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="Cadastro.php">Cadastrar loja</a>
                      </li>

                       <?php if(!isset($_SESSION['nome_usuario'])){
                         echo '<li class="rd-nav-item"><a target="_blank" class="rd-nav-link" href="login.php">Login</a>
                            </li>';
                       }else{
                        
                        if($_SESSION['nivel_usuario'] == 'Admin'){
                           echo '<li class="rd-nav-item"><a target="_blank" class="rd-nav-link" href="painel-admin">Painel</a>
                            </li>';
                        }

                       } ?>
                      

                    </ul>
                  </div>
                  <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                    <div class="project-hamburger"><span class="project-hamburger-arrow-top"></span><span class="project-hamburger-arrow-center"></span><span class="project-hamburger-arrow-bottom"></span></div>
                    <div class="project-hamburger-2"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                    </div>
                    <div class="project-close"><span></span><span></span></div>
                  </div>
                </div>
                <div class="rd-navbar-project rd-navbar-modern-project">
                  <div class="rd-navbar-project-modern-header">
                    <h4 class="rd-navbar-project-modern-title">Contate-nos</h4>
                    <div class="rd-navbar-project-hamburger" data-multitoggle=".rd-navbar-main" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                      <div class="project-close"><span></span><span></span></div>
                    </div>
                  </div>
                  <div class="rd-navbar-project-content rd-navbar-modern-project-content">
                    <div>
                      <p>Sua loja física, agora na web</p>
                      <h3>
          Cadastre sua loja e suba todos seus produtos em nosso site para ter
          sua própria loja digital!
        </h3>
                     

                      <ul class="rd-navbar-modern-contacts">
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fab fa-whatsapp"></span></div>
                            <div class="unit-body"><a target="_blank" title="Ir para o Whatsapp" class="link-phone" href="http://api.whatsapp.com/send?1=pt_BR&phone=5521987718785">21 98771-8785</a></div>
                          </div>
                        </li>
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                            <div class="unit-body"><a class="link-location" href="#">Rua 10, Bairro </a></div>
                          </div>
                        </li>
                        <li>
                          <div class="unit unit-spacing-sm">
                            <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                            <div class="unit-body"><a class="link-email" href="mailto:#">grupo5@grupo5.com.br</a></div>
                          </div>
                        </li>
                      </ul>
                      <ul class="list-inline rd-navbar-modern-list-social">
                        <li><a title="Ir para página no facebook" class="icon fa fa-facebook" href="https://www.facebook.com/hugovasconcelosfreitas"></a></li>
                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                        <li><a class="icon fa fa-google-plus" href="#"></a></li>
                        <li><a class="icon fa fa-instagram" href="#"></a></li>
                        <li><a class="icon fa fa-pinterest" href="#"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>