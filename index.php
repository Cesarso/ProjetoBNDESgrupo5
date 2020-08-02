<!-- Importa o cabeçalho e no final do código o rodapé-->
<?php 
include_once("cabecalho.php");



 ?>



<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <!--<title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Loja.php';
        require_once 'Produto.php';
        require_once 'Usuario.php';
        require_once 'Pessoa.php';
        require_once 'Cadastro.php';
        
        
        
        $p[0]= new Usuario(1,"Cesar", "Admin","s");
        $p[0]->setId(1);
        $p[0]->setNome("Teste");
        $p[0]->setCpf(000000000);
        
        
        print_r($p);
        
        
        ?>
        </pre> -->
  
    <!--Home da página-->
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>

     <body>
    <div class="container">
      <div class="row">

      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav">
          
        </nav>
      </header>
      <div class="firstPage">
        <img src="imagens/theme.png" alt="Imagem tema" />

        <h2 style="margin-top: 30px;">Sua loja física, agora na web</h2>
        <h5 style="margin-top: 30px">
          Cadastre sua loja e suba todos seus produtos em nosso site para ter
          sua própria loja digital!
        </h5>
        <div class="container box" style="display: flex; flex-direction: row; justify-content: center;">
          <div id="boxleft" style="border: 2px solid lightgray; border-radius: 4px; margin-right: 30px; width: 400px; margin-top: 30px; margin-bottom: 30px;">
            <img id="iconeLoja" src="./imagens/loja.png" alt="Ícone de Loja" style="width: 100px;" />
            <p id="textleft">
              Insira informações sobre sua loja e comece a vender seus produtos
              imediatamente! Seus clientes podem optar por receber em domicílio
              ou ir apenas buscar o produto!
            </p>
          </div>
          <div id="boxright" style="border: 2px solid lightgray; border-radius: 4px; margin-right: 30px; width: 400px; margin-top: 30px; margin-bottom: 30px;">
            <img id="iconeMegafone" src="./imagens/megafone.png" alt="Mega fone" style="width: 70px; margin-top: 10px; margin-bottom: 17px;" />
            <p id="textright">
              Com o link da sua loja em mãos, seus clientes podem comprar itens
              como se estivessem no seu ambiente de comércio físico.
            </p>
          </div>
        </div>

     </div>
   

    

 <div class="row">
  
  <div class="card col-lg-3 col-md-4 col-6 " style="width:400px; margin-right: 6px;">
    <img class="card-img-top" src="img/modelo2.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Suzi Modas</h4>
       <a class="rd-nav-link" href="suzimodas.php">Ver Mais</a>
    </div>
  </div>
   
  <div class="card col-lg-3 col-md-4 col-6 " style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo3.jpg" alt="Card image" style="width:100%; ">
    <div class="card-body">
      <h4 class="card-title">Pizzaria Fronteira</h4>
      
      <a href="#" class="btn btn-primary">Ver Mais</a>
    </div>
  </div>
  <br>
  <div class="card col-lg-3 col-md-4 col-6 " style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo9.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Bella Bolsas</h4>
     
      <a class="rd-nav-link" href="suzimodas.php">Ver Mais</a>
    </div>
  </div>
   </div>
  <div class="row" style="margin-top: 10px">
  
  <div class="card col-lg-3 col-md-4 col-6" style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo7.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Sonic Manutenções</h4>
      
       <a href="#" class="btn btn-primary">Ver Mais</a>
    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-6" style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo8.jpg" alt="Card image" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Bazar da Ju</h4>
      
       <a href="#" class="btn btn-primary">Ver Mais</a>
    </div>
  </div>
  <br>

  
  <div class="card col-lg-3 col-md-4 col-6" style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo10.jpeg" alt="Card image" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Lux Maquiagem e Bijuterias</h4>
     
       <a href="#" class="btn btn-primary">Ver Mais</a>
    </div>
  </div>
  </div>
   <div class="row" style="margin-top: 10px">
  
  <div class="card col-lg-3 col-md-4 col-6" style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo12.jpeg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Allshoes </h4>
    
       <a href="#" class="btn btn-primary">Ver Mais</a>
    </div>
  </div>
  <div class="card col-lg-3 col-md-4 col-6" style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo15.jpg" alt="Card image" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Pointcerto </h4>
     
      <a href="#" class="btn btn-primary">Ver Mais</a>
    </div>
  </div>
  <br>
  
  <div class="card col-lg-3 col-md-4 col-6" style="width:400px;margin-right: 6px;">
    <img class="card-img-top" src="img/modelo17.jpeg" alt="Card image" style="width:100%;">
    <div class="card-body">
      <h4 class="card-title">Felix Autorizada IOS</h4>
      
       <a href="#" class="btn btn-primary">Ver Mais</a>
    </div>
  </div>
  </div>
    </div>
</div>
    </div>

    <script defer src="./js/script.js"></script>
  


     <?php include_once("rodape.php") ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Ragnar-->

  </body>
</html>
