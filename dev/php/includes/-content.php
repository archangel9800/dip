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