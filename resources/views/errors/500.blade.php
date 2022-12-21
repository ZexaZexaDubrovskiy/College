<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Код страницы 404</title>
    <style>
        html { height: 100%; }
        body {
            background: rgba(254, 146, 64, 0.05);;

            background-size: cover; /* Масштабирует картинку сохраняя пропорции */
        }
        .over {
            background: rgba(254, 146, 64, 0.05); /* Цвет фона и значение прозрачности */
            position: absolute; /* Абсолютное позиционирование */
            left: 0; right: 0; top: 0; bottom: 0; /* Отступы от краев браузера */
        }

        .v404 {
            margin-top: 100px;
            text-align: center; /* Выравнивание текста по центру */
            font-size: 10em;
            color: #ff8f07;
            position: relative; /* Относительное позиционирование */
            z-index: 2; /* Порядок наложения элемента по высоте */
        }
        .notfound {
            text-align: center;
            color: #ff8f07;
            font-size: 2em;
            position: relative; /* Относительное позиционирование */
            z-index: 2; /* Порядок наложения элемента по слоям в глубину */
        }
        .notfound a {
            color: #ff8f07;
            font-size: 0.8em;
        }
        .notfound a:hover {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="over"></div>
<div class="v404">500</div>
<div class="notfound">страница не найдена<br>
    <a href="{{ route('main.index') }}"> перейти на главную страницу..</a>
</div>
</body>
</html>
