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