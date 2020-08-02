<?php
@session_start();

/*interface cadastro {
    public  function cadastrar();
    public  function alterar();
    public  function excluir();
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
      <header>
          
          <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="container divStore"> 
                    <h5 class="text-center mb-4">Faça seu Cadastro</h5>
                    <div class="firstPage">
        <h1>Registre sua loja conosco</h1>
        
        <form id="infoStore"><br>
          <label>Nome  da loja:
            <input type="text" class="form-control" id="storeName" placeholder="Nome da loja">
          </label><br>

          <label>Endereço da loja:
            <input type="text" class="form-control" id="storeAdress" placeholder="Endereço da loja">
          </label><br>

          <label >Tipo de loja:
            <select id="storeType" class="form-control">
              <option>Loja de roupas e acessórios</option>
              <option>Loja de eletrodomésticos</option>
              <option>Loja de calçados</option>
              <option>Outros</option>
            </select>
          </label>
        </form>
             
    </div>
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

<div class="col-md-6">
<div class="form-group">
    <label class="text-dark" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="">

		</div>
	</div>
</form>
</div>
        <input class="btn btn-danger" type="submit" value="CADASTRAR">
        </div>
	
</form>
</div>
</div>
</div>
</div>


   
 
        <div class="container divStore">
          <h1>Criar categoria?</h1>
          <br>
          <input type='text' id='inputAddCategory' style="width: 300px; border: 2px solid" />
          <input type='button'class="form-input" value='ADICIONAR' id='addCategory'/>
         
          
          <h1>Criar subcategoria?</h1>
          <br>
          <input type='text' id='inputAddSubCategory' style="width: 300px; border: 2px solid" />
          <input type='button'class="form-input" value='ADICIONAR' id='addSubCategory'/>


          <h2>ou...</h2>

          <label >Selecionar categoria:
            <select id="storeType" class="form-control listCategory">
              <option> </option>
            </select>
          </label>

          <label>Selecionar categoria:
            <select id="storeType" class="form-control listSubCategory">
              <option> </option>
            </select>
          </label>

          <div class="products" style="display: flex; flex-direction: column">
          <h3>Criar produto</h3>
          <label>Nome do produto:
            <input type="text" class="form-control" style="width: 100%;">
          </label>

          <label>Descrição
            <input type="text" class="form-control" style="width: 100%;">
          </label>
          
          <label>Preço:
            <input type="text" class="form-control" style="width: 100%;">
          </label>

          <label>Desconto:
            <input type="text" class="form-control" style="width: 100%;" placeholder="Deixe vazio se não tiver desconto">
          </label>

          
          <label for="myfile">Escolha uma imagem:</label>
            <input type="file" class="form-control" id="myfile" name="myfile">
          </label>

        </div>
        </form>

        <button type="button" id="addProductToStore" class="btn btn-danger" style="justify-content: center">
          ADICIONAR ITEM
        </button>
       

          </div>
        </div>

      </div>
    </div>

    <script defer src="./js/register.js"></script>


</header>

	</body>
</html>