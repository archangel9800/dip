<?php

//загружает 10 случайных картинок для с лайдера
function getSliderImg(){
      //соединяюсь с базой
     $myconnect = connectToDb();
    $sql = "SELECT * FROM images_db ORDER BY RAND() LIMIT 10" ;
        $result = mysqli_query($myconnect, $sql);
        $out ='';
        while($row = mysqli_fetch_assoc($result)) {
            $out .=
            '<div class="swiper-slide img_wrap">
                    <img src="'.BASEURL.$row['img1920x1080'].'" class="img_block">
                </div>';
        };
     closeConnectionToDb($myconnect);
    return $out;
}




//Добавляет кнопки с категориями и делает одну активную
function getGenres($mas){
    //соединяюсь с базой
    $myconnect = connectToDb();
    $sql = "SELECT * FROM categories_db WHERE categories != 404 AND categories != 'main' " ;
    $result = mysqli_query($myconnect, $sql);
    $out ='';
    while($row = mysqli_fetch_assoc($result)) {
        if ($row['categories'] == $mas['categories']){
             $out .=
            '<div class="col s3 m3 l2 genres"><a class="active transition" href="'.BASEURL.
            $row['categories'].
            '">'
            .$row['cat_name'].
            '</a></div>';
        }else{
        $out .=
        '<div class="col s3 m3 l2 genres"><a class="transition"  href="'.BASEURL.
            $row['categories'].
            '">'
            .$row['cat_name'].
            '</a></div>';
       }   
    }
     closeConnectionToDb($myconnect);
    return $out;
}


////загружает выбраный раздел картинок
//function getAll($mas){
//    //соединяюсь с базой
//    $myconnect = connectToDb();
//    $ress = $mas['categories'];
//    var_dump($mas);
//    if ($ress == ''){
//            $out ='';
//           $out .=  
//            '<div id="block404" class="row">
//             <p class="big_text col s4 offset-s4">404</p>
//             <p class="big_text col s4 offset-s4">Page not found!</p>
//             <img class="big_text col s4 offset-s4" src="'.BASEURL.'img/img/err.png" alt="Page not found">
//           </div>';
//    }else{
//        $sql = "SELECT * FROM images_db WHERE url = '$ress' ORDER BY id DESC" ;
//        $result = mysqli_query($myconnect, $sql);
//        $out ='';
//        $out .= '<div class="row" id="imgContent">';
//        while($row = mysqli_fetch_assoc($result)) {
//
//            $out .= '<div class="col s12 m4 l3 image_gallery transition">
//            
//            <div class="for_hight">
//                <div class="for_hight2">
//                 <a href="'.BASEURL.$row['url'].'/'.$row['id'].'"></a>
//                 <img numberimg="'.$row['id'].'" style="background-image: url('."'"
//                .$row['img1920x1080']."'".
//                ');">
//                </div>
//            </div>
//          </div>';
//           // <a href="'.BASEURL.$row['url'].'/'.$row['id'].'"></a>
//            
////            $out .= '<div class="col s12 m4 l3 image_gallery">
////                <div class="for_hight">
////                    <div class="for_hight2">
////                        <div class="img_wrap">
////                            <a href="'.$row['url'].'/'.$row['id'].
////                            '"></a>
////                            <img class="img_block" numberimg="'.$row['id'].'" src="'.$row['img1920x1080'].'">
////                        </div>
////                    </div>
////                </div>
////              </div>';
//        };
//       $out .= '</div>'; 
//    }    
//    
//     closeConnectionToDb($myconnect);
//    return $out;
//};





//загружает выбраный раздел картинок
function getAll($mas){
    //соединяюсь с базой
    $myconnect = connectToDb();
    $ress = $mas['categories'];
    // Переменная хранит число сообщений выводимых на станице  
    $num = 12;  
    // Извлекаем из URL текущую страницу  
    $page = $_GET['page'];  
    
//    var_dump($mas);
    if ($ress == ''){
            $out ='';
           $out .=  
            '<div id="block404" class="row">
             <p class="big_text col s4 offset-s4">404</p>
             <p class="big_text col s4 offset-s4">Page not found!</p>
             <img class="big_text col s4 offset-s4" src="'.BASEURL.'img/img/err.png" alt="Page not found">
           </div>';
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
        $sql2 = "SELECT * FROM `images_db` WHERE url = '$ress' LIMIT $start, $num";
        $result2 = mysqli_query($myconnect, $sql2);  
        while ( $postrow[] = mysqli_fetch_array($result2));
        echo '<div class="row" id="imgContent">';
        for($i = 0; $i < $num; $i++){  
            if ($postrow[$i] != ''){
            echo ('<div class="col s12 m4 l3 image_gallery transition">
            <div class="for_hight">
                <div class="for_hight2">
                 <a href="'.BASEURL.$postrow[$i]['url'].'/page?page='.$total.'/img?img='.$postrow[$i]['id'].'"></a>
                 <img numberimg="'.$postrow[$i]['id'].'" style="background-image: url('."'"
                .$postrow[$i]['img1920x1080']."'".
                ');">
                </div>
            </div>
          </div>');
            };
        } ; 
        echo '</div>'; 
        
        
    // Проверяем нужны ли стрелки назад  
    if ($page != 1) $pervpage = '<a href='.BASEURL.$ress.'/page?page=1><<</a>  
                                   <a href= '.BASEURL.$ress.'/page?page='.($page - 1).'><</a> ';  
    // Проверяем нужны ли стрелки вперед  
    if ($page != $total) $nextpage = ' <a href='.BASEURL.$ress.'/page?page='.($page + 1).'>></a>  
                                       <a href='.BASEURL.$ress.'/page?page='.$total. '>>></a>';  

    // Находим две ближайшие станицы с обоих краев, если они есть  
    if($page - 2 > 0) $page2left = ' <a href='.BASEURL.$ress.'/page?page='.($page - 2).'>'.($page - 2) .'</a> | ';  
    if($page - 1 > 0) $page1left = '<a href='.BASEURL.$ress.'/page?page='.($page - 1).'>'.($page - 1) .'</a> | ';  
    if($page + 2 <= $total) $page2right = ' | <a href='.BASEURL.$ress.'/page?page='.($page + 2).'>'. ($page + 2) .'</a>';  
    if($page + 1 <= $total) $page1right = ' | <a href='.BASEURL.$ress.'/page?page='.($page + 1).'>'. ($page + 1) .'</a>'; 

    // Вывод меню
    echo '<div id="pag_main">';    
    echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;      
    echo '</div>';      
        

};
closeConnectionToDb($myconnect);
};




























switch ( $_POST['action'] )
{   case 'oneImg':
        oneImg();
        break;
    
}



function oneImg(){
   $oneImg = $_POST['oneImg'];
//    echo $oneImg;   
    $myconnect = connectToDb();
    $sql = "SELECT * FROM images_db WHERE id = $oneImg" ;
        $result = mysqli_query($myconnect, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            $page = '';
            $fh = fopen('./includes/oneImg.php','r') or die($php_errormsg);
            while (! feof($fh)) {
            $page .= fread($fh,1048576);
            }
            fclose($fh);
        };
     closeConnectionToDb($myconnect);
    echo $page;
    
    
       
};





