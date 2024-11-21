<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио</title>
    <style>

      body {
        background-color:aqua;
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

      h1 {
        font-size:2.5em;
        margin-top:70px;
        text-align:center;
      }

      p {
        font-size:20px;
      }

      .items {
        display:flex;
        flex-wrap:wrap;
        padding-left:200px;
      }

      .items figure figcaption {
        font-size:15px;
        margin-left:10px;
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
          <img src='images/logo.png' alt='logo' width='200' height='150'/>
          <nav>
            <a href='index.php'>Главная</a>
            <a href='portfolio.php'>Портфолио</a>
            <a href='technology.php'>Технологии</a>
            <a href='price.php'>Стоимость работ</a>
            <a href='contact.php'>Контакты</a>
            <a href='form.php'>Форма заявки</a>
          </nav>
         </div>
    </header>
    <h1>Портфолио</h1>
   <p>Багетная мастерская занимается изготовлением рам, а также импортом деревянного европейского багета с 1992 года. В нашей багетной мастерской вы 
    можете приобрести лучшие картины, акварели и многое другое по выгодной цене.
   </p>
   <div class="items d-flex">
    <div>
        <figure>
            <img src='images/item9.png' alt='Вышивка' width='280' height='280'>
            <figcaption>Вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
    <div>
        <figure>
            <img src='images/item10.png' alt='Вышивка' width='280' height='280'>
            <figcaption>Вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
    <div>
        <figure>
            <img src='images/item11.png' alt='Вышивка' width='280' height='280'>
            <figcaption>Вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
    <div>
        <figure>
            <img src='images/item12.png' alt='Живопись' width='280' height='280'>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
    <div>
        <figure>
            <img src='images/item13.png' alt='Живопись' width='280' height='280'>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
    <div>
        <figure>
            <img src='images/item14.png' alt='Живопись' width='280' height='280'>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
   </div>
</body>
</html>