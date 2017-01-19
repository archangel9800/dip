<?php

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

