<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    include('../php/db.php');
    $password = md5($password."test");
    

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc(); 

        setcookie('id', $user['id'], time() + 3600, '/');
        setcookie('login', $user['login'], time() + 3600, '/');
        setcookie('role', $user['role'], time() + 3600, '/');
    
        $mysql->close();
        header('Location: /pages/account.php');
    } else {
        header('Location: /pages/usernonetwo.php');
    }

?>
