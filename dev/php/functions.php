<?php
    require_once '/config.php';
//подключение к базе
function connectToDb(){
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_set_charset($conn, "utf8");
// Check connection
    if (!$conn) {
        die("Connection failed:" . mysqli_connect_error());
    }
    return $conn;
}
function closeConnectionToDb($conn) {
    mysqli_close($conn);
}


//для адресной строки
function getArticle($route){
    //соединяюсь с базой
    $myconnect = connectToDb();
    if ($route=='') {
        $sql = "SELECT * FROM categories_db WHERE categories='main'" ;
    }
    else {
        $sql = "SELECT * FROM categories_db WHERE categories='$route'" ;
    }
    $result = mysqli_query($myconnect, $sql);
    if (mysqli_num_rows($result) == 0){
        $sql = "SELECT * FROM categories_db WHERE categories='404' " ;
        $result = mysqli_query($myconnect, $sql);
    }
    // результат в ассоциативный массив
    $row = mysqli_fetch_assoc($result);
    closeConnectionToDb($myconnect);
    return $row;
}

    
//    var_dump($mas['categories']);
//    var_dump($ress);


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
            '<div class="col s3 m2 l2 genres"><a class="active" href="'.
            $row['categories'].
            '">'
            .$row['cat_name'].
            '</a></div>';
        }else{
        $out .=
        '<div class="col s3 m2 l2 genres"><a href="'.
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
    if ($ress == ''){
            $out ='';
           $out .=  
            '<div id="block404" class="row">
             <p class="big_text col s4 offset-s4">404</p>
             <p class="big_text col s4 offset-s4">Page not found!</p>
             <img class="big_text col s4 offset-s4" src="img/img/err.png" alt="Page not found">
           </div>';
    }else{
        $sql = "SELECT * FROM images_db WHERE url = '$ress'" ;
        $result = mysqli_query($myconnect, $sql);
        $out ='';
        $out .= '<div class="row" id="imgContent">';
        while($row = mysqli_fetch_assoc($result)) {
            
//        var_dump($row['url']);
            $out .= '<div class="col s12 m4 l3 image_gallery">
                <div class="for_hight">
                    <div class="for_hight2">
                        <div class="img_wrap">
                            <a href="'.$row['url'].'/'.$row['id'].
                            '"></a>
                            <img class="img_block" numberimg="'.$row['id'].'" src="'.$row['img1920x1080'].'">
                        </div>
                    </div>
                </div>
              </div>';
        };
       $out .= '</div>'; 
    }    
    
     closeConnectionToDb($myconnect);
    return $out;
};




//загружает 10 случайных картинок для члайдера
function getSliderImg(){
      //соединяюсь с базой
     $myconnect = connectToDb();
    $sql = "SELECT * FROM images_db ORDER BY RAND() LIMIT 10" ;
        $result = mysqli_query($myconnect, $sql);
        $out ='';
        while($row = mysqli_fetch_assoc($result)) {
            $out .=
            '<div class="swiper-slide img_wrap">
                    <img src="'.$row['img1920x1080'].'" class="img_block">
                </div>';
        };
     closeConnectionToDb($myconnect);
    return $out;
}


function adminka(){
    
    
    
}











function getOneImg($mas){
    //соединяюсь с базой
    $myconnect = connectToDb();
    $sql = "SELECT * FROM categories_db WHERE categories != 404 AND categories != 'main' " ;
    $result = mysqli_query($myconnect, $sql);
    $out ='';
    while($row = mysqli_fetch_assoc($result)) {
        $out .=
        '<div class="row" id="oneImg">
         <div class="col s12 m12 l2 proportions">
              <p class="average_text">Размеры:</p>
              <a href="#" class="average_text">1920x1080 | </a> 
              <a href="#" class="average_text">1024x768 | </a> 
              <a href="#" class="average_text">600x800 | </a> 
          </div>
          <div class="col s12 m12 l10 img_show">
             <div class="in_img valign-wrapper">
                 <div class="valign">
                      <img class="materialboxed" alt="#" src="'.$row['img1920x1080'].'">
                 </div>
             </div>
          </div>
      </div>';
    }
     closeConnectionToDb($myconnect);
    return $out;
}










