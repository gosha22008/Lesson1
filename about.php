<!DOCTYPE>
<html lang="ru"><head>
    <title>Юрий будущий php разработчик</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }
        dl {
            display: table-row;
        }
        dt, dd {
            display: table-cell;
            padding: 5px 10px;
        }
    </style>
</head>

<?php
$name = 'Юрий';
$age = 23;
$email = 'gosha22008@yandex.ru';
$city = 'Сергиев Посад';
$about_me = 'Надеюсь в будущем php разработчик';
?>

<body>
<h1>Страница пользователя Юрия</h1>

<dl>
    <dt>Имя</dt>
    <dd><?=$name?></dd>
</dl><dl>
    <dt>Возраст</dt>
    <dd><?=$age?></dd>
</dl>
<dl>
    <dt>Адрес электронной почты</dt>
    <dd><a href="mailto:gosha22008@yandex.ru"><?=$email?></a></dd>
</dl>
<dl>
    <dt>Город</dt>
    <dd><?=$city?></dd>
</dl>
<dl>
    <dt>О себе</dt>
    <dd><?=$about_me?></dd>
</dl>
.
</body>
</html>
