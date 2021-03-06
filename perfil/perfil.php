<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perfil</title>
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style-header-footer.css">
  <link rel="stylesheet" href="./perfil.css">
  <link rel="stylesheet" href="../css/style.css">
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
                    <a class="link-green" href="../carrinho/carrinho.php">Carrinho</a>
                </li>
            </ul>
            <a href="../login/login.php" class="btn btn-success my-2 my-sm-0">Entrar</a>
        </div>
    </nav>
</header>

  <div class="container-perfil">

    <nav class="side-menu">
      <a href="#cadastro" onclick="displayData('cadastro')" class="side-menu__btn">Dados Cadastrais</a>
      <a href="#pagamento" onclick="displayData('pagamento')" class="side-menu__btn">Pagamento</a>
      <a href="#historico" onclick="displayData('historico')" class="side-menu__btn">Histórico</a>
      <a href="#pedidosEmAndamento" onclick="displayData('pedidosEmAndamento')" class="side-menu__btn">Pedidos em Andamento</a>
      <a href="#pedidosRecorrentes" onclick="displayData('pedidosRecorrentes')" class="side-menu__btn">Pedido Recorrente</a>
    </nav>

    <main class="display">

      <section class="cadastro hide" id="cadastro">
      <div class="section__title">
            <h2>Dados Cadastrais</h2>
            <span onclick="closeSection('cadastro')">X</span>  
        </div>
        <p class="cadastro__nome">Empresa X</p>
        <p class="cadastro__cnpj">45645644/0001-2</p>
        <p class="cadastro__endereço">Rua Maria Borba, 67</p>
        <p class="cadastro__tel">Telefone 11 898986969</p>
      </section>

      <section id="pagamento"  class='hide'>
        <div class="section__title">
            <h2>Pagamento</h2>
            <span onclick="closeSection('pagamento')">X</span>  
        </div>
        <p>Tipos de pagamento:</p>
        <select class="form-control">
          <option>Cartão de Crédito</option>
          <option>Débito em Conta</option>
          <option>Boleto Bancário</option>
        </select>
      </section>

      <section id="historico" class='hide'>
        <div class="section__title">
            <h2>Histórico de compras</h2>
            <span onclick="closeSection('historico')">X</span>  
        </div>
        <table>
          <thead>
            <tr>
              <td>Código</td>
              <td>Pedido</td>
              <td>Data</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CXXY-1212</td>
              <td>40kg batata, 5kg alface, 10gramas de oregano</td>
              <td>12/08/2018</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section id="pedidosEmAndamento" class='hide'>
      <div class="section__title">
            <h2>Pedidos em Andamento</h2>
            <span onclick="closeSection('pedidosEmAndamento')">X</span>  
        </div>
        <table>
          <thead>
            <tr>
              <td>Código</td>
              <td>Pedido</td>
              <td>Status</td>
              <td>Previsão de Entrega</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>CXXY-1212</td>
              <td>40kg batata, 5kg alface, 10gramas de oregano</td>
              <td>em separação</td>
              <td>12/08/2018</td>
            </tr>
          </tbody>
        </table>
      </section>

      <section id="pedidosRecorrentes" class='hide'>
      <div class="section__title">
            <h2>Pedidos Recorrentes</h2>
            <span onclick="closeSection('pedidosRecorrentes')">X</span>  
        </div>
        <ol>
          <li>5kg de Tomate</li>
          <li>5kg de Batata</li>
          <li>1kg de milho</li>
        </ol>
      </section>

    </main>
  </div>

      <?php 
        include '../footer.php';
    ?>

  <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./perfil.js"></script>
</body>
</html>