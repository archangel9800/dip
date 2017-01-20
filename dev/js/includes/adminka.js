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
                    };
           
                    //инициализация выпадающих списков
                    $('#adminka select').material_select(); 
                    
                    
                };
            
       
       
            }; 
     
 

  
    
    
    
    
//    Добавляем каталог
    $("body").on('click',"#adminka #btn_add_cat", add_catalog); 
    function add_catalog(){
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
    $("body").on('click','#adminka .remove_cat_bl #rem_cat', showCatalog); 
    function showCatalog(){
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
    
    
    
    //    Добавляем изображения
    $("body").on('click',"#adminka #btn_add_img", add_img); 
    function add_img(){
//    $('#adminka form').submit(function() {
//                return false;
//            });

    
        
        var fd = new FormData();
        fd.append('id', '123');
        fd.append('type', 'one');
        fd.append('img', $("#adminka .add_remove_catalog_img #file1920x1080")[0].files[0]);



        
//        $file1920x1080 = $("#adminka .add_remove_catalog_img #file1920x1080");
//        $file1024x768 = $("#adminka .add_remove_catalog_img #file1024x768");
//        $file960x800 = $("#adminka .add_remove_catalog_img #file960x800");
//        $add_about = $("#adminka .add_remove_catalog_img #add_about").val();
//                "file1920x1080":  $file1920x1080,
//                "file1024x768":  $file1024x768,
//                "file960x800":  $file960x800,
//                "add_about":  $add_about,  


        
        

            $.post(
                "../functions.php",{
                processData: false,
                contentType: false,   
                dataType: 'json',    
                data:  fd,
                "action": "add_img", 
                    
                },
                ifSuccess
            );
                function ifSuccess(data){
                    console.log(data);
//                    $('select').on('change', changeSelect);
                }
            
          };
//            
          

    
    
    };
    
};