<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delivig | Perfil</title>

  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style-header-footer.css">
  <link rel="stylesheet" href="./login.css">
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
                    <li class="nav-item navbar-notlogged">
                        <a class="link-green" href="../loja/index.php" title="Loja">Loja</a>
                    </li>
                    <li class="nav-item navbar-notlogged">
                        <a class="link-green" href="./carrinho/carrinho.php">Carrinho</a>
                    </li>
                </ul>
                <a href="./login/login.php" class="btn btn-success my-2 my-sm-0">Entrar</a>
            </div>
        </nav>
    </header>


 
    <div id="login" class="form-container">
        <form class="form" action='/home'>
            <label  for="email">Email</label>
            <input id="login-email" class="form-control" type="email" name="email" placeholder="seu email" required>
            <p class='login-email-error'></p>
            <label for="password">Senha</label>
            <input id="login-password"class="form-control" type="password" name='password' required minlength="6" maxlength="9">
            <p class='login-password-error'></p>
            <button id="login-btn" class='btn btn-primary text-center' type="button">Entrar</button>
            <span id="loading-gif-login"></span>
            <a href="#cadastro" class="link-cadastro">Não tem conta? <br>Faça seu cadastro aqui.</a>
        </form>
    </div>
    
    <div id="cadastro" class="cadastro-form-container">
        <form class="form-cadastro">
            <div>
                <label for="nome" >Nome</label>
                <input id="nome"class="form-control" type="text" name="nome" placeholder="seu nome">
                <label for="email">Email</label>
                <input id="cadastro-email"class="form-control" type="email" name="email" placeholder="seu email">
                <p class='cadastro-email-error'></p>
                <label for="password">Senha</label>
                <input id="cadastro-password" class="form-control" type="password" name='password'required minlength="6" maxlength="9" >
                <p class='cadastro-password-error'></p>
                <label for="password">Confirmação de Senha</label>
                <input id="cadastro-conf-password" class="form-control" type="password" name='password'required minlength="6" maxlength="9">
                <p class='cadastro-password-conf-error'></p>
                <button id="cadastro-btn" class='btn btn-primary' type="submit">Cadastrar e entrar</button>
                <a href="#login" class="link-login">Já tem conta?<br> Faça o seu login.</a>
            </div>  
        </form> 
    </div>

    <?php 
        include '../footer.php';
    ?>
            
  <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="login.js"></script>
</body>
</html>