<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <link rel="shortcut icon" href="img/icons/favicon.png" type="image/png">
	<title>Colorful Gallery</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/basestyle.css"  media="screen,projection"/>
</head>
<body>

	<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="header" class="row valign-wrapper adaptive_container">
    <div class="col s5 m7 l3 logo_block">
        <h1 class=""><a href="#"><img src="img/icons/logo2.png" alt="colorful gallery"></a></h1>
        <h2 class="big_text">Ваша галерея обоев и картинок</h2>
    </div>
    <div id="s_slider" class="col s0 m0 l5">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide img_wrap">
                    <img src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (2).png" class="img_block">
                </div>
                <div class="swiper-slide img_wrap">
                    <img src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (3).png" class="img_block">
                </div>
                <div class="swiper-slide img_wrap">
                    <img src="img/img/Material-Design-17.jpg" class="img_block">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
    <div class="col s6 m4 l3 login_block">
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
    
    <div class="col s6 m4 l3 user_block">
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
</section>
<!--  !!!!!!!!!!END!!!!!!!!!!-->
	<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="menu">
  <ul class="btn_menu">
    <li class="mobile_m menu_text">MENU</li>
     <ul class='tabss'>
       <li class="n_mibile"><a href="#" class="menu_text active">Общий альбом</a></li>
       <li class="n_mibile"><a href="#" class="menu_text">Мой альбом</a></li>
       <li class="n_mibile"><a href="#" class="menu_text">Кнопа 3</a></li>
   </ul> 
  </ul>
   
    
</section>
<!-- !!!!!!!!!!END!!!!!!!!!!-->











	<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="genre_w" class="row adaptive_container">
  <div class="genre col s12 row">
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
  </div>
</section>
<!-- !!!!!!!!!!END!!!!!!!!!!-->
	<section id="content" class="adaptive_container">
     
     
     <div id="block404" class="row">
         <p class="big_text col s4 offset-s4">404</p>
         <p class="big_text col s4 offset-s4">Page not found!</p>
     </div>
     
     
      <div class="row" id="imgContent">       
        <div class="col s12 m4 l3 image_gallery">
            <div class="for_hight">
                <div class="for_hight2">
                    <div class="img_wrap">
                        <img class="img_block" src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                    </div>
                </div>
            </div>
         </div>
          <div class="col s12 m4 l3 image_gallery">
            <div class="for_hight">
                <div class="for_hight2">
                    <div class="img_wrap">
                        <img class="img_block" src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                    </div>
                </div>
            </div>
         </div>
          <div class="col s12 m4 l3 image_gallery">
            <div class="for_hight">
                <div class="for_hight2">
                    <div class="img_wrap">
                        <img class="img_block" src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                    </div>
                </div>
            </div>
         </div>
          <div class="col s12 m4 l3 image_gallery">
            <div class="for_hight">
                <div class="for_hight2">
                    <div class="img_wrap">
                        <img class="img_block" src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                    </div>
                </div>
            </div>
         </div>
          <div class="col s12 m4 l3 image_gallery">
            <div class="for_hight">
                <div class="for_hight2">
                    <div class="img_wrap">
                        <img class="img_block" src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                    </div>
                </div>
            </div>
         </div>
          <div class="col s12 m4 l3 image_gallery">
            <div class="for_hight">
                <div class="for_hight2">
                    <div class="img_wrap">
                        <img class="img_block" src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                    </div>
                </div>
            </div>
         </div>
      </div>
      
      
      
      
      
      <div class="row" id="oneImg">
         <div class="col s12 m12 l2 proportions">
              <p class="average_text">Размеры:</p>
              <a href="#" class="average_text">1920x1080 | </a> 
              <a href="#" class="average_text">1024x768 | </a> 
              <a href="#" class="average_text">600x800 | </a> 
          </div>
          <div class="col s12 m12 l10 img_show">
             <div class="in_img valign-wrapper">
                 <div class="valign">
                      <img class="materialboxed" alt="#" src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (2).png">
                 </div>
             </div>
          </div>
          
          
      </div>
      
      
      
      
      
      <div class="row" id="registr">
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
<section id="footer" class="adaptive_container">
   
    
</section>
<!-- !!!!!!!!!!END!!!!!!!!!!-->
	
	
	
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/materialize.js"></script>
	<script type="text/javascript" src="js/swiper.jquery.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>	
</body>
</html>