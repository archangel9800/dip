<?php
require_once 'config.php';
require_once 'connect.php';
//                  chmod('../img/img/categories', 777);
//                  chmod('../img/img', 777);
//                  chmod('../img', 777);
//                  chmod('../tmp', 777);

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
$aboutImg  = preg_replace ('/[^\p{L}0-9 ]/iu','',$_POST['aboutImg']);

$dir = '../tmp/';
  if( ! is_dir( $dir ) ) mkdir( $dir, 0777 );  
    $list = scandir($dir);
    unset($list[0],$list[1]);
$i = 0;
if($_FILES){
    $myconnect = connectToDb();
    foreach ($_FILES as $key => $value) {
        if ($value['size'] < 8000000 or $value['type'] == 'image/png' or $value['type'] == 'image/jpg' or !$value['type'] == 'image/gif' or $value['type'] == 'image/jpeg' ){
        $valType = strrchr($value['name'], '.');    
        //перемещение файлов в tmp
        move_uploaded_file($value['tmp_name'], $dir.'pic'.$i.strrchr($value['name'], '.'));
        
        $picVal = getimagesize($dir.'pic'.$i.strrchr($value['name'], '.'));
        $pic = $dir.'pic'.$i.strrchr($value['name'], '.');
        
        $width = $picVal[0];
        $height = $picVal[1];
        if($width == 1920 and $height == 1080 ){
                    

        $sql = "SELECT * FROM categories_db WHERE `id_cat` = '$catName'";
             $result = mysqli_query($myconnect, $sql);    
              while($row = mysqli_fetch_assoc($result)) {
//                  echo $row['categories'];
                  $filename = uniqid();
                  $url = $row['categories'];
                  $dest = 'img/img/categories/'.$row['categories'];
                  
                 $img960x800 = $dest.'/img960x800'.$filename.$valType;       
                 $img1024x768 = $dest.'/img1024x768'.$filename.$valType;         $img600x800 = $dest.'/img600x800'.$filename.$valType;
                 $img1920x1080 = $dest.'/img1920x1080'.$filename.$valType;
                  
                  
                  image_resize($pic, '../'.$img960x800, 960, 800, $crop=1);
                  image_resize($pic, '../'.$img1024x768, 1024, 768, $crop=1);
                  image_resize($pic, '../'.$img600x800, 600, 800, $crop=1);
                  image_resize($pic, '../'.$img1920x1080, 1920, 1080, $crop=0);
                  
                  $sql2 =  "INSERT INTO `images_db` 
                  (`id`, `url`, `img1920x1080`, `img1024x768`, `img960x800`, `img600x800`, `about`, `name`) VALUES 
                  (NULL, '$url', '$img1920x1080', '$img1024x768', '$img960x800', '$img600x800', '$aboutImg', '$filename')";
                   mysqli_query($myconnect, $sql2); 
                  
              };
            cleanDir($dir);
       
            
         
        } else{
          echo 'bad_size';  
        };
        $i++;
            
        }
    }
    closeConnectionToDb($myconnect);   
    
}

    

