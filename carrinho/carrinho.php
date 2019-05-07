<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-header-footer.css">
    <link rel="stylesheet" href="../carrinho/css/style.css">
    

</head>
<body>
<header  id="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="../index.php">
            <img src="../img/logo2.jpeg" alt="Logo Deliveg" width="auto" height="40px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div id="navbarSupportedContent" class="navbar-right collapse navbar-collapse">
            <ul class="navbar-nav" >
                <li class="nav-item navbar-notlogged">
                    <a class="link-green" href="../perfil/perfil.php">Perfil</a>
                </li>
                <li class="nav-item  navbar-notlogged">
                    <a class="link-green" href="../loja/index.php" title="Loja">Loja</a>
                </li>
                <li class="nav-item navbar-notlogged">
                    <a class="link-green" href="../carrinho/carrinho.php">Carrinho</a>
                </li>
            </ul>
            <a href="../login/login.php" class="btn btn-success my-2 my-sm-0">Entrar</a>
        </div>
    </nav>
</header>

  <div class="shopping-cart">
    <!-- Titulo -->
    <div class="title">
      Carrinho
    </div>
   
    <!-- Produto #1 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img  class= "fotoItem" src="imagem/banana.png" alt="" />
      </div>
   
      <div class="description">
        <span>Banana Nanica</span>
        <span>Unidade</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
          <div>+</div>
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
        <div>-</div>
        </button>
      </div>
   
      <div class="total-price">R$ 05</div>
    </div>
   
    <!-- Produto #2 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img class= "fotoItem"src="imagem/brocolis.png" alt=""/>
      </div>
   
      <div class="description">
        <span>Brócolis Ninja</span>
        <span>Unidade</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
        <div>+</div>
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
        <div>-</div>
        </button>
      </div>
   
      <div class="total-price">R$ 07</div>
    </div>
   
    <!-- Produto #03 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img class= "fotoItem" src="imagem/tomate.png" alt="" />
      </div>
   
      <div class="description">
        <span>Tomate Italiano</span>
        <span>KG</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
        <div>+</div>
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
        <div>-</div>
        </button>
      </div>
      <div class="total-price">R$ 03</div>
    </div>

    <div class="total">
      <div class="preco">
      <span>Preço Total: R$ 15</span>
      </div>
      <div class="botaoDireita">
      <button class="botaoComprar" type="button" name="button">Finalizar pedido</button>
      </div>
      </div>

      
  </div>



  <link rel="stylesheet" href="../carrinho/js/script.js">
      <?php 
        include '../footer.php';
    ?>


</body>
</html>
