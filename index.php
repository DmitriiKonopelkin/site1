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
            max-width:1650px;
        }

        .d-flex {
            display:flex;
            align-items:center;
            justify-content:space-between;
        }

        body {
           font-size:16px;
           width: 100%;
           background-color:aqua;
           font-family:Arial;
        }

        header img {
            margin-top:30px;
        }

        header nav a {
            color:black;
            text-decoration:none;
            padding:30px;
            font-size:16px;
        }

        header nav a:hover {
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

        footer {
            background-color:#4b4b4e;
            padding-top:50px;
            padding-bottom:20px;
        }

        footer .left figure figcaption {
            color:#fff;
            font-size:15px;
            margin-top:10px;
        }

        footer .left nav a {
            display:block;
            color:#fff;
            font-size:16px;
            text-decoration:none;
            margin-right:1150px;
            margin-bottom:38px;
            margin-left:100px;
            
        }

        footer .left nav a:hover {
            color:#ebb217;
            cursor:pointer;
        }

        footer div p {
            color:#fff;
            font-size:15px;
            text-align:center;
        }

        .box {
            margin-top:50px;
            flex-wrap:wrap;
            padding-left:200px;
            padding-right:100px;
        }

        .box figure figcaption {
            font-size:15px;
            margin-left:10px;
        }

        .box button {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            width: 100%;
        }

        .box button:hover {
            color:#ebb217;
            cursor:pointer;
        }

        figure {
            margin-bottom:48px;
        }
    </style>
</head>
<body>
    <header class='container-fluid'>
         <div class="container d-flex">
          <img src='images/logo.png' alt='logo' width='200' height='150'/>
          <nav>
            <a href='index.php'>Главная</a>
            <a href='portfolio.php'>Портфолио</a>
            <a href='technology.php'>Технологии</a>
            <a href='price.php'>Стоимость работ</a>
            <a href='contact.php'>Контакты</a>
            <a href='form.php'>Форма заявки</a>
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
                    <img src='images/item1.png' alt='Оформление зеркал' width='280' heigt='280'/>
                    <figcaption>Оформление зеркал</figcaption>
                    <button>Подробнее</button>
                </figure>
                <figure>
                    <img src='images/item2.png' alt='Оформление зеркал' width='280' heigt='280'/>
                    <figcaption>Оформление зеркал</figcaption>
                    <button>Подробнее</button>
                </figure>
                <figure>
                    <img src='images/item3.png' alt='Широкоформатная печать' width='280' heigt='280'/>
                    <figcaption>Широкоформатная печать</figcaption>
                    <button>Подробнее</button>
                </figure>
                <figure>
                    <img src='images/item4.png' alt='Широкоформатная печать' width='280' heigt='280'/>
                    <figcaption>Широкоформатная печать</figcaption>
                    <button>Подробнее</button>
                </figure>
                <figure>
                    <img src='images/item5.png' alt='Оформление вышивок' width='280' heigt='280'/>
                    <figcaption>Оформление вышивок</figcaption>
                    <button>Подробнее</button>
                </figure>
                <figure>
                    <img src='images/item6.png' alt='Оформление вышивок' width='280' heigt='280'/>
                    <figcaption>Оформление зеркал</figcaption>
                    <button>Подробнее</button>
                </figure>
                <figure>
                    <img src='images/item7.png' alt='Футболка в раме' width='280' heigt='280'/>
                    <figcaption>Футболка в раме</figcaption>
                    <button>Подробнее</button>
                </figure>
                <figure>
                    <img src='images/item8.png' alt='Футболка в раме' width='280' heigt='280'/>
                    <figcaption>Футболка в раме</figcaption>
                    <button>Подробнее</button>
                </figure>
            </div>
        </div>
      </div>
    </main>
    <footer class='container-fluid'>
        <div class="container">
            <div class="left d-flex">
             <figure>
                <img src='images/logo_footer.png' alt='logo' width='200' height='150'/>
                <figcaption>Багетная мастерская</figcaption>
             </figure>
             <nav>
            <a href='index.php'>Главная</a>
            <a href='portfolio.php'>Портфолио</a>
            <a href='technology.php'>Технологии</a>
            <a href='price.php'>Стоимость работ</a>
            <a href='contact.php'>Контакты</a>
            <a href='form.php'>Форма заявки</a>
             </nav>
            </div>
        </div>
        <div>
            <p>Все права защищены 2024</p>
        </div>
    </footer>
</body>
</html>