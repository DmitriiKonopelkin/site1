<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная информация</title>
    <style>
        body {
            background-color:aqua;
            font-family:arial;
        }

        form input[type='tel'] {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
        }

        form input[type='submit'] {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            margin-left:15px;
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
    <h1>Контактная информация</h1>
     <form name='tel' action='#' method='post'>
        <input type='tel' name='tel' placeholder='Введите номер телефона'/>
        <input type='submit' value='Позвонить'/>
     </form>
     <a href='avtorizasia.php'>avtorizasia.php</a>
</body>
</html>