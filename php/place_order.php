<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $card = $_POST['card'];
    $total_price = $_SESSION['total_price'];
    $user_id = $_COOKIE['id'];

    $sql = "INSERT INTO orders (user_id, total_price, name, address, phone, card) VALUES ('$user_id', '$total_price', '$name', '$address', '$phone', '$card')";
    if (mysqli_query($mysql, $sql)) {
        $order_id = mysqli_insert_id($mysql);
        
        foreach ($_SESSION['cart'] as $product_id => $product) {
            $product_quantity = $product['quantity'];
            $sql = "UPDATE products SET product_count = product_count - $product_quantity WHERE id = $product_id";
            mysqli_query($mysql, $sql);
            
            $sql = "INSERT INTO order_details (order_id, product_id, product_quantity) VALUES ('$order_id', '$product_id', '$product_quantity')";
            mysqli_query($mysql, $sql);
        }

        unset($_SESSION['cart']);

        header('Location: confirmation_page.php');
        exit;
    } else {
        echo "Ошибка при создании заказа: " . mysqli_error($mysql);
    }
}
?>
