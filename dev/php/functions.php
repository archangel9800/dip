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




switch ( $_POST['action'] )
{   case 'cookie':
        cookie();
        break;
    case 'login':
        login();
        break;
    case 'add':
        addCat();
        break;
    case 'save':
        action_save();
        break;
    case 'delete':
        action_delete();
        break;
}

function cookie(){
    $myconnect = connectToDb();
    $sql = "SELECT * FROM users_db" ;
        $result = mysqli_query($myconnect, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if (isset($_COOKIE[$row['user']])) {
                   echo (require_once 'admin/includes/adminka/panel.php') ; 
        }
        };
     closeConnectionToDb($myconnect);
    
    
};


function login(){ 
  $login = $_POST['login'];
  $password = $_POST['password'];
//  echo($login.' '.$password);    
    $myconnect = connectToDb();
    $sql = "SELECT * FROM users_db" ;
        $result = mysqli_query($myconnect, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if($row['user'] == $login and  $row['password'] == $password){ SetCookie($row['user'],$row['password'],time()+50);        
            echo (require_once 'admin/includes/adminka/panel.php') ;
            };
        };
     closeConnectionToDb($myconnect);
   
    

};



    
//session_start();
//
//    if ($_SESSION['userin']==1){
//        echo 'Hello '.$_SESSION['name'];
//        echo 'Вы в админ-панели';
//    }
//    else {
//        $user = $_GET['name'];
//        $pass = $_GET['pass'];
//
//        if ($user =='ivan' and $pass=='3344') {
//
//            $_SESSION['name']= 'ivan';
//            $_SESSION['userin']=1;
//            header("Location: 2.php");
//        }
//        else {
//            echo 'Войдите с верным логином и паролем <a href="1.php">Войти</a>';
//        }
//
//    }














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
              $sql2 =  "INSERT INTO `colorfull`.`categories_db` (`id_cat`, `categories`, `cat_name`, `info`) VALUES (NULL, '$for_addres_str', '$inp_add_cat_val', '')";
               mysqli_query($myconnect, $sql2); 
            };    
        };
    closeConnectionToDb($myconnect);
        };









                
                
//                     $dir = opendir ("img/img/categories");
//                      while ( $file = readdir ($dir))
//                      {
//                        if (( $file != ".") && ($file != ".."))
//                        {
//                          echo "$file<br>";
//                        }
//                      }
//                      closedir ($dir);   




//function getOneImg($mas){
//    //соединяюсь с базой
//    $myconnect = connectToDb();
//    $sql = "SELECT * FROM categories_db WHERE categories != 404 AND categories != 'main' " ;
//    $result = mysqli_query($myconnect, $sql);
//    $out ='';
//    while($row = mysqli_fetch_assoc($result)) {
//        $out .=
//        '<div class="row" id="oneImg">
//         <div class="col s12 m12 l2 proportions">
//              <p class="average_text">Размеры:</p>
//              <a href="#" class="average_text">1920x1080 | </a> 
//              <a href="#" class="average_text">1024x768 | </a> 
//              <a href="#" class="average_text">600x800 | </a> 
//          </div>
//          <div class="col s12 m12 l10 img_show">
//             <div class="in_img valign-wrapper">
//                 <div class="valign">
//                      <img class="materialboxed" alt="#" src="'.$row['img1920x1080'].'">
//                 </div>
//             </div>
//          </div>
//      </div>';
//    }
//     closeConnectionToDb($myconnect);
//    return $out;
//}










