<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id']) && isset($_POST['new_quantity'])) {
    $product_id = $_POST['product_id'];
    $new_quantity = $_POST['new_quantity'];

    // Проверяем, что корзина существует
    if (isset($_SESSION['cart'])) {
        // Обновляем количество товара в корзине
        $_SESSION['cart'][$product_id]['quantity'] = $new_quantity;

        // Пересчитываем общую стоимость товаров в корзине
        $total_price = 0;
        foreach ($_SESSION['cart'] as $product) {
            $total_price += $product['quantity'] * $product['price'];
        }

        // Сохраняем общую стоимость в сессии
        $_SESSION['total_price'] = $total_price;
    }

    // Перенаправляем обратно на страницу корзины
    header('Location: /pages/cart.php');
    exit;
}
?>
