<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <link rel="stylesheet" href="app/css/style1.css?v=7">
    
</head>
<body>
    <?php
include $_SERVER['DOCUMENT_ROOT'] . '/assets/components/header.php'; 
    ?>
    <!-- Авторизация с помощью модального окна -->
    <div class="modal fade" id="authModal"><!-- Модальное окно -->
      <img class='cross' src="app/img/cross.svg" alt=""><!-- Крестик закрытия модального окна -->
  <div class="modal-dialog modal-dialog-centered"> <!-- Стили модального окна -->
    <div class="modal-content"><!-- Содержимое модального окна -->
      <div class="modal-header"><!-- Заголовок модального окна -->
        <h2 class="modal-title fs-5" id="exampleModalToggleLabel">АВТОРИЗАЦИЯ</h2><br><br>
        <form action="assets/functions/auth.php" method="post"> <!-- Форма авторизации -->
      
       <input type="text" class='modal_input' name="login" placeholder="Введите логин"><br>
     
       <input type="password" class='modal_input' placeholder="Введите пароль" name="password"><br>
      <button class="modal_button">Войти</button>
      <!-- Сообщение об ошибке -->
    <div class='modal__error'> 
      <?php 
      if(isset($_SESSION['error'])) {
        echo $_SESSION['error'];
      }
      ?>
      </div>
       </form>
      </div>
      
      <div class="modal-footer"> 
        
      </div>
    </div>
  </div>
</div>
<div class="modal-2 fade" id="reviewModal">
      <img class='cross-2' src="app/img/cross.svg" alt="">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="exampleModalToggleLabel">Оставьте отзыв</h2><br><br>
        <form action="assets/functions/comm.php" method="post">
      
       <input type="text" class='modal_input' name="login" placeholder="Введите логин"><br>
       
     
       <textarea name="comm" class="comm" placeholder ="Напишите свой отзыв"></textarea><br>
       <label for="">Поставьте оценку</label>
       <div class="rating-area">
	<input type="radio" id="star-5" name="rating" value="5">
	<label for="star-5" title="Оценка «5»"></label>	
	<input type="radio" id="star-4" name="rating" value="4">
	<label for="star-4" title="Оценка «4»"></label>    
	<input type="radio" id="star-3" name="rating" value="3">
	<label for="star-3" title="Оценка «3»"></label>  
	<input type="radio" id="star-2" name="rating" value="2">
	<label for="star-2" title="Оценка «2»"></label>    
	<input type="radio" id="star-1" name="rating" value="1">
	<label forb="star-1" title="Оценка «1»"></label>
</div><br>
      <button class="modal_button">Отправить</button>
       </form>
      </div>
      
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
    <main class="main">
   
   
      <div class="main__container">

  <h2 class="main__h2">Услуги предоставляемые компанией «Центр кадастровых решений»</h2>
    <p class="main__container_p">Компания «Центр кадастровых решений» предоставляет полный спектр профессиональных услуг в области оформления недвижимости, земельных отношений и геодезических изысканий.Благодаря использованию высокоточного оборудования и глубокому знанию актуального законодательства, компания гарантирует корректность данных для постановки объектов на государственный учет в Росреестре. <br><br> «Центр кадастровых решений» ориентирован на комплексное сопровождение клиентов — от проведения полевых измерений до получения готовых выписок из ЕГРН, обеспечивая юридическую чистоту и соблюдение кратчайших сроков при оформлении жилых домов, коммерческих зданий и земельных наделов.</p>
  
    
    <a href="#stats"><button class="main__container_button">Оставить заявку</button></a>
    </div> 
    </main>
    <main class="main-2">
    
<h2 class="main-2__h2">СХЕМА РАБОТЫ</h2>
<div class="main-2__container">
  <div class="main-2__container__block">
    <img class="main-2__block_png" src="app/img/phone_4070278.png" alt="">
    <p class="main-2__block__p">Позвоните или напишите нам</p>
  </div>
  <img class="arrow" src="app/img/icons8-arrow-right-50.png" alt="">
