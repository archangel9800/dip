<?php
require_once '../functions.php';
require "auth.php";
$url = $_GET['route'];
$urlSegments = explode('/', $url);
$mas = getArticle($urlSegments);
var_dump($_GET['route']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <link rel="shortcut icon" href="../img/icons/favicon.png" type="image/png">
	<title><?php echo $masA['cat_name']?></title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo BASEURL;?>css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo BASEURL;?>css/basestyle.css"  media="screen,projection"/>
</head>
<body>
<section id="adminka" class="adaptive_container transition">
    <div id="add_remove" class="row">

	  <div  class="add_remove_catalog_img col s12 m8 l6 offset-m2">
          <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Добавление каталога</p>
              <div class="row col s11 m11 l11 offset-s1 offset-m1 offset-l1 lines">
                <div class="input-field col s6">
                  <input id="add_cat" placeholder="Название каталога" type="text" class="validate average_text">
                </div>
                <button id="btn_add_cat" class="col s4 m4 l4 offset-s1 offset-m1 offset-l1 btn waves-effect waves-light average_text" type="submit" name="action">Добавить папку</button>
              </div>
            <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Выберите одну из папок для удаления и добавления папки и фото</p>
           <div class="row col s11 m11 l11 offset-s1 offset-m1 offset-l1 lines list_cat_bl">
                         <ul class="categories_chose col s12 row valign-wrapper">
                              <?php echo showCatalog($mas);
                             ?>
                         </ul>
                         
              </div>
              <button id="rem_cat" class="col s4 m4 l4 offset-s1 offset-m1 offset-l1 btn waves-effect waves-light average_text" type="submit" name="action">Удалить папку</button>
          <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Удаление каталога, удаление изображений и добавление изображений (Макс. 20 за раз)</p>
              <form enctype="multipart/form-data" method="POST" class="row col s10 m12 l11 offset-s1  offset-l1 down_block">
                        <div class="file-field input-field">
                          <div class="btn">
                              <div class="out_bl"><span class="in_bl average_text">File</span></div>
                            <input id="file" name="file[]" type="file" class="average_text" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate average_text" type="text" placeholder="1920x1080 (обяз.)">
                          </div>
                        </div>
                            <div class="input-field col s6">
                              <input id="add_about" placeholder="О фотографии, например горы (обяз.)" type="text" class="validate average_text">
                            </div>
                        <button id="btn_add_img" class="col s4 m4 l4 btn waves-effect waves-light average_text" type="submit" name="action">Добавить изоб.</button>
              </form>
              <p class="row col s10 m12 l11 offset-s1 offset-l1" id="info"></p>
        </div>
      <div class="remove_image col s12 m12 l6">
           <?php echo showPhoto($mas);?>
      </div>	
    </div>
</section>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/materialize.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/swiper.jquery.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/functions.js"></script>	
</body>
</html>