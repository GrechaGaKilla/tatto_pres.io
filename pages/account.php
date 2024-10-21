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
                    <li><a href="/index.php">Главная</a></li>
                    <li><a href="/pages/catalog.php">Магазин</a></li>
                    <li><a href="/pages/contacts.php">Контакты</a></li>
                </ul>
            </nav>
            <div class="icons_box">
                <a href="/pages/cart.php"><img  src="/imgs/icons/cart.png"></a>
                 <?php if(!isset($_COOKIE['id'])){
                   echo '<img onclick=openPopUp() src="/imgs/icons/Usaer.png">';
                  }else{
                    echo '<a href="/pages/account.php"> <img href="/pages/account.php" src="/imgs/icons/User.png"></a>';
                 }

                  ?>

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
    <header class="header" style="background-color: #1F1F1F; max-width: 1920px; justify-content: center;">
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
                  <?php if(isset($_COOKIE['id'])): ?>
                    <a href="/pages/account.php"> <img href="/pages/account.php" src="/imgs/icons/User.png"></a>
                    <?php else: ?>
                      <img onclick=openPopUp() src="/imgs/icons/User.png">
                  <?php endif; ?>
            </div>
        </div>
    </header>
   </section>



    <div class="profile_box">
    <?php if(!isset($_COOKIE['role'])): ?>
        <h1 >Вы не авторизированы</h1>
   <?php elseif ($_COOKIE['role'] == 2): ?>
    <h1 >Администратор</h1>
    <?php else: ?>
        <?php 
            $link = mysqli_connect('localhost', 'user', '', 'shevchuk_bd');
            $id = $_COOKIE['id'];
            $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
            $result = mysqli_query($link, $sql);
            $profile = mysqli_fetch_assoc($result);
        ?>
        <h1 >Здравствуйте, <?=$profile['name']?></h1>
        <div class="profile_card_box">
          <div>
          <label for="name">Имя</label>
          <input readonly name="name" value="<?=$profile['name']?>">
          </div>
          <div>
          <label for="name">Фамилия</label>
          <input readonly name="surname" value="<?=$profile['surname']?>">
          </div>
          <div>
          <label for="name">Логин</label>
          <input readonly name="login"value="<?=$profile['login']?>">
          </div>
          <div>
          <label for="name">Пароль</label>
          <input readonly  name="password" type="password" value="<?= substr($profile['password'], 0, 10) ?>" maxlength="10" >
          </div>
          <div class="quit_box">
            <a href="/php/exit.php"><button class="quit">Выйти</button></a>
          </div>
        </div>
        <?php endif; ?>
        </div>




        <div class="recent_orders_box">
  <?php
  include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php';
  $user_id = $_COOKIE['id'];
  $sql = "SELECT * FROM orders WHERE user_id = '$user_id' ORDER BY order_date DESC";
  $result = mysqli_query($mysql, $sql);

  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $order_id = $row['order_id'];
          $sql_details = "SELECT od.product_id, od.product_quantity, p.product_name, p.product_img
                          FROM order_details od
                          JOIN products p ON od.product_id = p.id
                          WHERE od.order_id = '$order_id'";
          $details_result = mysqli_query($mysql, $sql_details);
  ?>
          <div class='recent_order'>
            <div class='recent_order_top'>
              <p>Заказ №: <?= $row['order_id'] ?></p>
              <p>Дата заказа: <?= $row['order_date'] ?></p>
              <p>Общая стоимость: $<?= $row['total_price'] ?></p>
              </div>
              <?php if (mysqli_num_rows($details_result) > 0) { ?>
                  <ul>
                      <?php while ($detail = mysqli_fetch_assoc($details_result)) { ?>
                        <div class="order_product_box">
                          <li>
                              <img src="/imgs/products/<?= $detail['product_img'] ?>" alt="<?= $detail['product_name'] ?>" width="50" height="50">
                          </li>
                          <li class="info_name_quantity">
                          <span><?= $detail['product_name'] ?> </span>
                          <span>Количество: <?= $detail['product_quantity'] ?></span> 
                          </li>
                          </div>
                      <?php } ?>
                  </ul>
              <?php } else { ?>
                  <p>Нет товаров в этом заказе.</p>
              <?php } ?>
          </div>
  <?php
      }
  } else {
  ?>
      <p>У вас пока нет заказов.</p>
  <?php
  }
  ?>
</div>







   
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