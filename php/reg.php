<?php 

    $name = filter_var(trim($_POST['name']));
    $surname = filter_var(trim($_POST['surname']));
    $login = filter_var(trim($_POST['login']));
    $password = filter_var(trim($_POST['password']));

    include $_SERVER['DOCUMENT_ROOT'] . '/php/db.php';
    $password = md5($password . "test");
    
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
    if ($result->num_rows > 0) {
        //Если такой логин существует, то прекращается выполнение скрипта и ссылка на страницу
        echo "Такой пользователь уже существует, попробуйте снова<br>";
        echo "<a href='../index.php'>Назад</a>";
    } else {
        $mysql->query("INSERT INTO `users` (`name`, `surname`, `login`, `password`, `role`) VALUES ('$name', '$surname', '$login', '$password', 1)");

        // Получаем данные нового пользователя
        $new_user_result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
        $user = $new_user_result->fetch_assoc();

        // Устанавливаем куки
        setcookie('id', $user['id'], time() + 3600, '/');
        setcookie('login', $user['login'], time() + 3600, '/');
        setcookie('role', $user['role'], time() + 3600, '/');

        // Перенаправление пользователя на страницу аккаунта
        header('Location: /pages/account.php');
        exit(); 
    }
    $mysql->close();
?>
