<?php
require_once '../functions.php';
$route = $_GET['route'];

$mas = getArticle($route);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <link rel="shortcut icon" href="../img/icons/favicon.png" type="image/png">
	<title><?php echo $mas['cat_name']?></title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="../css/basestyle.css"  media="screen,projection"/>
</head>
<body>

		<section id="adminka" class="adaptive_container">
    <div id="add_remove" class="row">
       
        <div class="add_remove_catalog_img col s12 m8 l6 offset-m2">
          <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Добавление каталога</p>
              <div class="row col s11 m11 l11 offset-s1 offset-m1 offset-l1 lines">
                <div class="input-field col s6">
                  <input id="email" placeholder="Название каталога" type="text" class="validate average_text">
                </div>
                <button class="col s4 m4 l4 offset-s1 offset-m1 offset-l1 btn waves-effect waves-light average_text" type="submit" name="action">Добавить</button>
              </div>
          <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Удаление каталога</p>
           <div class="row col s11 m11 l11 offset-s1 offset-m1 offset-l1 lines">
                    <div class="input-field col s6">
                        <select  class="list average_text">
                          <option class="average_text" value="" disabled selected>Выберите альбом</option>
                          <option class="average_text" value="1">Option 1</option>
                          <option class="average_text" value="2">Option 2</option>
                          <option class="average_text" value="3">Option 3</option>
                        </select>
                  </div>
                <button class="col s4 m4 l4 offset-s1 offset-m1 offset-l1 btn waves-effect waves-light average_text" type="submit" name="action">Удалить</button>
              </div>
          <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Добавление изображений</p>
              <div class="row col s10 m12 l11 offset-s1  offset-l1 down_block">
                        <div class="file-field input-field">
                          <div class="btn">
                              <div class="out_bl"><span class="in_bl average_text">File</span></div>
                            <input type="file" class="average_text" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate average_text" type="text" placeholder="1920x1080">
                          </div>
                        </div>
                        <div class="file-field input-field">
                          <div class="btn">
                              <div class="out_bl"><span class="in_bl average_text">File</span></div>
                            <input type="file" class="average_text" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate average_text" type="text" placeholder="1024x768">
                          </div>
                        </div>
                        <div class="file-field input-field">
                          <div class="btn">
                              <div class="out_bl"><span class="in_bl average_text">File</span></div>
                            <input type="file" class="average_text" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate average_text" type="text" placeholder="960x800">
                          </div>
                        </div>
              </div>
              <p class="average_text col s10 m12 l11 offset-s1  offset-l1">Удаление изображений</p>
              <p class="average_text col s10 m12 l11 offset-s1  offset-l1 no_b">Выберите альбом и удалите изображение в отдельном окне</p>
            <div class="row col s10 m12 l11 offset-s1  offset-l1 lines">
                    <div class="input-field col s6">
                        <select size="2" class="list average_text">
                          <option class="average_text" value="" disabled selected>Выберите альбом </option>
                          <option class="average_text" value="1">Option 1</option>
                          <option class="average_text" value="2">Option 2</option>
                          <option class="average_text" value="3">Option 3</option>
                           <option class="average_text" value="1">Option 1</option>
                          <option class="average_text" value="2">Option 2</option>
                          <option class="average_text" value="3">Option 3</option>
                           <option class="average_text" value="1">Option 1</option>
                          <option class="average_text" value="2">Option 2</option>
                          <option class="average_text" value="3">Option 3</option>
                           <option class="average_text" value="1">Option 1</option>
                          <option class="average_text" value="2">Option 2</option>
                          <option class="average_text" value="3">Option 3</option>
                        </select>
                  </div>
              </div>
        </div>
           
            <div class="remove_image col s12 m12 l6">
              <div class="row" id="imgContent">       
                <div class="col s6 m4 l4 image_gallery">
                    <div class="for_hight">
                    <p class="remove_btn">×</p>
                        <div class="for_hight2">
                            <div class="img_wrap">
                                <img class="img_block" src="../img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col s6 m4 l4 image_gallery">
                    <div class="for_hight">
                    <p class="remove_btn">×</p>
                        <div class="for_hight2">
                            <div class="img_wrap">
                                <img class="img_block" src="../img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col s6 m4 l4 image_gallery">
                    <div class="for_hight">
                    <p class="remove_btn">×</p>
                        <div class="for_hight2">
                            <div class="img_wrap">
                                <img class="img_block" src="../img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                            </div>
                        </div>
                    </div>
                  </div>
                   <div class="col s6 m4 l4 image_gallery">
                    <div class="for_hight">
                    <p class="remove_btn">×</p>
                        <div class="for_hight2">
                            <div class="img_wrap">
                                <img class="img_block" src="../img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                            </div>
                        </div>
                    </div>
                  </div>
                   <div class="col s6 m4 l4 image_gallery">
                    <div class="for_hight">
                    <p class="remove_btn">×</p>
                        <div class="for_hight2">
                            <div class="img_wrap">
                                <img class="img_block" src="../img/img/Material_Design_Wallpaper_WALLPAPERDNA (1).png">
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        
    
    
    
    
    
    
     <div class="row admin_login">
          <div class="col s6 m4 l4 offset-s3 offset-m4 offset-l4"><p class="average_text">Введите пароль и логин</p></div>
          <div class="row col s6 m4 l4 offset-s3 offset-m4 offset-l4 lines">
            <div class="input-field col s12">
              <input id="password" placeholder="Пароль" type="password" class="validate average_text">
            </div>
          </div>
          <div class="row col s6 m4 l4 offset-s3 offset-m4 offset-l4 lines">
            <div class="input-field col s12">
              <input id="email" placeholder="Логин" type="text" class="validate average_text">
            </div>
          </div>
          <button class="col s2 m2 l2 offset-s5 offset-m5 offset-l5 btn waves-effect waves-light average_text" type="submit" name="action">Submit</button>
     </div>


</section>
	 
	
	
	
	<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script type="text/javascript" src="../js/swiper.jquery.js"></script>
	<script type="text/javascript" src="../js/functions.js"></script>	
</body>
</html>