function updateQuantity(btn, productId, change) {
    var input = btn.parentNode.querySelector('.quantity_input');
    var currentValue = parseInt(input.value);
    var newValue = currentValue + change;
    var max = parseInt(input.getAttribute('max'));

    // Проверяем, чтобы новое значение было меньше или равно максимальному и больше 0
    if (newValue > 0 && newValue <= max) {
        input.value = newValue;
        // Вызываем функцию для обновления общей стоимости после изменения количества товара
        updateTotalPrice();
        // Находим форму родительского товара и отправляем её
        btn.closest('form').submit();
    }
}

function updateTotalPrice() {
    // Получаем все элементы с классом quantity_input
    var quantityInputs = document.querySelectorAll('.quantity_input');
    var totalPrice = 0;

    // Проходимся по каждому элементу и вычисляем общую стоимость
    quantityInputs.forEach(function(input) {
        var quantity = parseInt(input.value);
        var price = parseFloat(input.getAttribute('data-price'));
        totalPrice += quantity * price;
    });

    // Обновляем текст в элементе с id total_price
    document.getElementById('total_price').textContent = totalPrice.toFixed(2);

    // Обновляем значение скрытого поля формы
    document.getElementById('total_value_input').value = totalPrice.toFixed(2);
}

window.onload = updateQuantity();