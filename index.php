<!DOCTYPE html>
<html lang="en">
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

        body {
            font-family:arial;
            font-size:16px;
            width:100%;
            background-color:aqua;
        }

        header {
            margin-top:100px;
        }

        header h1 {
            font-size:3.6em;
        }

        header nav a {
            color:black;
            font-size:16px;
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
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
        
        }

        footer {
            padding-top:50px;
            padding-bottom:20px;
            background-color:#4b4b4e;
        }

        footer .left figure h1 {
            font-size:3.6em;
        }

        footer .left figure figcaption {
            color:white;
            font-size:15px;
            margin-top:10px;
        }

        footer .left nav a {
            color:white;
            display:block;
            text-decoration:none;
            font-size:16px;
            margin-bottom:28px;
            margin-right:900px;
        }

        footer .left nav a:hover {
            color:#ebb217;
            cursor:pointer;
        }

        footer p {
            color:white;
            text-align:center;
        }

        .box {
            margin-top:100px;
            flex-wrap:wrap;
        }

        figure {
            margin-bottom:38px;
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
        <a href='#'>Контакты</a>
        <a href='#'>Заявки</a>
       </nav>
       <form name='search' action='#' method='post'>
        <input type='text' name='search' placeholder='Поиск по сайту'/>
       </form>
      </div>
    </header>
    <main class='container-fluid'>
        <div class="container">
            <div class="boxes">
                <div class="box d-flex">
                    <figure>
                        <img src='images/item1.png' alt='Оформление зеркал' width='270' height='270'/>
                        <figcaption>Оформление зеркал</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item2.png' alt='Оформление зеркал' width='270' height='270'/>
                        <figcaption>Оформление зеркал</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item3.png' alt='Широкоформатная печать' width='270' height='270'/>
                        <figcaption>Широкоформатная печать</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item4.png' alt='Широкоформатная печать' width='270' height='270'/>
                        <figcaption>Широкоформатная печать</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item5.png' alt='Оформление вышивок' width='270' height='270'/>
                        <figcaption>Оформление вышивок</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item6.png' alt='Оформление вышивок' width='270' height='270'/>
                        <figcaption>Оформление вышивок</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item7.png' alt='Футболка в раме' width='270' height='270'/>
                        <figcaption>Футболка в раме</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item8.png' alt='Футболка в раме' width='270' height='270'/>
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
                    <h1>LOGO</h1>
                    <figcaption>Багетная мастерская</figcaption>
                </figure>
                <nav>
                    <a href='#'>Главная</a>
                    <a href='#'>Портфолио</a>
                    <a href='#'>Технологии</a>
                    <a href='#'>Стоимость</a>
                    <a href='#'>Контакты</a>
                    <a href='#'>Заявки</a>
                </nav>
            </div>
        </div>
        <p>Багетная мастерская 2025</p>
    </footer>
</body>
</html>