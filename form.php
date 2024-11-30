<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма заявок услуг</title>
    <style>
     body {
        font-family:arial;
     }

     h1 {
         margin-top:100px;
         text-align:center;
      }

      form input[type='text'] {
         font-size:16px;
         padding:15px 10px;
         border:1px solid #ebb217;
      }
      form input[type='email'] {
         font-size:16px;
         padding:15px 10px;
         border:1px solid #ebb217;
      }

      form input[type='tel'] {
         font-size:16px;
         padding:15px 10px;
         border:1px solid #ebb217;
      }

      form input[type='submit'] {
         font-size:16px;
         padding:15px 10px;
         border:1px solid #ebb217;
      }
    </style>
</head>
<body>
    <h1>Форма заявок услуг</h1>
    <form action='#' method='get'>
        <div>
            <input type='text' name='name' placeholder='Имя'>
        </div>
        <div>
            <input type='text' name='surname' placeholder='Фамилия'>
        </div>
        <div>
            <input type='text' name='middle_name' placeholder='Отчество'>
        </div>
        <div>
            <input type='email' name='email' placeholder='email'>
        </div>
        <div>
            <input type='tel' name='tel' placeholder='Номер телефона'>
        </div>
        <div>
            <input type='submit' value='Отправить'>
        </div>
    </form>
    <a href='index.php'>index.php</a>
</body>
</html>