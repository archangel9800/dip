<?php
    require_once '/scriptsPHP/config.php';
    require_once '/scriptsPHP/connect.php';
    require_once '/scriptsPHP/main.php';    
    require_once '/scriptsPHP/adminka.php';
    
//$cntrName =  (empty($urlSegments[0])) ? 'main' : $urlSegments[0];
//$actionName = (empty($urlSegments[1])) ? 'action_index' : 'action_'.$urlSegments[1];    
 
     

//для адресной строки
function getArticle($urlSegments){
    //соединяюсь с базой
//    echo $route;
    $myconnect = connectToDb();
    if (empty($urlSegments[0])) {
        $sql = "SELECT * FROM categories_db WHERE categories='main'" ;
    }else if($urlSegments[0] == 'admin'){
        $sql = "SELECT * FROM categories_db WHERE categories='$urlSegments[1]'"; 
    }else{
        $sql = "SELECT * FROM categories_db WHERE categories='$urlSegments[0]'" ;
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
//для адресной строки

    










