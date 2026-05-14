<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../app/css/style1.css">
</head>
<body>
    <?php
include 'header.php';
    ?>
    <div class="admin__h2">
<h2>Отзывы пользователей</h2>
</div>
  <!-- Выборка из базы данных для отбражения содержимого на странице -->
    <?php
include '../admin/core.php';
$user = $core ->query("SELECT * FROM `user`"); 
foreach($user as $us) {
    if($us['login'] !== 'admin') { ?>  <!--- Проверка для того, чтобы не отображался отзыв администратора -->
<div class="admin">
<div class="admin__container">
    <form action="../functions/delete_feedbach.php" method="post" class="admin__container_form">
        <label>Дата и время отзыва: <?=$us['datetime']?></label><br> <!-- Вывод даты и времени отзыва -->
    <label class="admin__container_fullname" >Логин пользователя:<?=$us['login']?></label> 
    <!-- Вывод логина пользователя -->
    <label for="">Его отзыв:</label><br><!-- Вывод отзыва пользователя -->
    <textarea class="admin__feedback" id="" cols="10" rows="6"><?=$us['comm']?></textarea><br>
    <!-- Вывод отзыва пользователя -->
<label>Оценка: <?=$us['estimation']?>/5</label><!-- Вывод оценки пользователя -->
    <input type="hidden" name='id' value="<?=$us['id']?>"><br> <!-- Поле для передачи id, нужно для удаления отзыва -->
    <button class="admin__button">Удалить</button><!-- Кнопка для удаления отзыва -->    </form>
    </div>
<?php 
    }
} ?>
<?php
include 'footer.php';
    ?>
</body>
</html>