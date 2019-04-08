<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho</title>

    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style-header-footer.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <?php 
    include '../navbar.php';
  ?>
  <div class="shopping-cart">
    <!-- Title -->
    <div class="title">
      Carrinho
    </div>
   
    <!-- Product #1 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img  class= "fotoItem" src="imagem/banana.png" alt="" />
      </div>
   
      <div class="description">
        <span>Common Projects</span>
        <span>Bball High</span>
        <span>White</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
          <img src="plus.svg" alt="" />
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
          <img src="minus.svg" alt="" />
        </button>
      </div>
   
      <div class="total-price">$549</div>
    </div>
   
    <!-- Product #2 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img class= "fotoItem"src="imagem/brocolis.png" alt=""/>
      </div>
   
      <div class="description">
        <span>Maison Margiela</span>
        <span>Future Sneakers</span>
        <span>White</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
          <img src="plus.svg" alt="" />
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
          <img src="minus.svg" alt="" />
        </button>
      </div>
   
      <div class="total-price">$870</div>
    </div>
   
    <!-- Product #3 -->
    <div class="item">
      <div class="buttons">
        <span class="delete-btn"></span>
        <span class="like-btn"></span>
      </div>
   
      <div class="image">
        <img class= "fotoItem" src="imagem/tomate.png" alt="" />
      </div>
   
      <div class="description">
        <span>Our Legacy</span>
        <span>Brushed Scarf</span>
        <span>Brown</span>
      </div>
   
      <div class="quantity">
        <button class="plus-btn" type="button" name="button">
          <img src="plus.svg" alt="" />
        </button>
        <input type="text" name="name" value="1">
        <button class="minus-btn" type="button" name="button">
          <img src="minus.svg" alt="" />
        </button>
      </div>
   
      <div class="total-price">$349</div>
    </div>
  </div>
</body>
</html>