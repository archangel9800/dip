<?php
require_once '../functions.php';
$route = $_GET['route'];
$mas = getArticle($route);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <link rel="shortcut icon" href="../img/icons/favicon.png" type="image/png">
	<title><?php echo $mas['cat_name']?></title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="../css/basestyle.css"  media="screen,projection"/>
</head>
<body>

		<section id="adminka" class="adaptive_container">
    <div id="add_remove" class="row">
     <?php require_once 'includes/adminka/login.php'; ?>  
<!--     <?php require_once 'includes/adminka/panel.php'; ?>  -->
    </div>
</section>
	 
	
	
	
	<script type="text/javascript" src="../js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="../js/materialize.js"></script>
	<script type="text/javascript" src="../js/swiper.jquery.js"></script>
	<script type="text/javascript" src="../js/functions.js"></script>	
</body>
</html>