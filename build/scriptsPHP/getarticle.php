<?php
//для адресной строки
function getArticle($urlSegments){
    //соединяюсь с базой
    $myconnect = connectToDb();
    if (empty($urlSegments[0])) {
        $sql = "SELECT * FROM categories_db WHERE categories='main'" ;
    }
    else if($urlSegments[0] == 'admin'){
        $sql = "SELECT * FROM categories_db WHERE categories='$urlSegments[1]'"; 
    }
    else{
        $sql = "SELECT * FROM categories_db WHERE categories='$urlSegments[0]'" ;
        $result = mysqli_query($myconnect, $sql);
            if (mysqli_num_rows($result) == 0){
                $sql = "SELECT * FROM categories_db WHERE categories='404' " ;
                $result = mysqli_query($myconnect, $sql);
            }else if(mysqli_num_rows($result) != 0 and $urlSegments[1] != ''){
                        $sql1 = "SELECT * FROM categories_db WHERE categories='$urlSegments[1]'";
                        $result1 = mysqli_query($myconnect, $sql1);
                        if(mysqli_num_rows($result1) == 0){
                            $sql = "SELECT * FROM categories_db WHERE categories='404' " ;
                            $result = mysqli_query($myconnect, $sql);
                        }

            }
    }
    
    // результат в ассоциативный массив
    $row = mysqli_fetch_assoc($result);
    closeConnectionToDb($myconnect);
    return $row;
}
//для адресной строки
?>