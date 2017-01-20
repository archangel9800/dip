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
          <input id="serch_field" type="text" placeholder="Например BMW" class="validate average_text">
        </div>
        <div class="btn-block col s4 valign">
             <button class="btn waves-effect waves-light average_text" type="submit" name="action">Найти
             </button>
        </div>
      </div>
</section>
<!-- !!!!!!!!!!END!!!!!!!!!!-->