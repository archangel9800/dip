<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="header" class="row valign-wrapper adaptive_container">
    <div class="col s5 m7 l3 logo_block">
        <h1 class=""><a href="main"><img src="img/icons/logo2.png" alt="colorful gallery"></a></h1>
        <h2 class="big_text">Ваша галерея обоев и картинок</h2>
    </div>
    <div id="s_slider" class="col s0 m0 l5">
        <div class="swiper-container">
            <div class="swiper-wrapper">
            
            <?php echo getSliderImg(); ?>
<!--
                <div class="swiper-slide img_wrap">
                    <img src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (2).png" class="img_block">
                </div>
                <div class="swiper-slide img_wrap">
                    <img src="img/img/Material_Design_Wallpaper_WALLPAPERDNA (3).png" class="img_block">
                </div>
                <div class="swiper-slide img_wrap">
                    <img src="img/img/Material-Design-17.jpg" class="img_block">
                </div>
-->
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