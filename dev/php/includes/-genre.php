<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="genre_w" class="row adaptive_container transition valign-wrapper">
  <div class="genre col s12 m8 l8 row transition valign">
     <?php echo getGenres($mas); ?>
 
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