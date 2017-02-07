<?php
require_once 'config/config.php';
require_once 'connect.php';

function cleanDir($dir) {
    $files = glob($dir."/*");
    $c = count($files);
    if (count($files) > 0) {
        foreach ($files as $file) {      
            if (file_exists($file)) {
            unlink($file);
            }   
        }
    }
};
//фильтр
 function filter($src,$filter){
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
if($filter == 'NEGATE'){
      imagefilter($img, IMG_FILTER_NEGATE);
        switch($type){
        case 'bmp': imagewbmp($img, $src); break;
        case 'gif': imagegif($img, $src); break;
        case 'jpg': imagejpeg($img, $src); break;
        case 'png': imagepng($img, $src); break;
      }
} else if($filter == 'GRAYSCALE'){
      imagefilter($img, IMG_FILTER_GRAYSCALE);
        switch($type){
        case 'bmp': imagewbmp($img, $src); break;
        case 'gif': imagegif($img, $src); break;
        case 'jpg': imagejpeg($img, $src); break;
        case 'png': imagepng($img, $src); break;
      }
}else if($filter == 'LSEPIYA'){
      imagefilter($img, IMG_FILTER_GRAYSCALE);
      imagefilter($img, IMG_FILTER_COLORIZE, 100, 70, 50);
        switch($type){
        case 'bmp': imagewbmp($img, $src); break;
        case 'gif': imagegif($img, $src); break;
        case 'jpg': imagejpeg($img, $src); break;
        case 'png': imagepng($img, $src); break;
      }
}else if($filter == 'EFPICT'){
      imagefilter($img, IMG_FILTER_MEAN_REMOVAL);
      imagefilter($img, IMG_FILTER_GAUSSIAN_BLUR);
        switch($type){
        case 'bmp': imagewbmp($img, $src); break;
        case 'gif': imagegif($img, $src); break;
        case 'jpg': imagejpeg($img, $src); break;
        case 'png': imagepng($img, $src); break;
      }
}else if($filter == 'EMBOSS'){
      imagefilter($img, IMG_FILTER_EMBOSS);
        switch($type){
        case 'bmp': imagewbmp($img, $src); break;
        case 'gif': imagegif($img, $src); break;
        case 'jpg': imagejpeg($img, $src); break;
        case 'png': imagepng($img, $src); break;
      }
}else if($filter == 'MIRROR'){
   $size = getimagesize($src);
   $result_source = imagecreatetruecolor($size[0], $size[1]);
   for ($x = 0; $x < $size[0]; $x++) {
    for ($y = 0; $y < $size[1]; $y++) {
    $color=imagecolorat($img, $x,$y);
    imagesetpixel($result_source, $size[0]-1-$x, $y, $color);
    }
   }
    switch($type){
        case 'bmp': imagewbmp($result_source, $src); break;
        case 'gif': imagegif($result_source, $src); break;
        case 'jpg': imagejpeg($result_source, $src); break;
        case 'png': imagepng($result_source, $src); break;
      }
}else if($filter == 'BLW'){
   $size = getimagesize($src);
   $result_source = imagecreatetruecolor($size[0], $size[1]);
   for ($x = 0; $x < $size[0]; $x++) {
    for ($y = 0; $y < $size[1]; $y++) {
     $colors=imagecolorsforindex($img, imagecolorat($img, $x,$y));
     $r=$colors['red'];
     $g=$colors['green'];
     $b=$colors['blue'];
     $random = $r + $g + $b;
     if ($random > (((255 + 20) / 2) * 3)) {
      $r = 255;
      $g = 255;
      $b = 255; }
     else {
      $r = 0;
      $g = 0;
      $b = 0; }
     $color = imagecolorallocate($result_source, $r,$g,$b);
     imagesetpixel($result_source, $x, $y, $color);
    }
   }
    switch($type){
        case 'bmp': imagewbmp($result_source, $src); break;
        case 'gif': imagegif($result_source, $src); break;
        case 'jpg': imagejpeg($result_source, $src); break;
        case 'png': imagepng($result_source, $src); break;
      }
}else if($filter == 'PIXELATE'){
    imagefilter($img, IMG_FILTER_PIXELATE, 3, true);
    switch($type){
        case 'bmp': imagewbmp($img, $src); break;
        case 'gif': imagegif($img, $src); break;
        case 'jpg': imagejpeg($img, $src); break;
        case 'png': imagepng($img, $src); break;
      }
}
       

       
      return true;  

    };


//обрезка картинки
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
$filter = $_POST['filter'];
$aboutImg  = preg_replace ('/[^\p{L}0-9 ]/iu','',$_POST['aboutImg']);

$dir = '../tmp/';
  if( ! is_dir( $dir ) ) mkdir( $dir, 0777 );  
    $list = scandir($dir);
    unset($list[0],$list[1]);
