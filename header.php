<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../app/css/style1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header class="header"> <!-- Шапка сайта -->
    <div class="header__container">
    <div class="header__list_li logo">Центр кадастровых решений</div>
        <button class="burger-btn" id="burgerBtn"> <!-- Бургер меню  -->
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="header__nav" id="headerNav"><!-- Список меню -->
            <ul class="header__list"> 
            <li class="header__list_li logo-1"><a href="/cadastr/">Центр кадастровых решений</a></li>
                <li class="header__list_li">Контактный номер:<br><span>+7(913)649-11-97</span></li>
                <li class="header__list_li">Почта:<br><span>adler.alla@mail.com</span></li>
                <li class="header__list_li">Наш адрес:<br><span>Красный путь 101, кор.3, кв.17</span></li>
                <?php
        if(!isset($_SESSION['user'])) { ?> <!-- Проверка на авторизацию -->
                <li class="header__list_li auth"><a>Авторизация</a></li>
                <?php } ?>
                <li class="header__list_telega">Наш телеграм: <a href="https://t.me/allaadler24" target="_blank" 
                rel="nofollow" >
        <img class="footer__telegram_img" src="/cadastr/app/img/telega.png" alt=""></a></li>
        <?php 
if(isset($_SESSION['user'])) { ?><!-- Проверка на авторизацию -->
        <li class='header__list_li admin_none'><a href="/cadastr/assets/components/admin_pan.php">Посмотреть заявки</a></li>
        <li class='header__list_li admin_none'><a href="/cadastr/assets/components/feedback.php">Посмотреть отзывы</a></li>
<?php }  ?>
        <?php
        if(isset($_SESSION['user'])) { ?> <!-- Проверка на авторизацию -->
        <li class="header__list_li auth"><a href="/cadastr/assets/functions/exit.php">Выйти</a></li>
      <?php }  ?>
            </ul>
        </nav>
    </div>
</header>
<?php 
if(isset($_SESSION['user'])) { ?><!-- Проверка на авторизацию -->
<main class="header-main">
    <ul class="header-main__list"><!-- Список меню для авторизованного пользователя -->
        <li><a href="/cadastr/assets/components/admin_pan.php">Посмотреть заявки</a></li>
        <li><a href="/cadastr/assets/components/feedback.php">Посмотреть отзывы</a></li>
    </ul>
</main>
<?php }  ?>
<script src="../../app/js/main.js"></script>
</body>
</html>