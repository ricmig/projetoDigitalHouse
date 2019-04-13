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
                    <a class="link-green" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="link-green" href="../loja/index.php" title="Loja">Loja</a>
                </li>
                <li class="nav-item navbar-notlogged">
                    <a class="link-green" href="../carrinho/carrinho.php">Carrinho</a>
                </li>
                <li class="nav-item dropdown navbar-notlogged">
                    <a class="link-green dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <a href="../login/login.php" class="btn btn-success my-2 my-sm-0">Entrar</a>
        </div>
    </nav>
</header>
    
 
    <section id="carousel">
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
    </section>
    <section id="container-produtos">
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
    </section>

    <?php 
        include '../footer.php';
    ?>
</body>
</html>