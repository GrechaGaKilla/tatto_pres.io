<?php
session_start();


// Обработка добавления товара в корзину
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_count = $_POST['product_count'];
    
    // Проверить, существует ли корзина в сессии
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    // Проверить, существует ли товар в корзине
    if (isset($_SESSION['cart'][$product_id])) {
        // Проверяем, не превышает ли текущее количество товара максимальное значение
        if ($_SESSION['cart'][$product_id]['quantity'] >= $product_count) {
            // Устанавливаем количество товара равным максимальному значению
            $_SESSION['cart'][$product_id]['quantity'] = $product_count;
            echo "<p>Достигнуто максимальное количество товара для этого товара.</p>";
        } else {
            $_SESSION['cart'][$product_id]['quantity'] += 1;
        }
    } else {
        $_SESSION['cart'][$product_id] = [
            'name' => $product_name,
            'price' => $product_price,
            'product_count' => $product_count,
            'quantity' => 1
        ];
    }
    
    // Перенаправление обратно на страницу продукта или на другую страницу
    header('Location: ../pages/cart.php');
    exit;
}
?>