$i = 0;
$imgCount = count($_FILES, COUNT_RECURSIVE)/6;
if($_FILES and $imgCount <= 10){
    $myconnect = connectToDb();
    foreach ($_FILES as $key => $value) {
        if ($value['size'] < 8000000 or $value['type'] == 'image/png' or $value['type'] == 'image/jpg' or !$value['type'] == 'image/gif' or $value['type'] == 'image/jpeg' ){
        $valType = strrchr($value['name'], '.');    
        //перемещение файлов в tmp
        move_uploaded_file($value['tmp_name'], $dir.'pic'.$i.strrchr($value['name'], '.'));
        $picVal = getimagesize($dir.'pic'.$i.strrchr($value['name'], '.'));
        $pic = $dir.'pic'.$i.strrchr($value['name'], '.');
        if($filter != '' and $filter != 'on' ){
            filter($pic,$filter);
        };   
        $width = $picVal[0];
        $height = $picVal[1];
        $proportions = ($width/1.5) - $height;     
        if($width <= 1920 and $height <= 1080 and $proportions > 0){
        $sql = "SELECT * FROM categories_db WHERE `id_cat` = '$catName'";
             $result = mysqli_query($myconnect, $sql);    
              while($row = mysqli_fetch_assoc($result)) {
                  $filename = uniqid().uniqid();
                  $url = $row['categories'];
                  $dest = 'img/img/categories/'.$url.'/';
                  
                 $img510x300 = $dest.$filename.'img510x300'.$valType;  
                 $img600x800 = $dest.$filename.'img600x800'.$valType; 
                 $img960x800 = $dest.$filename.'img960x800'.$valType;
                 $img1600x900 = $dest.$filename.'img1600x900'.$valType; 
                 $img1024x768 = $dest.$filename.'img1024x768'.$valType;  
                 $img1920x1080 = $dest.$filename.'img1920x1080'.$valType;
                  
                  image_resize($pic, '../'.$img510x300, 510, 300, $crop=0);                
                  image_resize($pic, '../'.$img600x800, 600, 800, $crop=1);
                  image_resize($pic, '../'.$img960x800, 960, 800, $crop=1);
                  image_resize($pic, '../'.$img1024x768, 1024, 768, $crop=1);
                  image_resize($pic, '../'.$img1600x900, 1600, 900, $crop=1);
                  image_resize($pic, '../'.$img1920x1080, 1920, 1080, $crop=1);
                  
                 $img510x300Bd = $filename.'img510x300'.$valType;   
                 $img600x800Bd = $filename.'img600x800'.$valType;  
                 $img960x800Bd = $filename.'img960x800'.$valType;       
                 $img1024x768Bd = $filename.'img1024x768'.$valType;
                 $img1600x900Bd = $filename.'img1600x900'.$valType; 
                 $img1920x1080Bd = $filename.'img1920x1080'.$valType;
                  
                  $sql2 =  "INSERT INTO `images_db` 
                 (`id`, `url`, `img2560x1600`, `img1920x1080`, `img1600x900`, `img1024x768`, `img960x800`, `img600x800`, `img510x300`, `about`) VALUES 
                 (NULL, '$url', '', '$img1920x1080Bd', '$img1600x900Bd', '$img1024x768Bd', '$img960x800Bd', '$img600x800Bd', '$img510x300Bd', '$aboutImg')";
                   mysqli_query($myconnect, $sql2); 
                  
              };
            cleanDir($dir);
        
        }else if($width <= 2560 and $width > 1920 and $height <= 1600 and $height > 1080 and $proportions > 0){
        $sql = "SELECT * FROM categories_db WHERE `id_cat` = '$catName'";
             $result = mysqli_query($myconnect, $sql);    
              while($row = mysqli_fetch_assoc($result)) {
                  $filename = uniqid().uniqid();
                  $url = $row['categories'];
                 $dest = 'img/img/categories/'.$url.'/';
                  
                  
                 $img510x300 = $dest.$filename.'img510x300'.$valType; 
                 $img600x800 = $dest.$filename.'img600x800'.$valType; 
                 $img960x800 = $dest.$filename.'img960x800'.$valType;       
                 $img1024x768 = $dest.$filename.'img1024x768'.$valType; 
                 $img1600x900 = $dest.$filename.'img1600x900'.$valType; 
                 $img1920x1080 = $dest.$filename.'img1920x1080'.$valType;
                 $img2560x1600 = $dest.$filename.'img2560x1600'.$valType;
                  
                  image_resize($pic, '../'.$img510x300, 510, 300, $crop=0);  
                  image_resize($pic, '../'.$img600x800, 600, 800, $crop=1);
                  image_resize($pic, '../'.$img960x800, 960, 800, $crop=1);
                  image_resize($pic, '../'.$img1024x768, 1024, 768, $crop=1);
                  image_resize($pic, '../'.$img1600x900, 1600, 900, $crop=1);
                  image_resize($pic, '../'.$img1920x1080, 1920, 1080, $crop=1);
                  image_resize($pic, '../'.$img2560x1600, 2560, 1600, $crop=1);
                  
                 $img510x300Bd = $filename.'img510x300'.$valType;  
                 $img600x800Bd = $filename.'img600x800'.$valType;  
                 $img960x800Bd = $filename.'img960x800'.$valType;       
                 $img1024x768Bd = $filename.'img1024x768'.$valType;      
                 $img1600x900Bd = $filename.'img1600x900'.$valType;      
                 $img1920x1080Bd = $filename.'img1920x1080'.$valType;
                 $img2560x1600Bd = $filename.'img2560x1600'.$valType;
                  
                 $sql2 =  "INSERT INTO `images_db` 
                 (`id`, `url`, `img2560x1600`, `img1920x1080`, `img1600x900`, `img1024x768`, `img960x800`, `img600x800`, `img510x300`, `about`) VALUES 
                 (NULL, '$url', '$img2560x1600Bd', '$img1920x1080Bd', '$img1600x900Bd', '$img1024x768Bd', '$img960x800Bd', '$img600x800Bd', '$img510x300Bd', '$aboutImg')";
                   mysqli_query($myconnect, $sql2); 
                  
              };
            cleanDir($dir);
       
            
           
        } else{
          echo 'Неправильное разрешение';  
        };
        $i++;
         
        }
    }
    closeConnectionToDb($myconnect);   
    
} else{
  echo 'Файлов больше 10';  
};

    

