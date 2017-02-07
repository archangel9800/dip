<?php

//загружает 10 случайных картинок для с лайдера
function getSliderImg(){
      //соединяюсь с базой
     $myconnect = connectToDb();
    $sql = "SELECT * FROM images_db ORDER BY RAND() LIMIT 10" ;
        $result = mysqli_query($myconnect, $sql);
        $out ='';
        while($row = mysqli_fetch_assoc($result)) {
            $way = 'img/img/categories/'.$row['url'].'/';
            if ($row['img1920x1080'] != ''){
            $out .=
            '<div class="swiper-slide img_wrap">
                    <img alt="'.$row['about'].'" src="'.BASEURL.$way.$row['img960x800'].'" class="img_block">
                </div>';
            }
        };
     closeConnectionToDb($myconnect);
    return $out;
}

function dropdownGenres($mas){
            if($mas['categories'] == 'main' or $mas['categories'] == ''){
            echo 'ВЫБЕРИТЕ РЗДЕЛ';
        }else if($mas['categories'] == 'search'){
            echo 'РАЗДЕЛ: Результаты поиска <span class="yellow_text">'.$_GET['searchval'].'</span>';
        }else{
            echo 'РАЗДЕЛ: <span class="yellow_text">'.$mas['categories'].'</span>';
        }
    
    
    
}


//Добавляет кнопки с категориями и делает одну активную
function getGenres($mas){
    //соединяюсь с базой
//    var_dump( $mas['categories']);
    $myconnect = connectToDb();
    $sql = "SELECT * FROM categories_db WHERE categories != 404 AND categories != 'main' AND categories != 'search' " ;
    $result = mysqli_query($myconnect, $sql);
    $out ='';
    while($row = mysqli_fetch_assoc($result)) {
        if ($row['categories'] == $mas['categories']){
             $out .=
            '<li class="col s3 m3 l2 genres"><a class="average_text active transition" href="'.BASEURL.
            $row['categories'].
            '">'
            .$row['cat_name'].
            '</a></li>';
        }else{
        $out .=
        '<li class="col s3 m3 l2 genres"><a class="average_text transition"  href="'.BASEURL.
            $row['categories'].
            '">'
            .$row['cat_name'].
            '</a></li>';
       }   
    }
     closeConnectionToDb($myconnect);
    return $out;
}