<div class="main-2__container__block">
<img class="main-2__block_png" src="app/img/car_10448293.png" alt="">
<p class="main-2__block__p">Приедет кадастровый инженер</p>
  </div> 
  <img class="arrow" src="app/img/icons8-arrow-right-50.png" alt="">
  <div class="main-2__container__block">
  <img class="main-2__block_png" src="app/img/file_1782722.png" alt="">
  <p class="main-2__block__p">ВЫ подпишите договор</p>
  </div>
  <img class="arrow" src="app/img/icons8-arrow-right-50.png" alt="">
  <div class="main-2__container__block">
  <img class="main-2__block_png" src="app/img/pen_6538947.png" alt="">
  <p class="main-2__block__p">Оформление межевого плана для компании </p>
  </div>
</div>
    </main>
    <main class="main-3">
      <h2 class="main-3__h2">НАШИ ДОКУМЕНТЫ</h2>
      <div class="main-3__container">
      <a href="app/img/okis.jpg" data-fancybox="gallery">
<img class="main-3__container_img" src="/app/img/okis.jpg" >
</a>
<a href="app/img/att.jpg" data-fancybox="gallery">
<img class="main-3__container_img" src="/app/img/att.jpg">
</a>
      </div>
    </main>
<main class="main-4">
<div class="main-4__container">
<div class="main-4__container_block-2">
  <form id="stats" class="main__block-2_form" action="assets/functions/state.php" method="post">
  <h3 class="main-4__block-2_h3">Оставьте свои контактные данные для дальнейшего сотрудничества</h3><br>
  <input class="text-field__input" type="text" name="fullname" id="fullname" pattern="^[А-Яа-яЁё]+ [А-Яа-яЁё]+(?: [А-Яа-яЁё]+)*$"  placeholder="Введите ФИО" required ><br>
<input required class="text-field__input" type="tel" name="phone" id="phone" placeholder="Введите номер телефона"><br><br>
<input required class="main-4__block-2_check" type="checkbox"><label class="main-4__block-2_label-1" for="">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных»</label><br><br>
<input  required  class="main-4__block-2_check" type="checkbox"><label class="main-4__block-2_label-1"  for="">Нажимая на кнопку, я принимаю условия соглашения.</label><br><br>
<button class="main-4__block-2_button">Отправить</button>
  </form>
  </div>
</div>
</main>
<main class='main-5'>
  <h2 class="main-5__h2">Отзывы пользователей</h2>

 
  <div class="slider-container">
    <button class="slider-btn prev-btn" id="prevBtn">&lt;</button>

    <div class="reviews-wrapper" id="reviewsWrapper">
      <div class="reviews-track" id="reviewsTrack">
        <?php
        include 'assets/admin/core.php';
        $product = $core->query("SELECT * FROM `user`");
        $reviews = array();
        foreach($product as $prod) { 
          if($prod['login'] !== 'admin') {
            $reviews[] = $prod;
          }
        }
        foreach($reviews as $prod) { 
        ?>
          <div class="main-5__container_block">
            <p class="main-5__block_date"><?= htmlspecialchars($prod['datetime']) ?></p>
            <h2 class="main-5__block_name"><?= htmlspecialchars($prod['login']) ?></h2>
            <p class="main-5__block_comm"><?= htmlspecialchars($prod['comm']) ?></p>
            <h3>Оценка: <?= (int)$prod['estimation'] ?>/5</h3>
          </div>
        <?php } ?>
      </div>
    </div>

    <button class="slider-btn next-btn" id="nextBtn">&gt;</button>
  </div>

  <div class="main-5__container_block-2">
    <button class='modal-button'>Написать свой отзыв</button>
  </div>
</main>
      <?php
include "assets/components/footer.php";
?>  


  <script src="app/js/jquery-3.6.0.min.js"></script>
<script src="app/js/jquery.inputmask.min.js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script src="app/js/main.js?v=7"></script>

<script>
  $(document).ready(function() {
    $("#phone").inputmask("+7 (999) 999-99-99", {
      placeholder: "_",
      clearIncomplete: true,
    });
  });

  Fancybox.bind("[data-fancybox]", {
    infinite: true,
    transitionEffect: "fade"
  });
</script>
</body>
</html>
