<?php

require "db.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $result = $mysqli->query("SELECT id FROM users WHERE login = '$login' AND password = '$password'"); 
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
    <form action='' method='post'>
        <input type='text' name='login' placeholder='Логин'/>
        <div>
            <input type='password' name='password' placeholder='Пароль'/>
        </div>
        <div>
            <input type='submit' value='Отправить'/>
        </div>
    </form>
</body>
</html>