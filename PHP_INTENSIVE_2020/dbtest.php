<?php
//Создаем подключение и записываем его в переменную
$db = new PDO('mysql:host=localhost; dbname=php_intensive_2020; charset=utf8', 'root','');
//Запрос к базе данных
$sql = "SELECT * FROM products";
//Выполняем запрос и результат сохраняем в переменную $result
$result = $db->query($sql);
//Преобразовываем ответ в ассоциативный массив и записываем в $products
$products = $result->fetchAll(PDO::FETCH_ASSOC);
echo"<pre>";
print_r($products);
echo"</pre>";