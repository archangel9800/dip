<?php
require_once './../functions.php';
require "auth.php";
$url = $_GET['route'];
$urlSegments = explode('/', $url);
$mas = getArticle($urlSegments);
//var_dump($_GET['route']);
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
<div id="main_wrapper">
<section id="adminka" class="adaptive_container transition">
    <div id="add_remove" class="row">
	  <div  class="add_remove_catalog_img col s12 m8 l6 offset-m2">
          <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Добавление раздела</p>
              <div class="row col s11 m11 l11 offset-s1 offset-m1 offset-l1 lines">
                <div class="input-field col s6">
                  <input id="add_cat" placeholder="Название каталога" type="text" class="validate average_text">
                </div>
                <button id="btn_add_cat" class="col s4 m4 l4 offset-s1 offset-m1 offset-l1 btn waves-effect waves-light average_text" type="submit" name="action">Добавить раздел</button>
              </div>
            <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Выберите один из разделов для удаления и добавления раздела и фото</p>
           <div class="row col s6 m6 l6 offset-s1 offset-m1 offset-l1 list_cat_bl">
            <a class="btn dropdown-button average_text" href="#!" data-activates="dropdown_cat_adm"> <?php echo dropdownCatalog($mas); ?><i class="average_text material-icons mdi-navigation-arrow-drop-down right">&#xE5C5;</i></a>
              <ul id="dropdown_cat_adm" class="transition dropdown-content">
                <?php echo showCatalog($mas); ?>
              </ul>            
              </div>
              <button id="rem_cat" class="col s4 m4 l4 btn waves-effect waves-light average_text" type="submit" name="action">Удалить раздел</button>
          <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Удаление изображений и добавление изображений</p>
              <form enctype="multipart/form-data" method="POST" class="row col s10 m12 l11 offset-s1  offset-l1 down_block ">
                        <div class="file-field input-field">
                          <div class="btn">
                              <div class="out_bl"><span class="in_bl average_text">File</span></div>
                            <input id="file" name="file[]" type="file" class="average_text" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate average_text" type="text" placeholder="Не бльше 2560x1600, 10 шт. и широкий формат">
                          </div>
                        </div>
                            <div class="input-field about-field col s6">
                              <input id="add_about" placeholder="О фотографии, например горы (обяз.)" type="text" class="validate average_text">
                            </div>
                        <button id="btn_add_img" class="col s4 m4 l4 offset-s1 offset-m1 offset-l1 btn waves-effect waves-light average_text clear-fix" type="submit" name="action">Добавить изоб.</button>
                    <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="none">
                          <label class="average_text" for="none">Без фильтра (По умолчанию)</label>
                        </div>
                    </div>
                    <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="negative" value="NEGATE">
                          <label class="average_text" for="negative">Негатив</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/negative.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div>
                    <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="grayscale" value="GRAYSCALE">
                          <label class="average_text" for="grayscale">Градация серого</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/graysale.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div>
                    <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="lsepiya" value="LSEPIYA">
                          <label class="average_text" for="lsepiya">Легкая сепия</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/sepia.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div>
                       <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="efpict" value="EFPICT">
                          <label class="average_text" for="efpict">Эффект рисунка</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/drawing.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div>
                       <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="emboss" value="EMBOSS">
                          <label class="average_text" for="emboss">Рельефное фото</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/relief.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div>
                    <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="mirror" value="MIRROR">
                          <label class="average_text" for="mirror">Зеркальное отображение</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/mirror.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div>
                    <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="blw" value="BLW">
                          <label class="average_text" for="blw">Черное и белое</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/blackwhite.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div> 
                    <div class="filters row col s12">
                        <div class="left col s8 checkbox"> 
                          <input class="average_text" name="filters" type="radio" id="pixelate" value="PIXELATE">
                          <label class="average_text" for="pixelate">Пикселизация</label>
                        </div>   
                        <ul class="collapsible example left col s4" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header transition">
                            <i class="material-icons average_text">&#xE5C5;</i>
                            <span class="average_text">Пример</span></div>
                            <div class="collapsible-body">
                                <img src="<?php echo BASEURL;?>img/img/filters/pixelate.jpg" alt="negative">
                            </div>
                          </li>
                        </ul>
                    </div>
              </form>
              <p class="row col s10 m12 l11 offset-s1 offset-l1" id="info"></p>
        </div>
      <div class="remove_image col s12 m12 l6">
           <?php echo showPhoto($mas);?>
      </div>	
    </div>
     <a class="logout average_text" href="admin.php?do=logout">Выход</a>
     
</section>
</div>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/materialize.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/swiper.jquery.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/functions.js"></script>	
</body>
</html>