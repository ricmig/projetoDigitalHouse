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
    <?php 
        include '../navbar.php';
    ?>

    <div id="login" class="form-container">
        <form class="form" action='/home'>
            <label  for="email">Email</label>
            <input id="login-email" type="email" name="email" placeholder="seu email" required>
            <p class='login-email-error'></p>
            <label for="password">Senha</label>
            <input id="login-password" type="password" name='password' required minlength="6" maxlength="9">
            <p class='login-password-error'></p>
            <button id="login-btn" class='btn btn-primary text-center' type="button">Entrar</button>
            <span id="loading-gif-login"></span>
            <a href="#cadastro" class="link-cadastro">Não tem conta? <br>Faça seu cadastro aqui.</a>
        </form>
    </div>
    
    <div id="cadastro" class="cadastro-form-container">

        <form class="form">
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome" placeholder="seu nome">
            <label for="email">Email</label>
            <input id="cadastro-email" type="email" name="email" placeholder="seu email">
            <p class='cadastro-email-error'></p>
            <label for="password" >Senha</label>
            <input id="cadastro-password" type="password" name='password'required minlength="6" maxlength="9" >
            <p class='cadastro-password-error'></p>
            <label for="password" >Confirmação de Senha</label>
            <input id="cadastro-conf-password" type="password" name='password'required minlength="6" maxlength="9">
            <p class='cadastro-password-conf-error'></p>
            <button id="cadastro-btn" class='btn btn-primary' type="submit">Cadastrar e entrar</button>
            <a href="#login" class="link-login">Já tem conta?<br> Faça o seu login.</a>
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