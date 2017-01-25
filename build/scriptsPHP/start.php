<?php
session_start();
require_once '././functions.php';
if(!((checkUser($_SESSION['user'], $_SESSION['password'])) && (isAdmin($_SESSION['user'])))){
    header("Location: /admin/auth.php");
    exit;
}


?>