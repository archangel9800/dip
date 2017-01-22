function adminka(){
    if($("#adminka").length > 0){
    //инициализация выпадающих списков
        $('#adminka select').material_select();  
        
      $('#adminka .admin_login input').css({
        backgroundColor:  'transparent !important',
      }); 
    
  

        
        
//    вводим логин и закрываем форму входа
    function closeloginBlock(){
         $.post(
                "../functions.php",{
                "action": "cookie", 
                },
                ifSuccess
            );
                function ifSuccess(data){
                    if(data){
                        $("#adminka #add_remove").html(data);
//                        $('body').html(data);
                        $('#adminka select').material_select(); 
                    }
                        
                };
        };
   closeloginBlock();      
$("body").on('click','#adminka .login_btn',sendLogin); 
   function sendLogin(){
        $.post(
            "../functions.php",{
            "login": $("#adminka .admin_login #login").val(),   
            "password": $("#adminka .admin_login #password").val(),
            "action": "login",     
            },
            ifSuccess
              );
                function ifSuccess(data){
                    if(data == 'error'){
                        
                    }else{
                            $("#adminka #add_remove").html(data);
//                                $('body').html(data);
                    };
           
                    //инициализация выпадающих списков
                    $('#adminka select').material_select(); 
                    
                    
                };
            
       
       
            }; 
     
 

  
    
    
    
    
//    Добавляем каталог
    $("body").on('click',"#adminka #btn_add_cat", add_catalog); 
    function add_catalog(event){
    event.preventDefault();    
    $add_val =  $("#adminka #add_cat").val();
        if( $add_val == '' ){
           $("#adminka .err_add").html("Введите название каталога!");
        } else{
           $("#adminka .err_add").html(""); 
            $.post(
                "../functions.php",{
                "inp_add_cat_val": $("#adminka #add_cat").val(),
                "action": "add", 
                },
                ifSuccess
            );
                function ifSuccess(data){
                    if(data == "exists_cat_name"){
                     $("#adminka .err_add").removeClass('okk').addClass('error').html("Такой каталог существует!");   
                    }else if(data == "not_exists"){
                      $("#adminka .err_add").removeClass('error').addClass('okk').html("Каталог создан!");
                        location.reload(true);
                       
                    }
//                    $('select').on('change', changeSelect);
                }
        }   
}
  
// Показываем фото
     $("body").on('change','#adminka .remove_cat_bl select', showPhoto); 
    function showPhoto(){
        $showPhoto = $("#adminka .remove_cat_bl ul .active").text();;
             $.post(
                "../functions.php",{
                "showPhoto": $showPhoto,
                "action": "show", 
                },
                ifSuccess
            );
        function ifSuccess(data){
                    $("#adminka .remove_image").html(data);
            
                }
        
    }
    
    
    
    
    
    
    
    
    
    
//Удаляем каталог   
    $("body").on('click','#adminka .remove_cat_bl #rem_cat', removeCat); 
    function removeCat(event){
        event.preventDefault();
        $showCatalogVal = $("#adminka .remove_cat_bl ul .active").text();
        if($showCatalogVal){
            
            $.post(
                "../functions.php",{
                "showCatalogVal": $showCatalogVal,
                "action": "remove", 
                },
                ifSuccess
            );
             function ifSuccess(data){
                    if(data == "deleted_cat"){
                     $("#adminka .err_del_cat").html("Каталог удален!");   
                        location.reload();
                    }
                }
            
        } 
        
        
    }
//    $("body").on('click','#adminka #btn_add_img', sendImg);
//        function sendImg(event){
//        event.preventDefault();    
//        };
//      

        
    $("body").on('click','#adminka #btn_add_img', addImg);     
    function addImg(event){
        event.preventDefault();
            $catName = $("#adminka .remove_cat_bl ul .active").text();
            $aboutImg = $("#adminka #add_about").val();
        
    var dataaray = new FormData();
var error = '';
        if($('#adminka #file').val() == '' || $("#adminka .remove_cat_bl ul .active").text() == '' || $aboutImg == '') {               
               error = error + 'Выберите изображение, каталог куда загружать и краткое описание'; 
               $('#info').html(error);
            } else {  
        
        
    jQuery.each($('#adminka #file')[0].files, function(i, file) {
            if(file.name.length < 1) {               
               error = error + ' Имя файла не правильное! '; 
            } //Проверка на длину имени             
            else if(file.size > 8000000) {
                error = error + ' Файл ' + file.name + ' больше 8 мб!';
            } //Проверка размера файла
            else if(file.type != 'image/png' && file.type != 'image/jpg' && !file.type != 'image/gif' && file.type != 'image/jpeg' ) {
                error = error + 'Файл  ' + file.name + '  не является png, jpg или gif!';
            } //Проверка типа файлов
        
        dataaray.append('file-'+i, file);
    });
        dataaray.append('catName', $catName);
          dataaray.append('aboutImg', $aboutImg);
if (error != '') {
            $('#info').html(error);
    } else {
        $.ajax({
            url: '../scriptsPHP/upload.php',
            contentType: false,
            processData: false, 
            type: 'POST',
            data: dataaray,
            cache: false,
            success: function(data){
                $('#info').html(data);
                event.preventDefault();
            },
            beforeSend: function(data){
                event.preventDefault();
            },
        });
         }
    }
    }

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
      } 
        
        
        
        
    }    
        
        

       
    