<?php
@session_start();


?>


<!DOCTYPE html>
<html lang="en">
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
          <ul>
            <li id="homeHeader"><a href="./index.html">HOME</a></li>
            <li><a href="./about.html">SOBRE</a></li>
            <li><a href="./register.html">CADASTRE-SE</a></li>
            <li><a href="./contactUs.html">FALE CONOSCO</a></li>
          </ul>
        </nav>
      </header>
      <div class="firstPage">
        <div class="container divStore">
          <h1>Criar categoria?</h1>
          <br>
          <input type='text' id='inputAddCategory' style="width: 300px;" />
          <input type='button' value='ADICIONAR' id='addCategory'/>
          
          <h1>Criar subcategoria?</h1>
          <br>
          <input type='text' id='inputAddSubCategory' style="width: 300px;" />
          <input type='button' value='ADICIONAR' id='addSubCategory'/>

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
        <button type="button" id="addProductToStore" class="btn btn-danger" style="justify-content: center">
          ADICIONAR ITEM
        </button>
        
        </form>
          </div>
        </div>

      </div>
    </div>

    <script defer src="./js/register.js"></script>
  
  </body>
</html>
