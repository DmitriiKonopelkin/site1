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
    <title>Авторизация</title>
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

        form input[type='password'] {
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
    <h1>Авторизация</h1>
    <form action='form.php' method='post'>
        <input type='text' name='username' placeholder='Имя пользователя'/>
        <div>
            <input type='password' name='password' placeholder='Пароль'/>
        </div>
        <div>
            <input type='submit' value='Отправить'/>
        </div>
    </form>
</body>
</html>