<?php
require_once 'config.php';
require_once 'connect.php';

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


function image_resize($src, $dst, $width, $height, $crop=0){
  
  if(!list($w, $h) = getimagesize($src)) return "Unsupported picture type!";

  $type = strtolower(substr(strrchr($src,"."),1));
  if($type == 'jpeg') $type = 'jpg';
  switch($type){
    case 'bmp': $img = imagecreatefromwbmp($src); break;
    case 'gif': $img = imagecreatefromgif($src); break;
    case 'jpg': $img = imagecreatefromjpeg($src); break;
    case 'png': $img = imagecreatefrompng($src); break;
    default : return "Unsupported picture type!";
  }

  // resize
  if($crop){
    if($w < $width or $h < $height) return "Picture is too small!";
    $ratio = max($width/$w, $height/$h);
    $h = $height / $ratio;
    $x = ($w - $width / $ratio) / 2;
    $w = $width / $ratio;
  }
  else{
    if($w < $width and $h < $height) return "Picture is too small!";
    $ratio = min($width/$w, $height/$h);
    $width = $w * $ratio;
    $height = $h * $ratio;
    $x = 0;
  }

  $new = imagecreatetruecolor($width, $height);

  // preserve transparency
  if($type == "gif" or $type == "png"){
    imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
    imagealphablending($new, false);
    imagesavealpha($new, true);
  }

  imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);

  switch($type){
    case 'bmp': imagewbmp($new, $dst); break;
    case 'gif': imagegif($new, $dst); break;
    case 'jpg': imagejpeg($new, $dst); break;
    case 'png': imagepng($new, $dst); break;
  }
  return true;
};






//print_r($_FILES);
$catName = $_POST['catName'];
$aboutImg = $_POST['aboutImg'];
$dir = '../tmp/';
  if( ! is_dir( $dir ) ) mkdir( $dir, 0777 );  
    $list = scandir($dir);
    unset($list[0],$list[1]);
$i = 0;
if($_FILES){
    $myconnect = connectToDb();
    foreach ($_FILES as $key => $value) {
        if ($value['size'] < 8000000 or $value['type'] == 'image/png' or $value['type'] == 'image/jpg' or !$value['type'] == 'image/gif' or $value['type'] == 'image/jpeg' ){
            
        //перемещение файлов в tmp
        move_uploaded_file($value['tmp_name'], $dir.'pic'.$i.strrchr($value['name'], '.'));
        
        $picVal = getimagesize($dir.'pic'.$i.strrchr($value['name'], '.'));
        $pic = $dir.'pic'.$i.strrchr($value['name'], '.');
        
        $width = $picVal[0];
        $height = $picVal[1];
        if($width == 1920 and $height == 1080 ){
                    

        $sql = "SELECT * FROM categories_db WHERE `cat_name` = '$catName'";
             $result = mysqli_query($myconnect, $sql);    
              while($row = mysqli_fetch_assoc($result)) {
                  echo $row['categories'];
                  $dest = '../img/img/categories/'.$row['categories'];
                  chmod($dest, 777);
                  $dh = opendir($dest); 
                  image_resize($pic, $dest, 1024, 768, $crop=0);
                   closedir($dh); 
              };
            
//             echo $im_src_w;      
//            
//            image_resize($pic, $dst, $width, $height, $crop=0);
            
            echo 'good_size';
            
            
            
         
        } else{
          echo 'bad_size';  
        };
        $i++;
            
        }
    }
    closeConnectionToDb($myconnect);   
    
}
    foreach ($list as $file){
//      echo "<img class='col s3' style='height: 150px;' alt='' src='".$dir.$file."' />" ;
    }
    

