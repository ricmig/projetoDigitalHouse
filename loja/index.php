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
    <?php 
        include '../navbar.php';
    ?>
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