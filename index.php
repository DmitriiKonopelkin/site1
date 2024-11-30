<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Багетная мастерская</title>
    <style>
        * {
            box-sizing:border-box;
            margin:0;
            padding:0;
        }

        .container-fluid {
            width: 100%;
        }

        .container {
            width: 80%;
             
        }
        .d-flex {
            display:flex;
            align-items:center;
            justify-content:space-between;
        }

        body {
            font-size:16px;
            font-family:arial;
            width: 100%;
        }

        header >.container {
            margin-top:30px;
            margin-left:100px;
        }

        header nav a {
            font-size:16px;
            color:black;
            margin:0 20px;
            text-decoration:none;
        }

        header nav a:hover {
            color:#ebb217;
            cursor:pointer;
            margin-top:7px;
            margin-bottom:3px;
            border-bottom:1px solid #ebb217;
        }

        header form input[type='text'] {
            font-size:15px;
            padding:15px 10px;
            border:1px solid #ebb217;
           text-align:center;
        }

        .box {
            margin-top:100px;
            flex-wrap:wrap;
        }

        .box figure figcaption {
              font-size:15px;
              margin-left:20px;
        }

        .box button {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            width: 100%;
        }

        .box button:hover {
            color:#ebb217;
            cursor: pointer;
        }

        figure {
            margin-bottom:50px;
            margin-left:100px;
        }

        footer {
            background-color:#4b4b4e;
            padding-top:50px;
            padding-bottom:20px;
        }

        footer figure {
            margin-left:100px;
        }

        footer figure figcaption {
            font-size:15px;
            color:#fff;
            margin-top:10px;
        }

        footer .left nav a {
            color:#fff;
            font-size:16px;
            display:block;
            text-decoration:none;
            margin-right:750px;
            margin-bottom:35px;
        }

        footer .left nav a:hover {
            color:#ebb217;
            cursor:pointer;
        }

        footer p {
            font-size:15px;
            color:#fff;
            text-align:center;
        }
    </style>
</head>
<body>
    <header class='container-fluid'>
       <div class="container d-flex">
          <img src='images/logo.png' alt='logo' width='200' height='150'/>
          <nav>
            <a href="index.php">Главная</a>
            <a href="portfolio.php">Портфолио</a>
            <a href="technology.php">Технологии</a>
            <a href="price.php">Стоимость</a>
            <a href="contact.php">Контакты</a>
            <a href="form.php">Услуги</a>
          </nav>
          <form name='search' action='#' method='get'>
            <input type='text' name='search' placeholder='Поиск по сайту'/>
          </form>
       </div>
    </header>
    <main class='container-fluid'>
        <div class="container">
            <div class="boxes">
                <div class="box d-flex">
                    <figure>
                        <img src='images/item1.png' alt='Оформление зеркал' width='260' height='260'>
                        <figcaption>оформление зеркал</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item2.png' alt='Оформление зеркал' width='260' height='260'>
                        <figcaption>оформление зеркал</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item3.png' alt='Широкоформатная печать' width='260' height='260'>
                        <figcaption>Широкоформатная печать</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item4.png' alt='Широкоформатная печать' width='260' height='260'>
                        <figcaption>Широкоформатная печать</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item5.png' alt='Оформление вышивок' width='260' height='260'>
                        <figcaption>оформление вышивок</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item6.png' alt='Оформление вышивок' width='260' height='260'>
                        <figcaption>оформление вышивок</figcaption>
                        <button>Подробнее</button>
                      </figure>
                </div>
            </div>
        </div>
       <div>
        <a href='Portfolio.php'>Portfolio.php</a>
       </div>
    </main>
    <footer class='container-fluid'>
        <div class="container">
            <div class="left d-flex">
                <figure>
                    <img src='images/logo_footer.png' alt='logo' width='200' height='150'>
                    <figcaption>Дизайнерская студия</figcaption>
                </figure>
                <nav>
            <a href='#'>Главная</a>
            <a href='#'>Портфолио</a>
            <a href='#'>Технологии</a>
            <a href='#'>Стоимость</a>
            <a href='#'>Контакты</a>
            <a href='#'>Услуги</a> 
                </nav>
            </div>
        </div>
        <p>Все права защищены 2024</p>
    </footer>
</body>
</html>