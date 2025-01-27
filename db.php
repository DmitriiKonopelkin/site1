<?php

$host= 'localhost';
$login='root';
$password='root';
$db_name='orders';

$conn= new mysqli('localhost', 'root', 'root', 'orders');

if($conn->connect_error) {
    die("Ошибка подключения к БД");
}

?>