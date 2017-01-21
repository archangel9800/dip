<?php
    require_once '/scriptsPHP/config.php';
    require_once '/scriptsPHP/connect.php';
    require_once '/scriptsPHP/main.php';    
    require_once '/scriptsPHP/adminka.php';
    

//для адресной строки
function getArticle($route){
    //соединяюсь с базой
    echo $route;
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

    










