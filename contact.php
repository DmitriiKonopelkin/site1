<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактный телефон</title>
    <style>
     body {
        background-color:aqua;
     }

     .contact form input[type='tel'] {
        margin-top:20px;
        padding:15px 10px;
        border:1px solid #ebb217;
        font-size:16px;
     }
     .contact form input[type='submit'] {
        margin-top:20px;
        padding:15px 10px;
        border:1px solid #ebb217;
        margin-left:20px;
        font-size:16px;
     }
    </style>
</head>
<body>
    <h1>Наш контактный телефон</h1>
    <div class="contact">
      <form name='tel' action='#' method='get'>
        <input type='tel' name='tel' placeholder='Введите номер телефона'>
        <input type='submit' value='Позвонить'/>
      </form>
    </div>
</body>
</html>