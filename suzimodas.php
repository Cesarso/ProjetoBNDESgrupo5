<?php

include_once("cabecalho.php");
@session_start();
?>


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
  <div class="col-6">
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Suzi Modas</h1>
    <p class="lead">Várias marcas nacionais e importadas.
     Roupas, calçados ,acessórios e muito mais com os Melhores Preços na Suzi Modas! </p>
     <p>Pague em até 10x. Conheça Entrega Expressa. Aproveite! Frete Grátis.</p>
  </div>
  <div class="row" style="margin-left: 10px;">
  <div class="col-4" >
    <div class="list-group" id="list-tab" role="tablist">
      
      <li class="list-group-item list-group-item-primary">Categorias</li>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Calçados</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Roupas</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Acessórios
      </a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Calçados
      </a>
    </div>
  </div>
  
</div>
 <div class="row" style="margin-top: 6px;margin-left: 6px;">
  <div class="col-4" >
    <div class="list-group" id="list-tab" role="tablist">
      
      <li class="list-group-item list-group-item-primary">Subcategorias</li>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Blusas e Camisetas</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Moletons</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Vestidos
</a>
<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Jeans
</a>
    </div>
  </div>
  
</div>
</div>
</div>
  <div class="col-6"> 
    <div class="card" style="width:400px">
  <img class="card-img-top" src="img/modelo.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Vestido Eagle Longo Vermelho Estampado </h4>
    <p class="card-text">Os detalhes garantem o charme do vestido longo Eagle , que combina a leveza da modelagem evasê e recorte. </p>
    <a href="#" class="btn btn-primary">Comprar</a>
  </div>
</div>
</div>
</div>
<a href="https://projetobndesgrupo5.000webhostapp.com/suzimodas.php"><button type="button" id="addProductToStore" class="btn btn-danger" style="justify-content: center">
          ADICIONAR ITEM
    </button></a>
<script defer src="./js/script.js"></script>
  

</div>
     <?php include_once("rodape.php") ?>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Ragnar-->
</div>

  </body>
</html>
