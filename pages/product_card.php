<?php
   session_start();
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link href="/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Мир тату</title>
</head>
<body>
    <div class="overlay">
        <nav class="overlay_header">
            <div onclick=openMenu() class="small_menu">
                <div class="small_menu_box">
                  <div class="small_menu_line"></div>
                  <div class="small_menu_line"></div>
                </div>
            </div>
            <nav class="nav_menu">
              <ul>
                <li class="current_page"><a href="/index.php">Главная</a></li>
                    <li><a href="/pages/catalog.php">Магазин</a></li>
                    <li><a href="/pages/contacts.php">Контакты</a></li>
                </ul>
            </nav>
            <div class="icons_box">
                <a href="/pages/cart.php"><img  src="/imgs/icons/cart.png"></a>
                <?php if(!isset($_COOKIE['id'])): ?>
                <img onclick=openPopUp() src="/imgs/icons/User.png">
                <?php else: ?>
                  <a href="/pages/account.php"> <img href="/pages/account.php" src="/imgs/icons/User.png"></a>
                  <?php endif; ?>
            </div>
            </nav>
    </div>

    <div class="popUp">
        <div class="popUp_container_auth ">
            <div>
                <h1>Авторизация</h1>
                <img src="/imgs/icons/close.png" onclick=closePopUp()>
            </div>
            <form class="row g-3 needs-validation" novalidate action="/php/auth.php" method="POST">
  
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label"><p>Логин</p></label>
                  <input type="login" class="form-control" id="validationCustom01" name="login" required>
                  <div class="invalid-feedback">
                    <p>Введите логин</p>
                  </div>
                </div>
    
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label"><p>Пароль</p></label>
                  <input type="password" class="form-control" id="validationCustom01" name="password" required>
                  <div class="invalid-feedback">
                    <p>Введите пароль</p>
                  </div>
                </div>
    
                <div class="col-12 d-flex justify-content-end reg">
                  <button class="btn btn-light" type="submit">Авторизоваться
                  </button>
                </div>
                <span>Нет аккаунта? - <span onclick="changePopUp()">Зарегистрироваться</span></span>
              </form>
        </div>
        <div class="popUp_container_reg hidden">
            <div>
                <h1>Авторизация</h1>
                <img src="/imgs/icons/close.png" onclick=closePopUp()>
            </div>
            <form class="row g-3 needs-validation reg-form" novalidate action="/php/reg.php" method="POST">
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label"><p>Имя</p></label>
                  <input type="text" class="form-control" id="validationCustom01" name="name" required pattern="[a-zA-Zа-яА-ЯЁё\s-]+">
                  <div class="invalid-feedback">
                    <p>Только буквы</p>
                  </div>
                </div>
                
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label"><p>Фамилия</p></label>
                  <input type="text" class="form-control" id="validationCustom02" name="surname" required pattern="[a-zA-Zа-яА-ЯЁё\s-]+">
                  <div class="invalid-feedback">
                    <p>Только букв</p>
                  </div>
                </div>
    
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label"><p>Логин</p></label>
                  <input type="login" class="form-control" id="validationCustom03" name="login" required  >
                  <div class="invalid-feedback">
                    <p>Введите логин</p>
                  </div>
                </div>
    
                <div class="col-md-12">
                  <label for="validationCustom01" class="form-label"><p>Пароль</p></label>
                  <input type="password" class="form-control" id="validationCustom04" name="password" required  pattern=".{6,}">
                  <div class="invalid-feedback">
                    <p>Меньше 6 симловом или содержит недопустимые симловы</p>
                  </div>
                </div>
    
                <div class="col-12 pers"> 
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      <p>Я согласен на <a href="/pages/contacts.php#part1">обработку персональных данных</a></p>
                    </label>
                    <div class="invalid-feedback">
                      <p>Согласитесь с условиями</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 d-flex justify-content-end reg">
                  <button class="btn btn-light" type="submit">Зарегистрироваться
                  </button>
                </div>
                <span>Есть аккаунт? - <span onclick="changePopUp()">Авторизоваться</span></span>
              </form>
            
            </div>
            
        </div>
    <div class="wrapper">
   <section class="section_with_header">
    <header class="header" style="background-color: #1F1F1F; width: 100vw !important; max-width: 1920px; justify-content: center;">
        <div class="header_box" style="max-width: 1250px;">
            <span><a href="/index.php">Мир тату</a></span>
            <nav class="nav">
              <ul>
                <li><a href="/index.php">Главная</a></li>
                    <li><a href="/pages/catalog.php">Магазин</a></li>
                    <li><a href="/pages/contacts.php">Контакты</a></li>
                </ul>
            </nav>
            <div class="icons_box">
                <a href="/pages/cart.php"><img  src="/imgs/icons/cart.png"></a>
                <div onclick=openMenu() class="small_menu" style="z-index: 30 !important;">
                    <div class="small_menu_box">
                      <div class="small_menu_line"></div>
                      <div class="small_menu_line"></div>
                    </div>
                  </div>
                  <?php if(!isset($_COOKIE['id'])): ?>
                <img onclick=openPopUp() src="/imgs/icons/User.png">
                <?php else: ?>
                  <a href="/pages/account.php"> <img href="/pages/account.php" src="/imgs/icons/User.png"></a>
                  <?php endif; ?>

            </div>
        </div>
    </header>
   </section>

   <section class="product_page">
   <?php
        $link = mysqli_connect('localhost', 'user', '', 'shevchuk_bd');
        $id = $_GET['id'];
        $sql = "SELECT * FROM `products` WHERE `id` = '$id'";
        $result = mysqli_query($link, $sql);
        $card = mysqli_fetch_assoc($result);
        ?>
    <div class="product">
    <div class="product_left">
        <img src="/imgs/products/<?=$card['product_img']?>">
    </div>
    <div class="product_right">
      <div class="top_product">
      <span><?=$card['product_name']?></span>
      <span>Количество: <?=$card['product_count']?></span>
      <span><?=$card['product_price']?> $</span>
      <form method="post" action="/php/add_to_cart.php">
                    <input type="hidden" name="product_id" value="<?=$card['id']?>">
                    <input type="hidden" name="product_count" value="<?=$card['product_count']?>">
                    <input type="hidden" name="product_name" value="<?=$card['product_name']?>">
                    <input type="hidden" name="product_price" value="<?=$card['product_price']?>">
                    <button type="submit" name="add_to_cart">Добавить в корзину</button>
                </form>
      </div>
      <div class="bottom_product">
        <span>Артикул: <?=$card['id']?></span>
        <span>Категория: <?=$card['product_category']?></span>
      </div>
    </div>
  </div>
   </section>
   
</div>

<footer class="footer">
    <div class="footer_box">
        <div class="footer_item">
            <span>Telegram</span>
            <img src="/imgs/icons/Telegram.png">
        </div>
        <div class="footer_item">
            <span>Почта mirtattoo@gmail.com</span>
            <img src="/imgs/icons/email.png">
        </div>
        <div class="footer_item">
            <span>Адрес: Тверская, 26 </span>
            <img src="/imgs/icons/map.png">
        </div>
    </div>
</footer>
<script src="/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script src="/js/script.js"></script>
</body>
</html>