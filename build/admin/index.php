<?php
require_once './../functions.php';
session_start();
if($_SESSION['admin']){
	header("Location: admin.php");
	exit;
};

if($_POST['submit']){
    checkUser($_POST['user'],$_POST['pass']);   
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <link rel="shortcut icon" href="../img/icons/favicon.png" type="image/png">
	<title>Вход</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo BASEURL;?>css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="<?php echo BASEURL;?>css/basestyle.css"  media="screen,projection"/>
</head>
<body>
	 <section id="adminka" class="adaptive_container transition">
    <div id="add_remove" class="row">
        <form method="post" class="row admin_login">
          <div class="col s6 m4 l4 offset-s3 offset-m4 offset-l4"><p class="average_text">Введите пароль и логин</p></div>
          <div class="row col s6 m4 l4 offset-s3 offset-m4 offset-l4 lines">
            <div class="input-field col s12">
              <input id="login" placeholder="Логин" name="user" type="text" class="validate average_text">
            </div>
          </div>
          <div class="row col s6 m4 l4 offset-s3 offset-m4 offset-l4 lines">
            <div class="input-field col s12">
              <input id="password" placeholder="Пароль" type="password" name="pass" class="validate average_text">
            </div>
          </div>
          <input value="Войти" class="login_btn col s2 m2 l2 offset-s5 offset-m5 offset-l5 btn waves-effect waves-light average_text" type="submit" name="submit">
     </form>
    </div>
</section>
    <script type="text/javascript" src="<?php echo BASEURL;?>js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/materialize.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/swiper.jquery.js"></script>
	<script type="text/javascript" src="<?php echo BASEURL;?>js/functions.js"></script>	
</body>
</html>	
