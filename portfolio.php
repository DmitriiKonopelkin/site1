<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио</title>
    <style>
       body {
        font-family:arial;
        background-color:aqua;
       }  

       p {
         font-size:17px;
         color:black;
       }

     .items figure figcaption {
         font-size:15px;
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

     .d-flex {
        display:flex;
        flex-wrap:wrap;
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
    <h1>Портфолио</h1>
    <p>Багетная мастерская – это место, где можно заказать изготовление рамок для фотографий, картин, плакатов и других работ.
    Недаром такие мастерские пользовались популярностью среди любителей и профессионалов, среди художников разных направлений и людей, которые ценят прекрасное.</p>
    <div class="items d-flex">
        <figure>
            <img src='images/item9.png' alt='Вышивка' width='260' height='260'/>
            <figcaption>Вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item10.png' alt='Вышивка' width='260' height='260'/>
            <figcaption>Вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item11.png' alt='Вышивка' width='260' height='260'/>
            <figcaption>Вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item12.png' alt='Живопись' width='260' height='260'/>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item13.png' alt='Живопись' width='260' height='260'/>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item14.png' alt='Живопись' width='260' height='260'/>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
    <a href='technology.php'>technology.php</a>
</body>
</html>