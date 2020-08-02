<?php 

/*include_once("conexao.php");

if(isset($_POST['email2']) and $_POST['email2'] != ''){
    $email_rec = $_POST['email2'];
}*/
 ?>

<head>
    <title>Loja web | Cadastro</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content=" Cadastre sua loja e suba todos seus produtos em nosso site para ter
          sua própria loja digital!">
    <meta name="author" content="Grupo 5">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/login.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="imagens/register.png" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Loja web | Cadastro</title>
    <link rel="stylesheet" href="./bootstrap-3.4.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./css/styles.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav">
          
          <div class="container-fluid">

    <section class="login-block mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h5 class="text-center mb-4">Faça seu Login</h5>
                    
                    
                    <form class="login100-form validate-form" method="post" action="autenticar.php">
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Usuário</span><br>
                            <input class="input100" type="text" name="username" id="username"
                            placeholder="Insira seu Email" required>
                            <span class="focus-input100"></span>
                        </div>

          <!-- <label
            >Senha:
            <input type="password" class="form-control" id="password" />
          </label>
          <p> -->
            <div class="wrap-input100 validate-input">
                            <span class="label-input100">Senha</span>
                            <input class="input100" type="password" id="pass" name="pass" placeholder="Insira sua Senha" required>
                            <span class="focus-input100 password"></span>
                        </div>



                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <button class="btn btn-primary">
                                    Logar
                                </button>
                            </div>
                        </div>
                        <div class="copy-text">Não tem Cadastro?

                        <a class="text-primary" href="" data-toggle="modal" data-target="#modal-login">Cadastre-se</a>
                    </div>

                    <div class="text-center p-t-8 p-b-31">
                        <a class="text-danger" href="" data-toggle="modal" data-target="#modal-rec">
                           <small> Recuperar Senha? </small>
                       </a>
                   </div>


               </div>
              
       </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<!-- login end -->

</div>
  </body>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cadastre-se</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <form method="post">
        <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome e Sobrenome" required>

        </div>

        <div class="row">
         <div class="col-md-6">
             <div class="form-group">
                <label class="text-dark" for="exampleInputEmail1">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>

            </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
            <label class="text-dark" for="exampleInputEmail1">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>

        </div>
    </div>
</div>



<div class="form-group">
    <label class="text-dark" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="<?php echo @$email_rec ?>">

</div>




<div class="form-group">
    <label class="text-dark" for="exampleInputEmail1">Senha</label>
    <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha" required>

</div>


<div align="center" class="" id="mensagem">
</div>


</div>
<div class="modal-footer">
   <button type="button" id="btn-fechar" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
   <button name="btn-cadastro" id="btn-cadastro" class="btn btn-info">Cadastrar</button>

   </form>

</div>
</div>
</div>
</div>
</html>
