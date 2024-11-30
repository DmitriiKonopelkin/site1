<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Наш контактный телефон</title>
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
      form input[type='submit'] {
         font-size:16px;
         padding:15px 10px;
         border:1px solid #ebb217;
         margin-left:15px;
      }
   </style>
</head>
<body>
   <h1>Наш контактный телефон</h1>
   <form name='tel' action='#' method='get'>
       <input type='text' name='tel' placeholder='Введите номер телефона'/>
       <input type='submit' value='Позвонить'/>
   </form>
   <a href='Form.php'>Form.php</a>
</body>
</html>