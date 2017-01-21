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


//загружает выбраный раздел картинок
function getAll($mas){
    //соединяюсь с базой
    $myconnect = connectToDb();
    $ress = $mas['categories'];
    var_dump($mas);
    if ($ress == ''){
            $out ='';
           $out .=  
            '<div id="block404" class="row">
             <p class="big_text col s4 offset-s4">404</p>
             <p class="big_text col s4 offset-s4">Page not found!</p>
             <img class="big_text col s4 offset-s4" src="'.BASEURL.'img/img/err.png" alt="Page not found">
           </div>';
    }else{
        $sql = "SELECT * FROM images_db WHERE url = '$ress' ORDER BY id DESC" ;
        $result = mysqli_query($myconnect, $sql);
        $out ='';
        $out .= '<div class="row" id="imgContent">';
        while($row = mysqli_fetch_assoc($result)) {

            $out .= '<div class="col s12 m4 l3 image_gallery transition">
            
            <div class="for_hight">
                <div class="for_hight2">
                 <a href="'.BASEURL.$row['url'].'/'.$row['id'].'"></a>
                 <img numberimg="'.$row['id'].'" style="background-image: url('."'"
                .$row['img1920x1080']."'".
                ');">
                </div>
            </div>
          </div>';
           // <a href="'.BASEURL.$row['url'].'/'.$row['id'].'"></a>
            
//            $out .= '<div class="col s12 m4 l3 image_gallery">
//                <div class="for_hight">
//                    <div class="for_hight2">
//                        <div class="img_wrap">
//                            <a href="'.$row['url'].'/'.$row['id'].
//                            '"></a>
//                            <img class="img_block" numberimg="'.$row['id'].'" src="'.$row['img1920x1080'].'">
//                        </div>
//                    </div>
//                </div>
//              </div>';
        };
       $out .= '</div>'; 
    }    
    
     closeConnectionToDb($myconnect);
    return $out;
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





