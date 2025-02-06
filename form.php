<?php

require 'db.php';

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: avtorizasia.php');
    exit();
} 

if($_SERVER['REQUEST_METHOD']== 'POST') {
    $name= $_POST['name'];
    $surname= $_POST['surname'];
    $tel= $_POST['tel'];
    $email= $_POST['email'];
    $description= $_POST['description'];
    $stmt= $conn->prepare("INSERT INTO orders (name, surname, tel, email, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $surname, $tel, $email, $description);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header('Location: index.php');
    exit();
   


}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявок услуг</title>
    <style>
        form input[type='text'], input[type='tel'], input[type='email'] {
            font-size:20px;
            
        }
    </style>
</head>
<body>
    <form action='form.php' method='post'>
        <div>
            <input type='text' name='name' placeholder='Имя' require/>
        </div>
        <div>
            <input type='text' name='surname' placeholder='Фамилия' require/>
        </div>
        <div>
            <input type='tel' name='tel' placeholder='Номер телефона' require/>
        </div>
        <div>
            <input type='email' name='email' placeholder='email' require/>
        </div>
        <div>
            <input type='text' name='description' placeholder='Заявка' require/>
        </div>
        <div>
            <input type='submit' value='Оставить заявку'/>
        </div>
    </form>
</body>
</html>