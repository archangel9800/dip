<?php
   session_start();
    if($_SESSION['admin']){
        header("Location: admin.php");
        exit;
    }

    $admin = 'admin';
    $pass = '21232f297a57a5a743894a0e4a801fc3';

    if($_POST['submit']){
        if($admin == $_POST['user'] AND $pass == md5($_POST['pass'])){
            $_SESSION['admin'] = $admin;
            header("Location: admin.php");
            exit;
        }else {
            header("Location: enter.php");
        }
    }