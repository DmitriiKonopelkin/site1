<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио</title>
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

        header .menu a {
            color:black;
            font-size:16px;
            margin:0 20px;
            text-decoration:none;
        }

        header .menu a:hover {
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

        .items {
            display:flex;
            flex-wrap:wrap;
        }

        .items button {
            font-size:16px;
            padding:15px 10px;
            border:1px solid #ebb217;
            width: 100%;
        }

        .items button:hover {
            color:#ebb217;
            cursor:pointer;
        }

    </style>
</head>
<body>
    <header class='container-fluid'>
        <div class="container d-flex">
         <h1>LOGO</h1>
         <nav class='menu'>
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
        <div class="container">
           <div class="items d-flex">
                    <figure>
                        <img src='images/item9.png' alt='Вышивка' width='270' height='270'/>
                        <figcaption>Вышивка</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item10.png' alt='Вышивка' width='270' height='270'/>
                        <figcaption>Вышивка</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item11.png' alt='Вышивка' width='270' height='270'/>
                        <figcaption>Вышивка</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item12.png' alt='Живопись' width='270' height='270'/>
                        <figcaption>Живопись</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item13.png' alt='Живопись' width='270' height='270'/>
                        <figcaption>Живопись</figcaption>
                        <button>Подробнее</button>
                    </figure>
                    <figure>
                        <img src='images/item14.png' alt='Живопись' width='270' height='270'/>
                        <figcaption>Живопись</figcaption>
                        <button>Подробнее</button>
                    </figure>
           </div>
        </div>
    </main>
</body>
</html>