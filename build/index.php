<?php
require_once 'functions.php';
$url = $_GET['route'];
$urlSegments = explode('/', $url);
$mas = getArticle($urlSegments);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <link rel="shortcut icon" href="<?php echo BASEURL;?>img/icons/favicon.png" type="image/png">
	<title><?php echo $mas['cat_name']?></title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo BASEURL;?>css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo BASEURL;?>css/basestyle.css"  media="screen,projection"/>
</head>
<body>
<div id="main_wrapper">

	<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="header" class="row valign-wrapper adaptive_container transition">
    <div class="col s11 m5 l5 logo_block">
        <h1 class=""><a href="main"><img src="<?php echo BASEURL;?>img/icons/logo2.png" alt="colorful gallery" class="transition"></a></h1>
        <h2 class="big_text">Ваша галерея обоев и картинок</h2>
    </div>
    <div id="s_slider" class="col s0 m6 l6 transition">
        <div class="swiper-container">
            <div class="swiper-wrapper">
            
            <?php echo getSliderImg(); ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
<!--
    <div class="col s6 m4 l3 login_block transition">
        <p class="average_text">Войти или <a href="#" class="average_text">зарегистрироваться</a></p>
        <div class="row login_f">
            <div class="input-field col s11">
                <input id="email" placeholder="Email или логин" type="email" class="validate average_text">
            </div>
        </div>
        <div class="row login_f">
            <div class="input-field col s11">
                <input id="password" placeholder="Пароль" type="password" class="validate average_text">
            </div>
        </div>
        <div class="row serch_field">
            <div class="input-field col s8">
                <input id="serch" placeholder="Поиск" type="text" class="validate average_text">
            </div>
            <div class="button-field col s4 valign-wrapper">
                <button class="btn waves-effect waves-light average_text valign" type="submit" name="action">НАЙТИ
                </button>
            </div>
        </div>
    </div>
    
    <div class="col s6 m4 l3 user_block transition">
       
        <div class="row cab">
            <p class="col s7 average_text">Личный кабинет</p>
            <a href="#" class="col s5 average_text">Выход</a>
        </div>
        <div class="row user_cab">
            <div class="avatar col s5 img_wrap">
                <img class="img_block" src="img/img/noavatar.png" alt="avatar">
            </div>
            <div class="cab_block col s6">
                <ul>
                    <li> <a href="#">Сообщения</a></li>
                    <li> <a href="#">Комментарии</a></li>
                    <li> <a href="#">Мои альбомы</a></li>
                    <li> <a href="#">Мои общие изображения </a></li>
                    <li> <a href="#">Личные данные</a></li>
                </ul>
            </div>
        </div>
    </div>
-->
</section>
<!--  !!!!!!!!!!END!!!!!!!!!!-->
	<!--  !!!!!!!!!!START!!!!!!!!!!-->
<!--
<section id="menu" class="transition">
  <ul class="btn_menu">
    <li class="mobile_m menu_text transition">MENU</li>
     <ul class='tabss'>
       <li class="n_mibile"><a href="#" class="menu_text active transition">Общий альбом</a></li>
       <li class="n_mibile"><a href="#" class="menu_text transition">Мой альбом</a></li>
       <li class="n_mibile"><a href="#" class="menu_text transition">Кнопа 3</a></li>
   </ul> 
  </ul>
   
    
</section>
-->
<!-- !!!!!!!!!!END!!!!!!!!!!-->











	<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="genre_w" class="row adaptive_container transition valign-wrapper">
  <div class="genre col s12 m8 l8 row transition valign">
     <?php echo getGenres($mas); ?>
<!--
      <div class="col s3 m2 l2 genres"><a class='active' href="#">Красивые</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">3D - обои</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">Новый год</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">Животные</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">Автомобили</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">Авиация</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">Мотоциклы</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">ЖД</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">Природа</a></div>
      <div class="col s3 m2 l2 genres"><a href="#">Цветы</a></div>
-->
 
 
  </div>
  <div class="col s9 m7 l4 push-s3 row transition search valign-wrapper">
        <div class="input-field col s8 m8 l8">
          <input id="search_field" type="text" placeholder="Например BMW" class="validate average_text">
        </div>
        <div class="btn-block col s4 valign">
             <button id="search_btn" class="btn waves-effect waves-light average_text" type="submit" name="action">Найти
             </button>
        </div>
      </div>
</section>
<!-- !!!!!!!!!!END!!!!!!!!!!-->
	<section id="content" class="adaptive_container transition">
     

     <?php echo getAll($mas); ?>


      <div class="row transition" id="registr">
        <p class="fill_inp average_text">Заполните поля для регистрации</p>
        <div class="row lines col s11 offset-s1 offset-m1 offset-l1 valign-wrapper">
            <div class="input-field col s7 m7 l7">
              <input id="name" type="text" placeholder="Логин" class="validate average_text">
            </div>
            <p class="col s5 m5 l5 error average_text valign">Недопустимый логин!</p>
        </div>
        <div class="row lines col s11 offset-s1 offset-m1 offset-l1 valign-wrapper">
            <div class="input-field col s7 m7 l7">
                <input id="password" type="password" placeholder="Пароль" class="validate average_text">
            </div>
            <p class="col s5 m5 l5 error average_text valign">Недопустимый пароль!</p>
        </div>
        <div class="row lines col s11 offset-s1 offset-m1 offset-l1 valign-wrapper">
            <div class="input-field col s7 m7 l7">
                <input id="cnf_password" type="password" placeholder="Подтвердите пароль" class="validate average_text">
            </div>
            <p class="col s5 m5 l5 error average_text valign">Пароли не идентичны!</p>
        </div>
        <div class="row lines col s11 offset-s1 offset-m1 offset-l1 valign-wrapper">
          <div class="input-field col s7 m7 l7">
            <input id="email" type="email" placeholder="Email" class="validate average_text">
          </div>
          <p class="col s5 m5 l5 error average_text valign">Недопустимый Email!</p>
        </div>  
        
        <div class="check col s11 offset-s1 valign-wrapper">
            <label class="valign">
              <input type="checkbox" hidden><span></span>
            </label>
            <p class="average_text">Согласен с <a href="#" class="average_text">правилами</a></p>
        </div>
        <div class="row btn_line col s10 m10 l10 offset-s1 offset-m1 offset-l1">
            <button class="average_text btn waves-effect waves-light col s6 offset-s3" type="submit" name="action">Отправить</button>  
        </div>
      </div>
      
      
      
      
      
</section>
	<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="footer" class="adaptive_container transition valign-wrapper">
   
   <p class="valign average_text">2017, Ivan Levcovets</p> 
</section>
<!-- !!!!!!!!!!END!!!!!!!!!!-->
	
	
</div>	
	<script type="text/javascript" src="<?php echo BASEURL;?>js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/materialize.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/swiper.jquery.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/functions.js"></script>	
</body>
</html>