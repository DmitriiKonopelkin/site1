<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портфолио</title>
    <style>
        body {
            font-family:arial;
        }

        div p {
            color:black;
            font-size:20px;
        }

        h1 {
            margin-top:100px;
            text-align:center;
            font-size:2.5em;
        }

        .items {
            display:flex;
            flex-wrap:wrap;
            padding-left:200px;
        }

        .items figure figcaption {
          font-size:16px;
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
    <h1>Портфолио</h1>
    <div>
    <p>Наша багетная мастерская занимается изготоволением рам, а также импортом деревянного европейского багета с 1992 года. В наш ассортимент входят лучшие картины, 
        акварели, гравюры и многое другое. Здесь вы можете приобрести лучшую картину по выгодной цене.
    </p>
    <div class="items d-flex">
        <figure>
            <img src='images/item9.png' alt='Вышивка' width='260' height='260'>
            <figcaption>вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item10.png' alt='Вышивка' width='260' height='260'>
            <figcaption>вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item11.png' alt='Вышивка' width='260' height='260'>
            <figcaption>вышивка</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item12.png' alt='Живопись' width='260' height='260'>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item13.png' alt='Живопись' width='260' height='260'>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
        <figure>
            <img src='images/item14.png' alt='Живопись' width='260' height='260'>
            <figcaption>Живопись</figcaption>
            <button>Подробнее</button>
        </figure>
    </div>
    </div>
    <a href='technology.php'>technology.php</a>
</body>
</html>