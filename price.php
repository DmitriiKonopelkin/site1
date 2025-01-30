<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Стоимость работ</title>
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

        p {
            font-size:18px;
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
        <a href='#'>Контакты</a>
        <a href='#'>Заявки</a>
          </nav>
          <form name='search' action='#' method='post'>
        <input type='text' name='search' placeholder='Поиск по сайту'/>
       </form>
        </div>
    </header>
    <main class='main'>
        <p>БАГЕТНАЯ МАСТЕРСКАЯ. Изготовлением рам, а также импортом деревянного европейского багета, наша компания занимается с 1992 года
            Вы у нас можете купить недорогой багет по выгодной цене.
        </p>
    </main>
</body>
</html>