<?php
    session_start();
    setcookie('id', $user['id'], time() - 3600, '/');
    setcookie('login', $user['login'], time() - 3600, '/');
    setcookie('role', $user['role'], time() - 3600, '/');
    session_unset();
    header('Location: /');
?>