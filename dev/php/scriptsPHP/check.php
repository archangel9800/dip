<?php
//Проверка пароля из бд
function checkUser($user,$pass){
     $myconnect = connectToDb();
    $sql = "SELECT * FROM `users_db` WHERE `user` = '$user'" ;
    $result = mysqli_query($myconnect, $sql);
        while($row = mysqli_fetch_assoc($result)){
            if($row['user'] != ''){
                   if($row['user'] == $user and $row['password'] == md5($pass) and $row['isadmin'] == 1){
                      $_SESSION['admin'] = md5($pass.$user);
                     header("Location: admin.php");
                       exit;
                   }else{ 
                       header("Location: index.php");
                       exit;
                   }
            }else{ 
                   header("Location: index.php");
                   exit;
            };
     closeConnectionToDb($myconnect);
}
}