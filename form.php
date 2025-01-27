<?php

$host='localhost';
$login='test5';
$pass='test5';
$db_name='2024inform';

$conn= new mysqli('localhost', 'test5', 'test5', '2024inform');

if($conn->connect_error) {
    die("ошибка подключения к БД");
}

if($_SERVER['REQUEST_METHOD']== 'POST') {
    $id= $_POST['id'];
    $username= $_POST['username'];
    $password= $_POST['password'];
}

$sql= "SELECT * FROM `users`";

while($row_fetch_assoc[$row]) {
    $row['id'];
    $row['username'];
    $row['password'];
}

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявок услуг</title>
    <style>
     body {
            font-family:arial;
            background-color:aqua;
        }

        form input[type='text'] {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            margin-bottom:15px;
        }

        form input[type='tel'] {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            margin-bottom:15px;
        }

        form input[type='submit'] {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            margin-bottom:15px;
        }
    </style>
</head>
<body>
<header class='container-fluid'>
      <div class="container d-flex">
        <h1>LOGO</h1>
        <nav>
            <a href='index.php'>Главная</a>
            <a href='portfolio.php'>Портфолио</a>
            <a href='technology.php'>Технологии</a>
            <a href='price.php'>Стоимость</a>
            <a href='contact.php'>Контакты</a>
            <a href='form.php'>Заявка</a>
        </nav>
        <form name='search' action='#' method='post'>
            <input type='text' name='search' placeholder='Поиск по сайту'/>
        </form>
      </div>
    </header>
    <h1>Форма заявок услуг</h1>
    <form action='avtorizasia.php' method='post'>
        <input type='text' name='name' placeholder='Имя'/>
        <div>
            <input type='text' name='surname' placeholder='Фамилия'/>
        </div>
        <div>
        <input type='text' name='middle_name' placeholder='Отчество'/>
        </div>
        <div>
            <input type='tel' name='tel' placeholder='Номер телефона'/>
        </div>
        <div>
            <input type='submit' value='Отправить'/>
        </div>
    </form>
    <a href='index.php'>index.php</a>
</body>
</html>