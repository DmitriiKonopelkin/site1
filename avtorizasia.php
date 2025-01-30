<?php

$mysqli = new mysqli("localhost", "root", "root", "orders");

if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $mysqli->query("SELECT id FROM users WHERE username = '$username' AND password = '$password'"); 
    if ($user = $result->fetch_assoc()) { 
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php');
        exit;
    } else {
        echo "Неверное имя пользователя или пароль";
    }
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
    <form action='avtorizasia.php' method='post'>
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