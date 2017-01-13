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
        <div class="add_remove_catalog_img col s6">
          <p class="average_text col s11 m11 l11 offset-s1 offset-m1 offset-l1">Добавление каталога</p>
              <div class="row col s11 m11 l11 offset-s1 offset-m1 offset-l1 lines">
                <div class="input-field col s6">
                  <input id="email" placeholder="Название каталога" type="text" class="validate average_text">
                </div>
                <button class="col s4 m4 l4 offset-s1 offset-m1 offset-l1 btn waves-effect waves-light average_text" type="submit" name="action">Добавить</button>
              </div>
          <p class="average_text col s11 m11 l11 offset-s1 offset-m1 offset-l1">Удаление каталога</p>
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
          
          
          <p class="average_text col s11 m11 l11 offset-s1 offset-m1 offset-l1">Добавление изображений</p>
              <div class="row col s11 m11 l11 offset-s1 offset-m1 offset-l1 lines">
                     
                        <div class="file-field input-field row">
                          
                         
                         
                         
                         
                         
                          <div class="btn">
                            <p>File</p>
                            <input type="file" multiple>
                          </div>
                          <div class="file-path-wrapper row">
                            <input class="file-path validate col s12" type="text" placeholder="Upload one or more files">
                          </div>
                        </div>
                      
              </div>
          
          
          
        </div>
        
        
        
        <div class="show_remove_image">
            
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