//загружает выбраный раздел картинок
function getAll($mas){
    //соединяюсь с базой
    $myconnect = connectToDb();
    $ress = $mas['categories'];
    // Переменная хранит число сообщений выводимых на станице  
//    echo $ress;
    $num = 12;  
    // Извлекаем из URL текущую страницу  
    $page = $_GET['page'];
    $img = $_GET['img'];
    $size = $_GET['size'];
    if ($ress == ''){
            $out ='';
           $out .=  
            '<div id="block404" class="row">
             <p class="big_text col s4 offset-s4">404</p>
             <p class="big_text col s4 offset-s4">Page not found!</p>
             <img class="big_text col s4 offset-s4" src="'.BASEURL.'img/img/err.png" alt="Page not found">
           </div>';
        echo $out;
    }else if($ress == 'search'){
        
    $num = 12;
    $searchVal = preg_replace ('/[^\p{L}0-9 ]/iu','',$_GET['searchval']);
     $sql = "SELECT COUNT(*) FROM `images_db` WHERE about LIKE '%$searchVal%' ORDER BY id DESC";
        $result = mysqli_query($myconnect, $sql); 
        $posts = mysqli_fetch_assoc($result); 
        // Находим общее число страниц  
        $total = intval(($posts["COUNT(*)"] - 1) / $num) + 1;  
        // Определяем начало сообщений для текущей страницы  
        $page = intval($page);  
        // Если значение $page меньше единицы или отрицательно  
        // переходим на первую страницу  
        // А если слишком большое, то переходим на последнюю  
        if(empty($page) or $page < 0) $page = 1;  
          if($page > $total) $page = $total;  
        // Вычисляем начиная к какого номера  
        // следует выводить сообщения  
        $start = $page * $num - $num;  
        // Выбираем $num сообщений начиная с номера $start  
        $sql2 = "SELECT * FROM `images_db` WHERE about LIKE '%$searchVal%' AND img510x300 != '' LIMIT $start, $num";
        $result2 = mysqli_query($myconnect, $sql2);  
        while ( $postrow[] = mysqli_fetch_array($result2));
        echo '<div class="row" id="imgContent">';
        for($i = 0; $i < $num; $i++){  
        $way = 'img/img/categories/'.$postrow[$i]['url'].'/';  
            if ($postrow[$i] != ''){
                echo ('<div class="col s12 m4 l3 image_gallery transition">
                <div class="for_hight">
                    <div class="for_hight2">
                     <a href="'.BASEURL.$postrow[$i]['url'].'?page='.$page.'&img='.$postrow[$i]['id'].'&size=img1920x1080"></a>
                     <div data-numberimg="'.$postrow[$i]['id'].'" style="background-image: url('."'"
                    .$way.$postrow[$i]['img510x300']."'".
                    ');"></div>
                    </div>
                </div>
              </div>');
            };
        } ; 
        echo '</div>'; 
    // Проверяем нужны ли стрелки назад  
    if ($page != 1) $pervpage = '<a href='.BASEURL.'search'.'?page=1'.'&searchval='.$searchVal.'><<</a>  
                                   <a href= '.BASEURL.'search'.'?page='.($page - 1).'&searchval='.$searchVal.'><</a> ';  
    // Проверяем нужны ли стрелки вперед  
    if ($page != $total) $nextpage = ' <a href='.BASEURL.'search'.'?page='.($page + 1).'&searchval='.$searchVal.'>></a>  
                                       <a href='.BASEURL.'search'.'?page='.$total.'&searchval='.$searchVal.'>>></a>';  

    // Находим две ближайшие станицы с обоих краев, если они есть  
    if($page - 2 > 0) $page2left = ' <a href='.BASEURL.'search'.'?page='.($page - 2).'&searchval='.$searchVal.'>'.($page - 2) .'</a> | ';  
    if($page - 1 > 0) $page1left = '<a href='.BASEURL.'search'.'?page='.($page - 1).'&searchval='.$searchVal.'>'.($page - 1) .'</a> | ';  
    if($page + 2 <= $total) $page2right = ' | <a href='.BASEURL.'search'.'?page='.($page + 2).'&searchval='.$searchVal.'>'. ($page + 2) .'</a>';  
    if($page + 1 <= $total) $page1right = ' | <a href='.BASEURL.'search'.'?page='.($page + 1).'&searchval='.$searchVal.'>'. ($page + 1) .'</a>'; 

    // Вывод меню
    echo '<div id="pag_main">';    
    echo $pervpage.$page2left.$page1left.'<b>';
     if ($page1right != ''){
        echo $page;  
     };        
    echo '</b>'.$page1right.$page2right.$nextpage;      
    echo '</div>'; 
        
        
    }else if($ress == 'main'){
        $sql2 = "SELECT * FROM `images_db` ORDER BY RAND() LIMIT 12";
        $result2 = mysqli_query($myconnect, $sql2);
         echo '<div class="row" id="imgContent">'; 
        while($row = mysqli_fetch_assoc($result2)) {
            $way = 'img/img/categories/'.$row['url'].'/';
            if ($row['img1920x1080'] != ''){
            echo ('<div class="col s12 m4 l3 image_gallery transition">
            <div class="for_hight">
               
                 <a href="'.BASEURL.$row['url'].'?img='.$row['id'].'&size=img1920x1080"></a>
                 <div data-numberimg="'.$row['id'].'" style="background-image: url('."'"
                .$way.$row['img510x300']."'".
                ');"></div>
                
            </div>
          </div>');
            };
        }
        echo '</div>';
    }else if($img != ''){
        
        $sql2 = "SELECT * FROM `images_db` WHERE id = '$img'";
        $result2 = mysqli_query($myconnect, $sql2);
        while($row = mysqli_fetch_assoc($result2)) {
             $way = 'img/img/categories/'.$row['url'].'/';
            echo '<div class="row" id="oneImg">
         <div class="col s12 m12 l2 proportions">
              <p class="average_text">Размеры:</p><ul>';
            
            $sql8 = "SELECT `img2560x1600`,`img1920x1080`,`img1600x900`,`img1024x768`,`img960x800`,`img600x800` FROM images_db WHERE id = '$img'";
//            $sql8 = "SELECT CONCAT('SELECT ',
//                    (SELECT GROUP_CONCAT(COLUMN_NAME)
//                     FROM INFORMATION_SCHEMA.COLUMNS
//                     WHERE 
//                        TABLE_NAME='images_db' AND 
//                        COLUMN_NAME NOT IN ('url','id','about')
//                     ORDER BY ORDINAL_POSITION 
//                    ), ' FROM images_db WHERE `id`=`$img`')";
            
            
            
                $result8 = mysqli_query($myconnect, $sql8);
            while($row2 = mysqli_fetch_assoc($result8)) {
                 foreach ($row2 as $key => $value) {
//                 echo $key.'=>'.$value.'<br />';
                     if($value){
                         echo '<li><a href="'.BASEURL.$row['url'].'?img='.$row['id'].'&size='.$key.'" class="average_text"><span>|</span> '.$key.' <span>|</span></a></li>';
                         
                         
                         
                     } 
                }
            }       
         echo '</ul></div>
          <div class="col s12 m12 l10 img_show">
             <div class="in_img valign-wrapper">
                 <div class="valign">
                      <img alt="'.$row['about'].'"  class="materialboxed forOneImg" alt="#" src="'.BASEURL.$way.$row[$size].'">
                 </div>
             </div>
          </div>
      </div>';
            
        }          
    }else{
        $sql = "SELECT COUNT(*) FROM `images_db` WHERE url = '$ress' ORDER BY id DESC";
        $result = mysqli_query($myconnect, $sql); 
        $posts = mysqli_fetch_assoc($result); 
        // Находим общее число страниц  
        $total = intval(($posts["COUNT(*)"] - 1) / $num) + 1;  
        // Определяем начало сообщений для текущей страницы  
        $page = intval($page);  
        // Если значение $page меньше единицы или отрицательно  
        // переходим на первую страницу  
        // А если слишком большое, то переходим на последнюю  
        if(empty($page) or $page < 0) $page = 1;  
          if($page > $total) $page = $total;  
        // Вычисляем начиная к какого номера  
        // следует выводить сообщения  
        $start = $page * $num - $num;  
        // Выбираем $num сообщений начиная с номера $start  
        $sql2 = "SELECT * FROM `images_db` WHERE url = '$ress' AND img1920x1080 != '' LIMIT $start, $num";
        $result2 = mysqli_query($myconnect, $sql2);  
        while ( $postrow[] = mysqli_fetch_array($result2));
        echo '<div class="row" id="imgContent">';
        for($i = 0; $i < $num; $i++){
         $way = 'img/img/categories/'.$postrow[$i]['url'].'/';
            if ($postrow[$i] != ''){
                echo ('<div class="col s12 m4 l3 image_gallery transition">
                <div class="for_hight">
                    
                     <a href="'.BASEURL.$postrow[$i]['url'].'?page='.$page.'&img='.$postrow[$i]['id'].'&size=img1920x1080"></a>
                     <div data-numberimg="'.$postrow[$i]['id'].'" style="background-image: url('."'"
                    .$way.$postrow[$i]['img510x300']."'".
                    ');"></div>
                   
                </div>
              </div>');
            };
        } ; 
        echo '</div>'; 
    // Проверяем нужны ли стрелки назад  
    if ($page != 1) $pervpage = '<a class="average_text" href='.BASEURL.$ress.'?page=1><<</a>  
                                   <a class="average_text" href= '.BASEURL.$ress.'?page='.($page - 1).'><</a> ';  
    // Проверяем нужны ли стрелки вперед  
    if ($page != $total) $nextpage = ' <a class="average_text" href='.BASEURL.$ress.'?page='.($page + 1).'>></a>  
                                       <a class="average_text" href='.BASEURL.$ress.'?page='.$total. '>>></a>';  
    // Находим две ближайшие станицы с обоих краев, если они есть  
    if($page - 2 > 0) $page2left = ' <a class="average_text" href='.BASEURL.$ress.'?page='.($page - 2).'>'.($page - 2) .'</a> | ';  
    if($page - 1 > 0) $page1left = '<a class="average_text" href='.BASEURL.$ress.'?page='.($page - 1).'>'.($page - 1) .'</a> | ';  
    if($page + 2 <= $total) $page2right = ' | <a class="average_text" href='.BASEURL.$ress.'?page='.($page + 2).'>'. ($page + 2) .'</a>';  
    if($page + 1 <= $total) $page1right = ' | <a class="average_text" href='.BASEURL.$ress.'?page='.($page + 1).'>'. ($page + 1) .'</a>'; 

    // Вывод меню
    echo '<div id="pag_main">';    
    echo $pervpage.$page2left.$page1left.'<b class="average_text">';
     if ($page1right != ''){
        echo $page;  
     };        
    echo '</b>'.$page1right.$page2right.$nextpage;      
    echo '</div>';      
        

};
closeConnectionToDb($myconnect);
};




