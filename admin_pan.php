<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../app/css/style1.css">
</head>
<body>
    <!-- Шапка сайта -->
    <?php
include 'header.php'; 
    ?>
    <div class="admin__h2"> <!-- Контейнер для заголовка -->
<h2>Заявки пользователей</h2>
</div>
 <!-- Выборка из базы данных для отбражения содержимого на странице -->
  <?php
include '../admin/core.php';
$state = $core ->query("SELECT * FROM `state`");
foreach($state as $st) {
?>
<div class="admin"> <!-- Админ-панель -->
<div class="admin__container">
    <form action="../functions/delete.php" method="post" class="admin__container_form"> <!-- Форма для удаления заявки -->
    <label class="admin__container_fullname" >ФИО: <?=$st['fullname']?></label>
    <label >Номер телефона: <?=$st['phone']?></label>
    <input type="hidden" name='id' value="<?=$st['id']?>"><br> <!-- Поле для передачи id, нужна для удаления заявки -->
    <button class="admin__button">Удалить</button> <!-- Кнопка для удаления заявки -->  
    </form>
    </div>
<?php } ?>
<!-- Подвал сайта -->
    <?php
include 'footer.php';
    ?>
</body>
</html>