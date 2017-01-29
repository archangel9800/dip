<?php


switch ( $_POST['action'] )
{   
    case 'add':
        addCat();
        break;
    case 'remove':
        removeCat();
        break;
    case 'show':
        showPhoto();
        break;
    case 'remOneImg':
        remOneImg();
        break;
}





//Добавление каталога
function addCat(){
//Удаление лишних символов
    $inp_add_cat_val = preg_replace ('/[^\p{L}0-9 ]/iu','',$_POST['inp_add_cat_val']);
    $inp_add_cat_val = str_replace(" ","",$inp_add_cat_val);
    
//    Перевод русских букв на английские
    function GetInTranslit($string) {
	$replace=array(
		"'"=>"",
		"`"=>"",
		"а"=>"a","А"=>"a",
		"б"=>"b","Б"=>"b",
		"в"=>"v","В"=>"v",
		"г"=>"g","Г"=>"g",
		"д"=>"d","Д"=>"d",
		"е"=>"e","Е"=>"e",
		"ж"=>"zh","Ж"=>"zh",
		"з"=>"z","З"=>"z",
		"и"=>"i","И"=>"i",
		"й"=>"y","Й"=>"y",
		"к"=>"k","К"=>"k",
		"л"=>"l","Л"=>"l",
		"м"=>"m","М"=>"m",
		"н"=>"n","Н"=>"n",
		"о"=>"o","О"=>"o",
		"п"=>"p","П"=>"p",
		"р"=>"r","Р"=>"r",
		"с"=>"s","С"=>"s",
		"т"=>"t","Т"=>"t",
		"у"=>"u","У"=>"u",
		"ф"=>"f","Ф"=>"f",
		"х"=>"h","Х"=>"h",
		"ц"=>"c","Ц"=>"c",
		"ч"=>"ch","Ч"=>"ch",
		"ш"=>"sh","Ш"=>"sh",
		"щ"=>"sch","Щ"=>"sch",
		"ъ"=>"","Ъ"=>"",
		"ы"=>"y","Ы"=>"y",
		"ь"=>"","Ь"=>"",
		"э"=>"e","Э"=>"e",
		"ю"=>"yu","Ю"=>"yu",
		"я"=>"ya","Я"=>"ya",
		"і"=>"i","І"=>"i",
		"ї"=>"yi","Ї"=>"yi",
		"є"=>"e","Є"=>"e"
	);
      return $str=iconv("UTF-8","UTF-8//IGNORE",strtr($string,$replace));
};
    $for_addres_str = GetInTranslit($inp_add_cat_val);
    $for_addres_str = mb_strtolower($for_addres_str, 'UTF-8');
//     соединяюсь с базой
     $myconnect = connectToDb();
    $sql = "SELECT COUNT(*) FROM `categories_db` WHERE cat_name = '$inp_add_cat_val' " ;
        $result = mysqli_query($myconnect, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if($row["COUNT(*)"] == 1){
                echo("exists_cat_name");
            }else{
                echo("not_exists");
//                Создаем директорию и БД
                $path = "img/img/categories/$for_addres_str";
                 mkdir ($path, 0777);
              $sql2 =  "INSERT INTO `categories_db` (`id_cat`, `categories`, `cat_name`, `info`) VALUES (NULL, '$for_addres_str', '$inp_add_cat_val', '')";
               mysqli_query($myconnect, $sql2); 
            };    
        };
    closeConnectionToDb($myconnect);
        };




//вывод списка каталогов
function showCatalog($mas){
  //соединяюсь с базой
    $myconnect = connectToDb();
    $sql = "SELECT * FROM categories_db WHERE categories != 404 AND categories != 'main' " ;
    $result = mysqli_query($myconnect, $sql);
    $out ='';
    while($row = mysqli_fetch_assoc($result)) {
         if ($row['categories'] == $mas['categories']){
             $out .='<li class="transition col s4 m4 l3 active"><a class="average_text valign-wrapper" href="'.BASEURLADM.$row['categories'].'"data-idcat="'.$row['id_cat'].'"><span class="valign">'.$row['cat_name'].'</span></a></li>';
         }else{
             $out .='<li class="transition col s4 m4 l3"><a class="average_text valign-wrapper" href="'.BASEURLADM.$row['categories'].
        '"data-idcat="'.$row['id_cat'].'"><span class="valign">'.$row['cat_name'].'</span></a></li>';
         }
    }
     closeConnectionToDb($myconnect);
    return $out;   
}



