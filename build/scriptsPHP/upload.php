<?php
define('BASEURL', '/build/');
//switch ( $_POST['action'] )
//{     case 'add_img':
//        add_img();
//        break;
//}
//
////Добавление изображений
//function add_img(){
//$data = array();
// echo 'sdsds';
//if( isset( $_GET['uploadfiles'] ) ){
//    $error = false;
//    $files = array();
// 
//    $uploaddir = './uploads/'; // . - текущая папка где находится submit.php
// 
//    // Создадим папку если её нет
// 
//    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );
// 
//    // переместим файлы из временной директории в указанную
//    foreach( $_FILES as $file ){
//        if( move_uploaded_file( $file['tmp_name'], $uploaddir . basename($file['name']) ) ){
//            $files[] = realpath( $uploaddir . $file['name'] );
//        }
//        else{
//            $error = true;
//        }
//    }
// 
//    $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );
// 
//    echo json_encode( $data );
//}
//}

//print_r($_FILES);

 // функция показа картинок из tmp папки

//$dir = '../tmp/';
//  if( ! is_dir( $dir ) ) mkdir( $dir, 0777 );  
//    $list = scandir($dir);
//    unset($list[0],$list[1]);
//    foreach ($list as $file)
//    {
//      echo "<img class='col s3' style='height: 150px;' alt='' src='".$dir.$file."' />" ;
//    }
//    foreach ($_FILES as $key => $value) { //перемещение файлов в tmp
////    echo ($dir2);
//    move_uploaded_file($value['tmp_name'], $dir.$value['name']);
//}

$dir = '../tmp/';
  if( ! is_dir( $dir ) ) mkdir( $dir, 0777 );  
    $list = scandir($dir);
    unset($list[0],$list[1]);
$i = 0;
    foreach ($_FILES as $key => $value) { //перемещение файлов в tmp
        move_uploaded_file($value['tmp_name'], $dir.'pic'.$i.strrchr($value['name'], '.'));
        var_dump( getimagesize($dir.'pic'.$i.strrchr($value['name'], '.')));
        
        
        
        $i++;
    }
    foreach ($list as $file){
//      echo "<img class='col s3' style='height: 150px;' alt='' src='".$dir.$file."' />" ;
    }
    

