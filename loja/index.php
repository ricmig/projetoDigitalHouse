<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deliveg | Loja</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-header-footer.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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
                <li class="nav-item navbar-notlogged">
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

<div class="container" style="margin-top: 120px;">
    <div class="row">
        <div class="col-md-3 col-sm-12">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">Frutas</li>
                <li class="list-group-item list-group-item-action">Verduras</li>
                <li class="list-group-item list-group-item-action">Legumes</li>
                <li class="list-group-item list-group-item-action">Outros</li>
            </ul>
        </div>
    <div class="col-md-9 col-sm-12">
        <section id="produtos-wrapper" class="row">
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/alface-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Alface</h5>
                        <p class="preco-card">R$ 1,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/tomate-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Tomate</h5>
                        <p class="preco-card">R$ 2,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/banana-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Banana</h5>
                        <p class="preco-card">R$ 0,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/alface-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Alface</h5>
                        <p class="preco-card">R$ 1,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/tomate-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Tomate</h5>
                        <p class="preco-card">R$ 2,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/banana-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Banana</h5>
                        <p class="preco-card">R$ 0,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/alface-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Alface</h5>
                        <p class="preco-card">R$ 1,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/tomate-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Tomate</h5>
                        <p class="preco-card">R$ 2,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-1">
                <div class="card">
                    <img class="card-img-top" src="img/banana-1.jpg" alt="Imagem do Produto">
                    <div class="card-body">
                        <h5 class="nome-produto-card">Banana</h5>
                        <p class="preco-card">R$ 0,99/kg</p>
                        <button class="btn btn-success" data-toggle="modal" data-target="#modal-produto">Comprar</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
</div>

<div id="modal-produto" class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Banana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img class="card-img-top" src="img/banana-1.jpg" alt="Imagem do Produto">
            </div>
            <div class="col-md-8 col-sm-12">
                <h5 class="nome-produto-card">Banana</h5>
                <p class="descricao-card">É a fruta mais popular do Brasil e um dos símbolos de países tropicais, a banana prata é também chamada de banana anã grande. </p>
                <p class="preco-card">R$ 0,99/kg</p>
                <button type="button" class="btn btn-success">Adicionar</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



    <?php 
        include '../footer.php';
    ?>
</body>
</html>