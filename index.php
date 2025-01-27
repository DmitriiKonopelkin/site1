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

        .container-fluid {
            width:100%;
        }

        .container {
            width: 80%;
            margin:0 auto;
        }

        header {
            margin-top:100px;
            
        }

        header h1 {
            font-size: 3.4em;
            color:black;
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
            width: 300px;
        }

        footer {
            background-color:#4b4b4e;
            padding-top:50px;
            padding-bottom:20px;
        }

        footer h1 {
            font-size: 3.4em;
            color:black;
        }
        
        footer .left nav a {
            display:block;
            color: #fff;
            text-decoration:none;
            font-size:16px;
            margin-right:1200px;
            margin-bottom:30px;
            margin-left:25px;
        }

        footer .left nav a:hover {
            color:#ebb217;
            cursor:pointer;
        }

        footer .copyrights p {
            color:#fff;
            font-size:15px;
            text-align:center;
        }

        .box {
            flex-wrap:wrap;
            margin-left:240px;
            margin-right:50px;
            margin-top:30px;
        }

        .box figure figcaption {
           font-size:15px;
        }

        .box button {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            width:100%;
        }

        .box button:hover {
            color:#ebb217;
            cursor:pointer;
        }

        figure {
            margin-bottom:38px;
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
            <a href='#'>Технологии</a>
            <a href='#'>Стоимость</a>
            <a href='#'>Контакты</a>
            <a href='#'>Услуги</a>
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
                        <img src='images/item1.png' alt='Оформление зеркал' width='260' height='260'/>
                        <figcaption>Оформление зеркал</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item2.png' alt='Оформление зеркал' width='260' height='260'/>
                        <figcaption>Оформление зеркал</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item3.png' alt='Широкоформатная печать' width='260' height='260'/>
                        <figcaption>Широкоформатная печать</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item4.png' alt='Широкоформатная печать' width='260' height='260'/>
                        <figcaption>Широкоформатная печать</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item5.png' alt='Оформление вышивок' width='260' height='260'/>
                        <figcaption>Оформление вышиаок</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item6.png' alt='Оформление вышивок' width='260' height='260'/>
                        <figcaption>Оформление вышивок</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item7.png' alt='Футболка в раме' width='260' height='260'/>
                        <figcaption>Футболка в раме</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item8.png' alt='Футболка в раме' width='260' height='260'/>
                        <figcaption>Футболка в раме</figcaption>
                        <button>Подробнее</button>
                    </figure>
                </div>
            </div>
        </div>
        <a href='portfolio.php'>portfolio.php</a>
    </main>
    <footer class='container-fluid'>
        <div class="container">
            <div class="left d-flex">
                <h1>LOGO</h1>
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
        <div class="copyrights">
            <p>Все права защищены 2024</p>
        </div>
    </footer>
</body>
</html>