//загружает выбраный раздел картинок
function showPhoto($mas){
    //соединяюсь с базой
    $ress = $mas['categories'];
    $myconnect = connectToDb();
    // Переменная хранит число сообщений выводимых на станице  
    $num = 5;  
   
    // Извлекаем из URL текущую страницу  
    $page = $_GET['page'];  
    $showPhoto = $_POST['showPhoto'];
    if($ress){
    $sql0 = "SELECT * FROM categories_db WHERE categories = '$ress'" ;
            $result = mysqli_query($myconnect, $sql0);
            while($row = mysqli_fetch_assoc($result)) {
              $name_of = $row['categories'];
            };
        
    };
    
        $sql = "SELECT COUNT(*) FROM `images_db` WHERE url = '$name_of' ORDER BY id DESC";
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
        $sql2 = "SELECT * FROM `images_db` WHERE url = '$name_of' LIMIT $start, $num";
        $result2 = mysqli_query($myconnect, $sql2);
        while ( $postrow[] = mysqli_fetch_array($result2));
    
        echo '<div class="row" id="imgContent">';
        for($i = 0; $i < $num; $i++){ 
         $way = 'img/img/categories/'.$postrow[$i]['url'].'/';
            if ($postrow[$i] != ''){
              if($postrow[$i]['img1920x1080'] and $postrow[$i]['img1920x1080'] != ''){
                
                    echo '<div class="col s12 m4 l3 image_gallery transition">
                    <p class="img_size average_text">1920x1080</p>
                <div class="for_hight">
                <p class="remove_btn" data-sizing="img1920x1080" data-numberimg="'.$postrow[$i]['id'].'">×</p>

                    <div class="for_hight2">

                     <div class="materialboxed" data-numberimg="'.$postrow[$i]['id'].'" style="background-image: url('."'../".$way
                    .$postrow[$i]['img1920x1080']."'".
                    ');"></div>
                    </div>
                </div>
              </div>'; 
              }
             if($postrow[$i]['img1024x768'] and $postrow[$i]['img1024x768'] != ''){
                
                    echo '<div class="col s12 m4 l3 image_gallery transition">
                    <p class="img_size average_text">1024x768</p>
                <div class="for_hight">
                <p class="remove_btn" data-sizing="img1024x768" data-numberimg="'.$postrow[$i]['id'].'">×</p>

                    <div class="for_hight2">

                     <div class="materialboxed" data-numberimg="'.$postrow[$i]['id'].'" style="background-image: url('."'../".$way
                    .$postrow[$i]['img1024x768']."'".
                    ');"></div>
                    </div>
                </div>
              </div>'; 
              }
              if($postrow[$i]['img960x800'] and $postrow[$i]['img960x800'] != ''){
                
                    echo '<div class="col s12 m4 l3 image_gallery transition">
                    <p class="img_size average_text">960x800</p>
                <div class="for_hight">
                <p class="remove_btn" data-sizing="img960x800" data-numberimg="'.$postrow[$i]['id'].'">×</p>

                    <div class="for_hight2">

                     <div class="materialboxed" data-numberimg="'.$postrow[$i]['id'].'" style="background-image: url('."'../".$way
                    .$postrow[$i]['img960x800']."'".
                    ');"></div>
                    </div>
                </div>
              </div>'; 
              }  
               if($postrow[$i]['img600x800'] and $postrow[$i]['img600x800'] != ''){
                
                    echo '<div class="col s12 m4 l3 image_gallery transition">
                    <p class="img_size average_text">600x800</p>
                <div class="for_hight">
                <p class="remove_btn" data-sizing="img600x800" data-numberimg="'.$postrow[$i]['id'].'">×</p>

                    <div class="for_hight2">

                     <div class="materialboxed" data-numberimg="'.$postrow[$i]['id'].'" style="background-image: url('."'../".$way
                    .$postrow[$i]['img600x800']."'".
                    ');"></div>
                    </div>
                </div>
              </div>'; 
              }  
                
           };
        } ; 
        echo '</div>'; 
        
        
    // Проверяем нужны ли стрелки назад  
    if ($page != 1) $pervpage = '<a href='.'?page=1><<</a>  
                                   <a href= '.'?page='. ($page - 1) .'><</a> ';  
    // Проверяем нужны ли стрелки вперед  
    if ($page != $total) $nextpage = ' <a href='.'?page='. ($page + 1) .'>></a>  
                                       <a href='.$ress.'?page='.$total. '>>></a>';  

    // Находим две ближайшие станицы с обоих краев, если они есть  
    if($page - 2 > 0) $page2left = ' <a href='.'?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';  
    if($page - 1 > 0) $page1left = '<a href='.'?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';  
    if($page + 2 <= $total) $page2right = ' | <a href='.'?page='. ($page + 2) .'>'. ($page + 2) .'</a>';  
    if($page + 1 <= $total) $page1right = ' | <a href='.'?page='. ($page + 1) .'>'. ($page + 1) .'</a>'; 

    
    // Вывод меню
    echo '<div id="pag_main">';    
    echo $pervpage.$page2left.$page1left.'<b>';
     if ($page1right != ''){
        echo $page;  
     };        
    echo '</b>'.$page1right.$page2right.$nextpage;      
    echo '</div>';    
        


closeConnectionToDb($myconnect);
};




    
//удаление каталога
function removeCat(){
  $showCatalogVal = $_POST['showCatalogVal'];   
    if($showCatalogVal){
        $myconnect = connectToDb();
        $sql = "SELECT * FROM categories_db WHERE categories != 404 AND categories != 'main' " ;
        $result = mysqli_query($myconnect, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if($row['id_cat'] == $showCatalogVal){
            $sql2 = "SELECT * FROM categories_db WHERE `id_cat` = '$showCatalogVal'" ;
             $result2 = mysqli_query($myconnect, $sql2);    
              while($row2 = mysqli_fetch_assoc($result2)) {
                  $catt = $row2['categories'];
                      $dir="img/img/categories/$catt";
                        if (file_exists($dir)){
                        foreach (glob($dir.'/*') as $file)
                        unlink($file);  
                        };
                   rmdir($dir);
                 $sql4 = "DELETE FROM `images_db` WHERE `url` = '$catt'";
                mysqli_query($myconnect, $sql4); 
                  $sql3 = "DELETE FROM `categories_db` WHERE `categories` = '$catt'";
                mysqli_query($myconnect, $sql3);
              };
              
                echo 'deleted_cat';
            }  
    }
     closeConnectionToDb($myconnect);
        
    }
}


function remOneImg(){
    $id = $_POST['id'];
    $sizing = $_POST['sizing'];
    $myconnect = connectToDb();
    $sql = "SELECT * FROM images_db WHERE id = '$id'" ;
        $result = mysqli_query($myconnect, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            $way = 'img/img/categories/'.$row['url'].'/';
            $remFile = $way.$row["$sizing"];
            unlink($remFile);  
           $sql2 = "UPDATE `images_db` SET `$sizing`= '' WHERE id = '$id'";
            mysqli_query($myconnect, $sql2); 
            echo 'del_img';
        };
    $sql3 = "SELECT * FROM images_db WHERE id = '$id'" ;
        $result3 = mysqli_query($myconnect, $sql3);
        while($row = mysqli_fetch_assoc($result3)) {
            if($row['img1920x1080'] == '' and $row['img1024x768'] == '' and $row['img960x800'] == '' and $row['img600x800'] == ''){
               $sql4 = "DELETE FROM `images_db` WHERE `id` = '$id'";
               mysqli_query($myconnect, $sql4); 
            };  
        }; 
    
closeConnectionToDb($myconnect);
    
};

















