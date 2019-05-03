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

<div class="container">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
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
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-1">
            <div class="card">
                <img class="card-img-top" src="img/tomate-1.jpg" alt="Imagem do Produto">
                <div class="card-body">
                    <h5 class="nome-produto-card">Tomate</h5>
                    <p class="preco-card">R$ 2,99/kg</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-1">
            <div class="card">
                <img class="card-img-top" src="img/banana-1.jpg" alt="Imagem do Produto">
                <div class="card-body">
                    <h5 class="nome-produto-card">Banana</h5>
                    <p class="preco-card">R$ 0,99/kg</p>
                    <a href="#" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>


    
</div>
    
 
    <!--section id="carousel">
        <div class="categoria-produto">
            <a href="" target="_self">
                <img src="https://via.placeholder.com/150" class="img-round" alt="Frutas"/>
            </a>
            <h2> 
                <a href="#" target="_self">
                    Frutas
                </a>
            </h2>
        </div>
        <div class="categoria-produto">
            <a href="#" target="_self">
                <img src="https://via.placeholder.com/150" class="img-round" alt="Verduras"/>
            </a>
            <h2> 
                <a href="#" target="_self">
                    Verduras
                </a>
            </h2>
        </div>
        <div class="categoria-produto">
            <a href="#" target="_self">
                <img src="https://via.placeholder.com/150" class="img-round" alt="Legumes"/>
            </a>
            <h2> 
                <a href="#" target="_self">
                   Legumes
                </a>
            </h2>
        </div>
        <div class="categoria-produto">
            <a href="#" target="_self">
                <img src="https://via.placeholder.com/150" class="img-round" alt="Outros"/>
            </a>
            <h2> 
                <a href="#" target="_self">
                    Outros
                </a>
            </h2>
        </div>
    </section -->

   <!-- <section id="container-produtos">
        <div class="produto">
            <img src="https://via.placeholder.com/200" alt="Nome do produto">
            <div class="produto-wrapper">
                <span>+</span>
                <p>Produto</p>
                <span>-</span>
            </div>
        </div> 
        <div class="produto">
            <img src="https://via.placeholder.com/200" alt="Nome do produto">
            <div class="produto-wrapper">
                <span>+</span>
                <p>Produto</p>
                <span>-</span>
            </div>
        </div> 
        <div class="produto">
            <img src="https://via.placeholder.com/200" alt="Nome do produto">
            <div class="produto-wrapper">
                <span>+</span>
                <p>Produto</p>
                <span>-</span>
            </div>
        </div> 
        <div class="produto">
            <img src="https://via.placeholder.com/200" alt="Nome do produto">
            <div class="produto-wrapper">
                <span>+</span>
                <p>Produto</p>
                <span>-</span>
            </div>
        </div> 
    </section>-->

    <?php 
        include '../footer.php';
    ?>
</body>
</html>