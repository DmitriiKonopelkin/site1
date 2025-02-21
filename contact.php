<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <style>
        body {
            background-color:aqua;
            font-family:arial;
        }

        .container-fluid {
            width:100%;
        }

        .container {
            width:85%;
            margin:0 auto;
        }

        .d-flex {
            display:flex;
            align-items:center;
            justify-content:space-between;
        }

        header h1 {
            font-size:3.6em;
        }

        header .nav a {
            color:black;
            font-size:16px;
            margin:0 20px;
            text-decoration:none;
        }

        header .nav a:hover {
            color:#ebb217;
            cursor:pointer;
            margin-top:7px;
            margin-bottom:3px;
            border-bottom:1px solid #ebb217;
        }

        header form input[type='text'] {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
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

        form input[type='submit']:hover {
            color:#ebb217;
            cursor:pointer;
        }
    </style>
</head>
<body>
<header class='container-fluid'>
        <div class="container d-flex">
          <h1>LOGO</h1>
          <nav class='nav'>
        <a href='index.php'>Главная</a>
        <a href='portfolio.php'>Портфолио</a>
        <a href='technology.php'>Технологии</a>
        <a href='price.php'>Стоимость</a>
        <a href='contact.php'>Контакты</a>
        <a href='form.php'>Заявки</a>
          </nav>
          <form name='search' action='#' method='post'>
        <input type='text' name='search' placeholder='Поиск по сайту'/>
       </form>
        </div>
    </header>
    <minn>
    <form>
        <input type='tel' name='tel' placeholder='Номер телефона'/>
        <div>
            <input type='submit' value='Позвонить'/>
        </div>
    </form>
    </minn>
</body>
</html>