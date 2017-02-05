<!--  !!!!!!!!!!START!!!!!!!!!!-->
<section id="genre_w" class="row adaptive_container transition valign-wrapper">
 
   <div class="col s8 m6 l4 push-s2 push-m6 push-l8 row transition search valign-wrapper">
        <div class="input-field col s8 m8 l8">
          <input id="search_field" type="text" placeholder="Например BMW" class="validate average_text">
        </div>
        <div class="btn-block col s4 valign">
             <button id="search_btn" class="btn waves-effect waves-light average_text" type="submit" name="action">Найти
             </button>
        </div>
      </div>
 
  <div class="genre col s8 m5 l4 push-s4 pull-m6 pull-l4 row transition valign">
   <a class="btn dropdown-button average_text" href="#!" data-activates="dropdown_cat"> <?php echo dropdownGenres($mas); ?><i class="average_text material-icons mdi-navigation-arrow-drop-down right">&#xE5C5;</i></a>
      <ul id="dropdown_cat" class="transition dropdown-content">
        <?php echo getGenres($mas); ?>
      </ul>
  </div>

      
</section>
<!-- !!!!!!!!!!END!!!!!!!!!!-->