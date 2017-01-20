<?php


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
                    <img src="'.BASEURL.$row['img1920x1080'].'" class="img_block">
                </div>';
        };
     closeConnectionToDb($myconnect);
    return $out;
}

